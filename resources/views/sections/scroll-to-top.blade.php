<!-- Universal Scroll to Top Button with Circular Progress -->
<div class="scroll-to-top-universal" id="scrollToTopUniversal">
    <svg class="progress-ring" width="60" height="60" viewBox="0 0 60 60">
        <circle class="progress-ring-bg" cx="30" cy="30" r="26" stroke="rgba(143, 188, 143, 0.2)" stroke-width="4" fill="transparent"/>
        <circle class="progress-ring-fill" cx="30" cy="30" r="26" stroke="var(--primary-sage)" stroke-width="4" fill="transparent" 
                stroke-dasharray="163.36" stroke-dashoffset="163.36" transform="rotate(-90 30 30)" stroke-linecap="round"/>
    </svg>
    <div class="scroll-btn-inner">
        <i class="bi bi-arrow-up"></i>
    </div>
</div>

<style>
/* ===== UNIVERSAL SCROLL TO TOP BUTTON ===== */
.scroll-to-top-universal {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    z-index: 998;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px) scale(0.8);
    pointer-events: none;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.scroll-to-top-universal.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
    pointer-events: auto;
}

.progress-ring {
    position: absolute;
    top: 0;
    left: 0;
    width: 60px;
    height: 60px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.progress-ring:hover {
    transform: scale(1.05);
}

.progress-ring-bg {
    opacity: 0.3;
}

.progress-ring-fill {
    transition: stroke-dashoffset 0.1s linear;
    stroke-linecap: round;
}

.scroll-btn-inner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 46px;
    height: 46px;
    background: linear-gradient(135deg, var(--primary-sage), var(--accent-coral));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.3rem;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(143, 188, 143, 0.3);
    transition: all 0.3s ease;
}

.scroll-to-top-universal:hover .scroll-btn-inner {
    box-shadow: 0 6px 30px rgba(143, 188, 143, 0.4);
    transform: translate(-50%, -50%) translateY(-2px);
}

.scroll-to-top-universal:active .scroll-btn-inner {
    transform: translate(-50%, -50%) scale(0.95);
}

/* Pulse animation when near bottom */
.scroll-to-top-universal.pulse {
    animation: universalPulse 2s ease-in-out infinite;
}

@keyframes universalPulse {
    0%, 100% { 
        transform: translateY(0) scale(1);
    }
    50% { 
        transform: translateY(0) scale(1.05);
    }
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .scroll-to-top-universal {
        width: 50px;
        height: 50px;
        bottom: 20px;
        right: 20px;
    }
    
    .progress-ring {
        width: 50px;
        height: 50px;
    }
    
    .scroll-btn-inner {
        width: 38px;
        height: 38px;
        font-size: 1.1rem;
    }
}

@media (max-width: 480px) {
    .scroll-to-top-universal {
        width: 45px;
        height: 45px;
        bottom: 90px; /* Above potential mobile UI */
        right: 15px;
    }
    
    .progress-ring {
        width: 45px;
        height: 45px;
    }
    
    .scroll-btn-inner {
        width: 34px;
        height: 34px;
        font-size: 1rem;
    }
}

/* Accessibility */
.scroll-to-top-universal:focus-within {
    outline: 2px solid var(--primary-sage);
    outline-offset: 2px;
    border-radius: 50%;
}

/* Reduced motion */
@media (prefers-reduced-motion: reduce) {
    .scroll-to-top-universal,
    .progress-ring,
    .scroll-btn-inner {
        transition-duration: 0.01ms !important;
        animation: none !important;
    }
}

/* Hide on print */
@media print {
    .scroll-to-top-universal {
        display: none !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollBtn = document.getElementById('scrollToTopUniversal');
    const progressRing = scrollBtn.querySelector('.progress-ring-fill');
    const progressRingBg = scrollBtn.querySelector('.progress-ring-bg');
    const svgElement = scrollBtn.querySelector('.progress-ring');
    
    // SVG configuration for different screen sizes
    const svgConfigs = {
        desktop: { size: 60, center: 30, radius: 26, strokeWidth: 4 },
        tablet: { size: 50, center: 25, radius: 21, strokeWidth: 3 },
        mobile: { size: 45, center: 22.5, radius: 19, strokeWidth: 3 }
    };
    
    let currentConfig = svgConfigs.desktop;
    let circumference = 2 * Math.PI * currentConfig.radius;
    
    // Update SVG based on screen size
    function updateSVGSize() {
        const width = window.innerWidth;
        let newConfig;
        
        if (width <= 480) {
            newConfig = svgConfigs.mobile;
        } else if (width <= 768) {
            newConfig = svgConfigs.tablet;
        } else {
            newConfig = svgConfigs.desktop;
        }
        
        // Only update if config changed
        if (newConfig !== currentConfig) {
            currentConfig = newConfig;
            circumference = 2 * Math.PI * currentConfig.radius;
            
            // Update SVG attributes
            svgElement.setAttribute('width', currentConfig.size);
            svgElement.setAttribute('height', currentConfig.size);
            svgElement.setAttribute('viewBox', `0 0 ${currentConfig.size} ${currentConfig.size}`);
            
            // Update both circles
            [progressRingBg, progressRing].forEach(circle => {
                circle.setAttribute('cx', currentConfig.center);
                circle.setAttribute('cy', currentConfig.center);
                circle.setAttribute('r', currentConfig.radius);
                circle.setAttribute('stroke-width', currentConfig.strokeWidth);
            });
            
            // Update transform origin for rotation
            progressRing.setAttribute('transform', `rotate(-90 ${currentConfig.center} ${currentConfig.center})`);
            
            // Update stroke-dasharray
            progressRing.setAttribute('stroke-dasharray', circumference);
            progressRing.style.strokeDasharray = circumference;
            progressRing.style.strokeDashoffset = circumference;
        }
    }
    
    let isNearBottom = false;
    let ticking = false;
    
    function updateScrollProgress() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        
        if (docHeight <= 0) {
            progressRing.style.strokeDashoffset = circumference;
            scrollBtn.classList.remove('show');
            return;
        }
        
        const scrollPercent = Math.min(Math.max(scrollTop / docHeight, 0), 1);
        const offset = circumference - (scrollPercent * circumference);
        
        progressRing.style.strokeDashoffset = offset;
        
        // Show/hide button
        if (scrollTop > 100) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
        }
        
        // Pulse effect when near bottom
        const nearBottom = scrollPercent > 0.9;
        if (nearBottom && !isNearBottom) {
            scrollBtn.classList.add('pulse');
            isNearBottom = true;
        } else if (!nearBottom && isNearBottom) {
            scrollBtn.classList.remove('pulse');
            isNearBottom = false;
        }
        
        ticking = false;
    }
    
    function handleScroll() {
        if (!ticking) {
            requestAnimationFrame(updateScrollProgress);
            ticking = true;
        }
    }
    
    function scrollToTop() {
        // Haptic feedback on mobile
        if (navigator.vibrate) {
            navigator.vibrate(50);
        }
        
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        
        // Analytics
        if (typeof gtag !== 'undefined') {
            gtag('event', 'scroll_to_top', {
                'event_category': 'engagement',
                'event_label': 'universal_scroll_to_top'
            });
        }
    }
    
    // Event listeners
    window.addEventListener('scroll', handleScroll, { passive: true });
    window.addEventListener('resize', function() {
        updateSVGSize();
        handleScroll();
    }, { passive: true });
    
    scrollBtn.addEventListener('click', scrollToTop);
    
    // Keyboard accessibility
    scrollBtn.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            scrollToTop();
        }
    });
    
    // Touch events
    let touchStartY = 0;
    scrollBtn.addEventListener('touchstart', function(e) {
        touchStartY = e.touches[0].clientY;
    }, { passive: true });
    
    scrollBtn.addEventListener('touchend', function(e) {
        const touchEndY = e.changedTouches[0].clientY;
        if (touchStartY - touchEndY > 10) {
            scrollToTop();
        }
    }, { passive: true });
    
    // Initialize
    updateSVGSize();
    setTimeout(updateScrollProgress, 100);
});
</script>