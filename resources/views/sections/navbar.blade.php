<!-- Enhanced Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#home">
            <div class="logo-container">
                <div class="logo-wrapper">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Paola Boselli Counselor Mindfulness" class="logo-image">
                    <div class="logo-glow"></div>
                </div>
                <div class="brand-text">
                    <span class="brand-name">Paola Boselli</span>
                    <span class="brand-subtitle">Counselor & Coach</span>
                </div>
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">
                        <i class="bi bi-house-heart me-1"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#chi-sono">
                        <i class="bi bi-person-heart me-1"></i>
                        <span>Chi Sono</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servizi">
                        <i class="bi bi-heart-pulse me-1"></i>
                        <span>Servizi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#approccio">
                        <i class="bi bi-compass me-1"></i>
                        <span>Approccio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contatti">
                        <i class="bi bi-chat-heart me-1"></i>
                        <span>Contatti</span>
                    </a>
                </li>
                <li class="nav-item nav-cta">
                    <a class="nav-link cta-link" href="#contatti">
                        <i class="bi bi-calendar-heart me-1"></i>
                        <span>Prenota</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Updated brand text styling for centered multi-line layout */
.brand-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    line-height: 1.1;
    margin-left: 0.5rem;
}

.brand-name {
    font-family: var(--font-serif);
    font-size: 1.6rem;
    font-weight: 700;
    color: var(--deep-forest);
    transition: all 0.3s ease;
    display: block;
    margin-bottom: 0.1rem;
}

.brand-subtitle {
    font-family: var(--font-primary);
    font-size: 0.75rem;
    color: var(--primary-sage);
    font-weight: 500;
    opacity: 0.9;
    display: block;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

/* Logo container adjustments */
.logo-container {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

/* Mobile responsiveness for brand text */
@media (max-width: 991.98px) {
    .brand-text {
        display: none; /* Hide on mobile to save space */
    }
    
    .logo-wrapper {
        width: 45px;
        height: 45px;
    }
}

@media (max-width: 576px) {
    .navbar {
        padding: 0.75rem 0;
    }
    
    .logo-wrapper {
        width: 40px;
        height: 40px;
    }
}

/* Medium screens - smaller brand text */
@media (max-width: 1200px) {
    .brand-name {
        font-size: 1.4rem;
    }
    
    .brand-subtitle {
        font-size: 0.7rem;
    }
}

/* Hover effects */
.navbar-brand:hover .brand-name {
    color: var(--primary-sage);
}

.navbar-brand:hover .brand-subtitle {
    opacity: 1;
}
</style>