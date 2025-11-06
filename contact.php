<?php 
$pageTitle = "Contact | Lalit Patil - Web Developer";
include 'includes/header.php'; 

$success = $error = '';

// Simple form handling without database
if ($_POST) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } else {
        // Simulate successful submission
        $success = "Thank you! Your message has been sent successfully. I'll get back to you within 24 hours.";
        
        // You can add email functionality here if needed
        // mail('lalitpatil4636@gmail.com', $subject, $message, "From: $email");
        
        // Clear form
        $_POST = array();
    }
}
?>

<!-- Contact Hero -->
<section class="contact-hero py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="contact-badge" data-aos="fade-up">
                    <i class="fas fa-paper-plane me-2"></i>Let's Start a Conversation
                </div>
                <h1 class="section-title" data-aos="fade-up">Get In <span class="text-gradient">Touch</span></h1>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Ready to bring your ideas to life? Let's discuss your project and create something amazing together.
                </p>
                <div class="contact-stats" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat">
                        <i class="fas fa-clock"></i>
                        <span>Quick Response</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-code"></i>
                        <span>Web Development</span>
                    </div>
                    <div class="stat">
                        <i class="fas fa-rocket"></i>
                        <span>Project Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <div class="contact-form-container">
                    <div class="form-header">
                        <h3 class="form-title">
                            <i class="fas fa-comment-dots me-2"></i>Send Me a Message
                        </h3>
                        <p class="form-subtitle">I'm excited to hear about your project ideas!</p>
                    </div>
                    
                    <?php if($success): ?>
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i><?php echo $success; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if($error): ?>
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle me-2"></i><?php echo $error; ?>
                    </div>
                    <?php endif; ?>
                    
                    <form method="POST" class="contact-form" id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">
                                        <i class="fas fa-user me-1"></i>Your Name *
                                    </label>
                                    <input type="text" id="name" name="name" class="form-control" 
                                           value="<?php echo $_POST['name'] ?? ''; ?>" 
                                           placeholder="Enter your full name" required>
                                    <div class="form-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">
                                        <i class="fas fa-envelope me-1"></i>Your Email *
                                    </label>
                                    <input type="email" id="email" name="email" class="form-control" 
                                           value="<?php echo $_POST['email'] ?? ''; ?>" 
                                           placeholder="Enter your email address" required>
                                    <div class="form-feedback"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="form-label">
                                <i class="fas fa-tag me-1"></i>Project Type
                            </label>
                            <select id="subject" name="subject" class="form-control">
                                <option value="">Select project type...</option>
                                <option value="Website Development" <?php echo ($_POST['subject'] ?? '') === 'Website Development' ? 'selected' : ''; ?>>Website Development</option>
                                <option value="Web Application" <?php echo ($_POST['subject'] ?? '') === 'Web Application' ? 'selected' : ''; ?>>Web Application</option>
                                <option value="E-Commerce Website" <?php echo ($_POST['subject'] ?? '') === 'E-Commerce Website' ? 'selected' : ''; ?>>E-Commerce Website</option>
                                <option value="Portfolio Website" <?php echo ($_POST['subject'] ?? '') === 'Portfolio Website' ? 'selected' : ''; ?>>Portfolio Website</option>
                                <option value="Other" <?php echo ($_POST['subject'] ?? '') === 'Other' ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="budget" class="form-label">
                                <i class="fas fa-indian-rupee-sign me-1"></i>Project Budget (Optional)
                            </label>
                            <select id="budget" name="budget" class="form-control">
                                <option value="">Select budget range...</option>
                                <option value="Under ₹10,000">Under ₹10,000</option>
                                <option value="₹10,000 - ₹25,000">₹10,000 - ₹25,000</option>
                                <option value="₹25,000 - ₹50,000">₹25,000 - ₹50,000</option>
                                <option value="₹50,000+">₹50,000+</option>
                                <option value="To be discussed">To be discussed</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">
                                <i class="fas fa-edit me-1"></i>Project Details *
                            </label>
                            <textarea id="message" name="message" class="form-control" rows="6" 
                                      placeholder="Tell me about your project requirements, timeline, and any specific features you need..."
                                      required><?php echo $_POST['message'] ?? ''; ?></textarea>
                            <div class="form-feedback"></div>
                            <div class="char-count">
                                <span id="charCount">0</span> characters
                            </div>
                        </div>
                        
                        <div class="form-submit">
                            <button type="submit" class="btn btn-primary btn-send">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                                <span class="btn-loading d-none">
                                    <i class="fas fa-spinner fa-spin me-2"></i>Sending...
                                </span>
                            </button>
                            <p class="form-note">
                                <i class="fas fa-info-circle me-1"></i>I typically respond within 24 hours
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-left">
                <div class="contact-info-sidebar">
                    <div class="info-card">
                        <div class="card-header">
                            <h3 class="info-title">
                                <i class="fas fa-address-card me-2"></i>Contact Information
                            </h3>
                            <p>Let's connect and build something great!</p>
                        </div>
                        
                        <div class="info-items">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Location</h5>
                                    <p>Khetia, Maharashtra, India</p>
                                    <small class="text-muted">Available for remote work</small>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Email</h5>
                                    <p>lalitpatil4636@gmail.com</p>
                                    <small class="text-muted">Primary contact</small>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Phone / WhatsApp</h5>
                                    <p>+91 78693 04636</p>
                                    <small class="text-muted">Available for calls</small>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Response Time</h5>
                                    <p>Within 24 hours</p>
                                    <small class="text-muted">Usually faster</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-card">
                        <h5>Follow & Connect</h5>
                        <div class="social-links">
                            <a href="https://github.com/LalitPatil05" target="_blank" class="social-link github">
                                <i class="fab fa-github"></i>
                                <span>GitHub</span>
                                <small>See my code</small>
                            </a>
                            <a href="https://linkedin.com/in/lalitpatil05" target="_blank" class="social-link linkedin">
                                <i class="fab fa-linkedin"></i>
                                <span>LinkedIn</span>
                                <small>Professional profile</small>
                            </a>
                            <a href="https://instagram.com/lalit_patil1425" target="_blank" class="social-link instagram">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                                <small>Personal updates</small>
                            </a>
                        </div>
                    </div>
                    
                    <div class="availability-card">
                        <div class="availability-header">
                            <i class="fas fa-circle text-success me-2"></i>
                            <span>Currently Available</span>
                        </div>
                        <p>I'm accepting new projects and excited to collaborate!</p>
                        <div class="availability-stats">
                            <div class="stat">
                                <strong>8+</strong>
                                <span>Projects Done</span>
                            </div>
                            <div class="stat">
                                <strong>100%</strong>
                                <span>Client Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5 bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Frequently Asked <span class="text-gradient">Questions</span></h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Quick answers to common questions
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-list">
                    <div class="faq-item" data-aos="fade-up">
                        <div class="faq-question">
                            <h5>What types of projects do you work on?</h5>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>I specialize in web development including responsive websites, web applications, e-commerce platforms, and portfolio sites using HTML, CSS, JavaScript, PHP, and modern frameworks.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-question">
                            <h5>What's your typical project timeline?</h5>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Project timelines vary based on complexity. Simple websites take 1-2 weeks, while complex applications may take 4-6 weeks. I provide detailed timelines during our initial discussion.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-question">
                            <h5>Do you provide ongoing support?</h5>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes! I offer 30 days of free support after project completion and ongoing maintenance packages to keep your website running smoothly.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="faq-question">
                            <h5>What's your development process?</h5>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>My process includes: 1) Requirement analysis, 2) Planning & design, 3) Development, 4) Testing, 5) Deployment, and 6) Support. I keep clients updated throughout the process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="contact-cta py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-12" data-aos="fade-up">
                <h2 class="cta-title">Ready to Start Your Project?</h2>
                <p class="cta-subtitle">
                    Let's turn your ideas into reality. Get in touch today for a free consultation!
                </p>
                <div class="cta-buttons mt-4">
                    <a href="tel:+917869304636" class="btn btn-primary btn-lg me-3">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                    <a href="https://wa.me/917869304636" target="_blank" class="btn btn-success btn-lg me-3">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                    </a>
                    <a href="mailto:lalitpatil4636@gmail.com" class="btn btn-outline btn-lg">
                        <i class="fas fa-envelope me-2"></i>Email Directly
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>