<!-- Enhanced Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="footer-content-wrapper">
            <div class="footer-brand-section">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" 
                     alt="Paola Boselli Counselor Mindfulness Logo" 
                     class="footer-logo-image">
                <div class="footer-brand-name">Paola Boselli</div>
                <p class="footer-brand-subtitle">Counselor & Coach</p>
            </div>
            
            <p class="footer-main-description">
                Accompagno persone verso il benessere autentico attraverso un approccio olistico integrato che 
                unisce counseling professionale, mindfulness e tecniche orientali. <strong>Ogni sessione è un 
                viaggio unico verso il tuo stato di benessere.</strong>
            </p>
            
            <!-- Quick Links -->
            <div class="footer-navigation-links">
                <div class="footer-link-group">
                    <h5 class="footer-link-title">Servizi</h5>
                    <a href="#servizi" class="footer-nav-link">Counseling Individuale</a>
                    <a href="#servizi" class="footer-nav-link">Coaching Mindfulness</a>
                    <a href="#servizi" class="footer-nav-link">Counseling Sistemico</a>
                    <a href="#servizi" class="footer-nav-link">Programmi Olistici</a>
                </div>
                
                <div class="footer-link-group">
                    <h5 class="footer-link-title">Informazioni</h5>
                    <a href="#chi-sono" class="footer-nav-link">Chi Sono</a>
                    <a href="#approccio" class="footer-nav-link">Il Mio Approccio</a>
                    <a href="#contatti" class="footer-nav-link">Prima Consulenza</a>
                    <a href="#contatti" class="footer-nav-link">Newsletter</a>
                </div>
            </div>
            
            <div class="footer-social-media">
                <a href="https://instagram.com/paola.boselli.counselor" class="footer-social-link" aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://linkedin.com/in/paolabosellicounselor" class="footer-social-link" aria-label="LinkedIn">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="mailto:paola.boselli@counselormindfulness.it" class="footer-social-link" aria-label="Email">
                    <i class="bi bi-envelope"></i>
                </a>
                <a href="https://wa.me/393461234567" class="footer-social-link" aria-label="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
        </div>
        
        <div class="footer-separator"></div>
        
        <div class="footer-copyright-section">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="footer-copyright-text">© 2025 Paola Boselli | Counselor Mindfulness & Coach Olistico Professionale</p>
                    <p class="footer-legal-info"><strong>Codice Etico:</strong> Rispetto, Riservatezza, Professionalità</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="footer-policy-links">
                        <a href="/privacy-policy" class="footer-policy-link">Privacy Policy</a> | 
                        <a href="/cookie-policy" class="footer-policy-link">Cookie Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
/* Enhanced footer styles with unique class names */
.main-footer {
    background: linear-gradient(135deg, var(--deep-forest, #2d4a2d), #1a2f1a);
    color: white;
    padding: 50px 0 20px 0;
}

.footer-content-wrapper {
    text-align: center;
}

.footer-brand-section {
    text-align: center;
    margin-bottom: 1.5rem;
}

.footer-logo-image {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-bottom: 1rem;
    border-radius: 50%;
    transition: transform 0.3s ease;
}

.footer-logo-image:hover {
    transform: scale(1.05);
}

.footer-brand-name {
    font-family: var(--font-serif, 'Playfair Display', serif);
    font-size: 1.8rem;
    font-weight: bold;
    color: var(--primary-sage, #8fbc8f);
    margin-bottom: 0.5rem;
}

.footer-brand-subtitle {
    color: rgba(255, 255, 255, 0.8);
    font-size: 1rem;
    margin-bottom: 0;
    font-weight: 500;
}

.footer-main-description {
    color: rgba(255, 255, 255, 0.8);
    margin: 2rem 0;
    line-height: 1.7;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    font-size: 0.95rem;
}

.footer-navigation-links {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.footer-link-group {
    text-align: center;
}

.footer-link-title {
    color: var(--primary-sage, #8fbc8f);
    font-family: var(--font-serif, 'Playfair Display', serif);
    margin-bottom: 0.75rem;
    font-size: 1.1rem;
    font-weight: 600;
}

.footer-nav-link {
    display: block;
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    padding: 0.25rem 0;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.footer-nav-link:hover {
    color: var(--primary-sage, #8fbc8f);
    text-decoration: none;
    transform: translateX(3px);
}

.footer-social-media {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin: 2rem 0;
}

.footer-social-link {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    text-decoration: none;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.footer-social-link:hover {
    background: var(--primary-sage, #8fbc8f);
    transform: translateY(-3px);
    color: white;
    text-decoration: none;
    box-shadow: 0 8px 25px rgba(143, 188, 143, 0.3);
}

.footer-separator {
    height: 1px;
    background: rgba(255, 255, 255, 0.2);
    margin: 2rem 0;
}

.footer-copyright-section {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
    line-height: 1.5;
}

.footer-copyright-text,
.footer-legal-info {
    margin-bottom: 0.5rem;
}

.footer-legal-info {
    font-size: 0.85rem;
}

.footer-policy-links {
    margin-bottom: 0.5rem;
}

.footer-policy-link {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-policy-link:hover {
    color: var(--primary-sage, #8fbc8f);
    text-decoration: none;
}

/* Mobile responsive adjustments */
@media (max-width: 768px) {
    .footer-navigation-links {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        text-align: center;
    }
    
    .footer-link-group {
        text-align: center;
    }
    
    .footer-social-media {
        gap: 0.75rem;
    }
    
    .footer-social-link {
        width: 45px;
        height: 45px;
        font-size: 1.3rem;
    }
    
    .footer-copyright-section .row > div {
        text-align: center;
        margin-bottom: 1rem;
    }
    
    .footer-copyright-section .col-md-6:last-child {
        text-align: center !important;
    }
}

@media (max-width: 576px) {
    .main-footer {
        padding: 40px 0 15px 0;
    }
    
    .footer-brand-name {
        font-size: 1.6rem;
    }
    
    .footer-logo-image {
        width: 50px;
        height: 50px;
    }
    
    .footer-main-description {
        font-size: 0.9rem;
        margin: 1.5rem 0;
    }
}

/* Dark mode compatibility */
@media (prefers-color-scheme: dark) {
    .main-footer {
        background: linear-gradient(135deg, #1a2f1a, #0f1f0f);
    }
}

/* Print styles */
@media print {
    .main-footer {
        background: white !important;
        color: black !important;
        border-top: 2px solid #ccc;
    }
    
    .footer-social-media {
        display: none;
    }
}
</style>