<?php
// Admin Panel Configuration
// Session check karo - pehle se start nahi hai toh hi start karo
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Admin credentials - YAHA CHANGE KARNA HAI
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'password123');

// Site configuration
define('SITE_NAME', 'Your Name | Portfolio');
define('SITE_EMAIL', 'your.email@domain.com');
define('BASE_URL', 'http://localhost/portfolio-website');

// Enable error reporting (development ke liye)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Admin panel settings
define('ADMIN_THEME', 'dark'); // dark or light
define('ITEMS_PER_PAGE', 10);
define('UPLOAD_PATH', '../assets/uploads/');

// Static data for admin panel
$skills = array(
    array('id' => 1, 'skill_name' => 'HTML5', 'skill_level' => 95, 'icon_class' => 'fab fa-html5', 'category' => 'frontend'),
    array('id' => 2, 'skill_name' => 'CSS3', 'skill_level' => 90, 'icon_class' => 'fab fa-css3-alt', 'category' => 'frontend'),
    array('id' => 3, 'skill_name' => 'JavaScript', 'skill_level' => 88, 'icon_class' => 'fab fa-js', 'category' => 'frontend'),
    array('id' => 4, 'skill_name' => 'PHP', 'skill_level' => 85, 'icon_class' => 'fab fa-php', 'category' => 'backend'),
    array('id' => 5, 'skill_name' => 'MySQL', 'skill_level' => 82, 'icon_class' => 'fas fa-database', 'category' => 'database'),
    array('id' => 6, 'skill_name' => 'Bootstrap', 'skill_level' => 90, 'icon_class' => 'fab fa-bootstrap', 'category' => 'frontend'),
    array('id' => 7, 'skill_name' => 'React', 'skill_level' => 80, 'icon_class' => 'fab fa-react', 'category' => 'frontend'),
    array('id' => 8, 'skill_name' => 'Node.js', 'skill_level' => 75, 'icon_class' => 'fab fa-node-js', 'category' => 'backend')
);

$projects = array(
    array(
        'id' => 1,
        'title' => 'E-Commerce Platform',
        'description' => 'A full-stack e-commerce solution with user authentication, payment integration, and admin dashboard.',
        'short_description' => 'Modern e-commerce platform with React and Node.js',
        'technologies' => 'React, Node.js, MongoDB, Express',
        'project_url' => 'https://example.com',
        'github_url' => 'https://github.com/example',
        'image_path' => 'project1.jpg',
        'category' => 'fullstack',
        'featured' => true,
        'status' => 'completed',
        'created_date' => '2024-01-15'
    ),
    array(
        'id' => 2,
        'title' => 'Portfolio Website', 
        'description' => 'A responsive portfolio website with modern design and smooth animations.',
        'short_description' => 'Personal portfolio with futuristic design',
        'technologies' => 'HTML, CSS, JavaScript, PHP',
        'project_url' => 'https://portfolio.com',
        'github_url' => 'https://github.com/portfolio',
        'image_path' => 'project2.jpg',
        'category' => 'web',
        'featured' => true,
        'status' => 'completed',
        'created_date' => '2024-02-01'
    ),
    array(
        'id' => 3,
        'title' => 'Task Management App',
        'description' => 'A collaborative task management application with real-time updates.',
        'short_description' => 'Productive task management solution',
        'technologies' => 'Vue.js, Firebase, Tailwind CSS',
        'project_url' => 'https://taskapp.com',
        'github_url' => 'https://github.com/taskapp',
        'image_path' => 'project3.jpg',
        'category' => 'web',
        'featured' => false,
        'status' => 'in-progress',
        'created_date' => '2024-02-20'
    )
);

$education = array(
    array(
        'id' => 1,
        'degree' => 'Bachelor of Computer Science',
        'institution' => 'University of Technology',
        'duration' => '2018 - 2022',
        'description' => 'Specialized in Web Development and Software Engineering. Graduated with First Class Honors.',
        'grade' => 'CGPA: 3.8/4.0',
        'icon' => 'fas fa-graduation-cap'
    ),
    array(
        'id' => 2,
        'degree' => 'Full Stack Web Development',
        'institution' => 'Coding Bootcamp',
        'duration' => '2022 - 2023', 
        'description' => 'Intensive 6-month program focusing on modern web technologies and agile development.',
        'grade' => 'Certificate of Excellence',
        'icon' => 'fas fa-laptop-code'
    )
);

$certifications = array(
    array(
        'id' => 1,
        'name' => 'AWS Certified Developer',
        'issuer' => 'Amazon Web Services',
        'year' => '2023',
        'icon' => 'fab fa-aws',
        'credential_id' => 'AWS-DEV-12345'
    ),
    array(
        'id' => 2,
        'name' => 'Google Cloud Professional',
        'issuer' => 'Google Cloud',
        'year' => '2023',
        'icon' => 'fab fa-google',
        'credential_id' => 'GCP-PRO-67890'
    )
);

// Admin functions
function isAdminLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function redirectToLogin() {
    header('Location: login.php');
    exit;
}

function requireAdminAuth() {
    if (!isAdminLoggedIn()) {
        redirectToLogin();
    }
}

function getProjectById($id) {
    global $projects;
    foreach ($projects as $project) {
        if ($project['id'] == $id) {
            return $project;
        }
    }
    return null;
}

function getSkillById($id) {
    global $skills;
    foreach ($skills as $skill) {
        if ($skill['id'] == $id) {
            return $skill;
        }
    }
    return null;
}

// File upload function
function handleFileUpload($file, $target_dir = UPLOAD_PATH) {
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $target_file = $target_dir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if($check === false) {
        return array('success' => false, 'message' => 'File is not an image.');
    }
    
    // Check file size (5MB limit)
    if ($file["size"] > 5000000) {
        return array('success' => false, 'message' => 'File is too large.');
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        return array('success' => false, 'message' => 'Only JPG, JPEG, PNG & GIF files are allowed.');
    }
    
    // Generate unique filename
    $new_filename = uniqid() . '.' . $imageFileType;
    $target_file = $target_dir . $new_filename;
    
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        return array('success' => true, 'filename' => $new_filename, 'message' => 'File uploaded successfully.');
    } else {
        return array('success' => false, 'message' => 'Error uploading file.');
    }
}

// Security functions
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}
?>