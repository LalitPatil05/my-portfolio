<?php 
$pageTitle = "Page Not Found | Lalit Patil";
http_response_code(404);
include 'includes/header.php'; 
?>

<!-- Error Hero Section -->
<section class="error-hero py-5">
    <div class="container">
        <div class="row align-items-center min-vh-80">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="error-content">
                    <div class="error-badge">
                        <i class="fas fa-exclamation-triangle me-2"></i>Error 404
                    </div>
                    <h1 class="error-title">
                        Page <span class="text-gradient">Not Found</span>
                    </h1>
                    <p class="error-description">
                        Oops! The page you're looking for seems to have wandered off into the digital void. 
                        Don't worry, let me help you find your way back.
                    </p>
                    
                    <div class="error-stats">
                        <div class="stat">
                            <i class="fas fa-search"></i>
                            <div>
                                <h4>Page Missing</h4>
                                <p>The requested URL was not found</p>
                            </div>
                        </div>
                        <div class="stat">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Quick Fix</h4>
                                <p>Try these options below</p>
                            </div>
                        </div>
                    </div>

                    <div class="error-actions">
                        <a href="index.php" class="btn btn-primary">
                            <i class="fas fa-home me-2"></i>Back to Home
                        </a>
                        <a href="projects.php" class="btn btn-outline">
                            <i class="fas fa-briefcase me-2"></i>View Projects
                        </a>
                        <a href="contact.php" class="btn btn-ghost">
                            <i class="fas fa-envelope me-2"></i>Contact Me
                        </a>
                    </div>

                    <div class="error-search mt-4">
                        <p class="search-label">Or search my website:</p>
                        <div class="search-box">
                            <input type="text" id="errorSearch" placeholder="What are you looking for?">
                            <button class="search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="error-visual">
                    <div class="error-animation">
                        <div class="floating-element e1">
                            <i class="fab fa-html5"></i>
                        </div>
                        <div class="floating-element e2">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <div class="floating-element e3">
                            <i class="fab fa-js"></i>
                        </div>
                        <div class="floating-element e4">
                            <i class="fab fa-php"></i>
                        </div>
                        <div class="main-illustration">
                            <div class="illustration-container">
                                <div class="code-window">
                                    <div class="window-header">
                                        <div class="window-dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <span class="file-name">404.html</span>
                                    </div>
                                    <div class="code-content">
                                        <div class="code-line"><span class="line-no">1</span><span class="code">page</span> <span class="operator">=</span> <span class="value">"not_found"</span></div>
                                        <div class="code-line"><span class="line-no">2</span><span class="code">if</span> <span class="parentheses">(</span><span class="code">page</span> <span class="operator">==</span> <span class="value">"not_found"</span><span class="parentheses">)</span> <span class="parentheses">{</span></div>
                                        <div class="code-line"><span class="line-no">3</span>&nbsp;&nbsp;<span class="code">redirect</span><span class="parentheses">(</span><span class="value">"homepage"</span><span class="parentheses">)</span></div>
                                        <div class="code-line"><span class="line-no">4</span><span class="parentheses">}</span></div>
                                        <div class="code-line blinking-cursor">|</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Suggested Pages Section -->
<section class="suggested-pages py-5 bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">You Might Be <span class="text-gradient">Looking For</span></h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Here are some popular pages on my website
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="suggested-card">
                    <div class="card-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4>About Me</h4>
                    <p>Learn about my skills, experience, and journey in web development.</p>
                    <a href="about.php" class="card-link">
                        View About Page <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="suggested-card">
                    <div class="card-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h4>My Projects</h4>
                    <p>Explore my portfolio of web development projects and applications.</p>
                    <a href="projects.php" class="card-link">
                        View Projects <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="suggested-card">
                    <div class="card-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Get In Touch</h4>
                    <p>Ready to start a project? Let's discuss your ideas and requirements.</p>
                    <a href="contact.php" class="card-link">
                        Contact Me <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="assets/js/error.js"></script>