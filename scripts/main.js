const navLinks = document.querySelectorAll('.nav-link');

// Initialize Swiper for navigation
const navSwiper = new Swiper(".page", {
    on: {
        slideChange: function () {
            updateActiveNav(this.activeIndex);
        }
    }
});

// Update active nav item based on Swiper's active index
function updateActiveNav(activeIndex) {
    navLinks.forEach((link, index) => {
        if (index === activeIndex) {
            link.classList.add('active');
            link.classList.remove('text-white'); // Remove text-white for active
            link.classList.add('text-dark');    // Add text-dark for active
        } else {
            link.classList.remove('active');
            link.classList.add('text-white');   // Ensure inactive links remain white
            link.classList.remove('text-dark'); // Remove text-dark for inactive
        }
    });
}

// Add click event to nav items to control Swiper
navLinks.forEach((link, index) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        navSwiper.slideTo(index);
    });
});

// Set initial active nav item
updateActiveNav(navSwiper.activeIndex);
