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
    <div class="max-w-6xl mx-auto px-6 py-10 space-y-10">
      <div class="grid gap-8 lg:grid-cols-[1.5fr_1fr] lg:items-start">
        <div class="space-y-4">
          <div class="flex items-center gap-3">
            <img
              src="{{ asset('images/logo.jpg') }}"
              alt="Logo SIT Auladi Palembang"
              class="h-12 w-auto object-contain"
            >
            <div>
              <div class="text-lg font-semibold text-slate-700">Auladi</div>
              <div class="text-sm text-slate-500">Sekolah Islam Terpadu</div>
            </div>
          </div>
          <p class="text-sm text-slate-600 leading-relaxed">
            Informasi resmi seputar kegiatan Ramadhan SIT Auladi Palembang.
          </p>
          <div class="flex items-center gap-3">
            <a
              href="#"
              class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-brand-100 bg-white text-brand-500 shadow-sm transition hover:border-brand-200 hover:text-brand-600"
              aria-label="Facebook SIT Auladi"
            >
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2.3V12h2.3V9.7c0-2.3 1.4-3.6 3.5-3.6 1 0 2 .2 2 .2v2.2h-1.2c-1.1 0-1.5.7-1.5 1.5V12h2.6l-.4 2.9h-2.2v7A10 10 0 0 0 22 12Z"/>
              </svg>
            </a>
            <a
              href="#"
              class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-brand-100 bg-white text-brand-500 shadow-sm transition hover:border-brand-200 hover:text-brand-600"
              aria-label="Instagram SIT Auladi"
            >
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M7 3h10a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4Zm10 2H7a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Zm-5 3.5A3.5 3.5 0 1 1 8.5 12 3.5 3.5 0 0 1 12 8.5Zm0 2A1.5 1.5 0 1 0 13.5 12 1.5 1.5 0 0 0 12 10.5Zm4.5-3.3a1 1 0 1 1-1 1 1 1 0 0 1 1-1Z"/>
              </svg>
            </a>
            <a
              href="#"
              class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-brand-100 bg-white text-brand-500 shadow-sm transition hover:border-brand-200 hover:text-brand-600"
              aria-label="YouTube SIT Auladi"
            >
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M21.6 7.2a2.7 2.7 0 0 0-1.9-1.9C17.9 5 12 5 12 5s-5.9 0-7.7.3a2.7 2.7 0 0 0-1.9 1.9C2 9 2 12 2 12s0 3 .3 4.8a2.7 2.7 0 0 0 1.9 1.9C6.1 19 12 19 12 19s5.9 0 7.7-.3a2.7 2.7 0 0 0 1.9-1.9C22 15 22 12 22 12s0-3-.4-4.8ZM10 15.5v-7l6 3.5-6 3.5Z"/>
              </svg>
            </a>
          </div>
        </div>

        <div class="text-sm text-slate-600">
          <div class="space-y-2">
            <a href="#materi" class="block hover:text-brand-600 transition">Video Materi</a>
            <a href="#kegiatan" class="block hover:text-brand-600 transition">Kegiatan Ramadhan</a>
            <a href="#jadwal" class="block hover:text-brand-600 transition">Jadwal Ramadhan</a>
          </div>
        </div>
      </div>

      <div class="border-t border-brand-100/70"></div>

      <div class="grid gap-6 text-sm text-slate-600 sm:grid-cols-2 lg:grid-cols-5">
        <div class="space-y-1">
          <div class="font-semibold text-slate-700">Auladi SU II</div>
          <div>Jl. KH. Azhari No.1 A</div>
          <div>Kec. Seberang Ulu II</div>
          <div>Kota Palembang 30264</div>
        </div>
        <div class="space-y-1">
          <div class="font-semibold text-slate-700">Auladi Pakjo</div>
          <div>Jl. Inspektur Marzuki No 834</div>
          <div>Ilir Barat I</div>
          <div>Kota Palembang</div>
        </div>
        <div class="space-y-1">
          <div class="font-semibold text-slate-700">Auladi Sako</div>
          <div>Jl. Payo Durian No 94</div>
          <div>Kec. Sako</div>
          <div>Kota Palembang 30961</div>
        </div>
        <div class="space-y-1">
          <div class="font-semibold text-slate-700">Auladi Jakabaring</div>
          <div>Jl. Gubernur H. A Bastari</div>
          <div>Kec. Jakabaring</div>
          <div>Banyuasin 30967</div>
        </div>
        <div class="space-y-1">
          <div class="font-semibold text-slate-700">Auladi Sematang Borang</div>
          <div>Jl. Padat Karya No.32</div>
          <div>Kec. Sematang Borang</div>
          <div>Kota Palembang 30961</div>
        </div>
      </div>

      <div class="border-t border-brand-100/70 pt-8">
        <div class="mx-auto w-full text-center text-xs text-slate-400 tracking-widest uppercase">
          © {{ date('Y') }} SIT Auladi Palembang | All Rights Reserved
        </div>
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