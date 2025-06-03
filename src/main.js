document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionality
    const burgerMenu = document.getElementById('burger-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');
    const mobileDropdown = document.getElementById('mobile-dropdown');
    const mobileDropdownContent = document.getElementById('mobile-dropdown-content');

    if (burgerMenu && mobileMenu && closeMenu) {
        burgerMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });

        mobileDropdown.addEventListener('click', () => {
            mobileDropdownContent.classList.toggle('hidden');
        });
    }

    const slider = document.getElementById('slider');
    const slides = slider.children;
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots = Array.from(document.getElementById('dots').children);
    let currentSlide = 0;
    let slideWidth = slides[0].offsetWidth;
    let autoplayInterval;

    window.addEventListener('resize', () => {
        slideWidth = slides[0].offsetWidth;
        goToSlide(currentSlide);
    });

    function goToSlide(index) {
        if (index < 0) index = slides.length - 1;
        if (index >= slides.length) index = 0;
        currentSlide = index;
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        dots.forEach((dot, i) => {
            if (i === currentSlide) {
                dot.style.backgroundColor = '#cde0c6';
            } else {
                dot.style.backgroundColor = '#cde0c680';
            }
        });
    }

    function startAutoplay() {
        stopAutoplay();
        autoplayInterval = setInterval(() => {
            goToSlide(currentSlide + 1);
        }, 5000);
    }

    function stopAutoplay() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
        }
    }

    prevBtn.addEventListener('click', () => {
        goToSlide(currentSlide - 1);
        stopAutoplay();
        startAutoplay();
    });

    nextBtn.addEventListener('click', () => {
        goToSlide(currentSlide + 1);
        stopAutoplay();
        startAutoplay();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            stopAutoplay();
            startAutoplay();
        });
    });

    let touchStartX = 0;
    let touchEndX = 0;

    slider.addEventListener('touchstart', e => {
        touchStartX = e.touches[0].clientX;
        stopAutoplay();
    }, false);

    slider.addEventListener('touchmove', e => {
        touchEndX = e.touches[0].clientX;
    }, false);

    slider.addEventListener('touchend', () => {
        const diffX = touchStartX - touchEndX;
        if (Math.abs(diffX) > 50) {
            if (diffX > 0) {
                goToSlide(currentSlide + 1);
            } else {
                goToSlide(currentSlide - 1);
            }
        }
        startAutoplay();
    }, false);

    startAutoplay();

    const floatingCta = document.getElementById('floating-cta');
    const aProposSection = document.getElementById('aPropos');

    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;
        const aProposSectionPosition = aProposSection.getBoundingClientRect().top + window.scrollY;
        if (scrollPosition > aProposSectionPosition - 500) {
            floatingCta.style.transform = 'translateY(0)';
        } else {
            floatingCta.style.transform = 'translateY(200%)';
        }
    });

    // Map initialization
    const mapElement = document.getElementById('map');
    if (mapElement) {
        const map = L.map('map').setView([43.304639, 6.088750], 11);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        const zonePolygon = L.polygon([
            [43.4600, 5.8600],
            [43.5000, 6.0500],
            [43.4349, 6.4414],
            [43.3000, 6.2500],
            [43.1200, 6.1500],
            [43.1100, 5.9500],
            [43.2000, 5.8600],
            [43.3700, 5.8500],
        ], {
            color: '#f97316',
            weight: 2,
            fillColor: '#fdba74',
            fillOpacity: 0.25,
            smoothFactor: 1
        }).addTo(map);

        const marker = L.marker([43.304639, 6.088750])
            .addTo(map)
            .bindPopup('Plaisir d\'Aider')
            .openPopup();

        map.fitBounds(zonePolygon.getBounds());
    }
});

