<?php 
$pageTitle = "Education | Professional Portfolio";
include 'includes/header.php'; 

// Education data
$education = array(
     array(
        'degree' => 'Masters in Computer Application',
        'institution' => 'Kavayitri Bahinabai Chaudhari North Maharashtra University, Jalgaon',
        'duration' => '2025 - Appear',
        'description' => 'Specialized in Advanced Web Technologies and Software Development. Completed courses in Artificial Intelligence and Machine Learning and Advamced Concepts of Computer Science and Technologys.',
        'grade' => 'CGPA: Appear',
        'icon' => 'fas fa-graduation-cap',
        'courses' => ['Java', 'Data Structure & Algorithms', 'Data Science', 'Web Technologies', 'Artificial Intelligence', 'Machine Learning']
    ),
    array(
        'degree' => 'Bachelor of Computer Science',
        'institution' => 'Kavayitri Bahinabai Chaudhari North Maharashtra University, Jalgaon',
        'duration' => '2022 - 2025',
        'description' => 'Specialized in Web Development and Software Engineering. Completed courses in Data Structures, Algorithms, Database Management, and Web Technologies.',
        'grade' => 'CGPA: 9.82',
        'icon' => 'fas fa-graduation-cap',
        'courses' => ['Data Structures', 'Algorithms', 'Database Systems', 'Web Development', 'Software Engineering']
    ),

      array(
        'degree' => 'Higher Secondary School Certificate',
        'institution' => 'Maharashtra State Higher and Secondary Board of Education, Pune',
        'duration' => '2022',
        'description' => 'Science',
        'grade' => 'Percentage: 74.67%',
        'icon' => 'fas fa-school',
        'courses' => ['Mathematics', 'Physics', 'Chemistry', 'Biology', 'English']
      ),

    array(
        'degree' => 'Secondary School Certificate',
        'institution' => 'Maharashtra State Higher and Secondary Board of Education, Pune',
        'duration' => '2020',
        'description' => 'All Basic Subjects',
        'grade' => 'Percentage: 90%',
        'icon' => 'fas fa-school',
        'courses' => ['Mathematics', 'English', 'Science', 'History', 'Geography']
    )
);

// Certifications data
$certifications = array(
    array(
        'name' => 'Employability Enhancement Program',
        'issuer' => 'Infosys Foundation',
        'year' => '2025',
        'icon' => 'fab fa-institute',
        'credential_id' => 'La.S.T.240125Na'
    ),
    array(
        'name' => 'Java Certification',
        'issuer' => 'Guvi',
        'year' => '2024',
        'icon' => 'fab fa-google',
        'credential_id' => 'G.t.psd.2107252'
    ),
    array(
        'name' => 'National Innovative Idea',
        'issuer' => 'Institute',
        'year' => '2025',
        'icon' => 'fab fa-india',
        'credential_id' => '14022025'
    ),
    array(
        'name' => 'PLC Workshop Certification',
        'issuer' => 'KBCNMU, University',
        'year' => '2024',
        'icon' => 'fab fa-plc',
        'credential_id' => '14021908'
    )
);
?>

<!-- Education Hero -->
<section class="education-hero py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="section-title" data-aos="fade-up">My <span class="text-gradient">Education</span></h1>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Academic journey and professional qualifications
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Education Timeline -->
<section class="education-timeline-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="education-path">
                    <?php foreach($education as $index => $edu): ?>
                    <div class="education-item" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                        <div class="edu-timeline-marker">
                            <div class="marker-dot"></div>
                            <?php if($index < count($education) - 1): ?>
                            <div class="timeline-line"></div>
                            <?php endif; ?>
                        </div>
                        <div class="education-card">
                            <div class="edu-header">
                                <div class="edu-icon">
                                    <i class="<?php echo $edu['icon']; ?>"></i>
                                </div>
                                <div class="edu-info">
                                    <h3 class="edu-degree"><?php echo $edu['degree']; ?></h3>
                                    <h4 class="edu-institution"><?php echo $edu['institution']; ?></h4>
                                    <span class="edu-duration"><?php echo $edu['duration']; ?></span>
                                </div>
                            </div>
                            <p class="edu-description"><?php echo $edu['description']; ?></p>
                            <div class="edu-details">
                                <div class="grade-section">
                                    <strong>Grade:</strong>
                                    <span class="grade-badge"><?php echo $edu['grade']; ?></span>
                                </div>
                                <div class="courses-section">
                                    <strong>Key Courses:</strong>
                                    <div class="courses-list">
                                        <?php foreach($edu['courses'] as $course): ?>
                                        <span class="course-tag"><?php echo $course; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Grid -->
<section class="certifications-section py-5 bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Professional <span class="text-gradient">Certifications</span></h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Validated skills and expertise
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach($certifications as $cert): ?>
            <div class="col-lg-6 mb-4" data-aos="fade-up">
                <div class="certification-card-full">
                    <div class="cert-header">
                        <div class="cert-icon-main">
                            <i class="<?php echo $cert['icon']; ?>"></i>
                        </div>
                        <div class="cert-info">
                            <h4 class="cert-name"><?php echo $cert['name']; ?></h4>
                            <p class="cert-issuer"><?php echo $cert['issuer']; ?></p>
                        </div>
                    </div>
                    <div class="cert-details">
                        <div class="cert-meta">
                            <span class="cert-year">
                                <i class="fas fa-calendar me-2"></i><?php echo $cert['year']; ?>
                            </span>
                            <?php if(isset($cert['credential_id'])): ?>
                            <span class="cert-id">
                                <i class="fas fa-id-card me-2"></i><?php echo $cert['credential_id']; ?>
                            </span>
                            <?php endif; ?>
                        </div>
                        <button class="btn btn-sm btn-outline view-cert-btn">
                            <i class="fas fa-external-link-alt me-2"></i>View Credential
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Skills Summary -->
<section class="skills-summary-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Technical <span class="text-gradient">Skills</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="skill-category">
                    <h4><i class="fas fa-code me-2"></i>Frontend</h4>
                    <div class="skills-list">
                        <span class="skill-item">HTML5 & CSS3</span>
                        <span class="skill-item">JavaScript ES6+</span>
                        <span class="skill-item">React.js</span>
                        <span class="skill-item">XML</span>
                        <span class="skill-item">WordPress</span>
                        <span class="skill-item">C</span>
                        <span class="skill-item">C++</span>
                        <span class="skill-item">Bootstrap 5</span>
                        <span class="skill-item">Tailwind CSS</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-category">
                    <h4><i class="fas fa-server me-2"></i>Backend</h4>
                    <div class="skills-list">
                        <span class="skill-item">Node.js</span>
                        <span class="skill-item">PHP</span>
                        <span class="skill-item">Python</span>
                        <span class="skill-item">Express.js</span>
                        <span class="skill-item">Node.js</span>
                        <span class="skill-item">Java</span>
                        <span class="skill-item">Python</span>
                        <span class="skill-item">C# ASP.NET</span>
                        <span class="skill-item">Express.js</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="skill-category">
                    <h4><i class="fas fa-database me-2"></i>Tools & Others</h4>
                    <div class="skills-list">
                        <span class="skill-item">Git & GitHub</span>
                        <span class="skill-item">MySQL</span>
                        <span class="skill-item">MongoDB</span>
                        <span class="skill-item">PostgreSQL</span>
                        <span class="skill-item">Vercel</span>
                        <span class="skill-item">Orace DB</span>
                        <span class="skill-item">Ms Word</span>
                        <span class="skill-item">Ms Excel</span>
                        <span class="skill-item">Ms Powerpoint</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>