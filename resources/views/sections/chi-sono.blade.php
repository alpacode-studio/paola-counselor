<!-- Enhanced Chi Sono Section with Optimized Typography -->
<section id="chi-sono" class="chi-sono-section py-5">
    <div class="container">
        <h2 class="section-title mb-4" data-aos="fade-up">Chi Sono</h2>
        
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Image Column -->
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                <div class="chi-sono-image-container position-relative">
                    <div class="image-frame">
                        <img src="{{ Vite::asset('resources/images/about.jpeg') }}" 
                             alt="Paola Boselli - Counselor Mindfulness e Coach Olistico Professionale" 
                             class="chi-sono-image img-fluid rounded-3 shadow-lg"
                             data-aos="zoom-in" 
                             data-aos-delay="400">
                    </div>
                    <!--
                    <div class="floating-quote position-absolute bottom-0 start-0 translate-middle-x mb-n3" 
                         data-aos="fade-up" data-aos-delay="600">
                        <div class="bg-white p-3 rounded-3 shadow text-center" style="max-width: 280px;">
                            <p class="floating-quote-text font-dancing mb-0">
                                "Insieme, ritroviamo il centro"
                            </p>
                        </div>
                    </div>
                    -->
                </div>
            </div>

            <style>
                .floating-quote-text {
                    font-size: clamp(1.2rem, 3vw, 1.5rem);
                    color: var(--primary-sage);
                }

                @media (max-width: 768px) {
                    .floating-quote {
                        position: static !important;
                        transform: none !important;
                        margin: 20px auto 0 auto !important;
                        display: flex;
                        justify-content: center;
                    }
                    
                    .floating-quote .bg-white {
                        max-width: 250px !important;
                        padding: 15px !important;
                    }
                    
                    .floating-quote-text {
                        font-size: 1.2rem !important;
                    }
                }

                @media (max-width: 576px) {
                    .floating-quote .bg-white {
                        max-width: 220px !important;
                        padding: 12px !important;
                    }
                    
                    .floating-quote-text {
                        font-size: 1.1rem !important;
                    }
                }
                
                /* Landscape mobile - hide floating quote */
                @media (max-height: 500px) and (orientation: landscape) {
                    .floating-quote {
                        display: none !important;
                    }
                }
            </style>
            
            <!-- Content Column -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                <div class="chi-sono-content ps-lg-4">
                    <h3 class="chi-sono-greeting mb-3" data-aos="fade-up" data-aos-delay="400">
                        Ciao, sono <span style="font-weight: 600; font-style: oblique;">Paola Boselli</span>
                    </h3>
                    
                    <div class="chi-sono-text text-justify" data-aos="fade-up" data-aos-delay="500">
                        <p class="lead mb-3" style="font-size: clamp(1rem, 2vw, 1.1rem); ">
                            Counselor e Coach professionale, specializzata in Mindfulness, tecniche olistiche e approccio sistemico. 
                            <strong>Nel mio lavoro aiuto le persone a stare meglio</strong> a livello psico-fisico ed emotivo.
                        </p>
                        
                        <p class="mb-3" style="font-size: 1rem; line-height: 1.7; ">
                            Facilito la gestione e riduzione di ansia, stress, preoccupazioni e difficoltà relazionali, supportando 
                            il percorso verso maggiore sicurezza e consapevolezza delle proprie risorse interne. 
                            Il mio approccio accompagna nel raggiungimento di obiettivi concreti - dal benessere fisico 
                            alle prestazioni professionali e sportive - attraverso motivazione e metodo strutturato.
                        </p>
                        
                        <p class="mb-3" style="font-size: 1rem; line-height: 1.7; ">
                            L'approccio olistico e sistemico considera la persona nella sua completezza: corpo, mente, 
                            spirito, emozioni ed energie tra loro interconnessi e inseriti in un sistema di relazioni - 
                            famiglia, coppia, ambiente lavorativo, comunità. Questa visione integrata permette 
                            trasformazioni autentiche e durature.
                        </p>

                        <p class="mb-3" style="font-size: 1rem; line-height: 1.7; ">
                            <strong>Credo profondamente che stare e sentirsi bene sia assolutamente possibile.</strong> 
                            Nel mio spazio non esistono giudizi. Solo accoglienza autentica, ascolto vero, rispetto profondo.
                        </p>
                    </div>
                    
                    <!-- Qualifications -->
                    <div class="qualifications mb-4" data-aos="fade-up" data-aos-delay="600">
                        <h4 class="qualifications-title mb-3">Formazione & Specializzazioni</h4>
                        <div class="qualification-item d-flex align-items-left mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span style="font-size: 0.95rem;">Certificazione professionale in Counseling (Associazione Professionale di categoria_Assocounseling e
Accredia)</span>
                        </div>
                        <div class="qualification-item d-flex align-items-left mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span style="font-size: 0.95rem;">Diploma professionale in Coaching Relazionale e Sistemico (Associazione Italiana Coach Professionisti_AICP)</span>
                        </div>
                        <div class="qualification-item d-flex align-items-left mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span style="font-size: 0.95rem;">Certificazione Mindfulness Based Stress Reduction (MBSR)</span>
                        </div>
                        <div class="qualification-item d-flex align-items-left mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span style="font-size: 0.95rem;">Formazione continua in Terapie Olistiche</span>
                        </div>
                    </div>
                    
                    <!-- CTA Button -->
                    <div class="chi-sono-cta" data-aos="fade-up" data-aos-delay="700">
                        <a href="#contatti" class="btn btn-primary-holistic">
                            <i class="bi bi-chat-heart me-2"></i>
                            Prenota la Tua Prima Sessione
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Chi Sono Section Typography */
.chi-sono-section {
    padding: 80px 0;
    background: var(--warm-cream);
}

.chi-sono-greeting {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.3rem, 3vw, 1.6rem);
    color: var(--deep-forest);
}

.chi-sono-text {
    hyphens: none;
    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    word-break: normal;
    overflow-wrap: normal;
}

.chi-sono-text p {
    text-align: justify !important;
}

.qualifications-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.1rem, 2.5vw, 1.3rem);
    color: var(--deep-forest);
    font-weight: 600;
}

.chi-sono-image-container {
    position: relative;
}

.chi-sono-image {
    width: 100%; 
    height: 800px; 
    object-fit: cover;
}

/* Mobile Optimizations */
@media (max-width: 768px) {
    .chi-sono-section {
        padding: 60px 0;
    }
    
    .chi-sono-greeting {
        font-size: 1.4rem;
        text-align: center;
    }
    
    .chi-sono-text p {
        font-size: 0.95rem !important;
    }

    .chi-sono-image {
        width: 100%; 
        height: 400px; 
        object-fit: cover;
    }
    
    .qualifications-title {
        font-size: 1.15rem;
        text-align: center;
    }
    
    .qualification-item {
    }
    
    .chi-sono-cta {
        text-align: center;
    }
}

@media (max-width: 480px) {
    .chi-sono-greeting {
        font-size: 1.25rem;
    }
    
    .chi-sono-text p {
        font-size: 0.9rem !important;
        line-height: 1.6 !important;
    }
    
    .qualification-item span {
        font-size: 0.85rem !important;
    }
}

/* Landscape mobile */
@media (max-height: 500px) and (orientation: landscape) {
    .chi-sono-section {
        padding: 50px 0;
    }
    
    .chi-sono-image-container {
        display: none;
    }
}
</style>