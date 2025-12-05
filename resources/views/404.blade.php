@extends('layouts.bootstrap')

@section('title', __('Pagina non trovata', 'sage'))
@section('description', __('Errore 404 - La pagina richiesta non esiste o è stata spostata.', 'sage'))

@section('content')
  <section class="error-404-section">
    <style>
      .error-404-section {
        position: relative;
        padding: clamp(80px, 12vh, 160px) 0 clamp(60px, 10vh, 120px);
        background: radial-gradient(1200px 600px at 80% -20%, rgba(143,188,143,0.18), transparent 60%),
                    radial-gradient(900px 500px at 10% -10%, rgba(255,127,112,0.12), transparent 55%);
        overflow: hidden;
      }
      .error-404-wrap { max-width: 1100px; margin: 0 auto; }
      .error-404-card {
        background: linear-gradient(180deg, rgba(255,255,255,0.85), rgba(255,255,255,0.75));
        backdrop-filter: blur(8px);
        border: 1px solid rgba(143, 188, 143, 0.18);
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.08);
        padding: clamp(24px, 4vw, 40px);
      }
      .error-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 0.9rem;
        color: #234;
        background: rgba(143,188,143,0.15);
        border: 1px solid rgba(143,188,143,0.25);
      }
      .code-404 {
        font-family: 'DM Serif Display', serif;
        font-weight: 700;
        letter-spacing: 1px;
        font-size: clamp(64px, 11vw, 140px);
        line-height: 0.95;
        margin: 12px 0 6px;
        background: linear-gradient(135deg, var(--primary-sage, #8fbc8f), var(--accent-coral, #ff7f70));
        -webkit-background-clip: text; background-clip: text; color: transparent;
        text-shadow: 0 6px 30px rgba(143,188,143,0.25);
      }
      .error-title {
        font-family: 'DM Serif Display', serif;
        font-size: clamp(22px, 3.2vw, 36px);
        color: var(--deep-forest, #1a2b1f);
        margin-bottom: 10px;
      }
      .error-text { color: #263; opacity: 0.9; font-size: clamp(15px, 1.6vw, 18px); }
      .error-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 20px; }
      .error-actions .btn { border-radius: 12px; }
      .btn-outline-holistic { border-color: var(--primary-sage, #8fbc8f); color: var(--primary-sage, #8fbc8f); }
      .btn-outline-holistic:hover { background: var(--primary-sage, #8fbc8f); color: #fff; }

      .quick-links { margin-top: 24px; }
      .quick-links h3 { font-size: 1rem; color: var(--deep-forest, #1a2b1f); opacity: 0.8; margin-bottom: 8px; }
      .quick-links .list-inline { gap: 10px; }
      .quick-links a { text-decoration: none; padding: 6px 10px; border-radius: 10px; }
      .quick-links a:hover { background: rgba(143,188,143,0.12); }

      .search-wrap { margin-top: 18px; }
      .search-wrap form { display: grid; grid-template-columns: 1fr auto; gap: 10px; }
      .search-wrap input[type="search"] { border-radius: 12px; padding: 10px 14px; }
      .search-wrap input[type="submit"], .search-wrap button { border-radius: 12px; }

      /* Decorative shapes */
      .float-shape { position: absolute; pointer-events: none; z-index: 0; opacity: 0.5; }
      .shape-1 { top: -40px; right: -40px; width: 140px; height: 140px; background: radial-gradient(circle, rgba(143,188,143,0.25), transparent 60%); border-radius: 50%; }
      .shape-2 { bottom: -50px; left: -30px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(255,127,112,0.22), transparent 65%); border-radius: 50%; }

      @media (max-width: 768px) {
        .error-actions { justify-content: center; }
        .error-404-card { text-align: center; }
      }
    </style>

    <div class="float-shape shape-1" aria-hidden="true"></div>
    <div class="float-shape shape-2" aria-hidden="true"></div>

    <div class="container position-relative" style="z-index:1">
      <div class="error-404-wrap">
        <div class="error-404-card" data-aos="fade-up">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="error-badge"><i class="bi bi-exclamation-diamond me-1"></i>{{ __('Errore', 'sage') }} 404</span>
          </div>

          <div class="code-404">404</div>
          <h1 class="error-title">{{ __('Pagina non trovata', 'sage') }}</h1>
          <p class="error-text mb-2">{{ __('Spiacenti, la pagina che stai cercando non esiste o è stata spostata.', 'sage') }}</p>
          <p class="error-text">{{ __('Puoi tornare alla home, contattarmi, oppure cercare ciò di cui hai bisogno.', 'sage') }}</p>

          <div class="error-actions">
            <a href="{{ home_url('/') }}" class="btn btn-primary-holistic">
              <i class="bi bi-house-heart me-2"></i>{{ __('Torna alla Home', 'sage') }}
            </a>
            <a href="{{ home_url('/#contatti') }}" class="btn btn-outline-holistic">
              <i class="bi bi-chat-heart me-2"></i>{{ __('Contattami', 'sage') }}
            </a>
          </div>

          <div class="search-wrap" data-aos="fade-up" data-aos-delay="100">
            {!! get_search_form(['echo' => false]) !!}
          </div>

          <div class="quick-links" data-aos="fade-up" data-aos-delay="150">
            <h3 class="fw-semibold">{{ __('Link utili', 'sage') }}</h3>
            <ul class="list-inline m-0 d-flex flex-wrap">
              <li class="list-inline-item"><a href="{{ home_url('/#chi-sono') }}" class="link-dark"><i class="bi bi-person-heart me-1"></i>{{ __('Chi Sono', 'sage') }}</a></li>
              <li class="list-inline-item"><a href="{{ home_url('/#servizi') }}" class="link-dark"><i class="bi bi-heart-pulse me-1"></i>{{ __('Servizi', 'sage') }}</a></li>
              <li class="list-inline-item"><a href="{{ home_url('/#approccio') }}" class="link-dark"><i class="bi bi-compass me-1"></i>{{ __('Approccio', 'sage') }}</a></li>
              <li class="list-inline-item"><a href="{{ home_url('/#contatti') }}" class="link-dark"><i class="bi bi-envelope-heart me-1"></i>{{ __('Contatti', 'sage') }}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
