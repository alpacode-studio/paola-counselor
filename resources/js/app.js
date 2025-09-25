// Main application entry point
// Import Bootstrap JS bundle (includes Popper)
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Import and configure AOS
import AOS from 'aos';

// Import GLightbox
import GLightbox from 'glightbox';

// Import Swiper and required modules
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

// Import Typed.js
import Typed from 'typed.js';

// Import file assets
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Make libraries globally available for inline scripts and other modules
window.bootstrap = window.bootstrap || {};
window.AOS = AOS;
window.GLightbox = GLightbox;
window.Swiper = Swiper;
window.Typed = Typed;

// Global configuration
const APP_CONFIG = {
    aos: {
        duration: 1000,
        once: true,
        offset: 100
    },
    swiper: {
        testimonials: {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        }
    },
    particles: {
        count: 15,
        size: 4,
        color: 'rgba(143, 188, 143, 0.6)',
        animationDuration: { min: 3, max: 6 }
    }
};

// Initialize core libraries
function initializeLibraries() {
    // Initialize AOS
    AOS.init(APP_CONFIG.aos);

    // Initialize GLightbox
    const lightbox = GLightbox({
        selector: '.glightbox'
    });

    // Configure Swiper modules
    Swiper.use([Navigation, Pagination, Autoplay]);
    
    console.log('✅ Core libraries initialized');
}

// Initialize UI components
function initializeComponents() {
    // Loading overlay
    handleLoadingOverlay();
    
    // Navbar effects
    setupNavbar();
    
    // Scroll progress
    setupScrollProgress();
    
    // Initialize Swiper components
    initializeTestimonialsSwiper();
    
    // Navigation and scrolling
    setupSmoothScrolling();
    setupBackToTop();
    setupMobileMenu();
    
    // Visual effects
    setupIntersectionObserver();
    createParticlesEffect();
    
    // Initialize Typed.js
    initializeTypedText();
    
    console.log('✅ UI components initialized');
}

// Component initialization functions
function handleLoadingOverlay() {
    const loadingOverlay = document.querySelector('.loading-overlay');
    if (loadingOverlay) {
        setTimeout(() => {
            loadingOverlay.style.opacity = '0';
            setTimeout(() => {
                loadingOverlay.style.display = 'none';
            }, 500);
        }, 100);
    }
}

function setupNavbar() {
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        // Show navbar after page load
        setTimeout(() => {
            navbar.style.opacity = '1';
            navbar.style.pointerEvents = 'auto';
        }, 300);

        window.addEventListener('scroll', function() {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    }
}

function setupScrollProgress() {
    const scrollProgress = document.getElementById('scrollProgress');
    if (scrollProgress) {
        window.addEventListener('scroll', function() {
            const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
            const scrollCurrent = window.pageYOffset;
            const scrollPercentage = (scrollCurrent / scrollTotal) * 100;
            scrollProgress.style.width = scrollPercentage + '%';
        });
    }
}

function initializeTestimonialsSwiper() {
    const testimonialSwiper = document.querySelector('.testimonials-swiper');
    if (testimonialSwiper) {
        new Swiper('.testimonials-swiper', {
            modules: [Navigation, Pagination, Autoplay],
            ...APP_CONFIG.swiper.testimonials
        });
    }
}

function setupSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const target = document.querySelector(targetId);
            if (target) {
                const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

function setupBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            backToTopBtn.classList.toggle('show', window.pageYOffset > 300);
        });

        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

function setupMobileMenu() {
    const navbarCollapse = document.querySelector('.navbar-collapse');
    if (navbarCollapse) {
        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            });
        });
    }
}

function setupIntersectionObserver() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.service-card, .testimonial-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
}

function createParticlesEffect() {
    const heroes = document.querySelectorAll('.hero, .alt-hero');
    if (!heroes.length) return;
    
    heroes.forEach(hero => {
        const particlesContainer = document.createElement('div');
        particlesContainer.className = 'hero-particles';
        particlesContainer.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        `;
        
        const { count, size, color, animationDuration } = APP_CONFIG.particles;
        
        for (let i = 0; i < count; i++) {
            const particle = document.createElement('div');
            const duration = Math.random() * animationDuration.max + animationDuration.min;
            particle.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                background: ${color};
                border-radius: 50%;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
                animation: float ${duration}s ease-in-out infinite;
                animation-delay: ${Math.random() * 6}s;
            `;
            particlesContainer.appendChild(particle);
        }
        
        hero.appendChild(particlesContainer);
    });

    // Add float animation if not exists
    if (!document.getElementById('particle-animations')) {
        const style = document.createElement('style');
        style.id = 'particle-animations';
        style.textContent = `
            @keyframes float {
                0%, 100% { 
                    transform: translateY(0px) rotate(0deg);
                    opacity: 0.3;
                }
                50% { 
                    transform: translateY(-20px) rotate(180deg);
                    opacity: 0.6;
                }
            }
        `;
        document.head.appendChild(style);
    }
}

function initializeTypedText() {
    const typedElement = document.querySelector('.typed-text');
    if (typedElement) {
        new Typed('.typed-text', {
            strings: typedElement.dataset.typed?.split(',') || [],
            typeSpeed: 50,
            backSpeed: 30,
            loop: true
        });
    }
}

// Initialize everything when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    initializeLibraries();
    initializeComponents();
});

// Export configuration and utilities for other modules
window.APP_CONFIG = APP_CONFIG;

console.log('✅ App.js loaded - Main application initialized');