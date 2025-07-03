// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Header background on scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 100) {
        header.style.background = 'transparent';
        header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.2)';
    } else {
        header.style.background = 'transparent';
        header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.8)';
    }
});

// Animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
});

// Mobile menu functionality
const mobileMenu = document.querySelector('.mobile-menu');
const navLinks = document.querySelector('.nav-links');

if (mobileMenu && navLinks) {
    mobileMenu.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        navLinks.classList.toggle('active');
    });

    // Close mobile menu when clicking on a link
    navLinks.addEventListener('click', (e) => {
        if (e.target.tagName === 'A') {
            mobileMenu.classList.remove('active');
            navLinks.classList.remove('active');
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !navLinks.contains(e.target)) {
            mobileMenu.classList.remove('active');
            navLinks.classList.remove('active');
        }
    });
}

console.log('Mobile menu element:', mobileMenu);
console.log('Nav links element:', navLinks);

// Test click
if (mobileMenu) {
    mobileMenu.addEventListener('click', () => {
        console.log('Mobile menu clicked');
        console.log('Nav links classes:', navLinks.className);
    });
}

// Heart animation on load
setTimeout(() => {
    const hearts = document.querySelectorAll('.heart');
    hearts.forEach(heart => {
        heart.style.animation = 'gentle-pulse 2s ease-in-out infinite';
    });
}, 1000);