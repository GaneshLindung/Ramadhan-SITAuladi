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
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between gap-6">

      <!-- Logo & Judul -->
      <a href="{{ route('home') }}" class="flex items-center gap-3">
        <img
          src="{{ asset('images/logo.jpg') }}"
          alt="Logo SIT Auladi Palembang"
          class="h-12 w-auto object-contain"
        >
        <span
          style="font-family: 'Playfair Display', serif;"
          class="text-xl md:text-2xl font-bold tracking-wide text-brand-500 leading-tight"
        >
          SIT Auladi Palembang
        </span>
      </a>

      <!-- Nav -->
      <nav
        style="font-family: 'Poppins', sans-serif;"
        class="flex items-center gap-8 text-base font-normal text-brand-500"
      >
        <a href="#materi" class="hover:text-brand-600 transition">Video Materi</a>
        <a href="#kegiatan" class="hover:text-brand-600 transition">Kegiatan Ramadhan</a>
        <a href="#jadwal" class="hover:text-brand-600 transition">Jadwal Ramadhan</a>
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
    window.addEventListener('load', setHeaderHeight);
    window.addEventListener('resize', setHeaderHeight);
  </script>

</body>
</html>
