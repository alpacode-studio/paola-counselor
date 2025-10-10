// COMPLETELY CLEANED custom-theme.js - NO BOOTSTRAP API CALLS ANYWHERE
import AOS from 'aos';
import GLightbox from 'glightbox';
import { Swiper } from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import Typed from 'typed.js';

// Import CSS
import 'aos/dist/aos.css';
import 'glightbox/dist/css/glightbox.min.css';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Configure Swiper modules
Swiper.use([Navigation, Pagination, Autoplay]);

// Make libraries globally available
window.AOS = AOS;
window.GLightbox = GLightbox;
window.Swiper = Swiper;
window.Typed = Typed;

// Initialize AOS
AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

// Loading overlay
window.addEventListener('load', function() {
    const loadingOverlay = document.querySelector('.loading-overlay');
    if (loadingOverlay) {
        loadingOverlay.style.opacity = '0';
        setTimeout(() => {
            loadingOverlay.style.display = 'none';
        }, 500);
    }
});

// Scroll progress indicator (independent of navbar)
window.addEventListener('scroll', function() {
    const scrollProgress = document.getElementById('scrollProgress');
    if (scrollProgress) {
        const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
        const scrollCurrent = window.pageYOffset;
        const scrollPercentage = (scrollCurrent / scrollTotal) * 100;
        scrollProgress.style.width = scrollPercentage + '%';
    }
});

// Testimonials Swiper initialization
document.addEventListener('DOMContentLoaded', function() {
    const testimonialSwiper = new Swiper('.testimonials-swiper', {
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
    });
});



// Back to top button (independent utility)
const backToTopBtn = document.getElementById('backToTop');

if (backToTopBtn) {
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Intersection Observer for fade-in effects (independent utility)
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
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

// Particles animation for hero section (independent utility)
function createParticles() {
    const hero = document.querySelector('.hero');
    if (!hero) return;
    
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
    
    const particleCount = 15;
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.style.cssText = `
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--primary-sage);
            border-radius: 50%;
            opacity: 0.3;
            left: ${Math.random() * 100}%;
            top: ${Math.random() * 100}%;
            animation: float ${Math.random() * 3 + 3}s ease-in-out infinite;
            animation-delay: ${Math.random() * 6}s;
        `;
        particlesContainer.appendChild(particle);
    }
    
    hero.appendChild(particlesContainer);
    
    // Add float animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    `;
    document.head.appendChild(style);
}

// Initialize particles
createParticles();
