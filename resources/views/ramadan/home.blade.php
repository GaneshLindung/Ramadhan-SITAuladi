@extends('layouts.ramadan')

@section('title', 'Beranda - Ramadhan SIT Auladi Palembang')

@section('content')

<!-- HERO FULL SCREEN -->
<section class="relative h-auto min-h-[calc(100svh-var(--header-h,80px)-2rem)] md:min-h-[calc(100svh-var(--header-h,80px)-3rem)] overflow-hidden flex items-start md:items-start pt-1 pb-8 md:pt-1 md:pb-10">
  <!-- Background -->
  <div class="absolute inset-0">
    <img
      src="{{ asset('images/bg-ramadan.jpg') }}"
      alt="Background Ramadhan"
      class="h-full w-full object-cover opacity-45"
    >

    <!-- Overlay cream (lebih transparan supaya gambar terlihat) -->
    <div class="absolute inset-0 bg-gradient-to-b
                from-[var(--color-brand-900)]/75
                via-[var(--color-brand-800)]/70
                to-[var(--color-brand-700)]/65"></div>

    <!-- Ornamen -->
    <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-[var(--color-brand-500)]/18 blur-3xl"></div>
    <div class="absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-[var(--color-brand-500)]/14 blur-3xl"></div>
  </div>

  <!-- LENTERA ARAB DOME (3 buah) -->
  <div class="lanterns">

    <!-- Lentera 1 (besar) -->
    <div class="lantern right-6 top-20 md:right-12 md:top-24"
         style="--swing:3.2deg; --swing-dur:3.7s; --swing-delay:-.4s;
                --glow-dur:2.3s; --glow-delay:-.2s; --light-dur:1.9s; --light-delay:-.1s;">
      <svg width="120" height="240" viewBox="0 0 110 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- TALI -->
        <path d="M55 0V46" stroke="rgba(60,60,60,0.35)" stroke-width="3" stroke-linecap="round"/>
        <circle cx="55" cy="54" r="7" fill="rgba(60,60,60,0.18)"/>

        <!-- GLOW -->
        <circle class="glow" cx="55" cy="130" r="48" fill="rgba(251,191,36,0.5)"/>

        <!-- KUBAH -->
        <path d="M35 72C35 52 55 42 55 42C55 42 75 52 75 72V80H35V72Z"
              fill="rgba(255,255,255,0.9)"
              stroke="rgba(251,191,36,0.9)"
              stroke-width="3"/>

        <!-- BADAN -->
        <ellipse cx="55" cy="120" rx="32" ry="38"
                 fill="rgba(255,255,255,0.9)"
                 stroke="rgba(251,191,36,0.85)"
                 stroke-width="3"/>

        <!-- ORNAMEN -->
        <path d="M23 120H87" stroke="rgba(251,191,36,0.55)" stroke-width="3" stroke-linecap="round"/>
        <path d="M30 102H80" stroke="rgba(251,191,36,0.4)" stroke-width="2" stroke-linecap="round"/>

        <!-- CAHAYA -->
        <path class="light"
              d="M25 160C38 180 72 180 85 160
                 C76 176 66 196 55 196
                 C44 196 34 176 25 160Z"
              fill="rgba(251,191,36,0.55)"/>
      </svg>
    </div>

    <!-- Lentera 2 (sedang) -->
    <div class="lantern left-6 top-6 md:left-16 md:top-10"
         style="--swing:4.4deg; --swing-dur:4.2s; --swing-delay:-1.1s;
                --glow-dur:2.8s; --glow-delay:-.6s; --light-dur:2.2s; --light-delay:-.4s; opacity:0.9;">
      <svg width="95" height="200" viewBox="0 0 110 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M55 0V46" stroke="rgba(60,60,60,0.35)" stroke-width="3" stroke-linecap="round"/>
        <circle cx="55" cy="54" r="7" fill="rgba(60,60,60,0.18)"/>

        <circle class="glow" cx="55" cy="130" r="44" fill="rgba(251,191,36,0.45)"/>

        <path d="M37 74C37 56 55 46 55 46C55 46 73 56 73 74V82H37V74Z"
              fill="rgba(255,255,255,0.88)"
              stroke="rgba(251,191,36,0.85)"
              stroke-width="3"/>

        <ellipse cx="55" cy="122" rx="29" ry="35"
                 fill="rgba(255,255,255,0.88)"
                 stroke="rgba(251,191,36,0.8)"
                 stroke-width="3"/>

        <path d="M28 122H82" stroke="rgba(251,191,36,0.5)" stroke-width="3" stroke-linecap="round"/>

        <path class="light"
              d="M28 160C40 178 70 178 82 160
                 C74 174 64 192 55 192
                 C46 192 36 174 28 160Z"
              fill="rgba(251,191,36,0.5)"/>
      </svg>
    </div>

    <!-- Lentera 3 (kecil) -->
    <div class="lantern left-24 top-0 md:left-36 md:top-2"
         style="--swing:2.6deg; --swing-dur:3.3s; --swing-delay:-.7s;
                --glow-dur:2.0s; --glow-delay:-.3s; --light-dur:1.6s; --light-delay:-.2s; opacity:0.85;">
      <svg width="80" height="175" viewBox="0 0 110 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M55 0V46" stroke="rgba(60,60,60,0.35)" stroke-width="3" stroke-linecap="round"/>
        <circle cx="55" cy="54" r="7" fill="rgba(60,60,60,0.18)"/>

        <circle class="glow" cx="55" cy="130" r="38" fill="rgba(251,191,36,0.4)"/>

        <path d="M39 78C39 62 55 54 55 54C55 54 71 62 71 78V86H39V78Z"
              fill="rgba(255,255,255,0.86)"
              stroke="rgba(251,191,36,0.8)"
              stroke-width="3"/>

        <ellipse cx="55" cy="126" rx="25" ry="30"
                 fill="rgba(255,255,255,0.86)"
                 stroke="rgba(251,191,36,0.75)"
                 stroke-width="3"/>

        <path d="M33 126H77" stroke="rgba(251,191,36,0.45)" stroke-width="3" stroke-linecap="round"/>

        <path class="light"
              d="M32 160C42 172 68 172 78 160
                 C71 171 62 184 55 184
                 C48 184 39 171 32 160Z"
              fill="rgba(251,191,36,0.48)"/>
      </svg>
    </div>

  </div>

  <!-- Content -->
  <div class="relative w-full">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <div class="w-full md:max-w-3xl mx-auto flex flex-col items-center text-center">

        <!-- Ucapan -->
        <div class="mt-2 md:mt-0 inline-flex items-center gap-2 px-4 py-2 rounded-full translate-y-0 md:translate-y-5
                    bg-white/15 border border-white/20 backdrop-blur
                    text-sm text-slate-100">
          🌙 Selamat Menunaikan Ibadah Puasa Ramadhan
        </div>

        <h1 class="mt-4 text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-slate-50">
          Ramadhan Kareem
          <span class="block text-amber-400 mt-1">
            SIT Auladi Palembang
          </span>
        </h1>

        <p class="mt-3 text-slate-200/90 text-lg leading-relaxed">
          Semoga Ramadhan ini membawa berkah, memperkuat iman, dan membentuk pelajar berakhlak mulia.
        </p>

        <!-- Countdown -->
        <div class="mt-4 md:mt-5 w-full max-w-3xl mx-auto rounded-3xl border border-[var(--color-brand-500)]/25
                    bg-gradient-to-br from-white/90 via-white/70 to-[var(--color-brand-50)]/80
                    backdrop-blur p-6 shadow-lg shadow-[var(--color-brand-500)]/10">
            <div class="flex items-center justify-between gap-3 text-left flex-nowrap sm:flex-wrap">
              <!-- Kiri: Judul -->
              <div class="flex items-center gap-3 text-left flex-1 min-w-0">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl
                            bg-[var(--color-brand-500)]/10 text-2xl shrink-0">
                  ✨
                </div>
                <div class="min-w-0">
                  <div class="text-xs uppercase tracking-widest text-[var(--color-brand-600)]">
                    Countdown menuju
                  </div>
                  <div class="text-2xl font-extrabold text-slate-800 truncate">
                    Idul Fitri
                  </div>
                </div>
              </div>
            
              <!-- Kanan: Tombol -->
              <a href="#jadwal"
                 class="inline-flex items-center gap-2 px-3 py-2 rounded-xl
                        bg-[var(--color-brand-500)] text-white font-semibold text-sm
                        shadow-md shadow-[var(--color-brand-500)]/30
                        hover:bg-[var(--color-brand-600)] transition
                        shrink-0 whitespace-nowrap">
                Lihat Jadwal
                <span aria-hidden="true">→</span>
              </a>
            </div>

          <div class="mt-5 grid grid-cols-2 sm:grid-cols-4 gap-3 text-center">
            <div class="rounded-2xl bg-white/90 border border-[var(--color-brand-500)]/15 p-4">
              <div class="text-3xl font-extrabold leading-none text-slate-800" data-cd="days">0</div>
              <div class="text-xs text-slate-600 mt-1">Hari</div>
            </div>
            <div class="rounded-2xl bg-white/90 border border-[var(--color-brand-500)]/15 p-4">
              <div class="text-3xl font-extrabold leading-none text-slate-800" data-cd="hours">0</div>
              <div class="text-xs text-slate-600 mt-1">Jam</div>
            </div>
            <div class="rounded-2xl bg-white/90 border border-[var(--color-brand-500)]/15 p-4">
              <div class="text-3xl font-extrabold leading-none text-slate-800" data-cd="mins">0</div>
              <div class="text-xs text-slate-600 mt-1">Menit</div>
            </div>
            <div class="rounded-2xl bg-white/90 border border-[var(--color-brand-500)]/15 p-4">
              <div class="text-3xl font-extrabold leading-none text-slate-800" data-cd="secs">0</div>
              <div class="text-xs text-slate-600 mt-1">Detik</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- QUOTES -->
<section id="quotes" class="scroll-mt-28 w-full mt-6 text-center">
  <div class="w-full border-y border-[var(--color-brand-500)]/15 bg-white/10 px-6 py-8 md:py-10">
    <div class="mx-auto w-full max-w-4xl">
      <div class="text-xs md:text-sm uppercase tracking-[0.3em] text-[var(--color-brand-600)]">Quotes Ramadhan</div>
      <p class="mt-3 text-base md:text-lg font-semibold text-slate-100 italic leading-relaxed">
      <span class="block">"Wahai orang-orang yang beriman,</span>
      <span class="block">diwajibkan atas kamu berpuasa</span>
      <span class="block">sebagaimana diwajibkan atas</span>
      <span class="block">orang-orang sebelum kamu</span>
      <span class="block">agar kamu bertakwa."</span>
      </p>
      <div class="mt-3 text-xs md:text-sm font-semibold text-slate-200">QS. Al-Baqarah: 183</div>
    </div>
  </div>
</section>

<!-- KEGIATAN -->
<section id="kegiatan" class="scroll-mt-28 max-w-6xl mx-auto px-6 pb-16 mt-10 text-center">
  <h2 class="text-2xl md:text-3xl font-extrabold text-slate-100">Apa Yang Ada di Auladi</h2>
  <p class="mt-2 text-slate-200 max-w-2xl mx-auto">
    Konten untuk bagian ini sedang disiapkan.
  </p>

  <div class="mt-8 rounded-3xl border border-[var(--color-brand-500)]/20 bg-white/85 p-8 md:p-10 shadow-sm">
    <div class="text-4xl">🚧</div>
    <h3 class="mt-3 text-xl md:text-2xl font-bold text-slate-800">Coming Soon</h3>
    <p class="mt-2 text-slate-600 max-w-xl mx-auto">
      Informasi "Apa Yang Ada di Auladi" akan segera hadir.
    </p>
  </div>

  <div class="mt-10">
    <div class="flex flex-col items-center justify-center gap-2 text-center">
      <h2 class="text-2xl md:text-3xl font-extrabold text-slate-100">Kegiatan</h2>
      <p class="text-sm text-slate-300">Dokumentasi kegiatan Ramadhan akan ditampilkan setelah konten siap.</p>
    </div>

    <div class="mt-6 rounded-3xl border border-[var(--color-brand-500)]/20 bg-white/85 p-8 md:p-10 shadow-sm">
      <div class="text-4xl">📷</div>
      <h3 class="mt-3 text-xl md:text-2xl font-bold text-slate-800">Coming Soon</h3>
      <p class="mt-2 text-slate-600 max-w-xl mx-auto">
        Galeri dan rangkuman kegiatan akan segera diperbarui.
      </p>
    </div>
  </div>
</section>

<!-- VIDEO MATERI -->
<section id="materi" class="scroll-mt-28 max-w-6xl mx-auto px-6 pb-16 text-center">
  <h2 class="text-2xl md:text-3xl font-extrabold text-slate-100">Video Materi Tausiyah</h2>
  <p class="mt-2 text-slate-200 max-w-3xl mx-auto">
    Video materi disusun per minggu agar selaras dengan pelaksanaan jadwal tausiyah Ramadhan di tiap cabang.
  </p>

  @php
    $videoMateriByMinggu = [
      'Minggu 1' => [
        ['no' => 1, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'TK SU2', 'tema' => 'Makna Ramadhan: Tujuan Pendidikan Jiwa'],
        ['no' => 2, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'TK Pakjo', 'tema' => 'Niat Puasa: Mengapa Niat Itu Penting?'],
        ['no' => 3, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'TK Sako', 'tema' => 'Puasa Bukan Sekadar Lapar dan Haus'],
        ['no' => 4, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'SU2', 'tema' => 'Ramadhan sebagai Kesempatan Memperbaiki Diri'],
        ['no' => 5, 'penceramah' => 'Ust. Nur Muhammad', 'cabang' => 'Pakjo', 'tema' => 'Mengapa Ramadhan Disebut Bulan Al-Qur’an'],
        ['no' => 6, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Sako', 'tema' => 'Keutamaan Orang yang Berpuasa'],
        ['no' => 7, 'penceramah' => 'Ust. Sisharyadi', 'cabang' => 'Jakbar', 'tema' => 'Ramadhan dan Pengendalian Diri'],
      ],
      'Minggu 2' => [
        ['no' => 8, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Semabor', 'tema' => 'Puasa Melatih Kejujuran'],
        ['no' => 9, 'penceramah' => 'Ust. Farurozi', 'cabang' => 'SU2', 'tema' => 'Shalat Tepat Waktu di Bulan Ramadhan'],
        ['no' => 10, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Pakjo', 'tema' => 'Keutamaan Membaca Al-Qur’an Setiap Hari'],
        ['no' => 11, 'penceramah' => 'Ust. Andre', 'cabang' => 'Sako', 'tema' => 'Sedekah di Bulan Ramadhan: Kecil tapi Bermakna'],
        ['no' => 12, 'penceramah' => 'Menteri Agama Osis', 'cabang' => 'Jakbar', 'tema' => 'Doa Orang Berpuasa yang Mustajab'],
        ['no' => 13, 'penceramah' => 'Ust. Fikri', 'cabang' => 'Semabor', 'tema' => 'Menjaga Lisan Saat Berpuasa'],
        ['no' => 14, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'SU2', 'tema' => 'Puasa dan Disiplin Waktu'],
      ],
      'Minggu 3' => [
        ['no' => 15, 'penceramah' => 'Ust. Yunus', 'cabang' => 'Pakjo', 'tema' => 'Puasa Mengajarkan Kesabaran'],
        ['no' => 16, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Jakbar', 'tema' => 'Menahan Amarah di Bulan Ramadhan'],
        ['no' => 17, 'penceramah' => 'Ust. Ridho', 'cabang' => 'SU2', 'tema' => 'Ramadhan dan Sikap Saling Menghargai'],
        ['no' => 18, 'penceramah' => 'Menteri Agama', 'cabang' => 'Semabor', 'tema' => 'Puasa dan Empati kepada Sesama'],
        ['no' => 19, 'penceramah' => 'Ust. Donis', 'cabang' => 'Pakjo', 'tema' => 'Menghindari Ghibah dan Perkataan Buruk'],
        ['no' => 20, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Sako', 'tema' => 'Ramadhan sebagai Latihan Akhlak Mulia'],
        ['no' => 21, 'penceramah' => 'Ust. Hafiz', 'cabang' => 'SU2', 'tema' => 'Berbagi dan Peduli di Bulan Ramadhan'],
      ],
      'Minggu 4' => [
        ['no' => 22, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Pakjo', 'tema' => 'Makna Idul Fitri: Kembali Suci'],
        ['no' => 23, 'penceramah' => 'Ust. Angga', 'cabang' => 'SU2', 'tema' => 'Zakat Fitrah: Penyempurna Ibadah Puasa'],
        ['no' => 24, 'penceramah' => 'Ust. Agus', 'cabang' => 'Semabor', 'tema' => 'Siapa dan Kapan Membayar Zakat Fitrah?'],
        ['no' => 25, 'penceramah' => 'Ust. Dedi', 'cabang' => 'Pakjo', 'tema' => 'Hikmah Zakat Fitrah bagi Sesama'],
        ['no' => 26, 'penceramah' => 'Ust. Abil', 'cabang' => 'SU2', 'tema' => 'Lailatul Qadar: Malam Lebih Baik dari Seribu Bulan'],
        ['no' => 27, 'penceramah' => 'Ust. Eki', 'cabang' => 'Semabor', 'tema' => 'Ramadhan Hampir Usai, Apa yang Kita Dapatkan?'],
        ['no' => 28, 'penceramah' => 'Ust. Muhtarom', 'cabang' => 'Semabor', 'tema' => 'Istiqomah Setelah Ramadhan'],
        ['no' => 29, 'penceramah' => 'Ust. Muslim', 'cabang' => 'Semabor', 'tema' => 'Menjaga Ibadah Setelah Idul Fitri'],
      ],
    ];
  @endphp

  <div class="mt-8 space-y-6 text-left">
    @foreach ($videoMateriByMinggu as $minggu => $items)
      <details class="group rounded-3xl border border-[var(--color-brand-500)]/20 bg-white/85 p-5" @if ($loop->first) open @endif>
        <summary class="flex cursor-pointer list-none items-center justify-between gap-2">
          <span class="text-base md:text-lg font-extrabold text-[var(--color-brand-700)]">{{ $minggu }}</span>
          <span class="text-xs md:text-sm font-semibold text-slate-500">{{ count($items) }} materi</span>
        </summary>

        <div class="mt-4 grid md:grid-cols-2 gap-5">
          @foreach ($items as $item)
            <article class="rounded-2xl border border-[var(--color-brand-500)]/15 bg-white p-4 shadow-sm text-center">
              <div class="text-xs font-bold text-[var(--color-brand-600)]">Materi #{{ $item['no'] }}</div>
              <h3 class="mt-1 text-sm md:text-base font-bold text-slate-800">{{ $item['tema'] }}</h3>
              <p class="mt-2 text-xs md:text-sm text-slate-600">Pemateri: {{ $item['penceramah'] }} | Cabang: {{ $item['cabang'] }}</p>

              <div class="mt-3 aspect-video rounded-xl overflow-hidden border border-[var(--color-brand-500)]/10">
                <iframe class="w-full h-full"
                  loading="lazy"
                  src="https://www.youtube.com/embed?listType=search&list={{ urlencode('tausiyah ramadhan '.$item['tema'].' '.$item['penceramah']) }}"
                  title="Video Materi Tausiyah {{ $item['tema'] }}"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div>
            </article>
          @endforeach
        </div>
      </details>
    @endforeach
  </div>
</section>


<!-- JADWAL -->
<section id="jadwal" class="scroll-mt-28 max-w-6xl mx-auto px-6 pb-16 text-center">
  <h2 class="text-2xl md:text-3xl font-extrabold text-slate-100">Jadwal Kegiatan Ramadhan</h2>
  <p class="mt-2 text-slate-200 max-w-3xl mx-auto">
    Jadwal berikut mengikuti tema tausiyah Ramadhan setiap minggu sesuai cabang.
  </p>

  <div class="mt-8 overflow-x-auto rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 shadow-sm">
    <table class="min-w-full text-sm text-center">
      <thead class="bg-[var(--color-brand-50)]">
        <tr class="text-center text-slate-700">
          <th class="px-4 py-3 font-bold">No</th>
          <th class="px-6 py-3 font-bold">Penceramah</th>
          <th class="px-6 py-3 font-bold">Cabang</th>
          <th class="px-6 py-3 font-bold">Tema</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-[var(--color-brand-500)]/10 text-slate-700">
        <tr class="bg-[var(--color-brand-50)]/80 font-bold text-[var(--color-brand-700)]">
          <td colspan="4" class="px-6 py-2">MINGGU 1</td>
        </tr>
        <tr><td class="px-4 py-3">1</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">TK SU2</td><td class="px-6 py-3">Makna Ramadhan: Tujuan Pendidikan Jiwa</td></tr>
        <tr><td class="px-4 py-3">2</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">TK Pakjo</td><td class="px-6 py-3">Niat Puasa: Mengapa Niat Itu Penting?</td></tr>
        <tr><td class="px-4 py-3">3</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">TK Sako</td><td class="px-6 py-3">Puasa Bukan Sekadar Lapar dan Haus</td></tr>
        <tr><td class="px-4 py-3">4</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Ramadhan sebagai Kesempatan Memperbaiki Diri</td></tr>
        <tr><td class="px-4 py-3">5</td><td class="px-6 py-3">Ust. Nur Muhammad</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Mengapa Ramadhan Disebut Bulan Al-Qur’an</td></tr>
        <tr><td class="px-4 py-3">6</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Sako</td><td class="px-6 py-3">Keutamaan Orang yang Berpuasa</td></tr>
        <tr><td class="px-4 py-3">7</td><td class="px-6 py-3">Ust. Sisharyadi</td><td class="px-6 py-3">Jakbar</td><td class="px-6 py-3">Ramadhan dan Pengendalian Diri</td></tr>

        <tr class="bg-[var(--color-brand-50)]/80 font-bold text-[var(--color-brand-700)]">
          <td colspan="4" class="px-6 py-2">MINGGU 2</td>
        </tr>
        <tr><td class="px-4 py-3">8</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Puasa Melatih Kejujuran</td></tr>
        <tr><td class="px-4 py-3">9</td><td class="px-6 py-3">Ust. Farurozi</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Shalat Tepat Waktu di Bulan Ramadhan</td></tr>
        <tr><td class="px-4 py-3">10</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Keutamaan Membaca Al-Qur’an Setiap Hari</td></tr>
        <tr><td class="px-4 py-3">11</td><td class="px-6 py-3">Ust. Andre</td><td class="px-6 py-3">Sako</td><td class="px-6 py-3">Sedekah di Bulan Ramadhan: Kecil tapi Bermakna</td></tr>
        <tr><td class="px-4 py-3">12</td><td class="px-6 py-3">Menteri Agama Osis</td><td class="px-6 py-3">Jakbar</td><td class="px-6 py-3">Doa Orang Berpuasa yang Mustajab</td></tr>
        <tr><td class="px-4 py-3">13</td><td class="px-6 py-3">Ust. Fikri</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Menjaga Lisan Saat Berpuasa</td></tr>
        <tr><td class="px-4 py-3">14</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Puasa dan Disiplin Waktu</td></tr>

        <tr class="bg-[var(--color-brand-50)]/80 font-bold text-[var(--color-brand-700)]">
          <td colspan="4" class="px-6 py-2">MINGGU 3</td>
        </tr>
        <tr><td class="px-4 py-3">15</td><td class="px-6 py-3">Ust. Yunus</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Puasa Mengajarkan Kesabaran</td></tr>
        <tr><td class="px-4 py-3">16</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Jakbar</td><td class="px-6 py-3">Menahan Amarah di Bulan Ramadhan</td></tr>
        <tr><td class="px-4 py-3">17</td><td class="px-6 py-3">Ust. Ridho</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Ramadhan dan Sikap Saling Menghargai</td></tr>
        <tr><td class="px-4 py-3">18</td><td class="px-6 py-3">Menteri Agama</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Puasa dan Empati kepada Sesama</td></tr>
        <tr><td class="px-4 py-3">19</td><td class="px-6 py-3">Ust. Doris</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Menghindari Ghibah dan Perkataan Buruk</td></tr>
        <tr><td class="px-4 py-3">20</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Sako</td><td class="px-6 py-3">Ramadhan sebagai Latihan Akhlak Mulia</td></tr>
        <tr><td class="px-4 py-3">21</td><td class="px-6 py-3">Ust. Hafiz</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Berbagi dan Peduli di Bulan Ramadhan</td></tr>

        <tr class="bg-[var(--color-brand-50)]/80 font-bold text-[var(--color-brand-700)]">
          <td colspan="4" class="px-6 py-2">MINGGU 4</td>
        </tr>
        <tr><td class="px-4 py-3">22</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Makna Idul Fitri: Kembali Suci</td></tr>
        <tr><td class="px-4 py-3">23</td><td class="px-6 py-3">Ust. Angga</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Zakat Fitrah: Penyempurna Ibadah Puasa</td></tr>
        <tr><td class="px-4 py-3">24</td><td class="px-6 py-3">Ust. Agus</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Siapa dan Kapan Membayar Zakat Fitrah?</td></tr>
        <tr><td class="px-4 py-3">25</td><td class="px-6 py-3">Ust. Dedi</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Hikmah Zakat Fitrah bagi Sesama</td></tr>
        <tr><td class="px-4 py-3">26</td><td class="px-6 py-3">Ust. Abil</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Lailatul Qadar: Malam Lebih Baik dari Seribu Bulan</td></tr>
        <tr><td class="px-4 py-3">27</td><td class="px-6 py-3">Ust. Eki</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Ramadhan Hampir Usai, Apa yang Kita Dapatkan?</td></tr>
        <tr><td class="px-4 py-3">28</td><td class="px-6 py-3">Ust. Muhtarom</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Istiqomah Setelah Ramadhan</td></tr>
        <tr><td class="px-4 py-3">29</td><td class="px-6 py-3">Ust. Muslim</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Menjaga Ibadah Setelah Idul Fitri</td></tr>
      </tbody>
    </table>
  </div>
</section>

@endsection