<!-- Loading Overlay -->
<div class="loading-overlay" id="loadingOverlay">
    <div class="loading-spinner"></div>
</div>

<!-- Scroll Progress Indicator -->
<div class="scroll-indicator">
    <div class="scroll-progress" id="scrollProgress"></div>
</div>

<!-- Enhanced Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#home">
            <div class="logo-container">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Paola Boselli Logo" class="logo-image">
                <span>Paola Counselor</span>
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#chi-sono">Chi Sono</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servizi">Servizi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#approccio">Approccio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contatti">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section 
<section id="home" class="hero">
    <div class="hero-content font-dm-serif">
        <h1>
            <span style="font-size: clamp(3.2rem, 6vw, 5rem);">Counseling</span> <br> 
            <span class="gradient-text">Olistico & Mindfulness</span> <br>
            <span style="font-size: clamp(3.2rem, 6vw, 5rem);">Coaching</span>
        </h1>
        <p class="hero-subtitle font-dancing" style="font-size:clamp(1.8rem, 4vw, 2.5rem); color: var(--primary-sage); font-size: 800;" data-aos="fade-up" data-aos-delay="300">"per favorire il Benessere Autentico"</p>
        <h2 style="font-size: clamp(1rem, 2vw, 1.5rem);">di Paola Boselli</h2>
        <br>
        <p class="hero-tagline font-lora">Accompagno persone a ritrovare equilibrio, motivazione e direzione. A sentirsi meglio con sé stesse e a riconnettersi con la propria verità profonda.</p>
        <div class="cta-buttons" data-aos="fade-up" data-aos-delay="700">
            <a href="#contatti" class="btn btn-primary-holistic">
                <i class="bi bi-heart-fill me-2"></i>
                Iniziamo Insieme
            </a>
            <a href="#servizi" class="btn btn-secondary-holistic">
                <i class="bi bi-compass me-2"></i>
                Scopri di Più
            </a>
        </div>
    </div>
</section>
-->

<!-- Alternative Hero Section -->
<section id="home" class="alt-hero">
    <div class="alt-hero-content font-dm-serif">
        <h1 >
            <span>Counseling</span>  
            <span class="gradient-text">Olistico & Mindfulness</span> 
            <span>Coaching</span>
        </h1>
        <p class="alt-hero-subtitle font-dancing" style="font-size:clamp(1.8rem, 4vw, 2.5rem); color: var(--primary-sage); font-size: 800;" data-aos="fade-up" data-aos-delay="300">"per favorire il tuo Benessere più Autentico"</p>
        <h2 style="font-size: clamp(1rem, 2vw, 1.5rem);">di Paola Boselli</h2>
        <br>
        <div class="cta-buttons" data-aos="fade-up" data-aos-delay="700">
            <a href="#contatti" class="btn btn-primary-holistic">
                <i class="bi bi-heart-fill me-2"></i>
                Iniziamo Insieme
            </a>
            <a href="#servizi" class="btn btn-secondary-holistic">
                <i class="bi bi-compass me-2"></i>
                Scopri di Più
            </a>
        </div>
    </div>
</section>

<!-- Chi Sono Section -->
<section id="chi-sono" class="chi-sono-section py-5">
    <div class="container">
        <h2 class="section-title mb-5" data-aos="fade-up">Chi Sono</h2>
        
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Image Column -->
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                <div class="chi-sono-image-container position-relative">
                    <div class="image-frame">
                        <img src="{{ Vite::asset('resources/images/avatar.png') }}" 
                             alt="Paola Boselli - Counselor Olistico" 
                             class="chi-sono-image img-fluid rounded-3 shadow-lg"
                             style="width: 100%; height: 400px; object-fit: cover;"
                             data-aos="zoom-in" 
                             data-aos-delay="400">
                    </div>
                    <div class="floating-quote position-absolute bottom-0 start-0 translate-middle-x mb-n3" 
                         data-aos="fade-up" data-aos-delay="600">
                        <div class="bg-white p-3 rounded-3 shadow text-center" style="max-width: 280px;">
                            <p class="floating-quote-text font-dancing mb-0" style="font-size: 1.1rem;">
                                "Il cambiamento inizia dall'ascolto profondo di sé"
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
                        Ciao, sono <span class="gradient-text">Paola Boselli</span>
                    </h3>
                    
                    <div class="chi-sono-text" data-aos="fade-up" data-aos-delay="500">
                        <p class="lead mb-4">
                            Counselor Professionale specializzata in approccio olistico e Mindfulness, 
                            accompagno persone nel loro percorso di crescita personale e benessere autentico.
                        </p>
                        
                        <p class="mb-4">
                            La mia formazione unisce psicologia umanistica, tecniche di meditazione orientali 
                            e pratiche di consapevolezza corporea. Credo profondamente che ogni persona 
                            possieda già dentro di sé tutte le risorse necessarie per stare bene: 
                            il mio ruolo è quello di creare uno spazio sicuro dove queste risorse 
                            possano emergere naturalmente.
                        </p>
                        
                        <p class="mb-4">
                            Ho scelto questo percorso professionale dopo aver vissuto in prima persona 
                            la potenza trasformativa dell'ascolto autentico e della presenza consapevole. 
                            Ogni sessione è un viaggio unico, fatto di rispetto, gentilezza e profonda umanità.
                        </p>
                    </div>
                    
                    <!-- Qualifications -->
                    <div class="qualifications mb-4" data-aos="fade-up" data-aos-delay="600">
                        <h4 class="font-playfair mb-3">Formazione & Certificazioni</h4>
                        <div class="qualification-item d-flex align-items-center mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span>Diploma in Counseling Professionale (Scuola Superiore Europea)</span>
                        </div>
                        <div class="qualification-item d-flex align-items-center mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span>Certificazione Mindfulness Based Stress Reduction (MBSR)</span>
                        </div>
                        <div class="qualification-item d-flex align-items-center mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span>Master in Life & Goal Coaching</span>
                        </div>
                        <div class="qualification-item d-flex align-items-center mb-2">
                            <i class="bi bi-award-fill text-primary me-3"></i>
                            <span>Formazione continua in Terapie Olistiche</span>
                        </div>
                    </div>
                    
                    <!-- CTA Button -->
                    <div class="chi-sono-cta" data-aos="fade-up" data-aos-delay="700">
                        <a href="#contatti" class="btn btn-primary-holistic">
                            <i class="bi bi-chat-heart me-2"></i>
                            Parliamone Insieme
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Values Section -->
        <div class="values-section mt-5 pt-4" data-aos="fade-up" data-aos-delay="800">
            <h4 class="font-playfair text-center mb-4">I Miei Valori</h4>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="value-card text-center p-4 h-100 rounded-3">
                        <div class="value-icon mb-3">
                            <i class="bi bi-heart fs-1 text-primary"></i>
                        </div>
                        <h5 class="font-playfair mb-3">Autenticità</h5>
                        <p class="mb-0">Essere veri con sé stessi è il primo passo verso il benessere</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="1000">
                    <div class="value-card text-center p-4 h-100 rounded-3">
                        <div class="value-icon mb-3">
                            <i class="bi bi-shield-check fs-1 text-primary"></i>
                        </div>
                        <h5 class="font-playfair mb-3">Rispetto</h5>
                        <p class="mb-0">Ogni persona ha i suoi tempi e il suo modo unico di crescere</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="1100">
                    <div class="value-card text-center p-4 h-100 rounded-3">
                        <div class="value-icon mb-3">
                            <i class="bi bi-infinity fs-1 text-primary"></i>
                        </div>
                        <h5 class="font-playfair mb-3">Crescita</h5>
                        <p class="mb-0">Il cambiamento è un processo continuo di scoperta e evoluzione</p>
                    </div>
                </div>
            </div>
        </div>

<style>
/* Simple background color change for value cards */
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

<!-- Enhanced Services Section -->
<section id="servizi" class="services-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Servizi</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h3 class="service-title">Sessioni di Counseling</h3>
                    <p class="service-description">
                        Percorsi individuali in presenza o online per ritrovare equilibrio e chiarezza nei momenti di confusione.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3 class="service-title">Life & Goal Coaching</h3>
                    <p class="service-description">
                        Supporto concreto per il raggiungimento dei tuoi obiettivi e per allineare le azioni al tuo scopo.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-peace"></i>
                    </div>
                    <h3 class="service-title">Mindfulness & Meditazione</h3>
                    <p class="service-description">
                        Tecniche di rilassamento e meditazione guidata per gestire stress e ansia con strumenti pratici.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-flower1"></i>
                    </div>
                    <h3 class="service-title">Crescita Personale</h3>
                    <p class="service-description">
                        Percorsi personalizzati per sviluppare autostima, consapevolezza e sciogliere blocchi emotivi.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 class="service-title">Terapia di Coppia</h3>
                    <p class="service-description">
                        Supporto per migliorare la comunicazione e rafforzare i legami nelle relazioni di coppia.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h3 class="service-title">Consulenza Personalizzata</h3>
                    <p class="service-description">
                        Percorsi su misura per le tue esigenze specifiche. Contattami per scoprire tutti i servizi disponibili.
                    </p>
                    <div class="service-cta mt-3"></div>
                        <a href="#contatti" class="btn btn-secondary-holistic">
                            <i class="bi bi-chat-dots me-2"></i>
                            Parlane con me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced About/Approach Section -->
<section id="approccio" class="about-section">
    <!-- Holistic Pattern Background -->
    <div class="holistic-pattern"></div>
    
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Il Mio Approccio</h2>
        <div class="about-content">
            <div class="about-text" data-aos="fade-right">
                <h3 class="font-playfair mb-3">Un aiuto per:</h3>
                <ul class="benefits-list">
                    <li data-aos="fade-up" data-aos-delay="100">Sentirsi meglio con sé stessi</li>
                    <li data-aos="fade-up" data-aos-delay="200">Stare meglio con gli altri, nelle relazioni sia personali che professionali</li>
                    <li data-aos="fade-up" data-aos-delay="300">Riconoscere e gestire in positivo emozioni e bisogni</li>
                    <li data-aos="fade-up" data-aos-delay="400">Sviluppare autostima e consapevolezza personale</li>
                    <li data-aos="fade-up" data-aos-delay="500">Allineare mente, corpo e spirito con i tuoi valori</li>
                    <li data-aos="fade-up" data-aos-delay="600">Praticare tecniche di Mindfulness</li>
                </ul>
            </div>
            <div class="about-highlight" data-aos="fade-left">
                <h4 class="font-playfair mb-3">La Mia Filosofia</h4>
                <p class="mb-3">
                    <strong>Accogliente, non giudicante, empatico</strong><br>
                    Orientato al presente, ma radicato nella tua storia<br>
                    Basato sull'ascolto profondo, sul respiro, sulla presenza
                </p>
                <p class="mb-3">
                    Il cambiamento non è un salto nel vuoto. È un ritorno a casa. Dentro di te. Con amore, presenza, verità.
                </p>
                
                <!-- Enhanced Quote Card -->
                <div class="philosophy-quote">
                    <div class="quote-decoration">
                        <i class="bi bi-quote"></i>
                    </div>
                    <p class="font-dancing">
                        Sii gentile con la tua parte scomoda.<br>
                        Non è un errore da correggere,<br>
                        ma una voce da ascoltare.
                    </p>
                    <div class="quote-decoration-end">
                        <i class="bi bi-quote"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Enhanced About Section with Holistic Pattern */
.about-section {
    padding: 100px 0;
    background: linear-gradient(135deg, rgba(230, 230, 250, 0.3) 0%, rgba(255, 127, 127, 0.1) 100%);
    position: relative;
    overflow: hidden;
}

/* Holistic Sacred Geometry Pattern */
.holistic-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.08;
    background-image: 
        radial-gradient(circle at 20% 50%, rgba(143, 188, 143, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255, 127, 127, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(222, 184, 135, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(230, 230, 250, 0.3) 0%, transparent 50%),
        repeating-linear-gradient(
            0deg,
            transparent,
            transparent 100px,
            rgba(143, 188, 143, 0.05) 100px,
            rgba(143, 188, 143, 0.05) 101px
        ),
        repeating-linear-gradient(
            90deg,
            transparent,
            transparent 100px,
            rgba(143, 188, 143, 0.05) 100px,
            rgba(143, 188, 143, 0.05) 101px
        );
    pointer-events: none;
}

.holistic-pattern::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 500px;
    background: 
        radial-gradient(circle, transparent 30%, rgba(143, 188, 143, 0.1) 31%, transparent 32%),
        radial-gradient(circle, transparent 50%, rgba(222, 184, 135, 0.1) 51%, transparent 52%),
        radial-gradient(circle, transparent 70%, rgba(255, 127, 127, 0.1) 71%, transparent 72%);
    animation: rotate 60s linear infinite;
}

.holistic-pattern::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(45deg);
    width: 400px;
    height: 400px;
    background: 
        linear-gradient(45deg, transparent 48%, rgba(143, 188, 143, 0.1) 49%, rgba(143, 188, 143, 0.1) 51%, transparent 52%),
        linear-gradient(-45deg, transparent 48%, rgba(255, 127, 127, 0.1) 49%, rgba(255, 127, 127, 0.1) 51%, transparent 52%);
    animation: rotate -40s linear infinite;
}

@keyframes rotate {
    from { transform: translate(-50%, -50%) rotate(0deg); }
    to { transform: translate(-50%, -50%) rotate(360deg); }
}

/* Enhanced Content Styling */
.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: start;
    position: relative;
    z-index: 2;
}

.about-text {
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(143, 188, 143, 0.2);
}

.about-text h3 {
    color: var(--deep-forest);
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #4a9d5f 0%, #d85652 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.benefits-list {
    list-style: none;
    padding: 0;
}

.benefits-list li {
    padding: 1rem 0 1rem 3rem;
    position: relative;
    font-size: 1.1rem;
    color: var(--deep-forest);
    border-bottom: 1px solid rgba(143, 188, 143, 0.1);
    transition: all 0.3s ease;
}

.benefits-list li:last-child {
    border-bottom: none;
}

.benefits-list li::before {
    content: '';
    position: absolute;
    left: 0;
    width: 20px;
    height: 20px;
    background: linear-gradient(135deg, #4a9d5f 0%, #d85652 100%);
    border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
    top: 50%;
    transform: translateY(-50%);
}

.benefits-list li:nth-child(odd)::before {
    background: linear-gradient(135deg, #8fbc8f 0%, #deb887 100%);
}

.benefits-list li:nth-child(even)::before {
    background: linear-gradient(135deg, #ff7f7f 0%, #e6e6fa 100%);
}

@keyframes pulse {
    0%, 100% { 
        transform: translateY(-50%) scale(1); 
        box-shadow: 0 0 0 0 rgba(143, 188, 143, 0.4);
    }
    50% { 
        transform: translateY(-50%) scale(1.1); 
        box-shadow: 0 0 20px 5px rgba(143, 188, 143, 0.2);
    }
}

.benefits-list li:hover {
    padding-left: 3.5rem;
    background: linear-gradient(90deg, rgba(143, 188, 143, 0.1) 0%, transparent 100%);
}

.about-highlight {
    background: rgba(255, 255, 255, 0.8);
    padding: 2.5rem;
    border-radius: 20px;
    border-left: 4px solid var(--accent-coral);
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.about-highlight h4 {
    color: var(--deep-forest);
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #d85652 0%, #4a9d5f 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.about-highlight p {
    color: var(--deep-forest);
    line-height: 1.8;
    font-size: 1.05rem;
}

/* Enhanced Philosophy Quote Card */
.philosophy-quote {
    margin-top: 2rem;
    padding: 2rem;
    background: linear-gradient(135deg, 
        rgba(143, 188, 143, 0.15) 0%, 
        rgba(255, 127, 127, 0.1) 50%,
        rgba(222, 184, 135, 0.15) 100%);
    border-radius: 20px;
    border: 2px solid rgba(143, 188, 143, 0.3);
    position: relative;
    text-align: center;
    box-shadow: 
        0 10px 30px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(5px);
}

.philosophy-quote::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(135deg, #4a9d5f, #d85652, #deb887, #4a9d5f);
    border-radius: 20px;
    opacity: 0.3;
    z-index: -1;
    animation: gradient-border 4s ease-in-out infinite;
}

@keyframes gradient-border {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 0.6; }
}

.quote-decoration {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 2rem;
    color: rgba(143, 188, 143, 0.3);
    transform: rotate(180deg);
}

.quote-decoration-end {
    position: absolute;
    bottom: 10px;
    right: 20px;
    font-size: 2rem;
    color: rgba(255, 127, 127, 0.3);
}

.philosophy-quote p {
    font-size: 1.6rem !important;
    line-height: 1.6 !important;
    color: var(--deep-forest) !important;
    font-weight: 500;
    text-shadow: 
        1px 1px 2px rgba(255, 255, 255, 0.8),
        -1px -1px 2px rgba(255, 255, 255, 0.8);
    margin: 1.5rem 0;
    position: relative;
    z-index: 1;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .about-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .about-text,
    .about-highlight {
        padding: 1.5rem;
    }
    
    .philosophy-quote p {
        font-size: 1.3rem !important;
    }
    
    .holistic-pattern::before,
    .holistic-pattern::after {
        width: 300px;
        height: 300px;
    }
}
</style>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Testimonianze</h2>
        <div class="swiper testimonials-swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-text">
                            "Paola mi ha aiutato a ritrovare la fiducia in me stessa. Il suo approccio gentile e non giudicante ha fatto la differenza."
                        </p>
                        <div class="testimonial-author">
                            — Maria, 34 anni
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-text">
                            "Le tecniche di mindfulness che ho imparato hanno trasformato il mio rapporto con lo stress quotidiano."
                        </p>
                        <div class="testimonial-author">
                            — Andrea, 28 anni
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-text">
                            "Un percorso che ha cambiato profondamente la mia vita. Grazie per la tua presenza autentica."
                        </p>
                        <div class="testimonial-author">
                            — Giulia, 41 anni
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Enhanced Contact Section -->
<section id="contatti" class="contact-section" style="position: relative; background: url('{{ Vite::asset('resources/images/hero-4.jpg') }}') center center/cover no-repeat;"> 
    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.65); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="contact-content">
            <h2 class="contact-title" data-aos="fade-up">Iniziamo Insieme</h2>
            <p class="contact-description" data-aos="fade-up" data-aos-delay="200">
                Sei pronto a iniziare il tuo percorso di crescita e benessere? Contattami per una consulenza gratuita.
            </p>
            
            <!--
            <div class="contact-info" data-aos="fade-up" data-aos-delay="400">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div>
                        <h4>Telefono</h4>
                        <p>+39 123 456 7890</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p>info@paolacounselor.it</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <h4>Dove</h4>
                        <p>Online & Pavia</p>
                    </div>
                </div>
            </div>
            -->

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="600">
                <div class="col-lg-6">
                    <!-- Social Media Links -->
                    <div class="social-connect text-center">
                        <!-- <h3 class="mb-4" style="color: white; font-family: 'Playfair Display', serif;">Connettiti con Me</h3> -->
                        
                        <div class="social-grid mb-4">
                            <a href="#" class="social-card whatsapp">
                                <i class="bi bi-whatsapp"></i>
                                <span>WhatsApp</span>
                                <small>Messaggi diretti</small>
                            </a>
                            
                            <a href="#" class="social-card instagram">
                                <i class="bi bi-instagram"></i>
                                <span>Instagram</span>
                                <small>@paolacounselor</small>
                            </a>
                            
                            <a href="#" class="social-card facebook">
                                <i class="bi bi-facebook"></i>
                                <span>Facebook</span>
                                <small>Seguimi</small>
                            </a>

                            <a href="#" class="social-card envelope">
                                <i class="bi bi-envelope"></i>
                                <span>Email</span>
                                <small>boselli.paola@gmail.com</small>
                            </a>
                        </div>
                        
                        <br>

                        <!-- Call to Action Buttons -->
                        <div class="cta-buttons justify-content-center">
                            <a href="https://calendly.com/tuoprofilo" class="btn btn-secondary-holistic">
                                <i class="bi bi-calendar-check me-2"></i>
                                Prenota una chiamata con me
                            </a>
                        </div>
                        
                        <br>

                        <!-- Newsletter Signup -->
                        <div class="newsletter-box mt-4">
                            <p style="color: white; opacity: 0.9;">
                                <i class="bi bi-envelope-heart me-2"></i>
                                Ricevi consigli settimanali sul benessere
                            </p>
                            <a href="#" class="btn btn-outline-light">
                                Iscriviti alla Newsletter
                            </a>
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

.social-card.facebook:hover {
    background: rgba(24, 119, 242, 0.3);
    border-color: #1877F2;
}

.social-card.envelope:hover {
    background: rgba(219, 68, 55, 0.3);
    border-color: grey;
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
}

@media (max-width: 768px) {
    .social-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- Enhanced Footer -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div>
                <img src="{{ Vite::asset('resources/images/logo.png') }}" 
                     alt="Paola Boselli" 
                     class="logo-image">
            </div>
            <div class="footer-logo">Paola Counselor</div>
            <p class="footer-description">
                Accompagno persone verso il benessere autentico attraverso un approccio olistico che unisce mente, corpo e spirito.
            </p>
            <div class="social-links">
                <a href="#" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#" aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#" aria-label="envelope">
                    <i class="bi bi-envelope"></i>
                </a>
            </div>
        </div>
        <div class="footer-divider"></div>
        <div class="footer-copyright">
            <p>2025 Paola Counselor | Counseling Olistico & Mindfulness Coaching</p>
            <p>Landing powered by <a href="https://alpacode.studio" style="text-decoration: none; color:wheat;">alpacode.studio</a></p>
        </div>
    </div>
</footer>

<!-- Floating Action Button -->
<div class="floating-btn" id="backToTop">
    <i class="bi bi-arrow-up"></i>
</div>