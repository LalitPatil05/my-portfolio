<?php 
$pageTitle = "Projects | Professional Portfolio";
include 'includes/header.php'; 
include 'includes/config.php'; // Config include karna important hai
?>

<!-- Projects Hero -->
<section class="projects-hero py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="section-title" data-aos="fade-up">My <span class="text-gradient">Projects</span></h1>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Here are some of my recent works
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Filter -->
<section class="projects-filter py-3 bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filter-buttons text-center">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="web">Web Development</button>
                    <button class="filter-btn" data-filter="fullstack">Full Stack</button>
                    <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="projects-grid py-5">
    <div class="container">
        <div class="row" id="projects-container">
            <?php 
            // Projects data use karein
            foreach($projects as $project): 
            ?>
            <div class="col-lg-4 col-md-6 mb-4 project-item" data-category="<?php echo $project['category']; ?>">
                <div class="project-card" data-aos="fade-up">
                    <div class="project-image">
                        <!-- Default image agar project image nahi hai -->
                        <img src="assets/images/projects/<?php echo $project['image_path']; ?>" 
                             alt="<?php echo $project['title']; ?>"
                             onerror="this.onerror=null; this.src='assets/uploads/projects/project1.jpg';">
                        <div class="project-overlay">
                            <div class="project-links">
                                <?php if(!empty($project['project_url'])): ?>
                                <a href="<?php echo $project['project_url']; ?>" class="project-link" target="_blank">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <?php endif; ?>
                                
                                <?php if(!empty($project['github_url'])): ?>
                                <a href="<?php echo $project['github_url']; ?>" class="project-link" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <?php endif; ?>
                                
                                <a href="#" class="project-link view-details" 
                                   data-project='<?php echo htmlspecialchars(json_encode($project), ENT_QUOTES, 'UTF-8'); ?>'>
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <?php if($project['featured']): ?>
                        <div class="featured-badge">Featured</div>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <h4 class="project-title"><?php echo $project['title']; ?></h4>
                        <p class="project-description"><?php echo $project['short_description']; ?></p>
                        <div class="project-tech">
                            <?php 
                            $techs = explode(',', $project['technologies']);
                            foreach($techs as $tech): 
                            ?>
                            <span class="tech-tag"><?php echo trim($tech); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Project Modal -->
<div class="modal fade" id="projectModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalTitle">Project Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="projectModalContent">
                    <!-- Content will be loaded dynamically -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>