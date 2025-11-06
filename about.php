<?php 
$pageTitle = "About Me | Lalit Patil - Web Developer";
include 'includes/header.php'; 
?>

<!-- About Hero Section -->
<section class="about-hero py-5 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-image-wrapper">
                    <div class="about-image-container">
                        <img src="assets/images/profile.jpg" alt="Lalit Patil" class="about-img">
                        
                        <!-- Floating Tech Badges -->
                        <div class="floating-tech-badges">
                            <div class="tech-badge html" data-tooltip="HTML5">
                                <i class="fab fa-html5"></i>
                            </div>
                            <div class="tech-badge css" data-tooltip="CSS3">
                                <i class="fab fa-css3-alt"></i>
                            </div>
                            <div class="tech-badge js" data-tooltip="JavaScript">
                                <i class="fab fa-js"></i>
                            </div>
                            <div class="tech-badge php" data-tooltip="PHP">
                                <i class="fab fa-php"></i>
                            </div>
                        </div>
                        
                        <!-- Status Badge -->
                        <div class="status-badge">
                            <div class="pulse-dot"></div>
                            <span>Available for Work</span>
                        </div>
                    </div>
                    
                    <!-- Profile Stats -->
                    <div class="profile-stats-grid">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="stat-content">
                                <h3>8+</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="stat-content">
                                <h3>1+</h3>
                                <p>Year Learning</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div class="stat-content">
                                <h3>10+</h3>
                                <p>Technologies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-content-wrapper">
                    <!-- Header Section -->
                    <div class="about-header">
                        <div class="badge-collection">
                            <span class="experience-badge">
                                <i class="fas fa-graduation-cap me-2"></i>Fresh Graduate
                            </span>
                            <span class="role-badge">
                                <i class="fas fa-code me-2"></i>Web Developer
                            </span>
                        </div>
                        <h1 class="section-title">About <span class="text-gradient">Me</span></h1>
                        <p class="about-intro">
                            Passionate <span class="highlight">Computer Science Graduate</span> specializing in 
                            creating digital experiences that make a difference.
                        </p>
                    </div>
                    
                    <!-- About Text -->
                    <div class="about-text-content">
                        <p class="about-text">
                            I'm a dedicated web developer with a strong foundation in modern technologies. 
                            I love turning complex problems into simple, beautiful designs. With expertise in 
                            <strong>frontend development</strong> and growing skills in <strong>full-stack technologies</strong>, 
                            I'm committed to writing clean, efficient code and creating user-friendly applications.
                        </p>
                        
                        <div class="specialization-tags">
                            <span class="specialization-tag">Frontend Development</span>
                            <span class="specialization-tag">Responsive Design</span>
                            <span class="specialization-tag">Web Applications</span>
                            <span class="specialization-tag">UI/UX Focus</span>
                        </div>
                    </div>
                    
                    <!-- Personal Info Grid -->
                    <div class="info-grid">
                        <div class="info-column">
                            <div class="info-item enhanced">
                                <div class="info-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="info-content">
                                    <label>Full Name</label>
                                    <span>Lalit Patil</span>
                                </div>
                            </div>
                            <div class="info-item enhanced">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <label>Email</label>
                                    <span>lalitpatil4636@gmail.com</span>
                                </div>
                            </div>
                            <div class="info-item enhanced">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <label>Location</label>
                                    <span>Khetia, India</span>
                                </div>
                            </div>
                        </div>
                        <div class="info-column">
                            <div class="info-item enhanced">
                                <div class="info-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="info-content">
                                    <label>Education</label>
                                    <span>B.Sc. Computer Science</span>
                                </div>
                            </div>
                            <div class="info-item enhanced">
                                <div class="info-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="info-content">
                                    <label>Status</label>
                                    <span class="status-available">Available</span>
                                </div>
                            </div>
                            <div class="info-item enhanced">
                                <div class="info-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="info-content">
                                    <label>Focus</label>
                                    <span>Frontend & Full Stack</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <a href="assets/uploads/Lalit-Patil-Resume.pdf" download class="btn btn-primary btn-download">
                            <i class="fas fa-download me-2"></i>
                            <span>Download CV</span>
                            <small>PDF, 2MB</small>
                        </a>
                        <a href="contact.php" class="btn btn-outline btn-contact">
                            <i class="fas fa-paper-plane me-2"></i>
                            Let's Discuss
                        </a>
                        <a href="projects.php" class="btn btn-ghost">
                            <i class="fas fa-eye me-2"></i>
                            View Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills-section py-5 bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">My <span class="text-gradient">Skills</span></h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Technologies I'm proficient with
                </p>
            </div>
        </div>
        <div class="row">
            <!-- Frontend Skills -->
            <div class="col-md-6 mb-5" data-aos="fade-up">
                <h4 class="skill-category-title">
                    <i class="fas fa-code me-2"></i>Frontend Technologies
                </h4>
                <div class="skill-category">
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name" class="fas fa-html">HTML5</span>
                            <span class="skill-percentage">90%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">CSS3</span>
                            <span class="skill-percentage">85%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">JavaScript</span>
                            <span class="skill-percentage">80%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Bootstrap</span>
                            <span class="skill-percentage">85%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Tailwind</span>
                            <span class="skill-percentage">85%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend & Tools -->
            <div class="col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                <h4 class="skill-category-title">
                    <i class="fas fa-cogs me-2"></i>Backend & Tools
                </h4>
                <div class="skill-category">
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">PHP</span>
                            <span class="skill-percentage">75%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">MySQL</span>
                            <span class="skill-percentage">70%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Git & GitHub</span>
                            <span class="skill-percentage">80%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">React Basics</span>
                            <span class="skill-percentage">65%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 65%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">Java</span>
                            <span class="skill-percentage">85%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Learning Journey -->
<section class="journey-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">My Learning <span class="text-gradient">Journey</span></h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    From beginner to aspiring developer
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="journey-timeline">
                    <div class="journey-item" data-aos="fade-right">
                        <div class="journey-date">2024 - Present</div>
                        <div class="journey-content">
                            <h4>Advanced Web Development</h4>
                            <p>Mastering modern frameworks and building complex projects. Learning React, Node.js, and advanced JavaScript concepts.</p>
                            <div class="journey-tech">
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">Node.js</span>
                                <span class="tech-tag">MongoDB</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="journey-item" data-aos="fade-left">
                        <div class="journey-date">2023 - 2024</div>
                        <div class="journey-content">
                            <h4>Core Web Technologies</h4>
                            <p>Built strong foundation in HTML, CSS, JavaScript and PHP. Created multiple projects and learned responsive design principles.</p>
                            <div class="journey-tech">
                                <span class="tech-tag">HTML/CSS</span>
                                <span class="tech-tag">JavaScript</span>
                                <span class="tech-tag">PHP</span>
                                <span class="tech-tag">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="journey-item" data-aos="fade-right">
                        <div class="journey-date">2022 - 2023</div>
                        <div class="journey-content">
                            <h4>Computer Science Fundamentals</h4>
                            <p>Completed Bachelor's degree in Computer Science. Learned programming basics, algorithms, and software development principles.</p>
                            <div class="journey-tech">
                                <span class="tech-tag">C++</span>
                                <span class="tech-tag">Java</span>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">SQL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section class="education-section py-5 bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">My <span class="text-gradient">Education</span></h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Academic background and qualifications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="education-timeline">
                    <div class="education-item" data-aos="fade-up">
                        <div class="education-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="education-content">
                            <div class="education-header">
                                <h4 class="education-degree">Bachelor of Science in Computer Science</h4>
                                <span class="education-duration">2022 - 2025</span>
                            </div>
                            <h5 class="education-institution">Kavayitri Bahinabai Chaudhari North Maharashtra University, Jalgaon.</h5>
                            <p class="education-description">
                                Specialized in software development, web technologies, and database management. 
                                Completed projects in web development and participated in coding competitions.
                            </p>
                            <div class="education-grade">
                                <span class="grade-badge">Graduated with First Class</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="education-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="education-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="education-content">
                            <div class="education-header">
                                <h4 class="education-degree">Soft Skill Development Certification</h4>
                                <span class="education-duration">2022 - 2023</span>
                            </div>
                            <h5 class="education-institution">Campus Learning platform</h5>
                            <p class="education-description">
                                Completed comprehensive soft skill development courses covering all the communication and leardership regardind classes. 
                                Take the Participation in multiple physical activities to boost the self confidence.
                            </p>
                            <div class="education-grade">
                                <span class="grade-badge">Self-Thoughted Person</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section class="certifications-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Certifications & <span class="text-gradient">Achievements</span></h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Courses and recognition
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="certification-card">
                    <div class="cert-icon">
                        <i class="fab fa-html5"></i>
                    </div>
                    <h5 class="cert-name">HTML & CSS Certification</h5>
                    <p class="cert-issuer">Great Learning</p>
                    <span class="cert-year">2023</span>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="certification-card">
                    <div class="cert-icon">
                        <i class="fab fa-js"></i>
                    </div>
                    <h5 class="cert-name">JavaScript Algorithms</h5>
                    <p class="cert-issuer">Great Learning</p>
                    <span class="cert-year">2023</span>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="certification-card">
                    <div class="cert-icon">
                        <i class="fab fa-php"></i>
                    </div>
                    <h5 class="cert-name">PHP & MySQL</h5>
                    <p class="cert-issuer">Great Learning</p>
                    <span class="cert-year">2024</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Me Section -->
<section class="why-choose-section py-5 bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Why <span class="text-gradient">Choose Me?</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4>Quick Learner</h4>
                    <p>I adapt quickly to new technologies and frameworks, ensuring fast onboarding and productivity.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h4>Clean Code</h4>
                    <p>I write maintainable, well-documented code following best practices and coding standards.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4>Problem Solver</h4>
                    <p>I enjoy tackling challenges and finding efficient solutions to complex problems.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>