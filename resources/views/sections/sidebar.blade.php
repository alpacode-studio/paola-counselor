<!-- Vertical Contact Sidebar (Left) -->
<div class="contact-sidebar" id="contactSidebar">
    <div class="contact-sidebar-toggle" id="contactToggle">
        <i class="bi bi-chat-dots" style="font-size: clamp(1.5rem, 4vh, 3rem);"></i>
    </div>
    
    <div class="contact-sidebar-content">
        <div class="contact-header">
            <h6>Contattami</h6>
            <p>Inizia il tuo percorso</p>
        </div>
        
        <div class="contact-buttons">
            <a href="https://wa.me/393336757041" class="contact-btn whatsapp" target="_blank" rel="noopener">
                <div class="btn-icon">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <div class="btn-text">
                    <span>WhatsApp</span>
                    <small>Messaggio diretto</small>
                </div>
            </a>
            
            <a href="https://www.instagram.com/paola.counselor/" class="contact-btn instagram" target="_blank" rel="noopener">
                <div class="btn-icon">
                    <i class="bi bi-instagram"></i>
                </div>
                <div class="btn-text">
                    <span>Instagram</span>
                    <small>Messaggio diretto</small>
                </div>
            </a>

            <a href="https://www.tiktok.com/@counselor._coach?_t=ZN-90SuvUXNQJz&_r=1" class="contact-btn tiktok" target="_blank" rel="noopener">
                <div class="btn-icon">
                    <i class="bi bi-tiktok"></i>
                </div>
                <div class="btn-text">
                    <span>TikTok</span>
                    <small>Scopri di più</small>
                </div>
            </a>
            
            <a href="mailto:paola_coacholistico@libero.it" class="contact-btn email">
                <div class="btn-icon">
                    <i class="bi bi-envelope"></i>
                </div>
                <div class="btn-text">
                    <span>Email</span>
                    <small>Scrivi ora</small>
                </div>
            </a>
            
            <a href="https://cal.com/paola-boselli/prima-consulenza" class="contact-btn calendar" target="_blank" rel="noopener">
                <div class="btn-icon">
                    <i class="bi bi-calendar-heart"></i>
                </div>
                <div class="btn-text">
                    <span>Prenota</span>
                    <small>Prima consulenza</small>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
/* ===== VERTICAL CONTACT SIDEBAR (LEFT) ===== */
.contact-sidebar {
    position: fixed;
    top: 50%;
    left: 0;
    transform: translateY(-50%) translateX(-250px);
    width: 280px;
    background: linear-gradient(145deg, 
        rgba(255, 255, 255, 0.95) 0%, 
        rgba(248, 250, 252, 0.98) 100%);
    backdrop-filter: blur(20px);
    border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(143, 188, 143, 0.2);
    border-left: none;
    z-index: 999;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.contact-sidebar.active {
    transform: translateY(-50%) translateX(0);
}

.contact-sidebar-toggle {
    position: absolute;
    right: -50px;
    top: 50%;
    transform: translateY(-50%);
    width: 65px;
    height: 65px;
    background: linear-gradient(135deg, var(--primary-sage), var(--accent-coral));
    border-radius: 0 50% 50% 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.3rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 5px 20px rgba(143, 188, 143, 0.3);
}

.contact-sidebar-toggle:hover {
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 8px 30px rgba(143, 188, 143, 0.4);
}

.contact-sidebar-content {
    padding: 2rem 1.5rem;
}

.contact-header {
    text-align: center;
    margin-bottom: 1.5rem;
    border-bottom: 1px solid rgba(143, 188, 143, 0.2);
    padding-bottom: 1rem;
}

.contact-header h6 {
    font-family: var(--font-serif);
    font-size: 1.3rem;
    color: var(--deep-forest);
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.contact-header p {
    color: var(--primary-sage);
    margin: 0;
    font-size: 0.9rem;
    font-weight: 500;
}

.contact-buttons {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.contact-btn {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border-radius: var(--radius-md);
    text-decoration: none;
    color: var(--deep-forest);
    background: rgba(255, 255, 255, 0.7);
    border: 1px solid rgba(143, 188, 143, 0.2);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.contact-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: left 0.5s ease;
}

.contact-btn:hover::before {
    left: 100%;
}

.contact-btn:hover {
    transform: translateX(5px);
    text-decoration: none;
    color: white;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.btn-icon {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    color: white;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.btn-text {
    display: flex;
    flex-direction: column;
    line-height: 1.2;
}

.btn-text span {
    font-weight: 600;
    font-size: 0.95rem;
}

.btn-text small {
    opacity: 0.8;
    font-size: 0.8rem;
}

/* Contact button specific colors */
.contact-btn.instagram .btn-icon {
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
}

.contact-btn.instagram:hover {
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
    border-color: #dc2743;
}

.contact-btn.tiktok .btn-icon {
    background: #000000;
}

.contact-btn.tiktok:hover {
    background: linear-gradient(135deg, #000000, #333333);
    border-color: #000000;
}
.contact-btn.whatsapp .btn-icon {
    background: #25D366;
}

.contact-btn.whatsapp:hover {
    background: linear-gradient(135deg, #25D366, #20BA5A);
    border-color: #25D366;
}

.contact-btn.phone .btn-icon {
    background: #2196F3;
}

.contact-btn.phone:hover {
    background: linear-gradient(135deg, #2196F3, #1976D2);
    border-color: #2196F3;
}

.contact-btn.email .btn-icon {
    background: #DB4437;
}

.contact-btn.email:hover {
    background: linear-gradient(135deg, #DB4437, #C23321);
    border-color: #DB4437;
}

.contact-btn.calendar .btn-icon {
    background: linear-gradient(135deg, var(--primary-sage), var(--accent-coral));
}

.contact-btn.calendar:hover {
    background: linear-gradient(135deg, var(--accent-coral), var(--primary-sage));
    border-color: var(--primary-sage);
}

.contact-footer {
    text-align: center;
    margin-top: 1.5rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(143, 188, 143, 0.2);
}

.contact-footer small {
    color: var(--primary-sage);
    font-weight: 500;
    background: rgba(143, 188, 143, 0.1);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-xl);
    display: inline-block;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .contact-sidebar {
        width: 260px;
        transform: translateY(-50%) translateX(-230px);
    }
    
    .contact-sidebar-content {
        padding: 1.5rem 1rem;
    }
    
    .contact-btn {
        padding: 0.75rem;
        gap: 0.75rem;
    }
    
    .btn-icon {
        width: 40px;
        height: 40px;
        font-size: 1.1rem;
    }
    
    .btn-text span {
        font-size: 0.9rem;
    }
    
    .btn-text small {
        font-size: 0.75rem;
    }
}

@media (max-width: 576px) {
    .contact-sidebar {
        width: 240px;
        transform: translateY(-50%) translateX(-210px);
    }
    
    .contact-sidebar-toggle {
        right: -45px;
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
}

/* Hide contact sidebar on very small screens */
@media (max-width: 480px) {
    .contact-sidebar {
        display: none;
    }
}

/* Accessibility improvements */
.contact-sidebar-toggle:focus,
.contact-btn:focus {
    outline: 2px solid var(--primary-sage);
    outline-offset: 2px;
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    .contact-sidebar,
    .contact-btn {
        transition-duration: 0.01ms !important;
    }
    
    .contact-btn::before {
        display: none;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('contactSidebar');
    const toggle = document.getElementById('contactToggle');
    
    // Toggle sidebar
    function toggleSidebar() {
        sidebar.classList.toggle('active');
        
        // Update toggle icon
        const icon = toggle.querySelector('i');
        if (sidebar.classList.contains('active')) {
            icon.className = 'bi bi-x-lg';
        } else {
            icon.className = 'bi bi-chat-dots';
        }
    }
    
    // Close sidebar when clicking outside
    function closeSidebar(e) {
        if (!sidebar.contains(e.target)) {
            sidebar.classList.remove('active');
            toggle.querySelector('i').className = 'bi bi-chat-dots';
        }
    }
    
    // Event listeners
    toggle.addEventListener('click', toggleSidebar);
    document.addEventListener('click', closeSidebar);
    
    // Handle keyboard accessibility
    toggle.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            toggleSidebar();
        }
    });
    
    // Close sidebar on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
            toggle.querySelector('i').className = 'bi bi-chat-dots';
        }
    });
    
    // Track analytics for contact buttons
    const contactButtons = document.querySelectorAll('.contact-btn');
    contactButtons.forEach(button => {
        button.addEventListener('click', function() {
            const buttonType = this.className.includes('whatsapp') ? 'WhatsApp' :
                              this.className.includes('phone') ? 'Phone' :
                              this.className.includes('email') ? 'Email' :
                              this.className.includes('calendar') ? 'Calendar' : 'Unknown';
            
            // Track with Google Analytics (if available)
            if (typeof gtag !== 'undefined') {
                gtag('event', 'contact_click', {
                    'contact_method': buttonType,
                    'event_category': 'engagement',
                    'event_label': 'sidebar_contact'
                });
            }
        });
    });
});
</script>