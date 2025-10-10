<!-- Enhanced Chi Sono Section -->
<section id="chi-sono" class="chi-sono-section py-5">
    <div class="container">
        <h2 class="section-title mb-5" data-aos="fade-up">Chi Sono</h2>
        
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Image Column -->
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                <div class="chi-sono-image-container position-relative">
                    <div class="image-frame">
                        <img src="{{ Vite::asset('resources/images/avatar.png') }}" 
                             alt="Paola Boselli - Counselor Mindfulness e Coach Olistico Professionale" 
                             class="chi-sono-image img-fluid rounded-3 shadow-lg"
                             style="width: 100%; height: 400px; object-fit: cover;"
                             data-aos="zoom-in" 
                             data-aos-delay="400">
                    </div>
                    <div class="floating-quote position-absolute bottom-0 start-0 translate-middle-x mb-n3" 
                         data-aos="fade-up" data-aos-delay="600">
                        <div class="bg-white p-3 rounded-3 shadow text-center" style="max-width: 280px;">
                            <p class="floating-quote-text font-dancing mb-0" style="font-size: 1.1rem;">
                                "Insieme, ritroviamo il centro"
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .floating-quote-text {
                    font-size: 1.8rem;
                    background: linear-gradient(180deg, rgb(255, 255, 255) 0%, rgba(247, 218, 52, 0.918) 100%);
                    text-shadow: 0 2px 16px rgba(74, 157, 95, 0.18), 0 1px 0 rgba(0,0,0,0.08);
                    border-radius: 10px;
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
                        font-size: 1.4rem !important;
                    }
                }

                @media (max-width: 576px) {
                    .floating-quote .bg-white {
                        max-width: 220px !important;
                        padding: 12px !important;
                    }
                    
                    .floating-quote-text {
                        font-size: 1.2rem !important;
                    }
                }
            </style>
            
            <!-- Content Column -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                <div class="chi-sono-content ps-lg-4">
                    <h3 class="font-playfair mb-4" data-aos="fade-up" data-aos-delay="400">
                        Ciao, sono <span class="fw-light" style="">Paola Boselli</span>
                    </h3>
                    
                    <div class="chi-sono-text" data-aos="fade-up" data-aos-delay="500">
                        <p class="lead mb-4">
                            Counselor e Coach professionale, specializzata in Mindfulness, tecniche olistiche e approccio sistemico. 
                            <strong>Nel mio lavoro aiuto le persone a stare meglio</strong> a livello psico-fisico ed emotivo.
                        </p>
                        
                        <p class="mb-4">
                            Facilito la gestione di ansia, stress, preoccupazioni e difficoltà relazionali, supportando 
                            il percorso verso maggiore sicurezza e consapevolezza delle proprie risorse interne. 
                            Il mio approccio accompagna nel raggiungimento di obiettivi concreti - dal benessere fisico 
                            alle prestazioni professionali e sportive - attraverso motivazione e metodo strutturato.
                        </p>
                        
                        <p class="mb-4">
                            L'approccio olistico e sistemico considera la persona nella sua completezza: corpo, mente, 
                            spirito, emozioni ed energie sono interconnessi e inseriti in un sistema di relazioni - 
                            famiglia, coppia, ambiente lavorativo, comunità. Questa visione integrata permette 
                            trasformazioni autentiche e durature.
                        </p>

                        <p class="mb-4">
                            <strong>Credo profondamente che stare e sentirsi bene sia assolutamente possibile.</strong> 
                            Nel mio spazio non esistono giudizi. Solo accoglienza autentica, ascolto vero, rispetto profondo.
                        </p>
                    </div>
                    
                    <!-- Qualifications -->
                    <div class="qualifications mb-4" data-aos="fade-up" data-aos-delay="600">
                        <h4 class="font-playfair mb-3">Formazione & Specializzazioni</h4>
                        <div class="qualification-item d-flex align-items-center mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span>Counselor Professionale specializzata in Mindfulness</span>
                        </div>
                        <div class="qualification-item d-flex align-items-center mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span>Approccio Sistemico e Tecniche Olistiche</span>
                        </div>
                        <div class="qualification-item d-flex align-items-center mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span>Coach Professionale per Performance e Benessere</span>
                        </div>
                        <div class="qualification-item d-flex align-items-center mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span>Psicologia Umanistica e Pratiche Orientali</span>
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
        
        <!-- Enhanced Values Section 
        <div class="values-section mt-5 pt-4" data-aos="fade-up" data-aos-delay="800">
            <h4 class="font-playfair text-center mb-4">I Miei Valori Fondamentali</h4>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="value-card text-center p-4 h-100 rounded-3">
                        <div class="value-icon mb-3">
                            <i class="bi bi-heart fs-1 text-primary"></i>
                        </div>
                        <h5 class="font-playfair mb-3">Accoglienza Autentica</h5>
                        <p class="mb-0">Creo un ambiente libero da giudizi dove ogni persona è accolta con rispetto genuino e considerazione positiva incondizionata</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="1000">
                    <div class="value-card text-center p-4 h-100 rounded-3">
                        <div class="value-icon mb-3">
                            <i class="bi bi-infinity fs-1 text-primary"></i>
                        </div>
                        <h5 class="font-playfair mb-3">Integrazione Olistica</h5>
                        <p class="mb-0">Il vero benessere emerge dall'equilibrio armonioso di corpo, mente, spirito nel contesto delle relazioni</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="1100">
                    <div class="value-card text-center p-4 h-100 rounded-3">
                        <div class="value-icon mb-3">
                            <i class="bi bi-peace fs-1 text-primary"></i>
                        </div>
                        <h5 class="font-playfair mb-3">Presenza Mindful</h5>
                        <p class="mb-0">Coltivo la consapevolezza in ogni momento come fondamento per trasformazioni personali durature</p>
                    </div>
                </div>
            </div>
        </div> -->

        <style>
        /* Enhanced value cards with holistic theme */
        .value-card {
            background: linear-gradient(135deg, 
                rgba(143, 188, 143, 0.15) 0%,    /* Sage green */
                rgba(222, 184, 135, 0.10) 100%);  /* Earth tone */
            border: 1px solid rgba(143, 188, 143, 0.2);
            transition: all 0.3s ease;
        }

        .value-card:hover {
            background: linear-gradient(135deg, 
                rgba(143, 188, 143, 0.25) 0%, 
                rgba(222, 184, 135, 0.20) 100%);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(143, 188, 143, 0.15);
        }
        </style>
    </div>
</section>