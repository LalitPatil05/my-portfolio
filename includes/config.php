<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Site configuration
define('SITE_NAME', 'Lalit Patil | Portfolio');
define('SITE_EMAIL', 'lalitpatil4636@gmail.com');
define('BASE_URL', 'http://localhost/portfolio-website');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Static skills data
$skills = array(
    array('skill_name' => 'HTML5', 'skill_level' => 95, 'icon_class' => 'fab fa-html5'),
    array('skill_name' => 'CSS3', 'skill_level' => 90, 'icon_class' => 'fab fa-css3-alt'),
    array('skill_name' => 'JavaScript', 'skill_level' => 88, 'icon_class' => 'fab fa-js'),
    array('skill_name' => 'PHP', 'skill_level' => 85, 'icon_class' => 'fab fa-php'),
    array('skill_name' => 'MySQL', 'skill_level' => 82, 'icon_class' => 'fas fa-database'),
    array('skill_name' => 'Bootstrap', 'skill_level' => 90, 'icon_class' => 'fab fa-bootstrap'),
    array('skill_name' => 'React', 'skill_level' => 80, 'icon_class' => 'fab fa-react'),
    array('skill_name' => 'Node.js', 'skill_level' => 75, 'icon_class' => 'fab fa-node-js'),
    array('skill_name' => 'Java', 'skill_level' => 75, 'icon_class' => 'fab fa-java'),
    array('skill_name' => 'Python', 'skill_level' => 75, 'icon_class' => 'fab fa-python'),
    array('skill_name' => 'C', 'skill_level' => 75, 'icon_class' => 'fab fa-c'),
    array('skill_name' => 'C++', 'skill_level' => 75, 'icon_class' => 'fab fa-cpp')
);

// Static projects data
$projects = array(
    array(
        'title' => 'E-Commerce Platform',
        'description' => 'A full-stack e-commerce solution with user authentication, payment integration, and admin dashboard.',
        'short_description' => 'Modern e-commerce platform with React and Node.js',
        'technologies' => 'React, Node.js, MongoDB, Express',
        'project_url' => 'https://woocommerce.com/',
        'github_url' => 'https://github.com/LalitPatil05/',
        'image_path' => 'assets\uploads\projects\project1.jpg',
        'category' => 'fullstack',
        'featured' => true
    ),
    array(
        'title' => 'Portfolio Website', 
        'description' => 'A responsive portfolio website with modern design and smooth animations.',
        'short_description' => 'Personal portfolio with futuristic design',
        'technologies' => 'HTML, CSS, JavaScript, PHP',
        'project_url' => 'https://portfolio.com',
        'github_url' => 'https://github.com/LalitPatil05/',
        'image_path' => 'assets/uploads/projects/project2.jpg',
        'category' => 'web',
        'featured' => true
    ),
    array(
        'title' => 'Task Management App',
        'description' => 'A collaborative task management application with real-time updates.',
        'short_description' => 'Productive task management solution',
        'technologies' => 'Vue.js, Firebase, Tailwind CSS',
        'project_url' => 'https://www.todoist.com/',
        'github_url' => 'https://github.com/LalitPatil05/',
        'image_path' => 'assets/uploads/projects/project4.jpg',
        'category' => 'web',
        'featured' => false
    ),
    array(
        'title' => 'Weather Dashboard',
        'description' => 'A weather application with location-based forecasts and interactive maps.',
        'short_description' => 'Real-time weather information',
        'technologies' => 'JavaScript, API, Bootstrap',
        'project_url' => 'https://weather.com/en-IN/weather/today/', 
        'github_url' => 'https://github.com/LalitPatil05/',
        'image_path' => 'assets/uploads/projects/project4.jpg',
        'category' => 'web',
        'featured' => false
    )
);
?>