<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Ramadhan SIT Auladi')</title>
  <meta name="description" content="@yield('meta', 'Informasi kegiatan Ramadhan SIT Auladi')">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-slate-100 antialiased">
  <!-- Top Bar -->
  <div class="border-b border-white/10 bg-white/5">
    <div class="max-w-6xl mx-auto px-6 py-2 text-xs text-slate-300 flex flex-wrap gap-x-4 gap-y-1 justify-between">
      <div>🌙 Ramadhan SIT Auladi</div>
      <div class="flex gap-4">
        <span>📞 Panitia: 08xxxxxxxxxx</span>
        <span>✉️ info@sitauladi.sch.id</span>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="sticky top-0 z-50 backdrop-blur bg-slate-950/70 border-b border-white/10">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between gap-4">
      <a href="{{ route('home') }}" class="flex items-center gap-2">
        <div class="h-10 w-10 rounded-2xl bg-emerald-400/15 border border-emerald-400/20 flex items-center justify-center">
          <span class="text-lg">☪</span>
        </div>
        <div class="leading-tight">
          <div class="font-extrabold tracking-wide">SIT Auladi</div>
          <div class="text-xs text-slate-300">Kegiatan Ramadhan</div>
        </div>
      </a>

      <nav class="hidden lg:flex items-center gap-5 text-sm text-slate-200">
        <a class="hover:text-white" href="{{ route('profile') }}">Profil</a>
        <a class="hover:text-white" href="{{ route('schedule') }}">Jadwal</a>
        <a class="hover:text-white" href="{{ route('videos') }}">Materi</a>
        <a class="hover:text-white" href="{{ route('worship') }}">Tadarus</a>
        <a class="hover:text-white" href="{{ route('gallery') }}">Galeri</a>
        <a class="hover:text-white" href="{{ route('articles') }}">Artikel</a>
        <a class="hover:text-white" href="{{ route('competitions') }}">Lomba</a>
        <a class="hover:text-white" href="{{ route('announcements') }}">Pengumuman</a>
        <a class="hover:text-white" href="{{ route('contact') }}">Kontak</a>
      </nav>

      <a href="{{ route('schedule') }}"
        class="px-4 py-2 rounded-xl bg-amber-300 text-slate-950 font-semibold hover:bg-amber-200 transition">
        Lihat Jadwal
      </a>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="border-t border-white/10 mt-16">
    <div class="max-w-6xl mx-auto px-6 py-10 grid md:grid-cols-2 gap-6">
      <div>
        <div class="font-bold text-lg">SIT Auladi</div>
        <p class="mt-2 text-sm text-slate-300 leading-relaxed">
          Website kegiatan Ramadhan: informasi jadwal, materi, tadarus, galeri, artikel, lomba, dan pengumuman resmi sekolah.
        </p>
      </div>
      <div class="text-sm text-slate-300 md:text-right">
        <div>© {{ date('Y') }} SIT Auladi</div>
        <div class="mt-2">Made with Laravel + Tailwind</div>
      </div>
    </div>
  </footer>
</body>
</html>
