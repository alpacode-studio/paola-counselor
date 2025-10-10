<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', get_bloginfo('name', 'display'))</title>
    <meta name="description" content="@yield('description', get_bloginfo('description', 'display'))">
    <meta name="keywords" content="@yield('keywords', '')">

    <!-- Favicons -->
    <link href="@yield('favicon', get_template_directory_uri() . '/public/img/favicon.png')" rel="icon">
    <link href="@yield('apple_touch_icon', get_template_directory_uri() . '/public/img/apple-touch-icon.png')" rel="apple-touch-icon">
    
    <!-- Google Fonts - Optimized loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    @php(do_action('get_header'))
    @php(wp_head())

    {{-- Bootstrap assets for theme pages --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @vite(['resources/css/instant-theme.css', 'resources/js/instant-theme.js']) --}}
    @vite(['resources/css/custom-theme.css', 'resources/js/custom-theme.js'])
    
    <!-- Theme switcher for bootstrap pages -->
    <script>
      (function() {
        const storedTheme = localStorage.getItem('theme') || 
          (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        document.documentElement.setAttribute('data-bs-theme', storedTheme);
      })();
    </script>
    
    @stack('styles')
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
        @if(is_page('showcase'))
          {{-- No header/footer for showcase pages --}}
          <main id="main">
            @yield('content')
          </main>
        @else

        @include('sections.loading-overlay')
        @include('sections.scroll-progress')
        @include('sections.scroll-to-top')

        {{-- Normal theme layout --}}
        @include('sections.header')

        <main id="main" class="main">
          @yield('content')
        </main>

        @include('sections.footer')

        @hasSection('sidebar')
          <aside class="sidebar">
            @yield('sidebar')
          </aside>
        @endif
      @endif
    </div>

    @stack('scripts')
    
    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>