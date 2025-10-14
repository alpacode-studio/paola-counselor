<!-- Enhanced Contact Section -->
<section id="contatti" class="contact-section" style="position: relative; background: url('{{ Vite::asset('resources/images/hero-4.jpg') }}') center center/cover no-repeat;"> 
    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.65); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="contact-content">
            <h2 class="contact-title" data-aos="fade-up">Il Tuo Benessere Inizia Oggi</h2>
            <p class="contact-description" data-aos="fade-up" data-aos-delay="200">
                <strong>Credo profondamente che stare e sentirsi bene sia assolutamente possibile.</strong><br>
                Sei pronto a iniziare il tuo viaggio verso l'equilibrio psico-fisico ed emotivo autentico? 
                Prenota la tua prima consulenza conoscitiva gratuita.
            </p>
            
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="600">
                <div class="col-lg-6">
                    <!-- Social Media Links -->
                    <div class="social-connect text-center">
                        <div class="social-grid mb-4">
                            <a href="https://wa.me/393336757041" class="social-card whatsapp">
                                <i class="bi bi-whatsapp"></i>
                                <span>WhatsApp</span>
                                <small>Messaggi diretti</small>
                            </a>
                            
                            <a href="https://www.instagram.com/paola.counselor/" class="social-card instagram">
                                <i class="bi bi-instagram"></i>
                                <span>Instagram</span>
                                <small>@paola.counselor</small>
                            </a>
                            
                            <a href="mailto:paola_coacholistico@libero.it" class="social-card envelope">
                                <i class="bi bi-envelope"></i>
                                <span>Email</span>
                                <small>paola_coacholistico@libero.it</small>
                            </a>

                            <a href="https://www.tiktok.com/@counselor._coach?_t=ZN-90SuvUXNQJz&_r=1" class="social-card tiktok">
                                <i class="bi bi-tiktok"></i>
                                <span>TikTok</span>
                                <small>Scopri di più</small>
                            </a>
                        </div>
                        
                        <br>

                        <!-- Newsletter Signup -->
                        <div class="newsletter-box mt-4">
                            <p style="color: white; opacity: 0.9;">
                                <i class="bi bi-calendar-check me-2"></i>
                                <strong>Prenota una chiamata conoscitiva</strong><br>
                                <small>Scopri come il mio approccio può aiutarti</small>
                            </p>
                            <a href="https://paolaboselli.ck.page/newsletter" class="btn btn-outline-light">
                                <i class="bi bi- me-2"></i>
                                Prenota una chiamata conoscitiva Gratuita
                            </a>
                        </div>

                        <!-- Contact Info -->
                        <div class="contact-details mt-4 pt-3" style="border-top: 1px solid rgba(255,255,255,0.3);">
                            <div class="row text-center">
                                <div class="col-md-6 mb-2">
                                    <p style="color: rgba(255,255,255,0.8);">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        <strong>Sessioni Online</strong><br>
                                        (disponibile anche in presenza)
                                    </p>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <p style="color: rgba(255,255,255,0.8);">
                                        <i class="bi bi-clock me-1"></i>
                                        <strong>Orari:</strong> Flessibili, su appuntamento
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.social-connect {
    padding: 2rem;
}

.social-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 2rem;
}

.social-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 1.5rem;
    border-radius: 15px;
    text-decoration: none;
    color: white;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.social-card i {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.social-card span {
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.social-card small {
    opacity: 0.8;
    font-size: 0.85rem;
}

.social-card:hover {
    transform: translateY(-5px);
    text-decoration: none;
    color: white;
}

.social-card.whatsapp:hover {
    background: rgba(37, 211, 102, 0.3);
    border-color: #25D366;
}

.social-card.instagram:hover {
    background: linear-gradient(135deg, rgba(129, 52, 175, 0.3) 0%, rgba(221, 42, 123, 0.3) 50%, rgba(245, 133, 41, 0.3) 100%);
    border-color: #DD2A7B;
}

.social-card.tiktok:hover {
    background: rgba(0, 0, 0, 0.3);
    border-color: #FF0050;
}

.social-card.envelope:hover {
    background: rgba(219, 68, 55, 0.3);
    border-color: #DB4437;
}

.social-card.linkedin:hover {
    background: rgba(0, 119, 181, 0.3);
    border-color: #0077B5;
}

.newsletter-box {
    background: rgba(255, 255, 255, 0.05);
    padding: 1.5rem;
    border-radius: 15px;
    backdrop-filter: blur(5px);
}

.btn-outline-light {
    border: 2px solid rgba(255, 255, 255, 0.5);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 25px;
    transition: all 0.3s ease;
}

.btn-outline-light:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: white;
    color: white;
}

.contact-details {
    color: rgba(255, 255, 255, 0.9);
}

@media (max-width: 768px) {
    .social-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
        gap: 1rem;
    }
    
    .cta-buttons .btn {
        margin: 0;
    }
}
</style>