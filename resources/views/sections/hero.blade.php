<!-- Alternative Hero Section with Enhanced Responsive Support and Mobile Optimization -->
<section id="home" class="alt-hero">
    <style>
        /* Laptop screens with lower height (height constraint optimization) */
        @media screen and (min-width: 1200px) and (max-height: 800px) {
            .alt-hero {
                min-height: 85vh !important;
                padding: 1rem 0 !important;
                display: flex !important;
                align-items: center !important;
            }
            
            .alt-hero-content {
                padding: 1rem 0 !important;
                margin: 0 auto !important;
                transform: scale(0.9) !important;
                transform-origin: center !important;
            }
            
            .alt-hero-content h1 {
                font-size: clamp(2rem, 4vw, 3.5rem) !important;
                line-height: 1.1 !important;
                margin-bottom: 0.8rem !important;
            }
            
            .alt-hero-subtitle {
                font-size: clamp(1rem, 2.5vw, 1.8rem) !important;
                margin: 0.5rem auto 1rem !important;
            }
            
            .hero-description p {
                font-size: clamp(0.8rem, 1.5vw, 1rem) !important;
                margin: 0.8rem auto !important;
                line-height: 1.4 !important;
            }
            
            .cta-buttons {
                margin: 1rem 0 !important;
                gap: 0.8rem !important;
            }
            
            .cta-buttons .btn {
                padding: 0.6rem 1.2rem !important;
                font-size: 0.9rem !important;
            }
            
            .alt-hero-content h2 {
                font-size: clamp(0.8rem, 1.2vw, 1rem) !important;
                margin-top: 0.5rem !important;
            }
        }
        
        /* Extra compact for very short laptops */
        @media screen and (min-width: 1200px) and (max-height: 730px) {
            .alt-hero {
                min-height: 80vh !important;
                padding: 0.5rem 0 !important;
            }
            
            .alt-hero-content {
                transform: scale(0.85) !important;
                padding: 0.5rem 0 !important;
            }
            
            .alt-hero-content h1 {
                font-size: clamp(1.8rem, 3.5vw, 3rem) !important;
                margin-bottom: 0.6rem !important;
            }
            
            .alt-hero-subtitle {
                font-size: clamp(0.9rem, 2.2vw, 1.6rem) !important;
                margin: 0.4rem auto 0.8rem !important;
            }
            
            .hero-description p {
                font-size: clamp(0.75rem, 1.3vw, 0.95rem) !important;
                margin: 0.6rem auto !important;
            }
            
            .cta-buttons {
                margin: 0.8rem 0 !important;
            }
            
            .cta-buttons .btn {
                padding: 0.5rem 1rem !important;
                font-size: 0.85rem !important;
            }
            
            .alt-hero-content h2 {
                margin-top: 0.3rem !important;
            }
        }
        
        /* Ultra compact for very low height screens */
        @media screen and (min-width: 1200px) and (max-height: 650px) {
            .alt-hero {
                min-height: 75vh !important;
                padding: 0.3rem 0 !important;
            }
            
            .alt-hero-content {
                transform: scale(0.8) !important;
                padding: 0.3rem 0 !important;
            }
            
            .alt-hero-content h1 {
                font-size: clamp(1.6rem, 3vw, 2.5rem) !important;
                margin-bottom: 0.5rem !important;
            }
            
            .alt-hero-subtitle {
                font-size: clamp(0.8rem, 2vw, 1.4rem) !important;
                margin: 0.3rem auto 0.6rem !important;
            }
            
            .hero-description p {
                font-size: clamp(0.7rem, 1.2vw, 0.9rem) !important;
                margin: 0.5rem auto !important;
                max-width: 90% !important;
            }
            
            .cta-buttons {
                margin: 0.6rem 0 !important;
                flex-direction: row !important;
                justify-content: center !important;
                gap: 0.6rem !important;
            }
            
            .cta-buttons .btn {
                padding: 0.4rem 0.8rem !important;
                font-size: 0.8rem !important;
                min-width: auto !important;
            }
            
            .alt-hero-content h2 {
                font-size: clamp(0.7rem, 1vw, 0.9rem) !important;
                margin-top: 0.2rem !important;
            }
            
            br {
                display: none !important;
            }
        }
    </style>
    
    <div class="alt-hero-content font-dm-serif">
        <h1>
            <span>Counseling</span>  
            <span class="gradient-text">Olistico <span class="font-playfair">&</span> Mindfulness</span> 
            <span>Coaching</span>
        </h1>
        <p class="alt-hero-subtitle font-dancing" 
           style="font-size:clamp(1.2rem, 3.2vw, 2.5rem); color: var(--primary-sage); font-weight: 800;" 
           data-aos="fade-up" 
           data-aos-delay="300">
            "per favorire il tuo Benessere più Autentico"
        </p>
        
        <div class="hero-description" data-aos="fade-up" data-aos-delay="400">
            <p class="font-lora text-white" 
               style="font-size: clamp(0.85rem, 2vw, 1.2rem); color: var(--deep-forest); margin: 1rem auto; max-width: min(95%, 600px); line-height: 1.5; opacity: 0.85;">
                Accompagno persone a ritrovare equilibrio, benessere, motivazione e direzione. A sentirsi meglio con sé stessi e con gli altri ed a riconnettersi con la propria verità profonda.
            </p>
        </div>
        
        <div class="cta-buttons" data-aos="fade-up" data-aos-delay="700">
            <a href="#contatti" class="btn btn-primary-holistic">
                <i class="bi bi-heart-fill me-2"></i>
                <span>Iniziamo Insieme</span>
            </a>
            <a href="#chi-sono" class="btn btn-secondary-holistic">
                <i class="bi bi-compass me-2"></i>
                <span>Scopri di Più</span>
            </a>
        </div>
        <br>
        <h2 style="font-size: clamp(0.85rem, 1.3vw, 1.2rem);" 
            data-aos="fade-up" 
            data-aos-delay="500">
            di Paola Boselli
        </h2>
    </div>
</section>

