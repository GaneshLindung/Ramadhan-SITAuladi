<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Ramadhan SIT Auladi')</title>
  <meta name="description" content="@yield('meta', 'Informasi kegiatan Ramadhan SIT Auladi')">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen antialiased text-slate-700 bg-brand-50/70 relative">

  <!-- GLOBAL CREAM OVERLAY (penetral tone agar tidak gelap) -->
  <div class="fixed inset-0 -z-10 bg-gradient-to-b from-brand-50/95 via-brand-50/85 to-white"></div>

  <!-- HEADER -->
  <header
    id="site-header"
    class="sticky top-0 z-50
           bg-brand-50/80 backdrop-blur-md
           border-b border-brand-100/70
           shadow-sm"
  >
    <div class="relative max-w-6xl mx-auto px-6 py-4 flex flex-col items-start gap-4 md:flex-row md:items-center md:justify-between md:gap-6">

      <div class="w-full flex items-center justify-between gap-4 md:w-auto">
        <!-- Logo & Judul -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
          <img
            src="{{ asset('images/logo.jpg') }}"
            alt="Logo SIT Auladi Palembang"
            class="h-12 w-auto object-contain"
          >
          <span
            style="font-family: 'Playfair Display', serif;"
            class="text-lg sm:text-xl md:text-2xl font-bold tracking-wide text-brand-500 leading-tight"
          >
            SIT Auladi Palembang
          </span>
        </a>

        <button
          id="mobile-menu-button"
          type="button"
          class="inline-flex items-center justify-center rounded-lg border border-brand-200 bg-white/80 px-3 py-2 text-brand-500 shadow-sm transition hover:bg-white md:hidden"
          aria-controls="site-nav"
          aria-expanded="false"
        >
          <span class="sr-only">Buka menu navigasi</span>
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

      <!-- Nav -->
      <nav
        style="font-family: 'Poppins', sans-serif;"
        class="absolute right-6 top-full mt-2 hidden w-56 flex-col items-stretch gap-3 rounded-2xl border border-brand-100/70 bg-white/95 p-4 text-sm font-normal text-brand-500 shadow-md sm:text-base md:static md:mt-0 md:flex md:w-auto md:flex-row md:items-center md:gap-8 md:border-none md:bg-transparent md:p-0 md:shadow-none"
        id="site-nav"
      >
        <a href="#materi" class="block w-full rounded-lg px-2 py-1 hover:text-brand-600 transition md:w-auto md:p-0">Video Materi</a>
        <a href="#kegiatan" class="block w-full rounded-lg px-2 py-1 hover:text-brand-600 transition md:w-auto md:p-0">Kegiatan Ramadhan</a>
        <a href="#jadwal" class="block w-full rounded-lg px-2 py-1 hover:text-brand-600 transition md:w-auto md:p-0">Jadwal Ramadhan</a>
      </nav>

    </div>
  </header>

  <!-- MAIN -->
  <main class="text-slate-700">
    @yield('content')
  </main>

  <!-- FOOTER -->
  <footer class="border-t border-brand-100/70 mt-16 bg-brand-50/80 backdrop-blur">
    <div class="max-w-6xl mx-auto px-6 py-10 grid md:grid-cols-2 gap-6">

      <div>
        <div class="font-bold text-lg text-slate-700">SIT Auladi</div>
        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
          Website kegiatan Ramadhan SIT Auladi Palembang.
          Informasi video materi, kegiatan, dan jadwal Ramadhan sekolah.
        </p>
      </div>

      <div class="text-sm text-slate-600 md:text-right">
        <div>© {{ date('Y') }} SIT Auladi</div>
        <div class="mt-2">Made with Laravel + Tailwind</div>
      </div>

    </div>
  </footer>

  <!-- SCRIPT -->
  <script>
    function setHeaderHeight() {
      const header = document.getElementById('site-header');
      if (!header) return;
      document.documentElement.style.setProperty('--header-h', header.offsetHeight + 'px');
    }

    function setupMobileMenu() {
      const button = document.getElementById('mobile-menu-button');
      const nav = document.getElementById('site-nav');
      if (!button || !nav) return;

      const closeMenu = () => {
        nav.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
      };

      button.addEventListener('click', () => {
        const isOpen = !nav.classList.contains('hidden');
        nav.classList.toggle('hidden', isOpen);
        button.setAttribute('aria-expanded', String(!isOpen));
        setHeaderHeight();
      });

      document.addEventListener('click', (event) => {
        if (nav.classList.contains('hidden')) return;
        const target = event.target;
        if (nav.contains(target) || button.contains(target)) return;
        closeMenu();
        setHeaderHeight();
      });
    }

    window.addEventListener('load', () => {
      setHeaderHeight();
      setupMobileMenu();
    });
    window.addEventListener('resize', setHeaderHeight);
  </script>

</body>
</html>