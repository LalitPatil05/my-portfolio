// Error Page Functionality
document.addEventListener('DOMContentLoaded', function() {
    
    // Simple search functionality
    const searchInput = document.getElementById('errorSearch');
    const searchBtn = document.querySelector('.search-btn');
    
    if (searchInput && searchBtn) {
        searchBtn.addEventListener('click', performSearch);
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });
    }
    
    function performSearch() {
        const query = searchInput.value.trim().toLowerCase();
        
        if (query) {
            // Simple page matching
            const pages = {
                'about': 'about.php',
                'project': 'projects.php',
                'work': 'projects.php',
                'contact': 'contact.php',
                'home': 'index.php',
                'portfolio': 'projects.php',
                'skill': 'about.php',
                'resume': 'about.php',
                'cv': 'about.php'
            };
            
            let found = false;
            for (const [key, page] of Object.entries(pages)) {
                if (query.includes(key)) {
                    window.location.href = page;
                    found = true;
                    break;
                }
            }
            
            if (!found) {
                // Show suggestion
                searchInput.placeholder = "Try: about, projects, contact...";
                searchInput.value = '';
                searchInput.focus();
            }
        }
    }
    
    // Add animation to suggested cards
    const suggestedCards = document.querySelectorAll('.suggested-card');
    suggestedCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
    
    // Floating elements interaction
    const floatingElements = document.querySelectorAll('.floating-element');
    floatingElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.2) rotate(10deg)';
        });
        
        element.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    });
});