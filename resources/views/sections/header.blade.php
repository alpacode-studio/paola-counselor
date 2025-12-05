{{-- resources/views/partials/header.blade.php --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-clean" id="cleanNavbar">
    <div class="container">
        {{-- Brand --}}
        <a class="navbar-brand d-flex align-items-center" href="#home">
            <div class="logo-circle me-3">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Paola Boselli" class="logo-img">
            </div>
            <div class="brand-text">
                <div class="brand-name">Paola Boselli</div>
                <div class="brand-subtitle">Counselor & Coach</div>
            </div>
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" 
                aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-line"></span>
            <span class="toggler-line"></span>
            <span class="toggler-line"></span>
        </button>
        
        {{-- Navigation --}}
        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://benessereconpaola.it">
                        <i class="bi bi-house-heart"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#chi-sono">
                        <i class="bi bi-person-heart"></i>
                        <span>Chi Sono</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servizi">
                        <i class="bi bi-heart-pulse"></i>
                        <span>Servizi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#approccio">
                        <i class="bi bi-compass"></i>
                        <span>Approccio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contatti">
                        <i class="bi bi-chat-heart"></i>
                        <span>Contatti</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* COMPLETELY ISOLATED NAVBAR STYLES */
.navbar-clean {
    background: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(15px);
    border-bottom: 1px solid rgba(143, 188, 143, 0.1);
    padding: 1rem 0;
    transition: all 0.3s ease;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
    z-index: 1050;
}

.navbar-clean.scrolled {
    background: rgba(255, 255, 255, 0.98) !important;
    padding: 0.75rem 0;
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.12);
}

/* Logo Styling */
.navbar-clean .logo-circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    transition: transform 0.3s ease;
}

.navbar-clean .logo-circle:hover {
    transform: scale(1.05);
}

.navbar-clean .logo-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.navbar-clean .brand-text {
    line-height: 1.1;
}

.navbar-clean .brand-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d4a2d;
    margin-bottom: 0;
}

.navbar-clean .brand-subtitle {
    font-family: 'Playfair Display', serif;
    font-size: 0.9rem;
    color: #6c757d;
    font-weight: 600;
}

.navbar-clean .navbar-brand:hover .brand-name {
    color: #8fbc8f;
}

/* Custom Mobile Toggle */
.navbar-clean .navbar-toggler {
    width: 40px;
    height: 40px;
    position: relative;
    background: transparent;
    border: none;
    padding: 0;
    cursor: pointer;
}

.navbar-clean .navbar-toggler:focus {
    box-shadow: none;
    outline: 2px solid #8fbc8f;
    outline-offset: 2px;
}

.navbar-clean .toggler-line {
    display: block;
    width: 25px;
    height: 2px;
    background: #2d4a2d;
    margin: 5px auto;
    transition: all 0.3s ease;
    transform-origin: center;
}

.navbar-clean .navbar-toggler[aria-expanded="true"] .toggler-line:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
}

.navbar-clean .navbar-toggler[aria-expanded="true"] .toggler-line:nth-child(2) {
    opacity: 0;
}

.navbar-clean .navbar-toggler[aria-expanded="true"] .toggler-line:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -6px);
}

/* Navigation Links */
.navbar-clean .nav-link {
    color: #5a7c5a !important;
    font-weight: 500;
    padding: 0.6rem 1.2rem;
    border-radius: 12px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    text-decoration: none;
}

.navbar-clean .nav-link i {
    font-size: 1rem;
    margin-right: 0.5rem;
    color: #7ba67b;
    transition: all 0.3s ease;
}

.navbar-clean .nav-link:hover {
    color: #8fbc8f !important;
    transform: translateY(-2px);
    background: rgba(143, 188, 143, 0.1);
    box-shadow: 0 4px 12px rgba(143, 188, 143, 0.15);
}

.navbar-clean .nav-link:hover i {
    color: #8fbc8f;
    transform: scale(1.1);
}

/* Mobile Styles */
@media (max-width: 991.98px) {
    .navbar-clean .navbar-collapse {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        margin-top: 1rem;
        padding: 2rem 1.5rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(143, 188, 143, 0.3);
    }
    
    .navbar-clean .navbar-nav {
        gap: 0.5rem;
    }
    
    .navbar-clean .nav-link {
        text-align: center;
        padding: 1.25rem 1.5rem;
        border-radius: 15px;
        background: linear-gradient(135deg, rgba(143, 188, 143, 0.08) 0%, rgba(168, 212, 168, 0.05) 100%);
        margin-bottom: 0.75rem;
        color: #4a6b4a !important;
        font-weight: 600;
        border: 1px solid rgba(143, 188, 143, 0.1);
        flex-direction: row;
        justify-content: center;
    }
    
    .navbar-clean .nav-link:hover {
        background: linear-gradient(135deg, #8fbc8f 0%, #a8d4a8 100%);
        color: white !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(143, 188, 143, 0.4);
        border-color: transparent;
    }
    
    .navbar-clean .nav-link:hover i {
        color: white;
    }
}

@media (max-width: 576px) {
    .navbar-clean .brand-name {
        font-size: 1.3rem;
    }
    
    .navbar-clean .brand-subtitle {
        font-size: 0.8rem;
    }
    
    .navbar-clean .logo-circle {
        width: 40px;
        height: 40px;
    }
}
</style>

<script>
// PURE JAVASCRIPT - NO BOOTSTRAP DEPENDENCY
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('cleanNavbar');
    const navbarToggler = navbar.querySelector('.navbar-toggler');
    const navbarCollapse = document.getElementById('navContent');
    const navLinks = navbar.querySelectorAll('.nav-link');
    
    if (!navbar || !navbarToggler || !navbarCollapse) return;
    
    // Manual toggle functionality
    navbarToggler.addEventListener('click', function() {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        
        if (isExpanded) {
            // Close menu
            navbarCollapse.classList.remove('show');
            this.setAttribute('aria-expanded', 'false');
        } else {
            // Open menu
            navbarCollapse.classList.add('show');
            this.setAttribute('aria-expanded', 'true');
        }
    });
    
    // Close menu when clicking links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
            
            // Smooth scroll
            const href = this.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Scroll effects
    let ticking = false;
    function updateNavbar() {
        const scrollY = window.pageYOffset;
        if (scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    });
});
</script>