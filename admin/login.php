<?php
// Session check karo - pehle se start nahi hai toh hi start karo
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Simple authentication - Change these credentials
$valid_username = "admin";
$valid_password = "password123";

$error = '';

if ($_POST) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}

// If already logged in, redirect to dashboard
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Portfolio</title>
    
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
            background: linear-gradient(135deg, var(--dark) 0%, #1a1a2e 100%);
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .login-container {
            background: var(--dark-light);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 40px rgba(0, 255, 255, 0.1);
            overflow: hidden;
        }
        
        .login-header {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            padding: 2rem;
            text-align: center;
        }
        
        .login-header h2 {
            margin: 0;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
        }
        
        .login-body {
            padding: 2rem;
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--text);
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 1rem;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--primary);
            color: var(--text);
            box-shadow: 0 0 0 0.2rem rgba(0, 255, 255, 0.25);
        }
        
        .btn-login {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            border: none;
            color: var(--dark);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 10px;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 255, 255, 0.3);
        }
        
        .login-logo {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .default-credentials {
            background: rgba(0, 255, 255, 0.1);
            border-radius: 10px;
            padding: 1rem;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="login-container">
                    <div class="login-header">
                        <div class="login-logo">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h2>Admin Login</h2>
                        <p class="mb-0">Portfolio Management System</p>
                    </div>
                    
                    <div class="login-body">
                        <?php if($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        
                        <form method="POST">
                            <div class="form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control" 
                                       placeholder="Enter your username" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" 
                                       placeholder="Enter your password" required>
                            </div>
                            
                            <button type="submit" class="btn btn-login">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </button>
                        </form>
                        
                        <div class="default-credentials text-center">
                            <strong>Default Credentials:</strong><br>
                            Username: <code>admin</code><br>
                            Password: <code>password123</code>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-3">
                    <a href="../index.php" class="text-decoration-none">
                        <i class="fas fa-arrow-left me-2"></i>Back to Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>