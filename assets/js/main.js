// Main JavaScript functionality
document.addEventListener('DOMContentLoaded', function() {
    
    // Back to Top Button
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.style.display = 'flex';
        } else {
            backToTop.style.display = 'none';
        }
    });
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    // Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const updateCounter = () => {
                current += step;
                if (current < target) {
                    counter.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }
    
    // Intersection Observer for counters
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(statsSection);
    }
    
    // Typewriter Effect
    class TypeWriter {
        constructor(txtElement, words, wait = 3000) {
            this.txtElement = txtElement;
            this.words = words;
            this.txt = '';
            this.wordIndex = 0;
            this.wait = parseInt(wait, 10);
            this.type();
            this.isDeleting = false;
        }
        
        type() {
            const current = this.wordIndex % this.words.length;
            const fullTxt = this.words[current];
            
            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }
            
            this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;
            
            let typeSpeed = 100;
            
            if (this.isDeleting) {
                typeSpeed /= 2;
            }
            
            if (!this.isDeleting && this.txt === fullTxt) {
                typeSpeed = this.wait;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.wordIndex++;
                typeSpeed = 500;
            }
            
            setTimeout(() => this.type(), typeSpeed);
        }
    }
    
    // Initialize TypeWriter
    const txtElement = document.querySelector('.typewriter-text');
    if (txtElement) {
        const words = JSON.parse(txtElement.getAttribute('data-words') || '["Web Developer", "UI/UX Designer", "Full Stack Developer", "Problem Solver"]');
        const wait = txtElement.getAttribute('data-wait') || 3000;
        
        new TypeWriter(txtElement, words, wait);
    }
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(10, 10, 10, 0.95)';
            navbar.style.padding = '0.5rem 0';
        } else {
            navbar.style.background = 'rgba(10, 10, 10, 0.95)';
            navbar.style.padding = '1rem 0';
        }
    });
});

// Projects Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Projects Filter
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            projectItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Project Modal
    const viewDetailsButtons = document.querySelectorAll('.view-details');
    const projectModal = new bootstrap.Modal(document.getElementById('projectModal'));
    
    viewDetailsButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const projectData = JSON.parse(this.getAttribute('data-project'));
            
            document.getElementById('projectModalTitle').textContent = projectData.title;
            
            const modalContent = `
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/images/projects/${projectData.image_path || 'default.jpg'}" 
                             alt="${projectData.title}" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h4>Project Description</h4>
                        <p>${projectData.description}</p>
                        
                        <h5 class="mt-4">Technologies Used</h5>
                        <div class="project-tech">
                            ${projectData.technologies.split(',').map(tech => 
                                `<span class="tech-tag">${tech.trim()}</span>`
                            ).join('')}
                        </div>
                        
                        <div class="project-links mt-4">
                            ${projectData.project_url ? `
                                <a href="${projectData.project_url}" class="btn btn-primary me-2" target="_blank">
                                    <i class="fas fa-external-link-alt me-1"></i> Live Demo
                                </a>
                            ` : ''}
                            
                            ${projectData.github_url ? `
                                <a href="${projectData.github_url}" class="btn btn-outline" target="_blank">
                                    <i class="fab fa-github me-1"></i> View Code
                                </a>
                            ` : ''}
                        </div>
                    </div>
                </div>
            `;
            
            document.getElementById('projectModalContent').innerHTML = modalContent;
            projectModal.show();
        });
    });
    
    // Form Validation
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let valid = true;
            const inputs = this.querySelectorAll('input[required], textarea[required]');
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.style.borderColor = 'red';
                } else {
                    input.style.borderColor = '';
                }
            });
            
            if (!valid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    }
    
    // Animate skill bars when they come into view
    const skillCards = document.querySelectorAll('.skill-card');
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progressBar = entry.target.querySelector('.progress-bar');
                const width = progressBar.style.width;
                progressBar.style.width = '0';
                
                setTimeout(() => {
                    progressBar.style.width = width;
                }, 500);
                
                skillObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    skillCards.forEach(card => {
        skillObserver.observe(card);
    });
});

// Additional functionality for enhanced home page
document.addEventListener('DOMContentLoaded', function() {
    
    // Tooltip initialization
    const floatElements = document.querySelectorAll('.float-element');
    floatElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        
        element.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Stack items animation
    const stackItems = document.querySelectorAll('.stack-item');
    const stackObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, { threshold: 0.1 });
    
    stackItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'all 0.5s ease';
        stackObserver.observe(item);
    });
    
    // Strength items animation
    const strengthItems = document.querySelectorAll('.strength-item');
    strengthItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-20px)';
        item.style.transition = 'all 0.5s ease';
        
        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateX(0)';
        }, index * 200);
    });
});

// Enhanced Projects Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    
    // Projects Filter with better UX
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');
    const noProjectsMessage = document.getElementById('no-projects');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            let visibleProjects = 0;
            
            projectItems.forEach(item => {
                const categories = item.getAttribute('data-category').split(' ');
                
                if (filterValue === 'all' || categories.includes(filterValue)) {
                    item.style.display = 'block';
                    visibleProjects++;
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
            
            // Show/hide no projects message
            if (visibleProjects === 0) {
                noProjectsMessage.classList.remove('d-none');
            } else {
                noProjectsMessage.classList.add('d-none');
            }
        });
    });
    
    // Enhanced Project Modal
    const viewDetailsButtons = document.querySelectorAll('.view-details');
    const projectModal = new bootstrap.Modal(document.getElementById('projectModal'));
    
    viewDetailsButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const projectData = JSON.parse(this.getAttribute('data-project'));
            
            document.getElementById('projectModalTitle').textContent = projectData.title;
            
            const modalContent = `
                <div class="project-modal-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="project-image mb-3">
                                <img src="assets/images/projects/${projectData.title.toLowerCase().replace(/\s+/g, '-')}.jpg" 
                                     alt="${projectData.title}" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Project Overview</h4>
                            <p class="text-muted">${projectData.description}</p>
                            
                            <div class="project-details mt-4">
                                <div class="detail-item mb-3">
                                    <strong>Technologies:</strong>
                                    <div class="tech-tags mt-1">
                                        ${projectData.technologies.split(', ').map(tech => 
                                            `<span class="tech-tag">${tech}</span>`
                                        ).join('')}
                                    </div>
                                </div>
                                
                                <div class="detail-item mb-3">
                                    <strong>Key Features:</strong>
                                    <ul class="features-list mt-1">
                                        ${projectData.features.map(feature => 
                                            `<li>${feature}</li>`
                                        ).join('')}
                                    </ul>
                                </div>
                                
                                <div class="detail-item mb-3">
                                    <strong>Project Status:</strong>
                                    <span class="badge bg-success">${projectData.status}</span>
                                </div>
                                
                                <div class="detail-item mb-3">
                                    <strong>Duration:</strong>
                                    <span>${projectData.duration}</span>
                                </div>
                            </div>
                            
                            <div class="project-links mt-4">
                                ${projectData.live_url ? `
                                    <a href="${projectData.live_url}" class="btn btn-primary me-2" target="_blank">
                                        <i class="fas fa-external-link-alt me-1"></i> Live Demo
                                    </a>
                                ` : ''}
                                
                                ${projectData.github_url ? `
                                    <a href="${projectData.github_url}" class="btn btn-outline" target="_blank">
                                        <i class="fab fa-github me-1"></i> Source Code
                                    </a>
                                ` : ''}
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            document.getElementById('projectModalContent').innerHTML = modalContent;
            projectModal.show();
        });
    });
    
    // Add animation to project cards on scroll
    const projectCards = document.querySelectorAll('.project-card');
    const projectObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, { threshold: 0.1 });
    
    projectCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.5s ease';
        projectObserver.observe(card);
    });
});

// Contact Page Enhancements
document.addEventListener('DOMContentLoaded', function() {
    
    // Character count for message textarea
    const messageTextarea = document.getElementById('message');
    const charCount = document.getElementById('charCount');
    
    if (messageTextarea && charCount) {
        messageTextarea.addEventListener('input', function() {
            charCount.textContent = this.value.length;
            
            if (this.value.length > 500) {
                charCount.style.color = '#ff6b6b';
            } else if (this.value.length > 300) {
                charCount.style.color = '#ffa500';
            } else {
                charCount.style.color = 'var(--text-secondary)';
            }
        });
    }
    
    // Form validation enhancement
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.btn-send');
            const loadingSpan = submitBtn.querySelector('.btn-loading');
            
            // Show loading state
            submitBtn.disabled = true;
            loadingSpan.classList.remove('d-none');
            submitBtn.querySelector('i:first-child').classList.add('d-none');
        });
    }
    
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
    
    // Real-time form validation
    const inputs = document.querySelectorAll('.form-control[required]');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            clearFieldError(this);
        });
    });
    
    function validateField(field) {
        const feedback = field.parentElement.querySelector('.form-feedback');
        
        if (!field.value.trim()) {
            showFieldError(field, feedback, 'This field is required');
            return false;
        }
        
        if (field.type === 'email' && !isValidEmail(field.value)) {
            showFieldError(field, feedback, 'Please enter a valid email address');
            return false;
        }
        
        clearFieldError(field);
        return true;
    }
    
    function showFieldError(field, feedback, message) {
        field.style.borderColor = '#ff6b6b';
        feedback.textContent = message;
        feedback.style.color = '#ff6b6b';
    }
    
    function clearFieldError(field) {
        field.style.borderColor = '';
        const feedback = field.parentElement.querySelector('.form-feedback');
        feedback.textContent = '';
    }
    
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
});