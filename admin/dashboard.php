<?php
// Session check karo - pehle se start nahi hai toh hi start karo
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Include config for data
include '../includes/config.php';

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

// Statistics data
$total_projects = count($projects);
$total_skills = count($skills);
$featured_projects = 0;
foreach ($projects as $project) {
    if ($project['featured']) {
        $featured_projects++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Portfolio</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #00ffff;
            --secondary: #7b00ff;
            --dark: #0a0a0a;
            --dark-light: #1a1a1a;
            --text: #ffffff;
        }
        
        body {
            background: var(--dark);
            font-family: 'Poppins', sans-serif;
            color: var(--text);
        }
        
        .sidebar {
            background: var(--dark-light);
            min-height: 100vh;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-header {
            padding: 2rem 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }
        
        .sidebar-header h4 {
            font-family: 'Orbitron', sans-serif;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 0;
        }
        
        .nav-link {
            color: var(--text);
            padding: 1rem 1.5rem;
            border-radius: 10px;
            margin: 0.2rem 0.5rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: var(--dark);
        }
        
        .nav-link i {
            width: 20px;
            margin-right: 10px;
        }
        
        .main-content {
            padding: 2rem;
        }
        
        .stat-card {
            background: var(--dark-light);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .table {
            background: var(--dark-light);
            border-radius: 15px;
            overflow: hidden;
        }
        
        .table th {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: var(--dark);
            border: none;
            padding: 1rem;
        }
        
        .table td {
            border-color: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            vertical-align: middle;
        }
        
        .badge-featured {
            background: #ff00ff;
            color: var(--dark);
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 0.8rem;
        }
        
        .btn-admin {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            border: none;
            color: var(--dark);
            font-weight: 600;
            border-radius: 10px;
            padding: 8px 20px;
        }
        
        .btn-admin:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 255, 255, 0.3);
        }
        
        .admin-header {
            background: var(--dark-light);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="sidebar-header">
                    <h4><i class="fas fa-crown me-2"></i>Admin Panel</h4>
                    <small class="text-muted">Welcome, <?php echo $_SESSION['admin_username']; ?></small>
                </div>
                
                <nav class="nav flex-column mt-4">
                    <a class="nav-link active" href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-briefcase"></i>Projects
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-code"></i>Skills
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-graduation-cap"></i>Education
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-envelope"></i>Messages
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog"></i>Settings
                    </a>
                    <a class="nav-link text-danger" href="?logout=true">
                        <i class="fas fa-sign-out-alt"></i>Logout
                    </a>
                </nav>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <div class="admin-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="mb-0">Dashboard Overview</h2>
                            <p class="text-muted mb-0">Manage your portfolio content</p>
                        </div>
                        <div class="col-auto">
                            <a href="../index.php" target="_blank" class="btn btn-admin">
                                <i class="fas fa-external-link-alt me-2"></i>View Site
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Statistics Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="stat-card text-center">
                            <div class="stat-number"><?php echo $total_projects; ?></div>
                            <div class="stat-label">Total Projects</div>
                            <i class="fas fa-briefcase fa-2x mt-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card text-center">
                            <div class="stat-number"><?php echo $featured_projects; ?></div>
                            <div class="stat-label">Featured Projects</div>
                            <i class="fas fa-star fa-2x mt-3 text-warning"></i>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card text-center">
                            <div class="stat-number"><?php echo $total_skills; ?></div>
                            <div class="stat-label">Skills</div>
                            <i class="fas fa-code fa-2x mt-3 text-success"></i>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stat-card text-center">
                            <div class="stat-number">4</div>
                            <div class="stat-label">Pages</div>
                            <i class="fas fa-file-alt fa-2x mt-3 text-info"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Projects Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0">
                            <div class="card-header bg-transparent border-bottom">
                                <h5 class="mb-0">
                                    <i class="fas fa-briefcase me-2"></i>Recent Projects
                                </h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Project Name</th>
                                                <th>Category</th>
                                                <th>Technologies</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach(array_slice($projects, 0, 5) as $project): ?>
                                            <tr>
                                                <td>
                                                    <strong><?php echo $project['title']; ?></strong>
                                                    <?php if($project['featured']): ?>
                                                    <span class="badge-featured ms-2">Featured</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary"><?php echo ucfirst($project['category']); ?></span>
                                                </td>
                                                <td>
                                                    <small><?php echo $project['technologies']; ?></small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success">Active</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-admin me-1">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card border-0">
                            <div class="card-header bg-transparent border-bottom">
                                <h5 class="mb-0">
                                    <i class="fas fa-bolt me-2"></i>Quick Actions
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <button class="btn btn-admin w-100">
                                            <i class="fas fa-plus me-2"></i>Add Project
                                        </button>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <button class="btn btn-admin w-100">
                                            <i class="fas fa-code me-2"></i>Add Skill
                                        </button>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <button class="btn btn-admin w-100">
                                            <i class="fas fa-image me-2"></i>Upload Image
                                        </button>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <button class="btn btn-admin w-100">
                                            <i class="fas fa-cog me-2"></i>Site Settings
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple dashboard functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Add smooth animations
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
            
            // Logout confirmation
            const logoutLinks = document.querySelectorAll('a[href*="logout"]');
            logoutLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (!confirm('Are you sure you want to logout?')) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</body>
</html>