@extends('layouts.ramadan')

@section('title', 'Beranda - Ramadan SIT Auladi Palembang')

@section('content')

<!-- HERO FULL SCREEN -->
<section class="relative h-auto min-h-[calc(100svh-var(--header-h,80px)-2rem)] md:min-h-[calc(100svh-var(--header-h,80px)-3rem)] overflow-hidden flex items-start md:items-start pt-1 pb-8 md:pt-1 md:pb-10">
  <!-- Background -->
  <div class="absolute inset-0">
    <img
      src="{{ asset('images/bg-ramadan.jpg') }}"
      alt="Background Ramadan"
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
          🌙 Selamat Menunaikan Ibadah Puasa Ramadan
        </div>

        <h1 class="mt-4 text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-slate-50">
          Ramadan Kareem
          <span class="block text-amber-400 mt-1">
            SIT Auladi Palembang
          </span>
        </h1>

        <p class="mt-3 text-slate-200/90 text-lg leading-relaxed">
          Semoga Ramadan ini membawa berkah, memperkuat iman, dan membentuk pelajar berakhlak mulia.
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
                  <div class="text-xl sm:text-2xl font-extrabold text-slate-800 leading-tight">
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
      <div class="text-xs md:text-sm uppercase tracking-[0.3em] text-[var(--color-brand-600)]">Quotes Ramadan</div>
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
    Rangkaian kegiatan Ramadan SIT Auladi disusun untuk memperkuat ibadah, karakter, dan kebersamaan.
    Setiap kegiatan didampingi guru pembina dan terdokumentasi secara berkala.
  </p>

  <div class="mt-8 grid md:grid-cols-3 gap-5">
    <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 backdrop-blur p-6 shadow-sm text-center">
      <div class="text-2xl">🏫</div>
      <div class="mt-2 font-bold text-slate-800">Pesantren Kilat</div>
      <p class="mt-2 text-sm text-slate-600">
        Pembinaan iman, adab, dan ibadah siswa dengan materi fiqih puasa, akhlak, serta praktik ibadah harian.
      </p>
      <ul class="mt-3 text-xs text-slate-500 space-y-1">
        <li>📅 Jadwal: 4–6 Februari 2026</li>
        <li>👥 Peserta: Siswa/i di setiap cabang Auladi</li>
        <li>📍 Lokasi: Auladi SU II, Pakjo, Sako, Semabor, Jakabaring</li>
      </ul>
    </div>

    <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 backdrop-blur p-6 shadow-sm text-center">
      <div class="text-2xl">🤝</div>
      <div class="mt-2 font-bold text-slate-800">Bakti Sosial</div>
      <p class="mt-2 text-sm text-slate-600">
        Aksi kepedulian sosial bersama siswa, guru, dan orang tua melalui penyaluran bantuan kepada masyarakat sekitar.
      </p>
      <ul class="mt-3 text-xs text-slate-500 space-y-1">
        <li>📅 Pelaksanaan: 7 Februari 2026</li>
        <li>🎁 Fokus: Santunan & berbagi paket sosial</li>
        <li>📍 Lokasi: Auladi SU II, Pakjo, Sako, Semabor, Jakabaring</li>
      </ul>
    </div>

    <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 backdrop-blur p-6 shadow-sm text-center">
      <div class="text-2xl">🕌</div>
      <div class="mt-2 font-bold text-slate-800">Itikaf</div>
      <p class="mt-2 text-sm text-slate-600">
        Program itikaf di masjid untuk memperbanyak ibadah malam, tilawah, dzikir, dan doa bersama.
      </p>
      <ul class="mt-3 text-xs text-slate-500 space-y-1">
        <li>🕒 Jadwal: 10–14 Ramadan (5 malam terakhir)</li>
        <li>📖 Kegiatan: Itikaf malam, tilawah, dzikir, dan doa bersama</li>
        <li>📍 Lokasi: Masjid Nurhidayah, Palembang</li>
      </ul>
    </div>
  </div>

  <div class="mt-10">
    <div class="flex flex-col items-center justify-center gap-2 text-center">
      <h2 class="text-2xl md:text-3xl font-extrabold text-slate-100">Kegiatan</h2>
      <p class="text-sm text-slate-300"> Rangkuman kegiatan Ramadan SIT Auladi, dirangkum sebagai kenangan bersama.</p>
    </div>

    @php
      $kegiatanSliders = [
        [
          'judul' => 'Itikaf',
          'deskripsi' => 'Pelaksanaan itikaf 5 malam terakhir Ramadan untuk memperkuat ibadah qiyamullail, tilawah, dan dzikir.',
          'tanggal' => '10–14 Ramadan',
          'ikon' => '🕌',
        ],
        [
          'judul' => 'Penutupan Pesantren Kilat',
          'deskripsi' => 'Refleksi materi, murojaah ibadah, dan doa bersama sebagai penutup kegiatan.',
          'tanggal' => '6 Februari 2026',
          'ikon' => '✨',
        ],
        [
          'judul' => 'Bakti Sosial',
          'deskripsi' => 'Penyaluran bantuan sosial serentak kepada masyarakat sekitar sekolah.',
          'tanggal' => '7 Februari 2026',
          'ikon' => '🤝',
        ],
      ];

      $daftarCabang = ['SU II', 'Pakjo', 'Sako', 'Semabor', 'Jakabaring'];
    @endphp

    <div class="mt-6 grid md:grid-cols-3 gap-5">
      @foreach ($kegiatanSliders as $index => $kegiatan)
        <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 p-5 shadow-sm text-center" data-slider="kegiatan-{{ $index }}">
          <div class="relative overflow-hidden rounded-2xl border border-[var(--color-brand-500)]/10 bg-gradient-to-br from-[var(--color-brand-50)] to-white p-3">
            <div class="flex transition-transform duration-500 ease-in-out" data-slider-track>
              @foreach ($daftarCabang as $branchIndex => $cabang)
                <div class="w-full shrink-0">
                  <div class="text-xs font-semibold uppercase tracking-wider text-[var(--color-brand-600)]">{{ $kegiatan['ikon'] }} Cabang {{ $cabang }}</div>
                  <div class="mt-2 aspect-video rounded-xl border border-[var(--color-brand-500)]/15 bg-white/80 flex items-center justify-center text-xs font-medium text-slate-500">
                    Foto Cabang {{ $cabang }}
                  </div>
                </div>
              @endforeach
            </div>

            <button type="button" class="absolute left-2 top-1/2 -translate-y-1/2 rounded-full bg-white/90 px-2 py-1 text-xs font-bold text-[var(--color-brand-700)] shadow" data-slider-prev aria-label="Slide sebelumnya">‹</button>
            <button type="button" class="absolute right-2 top-1/2 -translate-y-1/2 rounded-full bg-white/90 px-2 py-1 text-xs font-bold text-[var(--color-brand-700)] shadow" data-slider-next aria-label="Slide berikutnya">›</button>
          </div>

          <div class="mt-3 flex items-center justify-center gap-2" data-slider-dots>
            @foreach ($daftarCabang as $branchIndex => $cabang)
              <button type="button" class="h-2 w-2 rounded-full bg-slate-300 transition" data-slider-dot="{{ $branchIndex }}" aria-label="Tampilkan cabang {{ $cabang }}"></button>
            @endforeach
          </div>

          <div class="mt-4 font-semibold text-slate-800">{{ $kegiatan['judul'] }}</div>
          <p class="mt-2 text-sm text-slate-600">{{ $kegiatan['deskripsi'] }}</p>
          <div class="mt-3 text-xs text-slate-500 space-y-1">
            <div>📸 Dokumentasi: Slider 1 foto tiap cabang</div>
            <div>🗓️ Tanggal: {{ $kegiatan['tanggal'] }}</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- VIDEO MATERI -->
<section id="materi" class="scroll-mt-28 max-w-6xl mx-auto px-6 pb-16 text-center">
  <h2 class="text-2xl md:text-3xl font-extrabold text-slate-100">Video Materi Tausiyah</h2>
  <p class="mt-2 text-slate-200 max-w-3xl mx-auto">
    Video materi disusun per minggu agar selaras dengan pelaksanaan jadwal tausiyah Ramadan di tiap cabang.
  </p>

  @php
    $videoMateriByMinggu = [
      'Minggu 1' => [
        ['no' => 1, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'TK SU2', 'tema' => 'Makna Ramadan: Tujuan Pendidikan Jiwa', 'youtube_id' => 'oM-jl-4Nytg', 'youtube_url' => 'https://youtube.com/shorts/oM-jl-4Nytg'],
        ['no' => 2, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'TK Pakjo', 'tema' => 'Niat Puasa: Mengapa Niat Itu Penting?', 'youtube_id' => 'L1bVTmnpSAA', 'youtube_url' => 'https://youtube.com/shorts/L1bVTmnpSAA'],
        ['no' => 3, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'TK Sako', 'tema' => 'Puasa Bukan Sekadar Lapar dan Haus', 'youtube_id' => 'fYfJ1X30XZ8', 'youtube_url' => 'https://youtube.com/shorts/fYfJ1X30XZ8'],
        ['no' => 4, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'SU2', 'tema' => 'Ramadan sebagai Kesempatan Memperbaiki Diri', 'youtube_id' => 'g1LZf8SaNFQ', 'youtube_url' => 'https://youtube.com/shorts/g1LZf8SaNFQ'],
        ['no' => 5, 'penceramah' => 'Ust. Nur Muhammad', 'cabang' => 'Pakjo', 'tema' => 'Mengapa Ramadan Disebut Bulan Al-Qur’an', 'youtube_id' => 'lNLMGEL28Vk', 'youtube_url' => 'https://youtube.com/shorts/lNLMGEL28Vk'],
        ['no' => 6, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Sako', 'tema' => 'Keutamaan Orang yang Berpuasa', 'youtube_id' => 'TPTfoo7pQ-E', 'youtube_url' => 'https://youtu.be/TPTfoo7pQ-E'],
        ['no' => 7, 'penceramah' => 'Ust. Sisharyadi', 'cabang' => 'Jakbar', 'tema' => 'Ramadan dan Pengendalian Diri', 'youtube_id' => '-PmRny_9axs', 'youtube_url' => 'https://youtube.com/shorts/-PmRny_9axs'],
      ],
      'Minggu 2' => [
        ['no' => 8, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Semabor', 'tema' => 'Puasa Melatih Kejujuran', 'youtube_id' => 'SHdHZ-W6XYc', 'youtube_url' => 'https://youtube.com/shorts/SHdHZ-W6XYc'],
        ['no' => 9, 'penceramah' => 'Ust. Farurozi', 'cabang' => 'SU2', 'tema' => 'Shalat Tepat Waktu di Bulan Ramadan'],
        ['no' => 10, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Pakjo', 'tema' => 'Keutamaan Membaca Al-Qur’an Setiap Hari', 'youtube_id' => 'yCBWxow2Mxo', 'youtube_url' => 'https://youtube.com/shorts/yCBWxow2Mxo'],
        ['no' => 11, 'penceramah' => 'Ust. Andre', 'cabang' => 'Sako', 'tema' => 'Sedekah di Bulan Ramadan: Kecil tapi Bermakna'],
        ['no' => 12, 'penceramah' => 'Menteri Agama Osis', 'cabang' => 'Jakbar', 'tema' => 'Doa Orang Berpuasa yang Mustajab'],
        ['no' => 13, 'penceramah' => 'Ust. Fikri', 'cabang' => 'Semabor', 'tema' => 'Menjaga Lisan Saat Berpuasa'],
        ['no' => 14, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'SU2', 'tema' => 'Puasa dan Disiplin Waktu'],
      ],
      'Minggu 3' => [
        ['no' => 15, 'penceramah' => 'Ust. Yunus', 'cabang' => 'Pakjo', 'tema' => 'Puasa Mengajarkan Kesabaran'],
        ['no' => 16, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Jakbar', 'tema' => 'Menahan Amarah di Bulan Ramadan'],
        ['no' => 17, 'penceramah' => 'Ust. Ridho', 'cabang' => 'SU2', 'tema' => 'Ramadan dan Sikap Saling Menghargai'],
        ['no' => 18, 'penceramah' => 'Menteri Agama', 'cabang' => 'Semabor', 'tema' => 'Puasa dan Empati kepada Sesama'],
        ['no' => 19, 'penceramah' => 'Ust. Donis', 'cabang' => 'Pakjo', 'tema' => 'Menghindari Ghibah dan Perkataan Buruk'],
        ['no' => 20, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Sako', 'tema' => 'Ramadan sebagai Latihan Akhlak Mulia'],
        ['no' => 21, 'penceramah' => 'Ust. Hafiz', 'cabang' => 'SU2', 'tema' => 'Berbagi dan Peduli di Bulan Ramadan'],
      ],
      'Minggu 4' => [
        ['no' => 22, 'penceramah' => 'Menteri Agama SLHT', 'cabang' => 'Pakjo', 'tema' => 'Makna Idul Fitri: Kembali Suci'],
        ['no' => 23, 'penceramah' => 'Ust. Angga', 'cabang' => 'SU2', 'tema' => 'Zakat Fitrah: Penyempurna Ibadah Puasa'],
        ['no' => 24, 'penceramah' => 'Ust. Agus', 'cabang' => 'Semabor', 'tema' => 'Siapa dan Kapan Membayar Zakat Fitrah?'],
        ['no' => 25, 'penceramah' => 'Ust. Dedi', 'cabang' => 'Pakjo', 'tema' => 'Hikmah Zakat Fitrah bagi Sesama'],
        ['no' => 26, 'penceramah' => 'Ust. Abil', 'cabang' => 'SU2', 'tema' => 'Lailatul Qadar: Malam Lebih Baik dari Seribu Bulan'],
        ['no' => 27, 'penceramah' => 'Ust. Eki', 'cabang' => 'Semabor', 'tema' => 'Ramadan Hampir Usai, Apa yang Kita Dapatkan?'],
        ['no' => 28, 'penceramah' => 'Ust. Muhtarom', 'cabang' => 'Semabor', 'tema' => 'Istiqomah Setelah Ramadan'],
        ['no' => 29, 'penceramah' => 'Ust. Muslim', 'cabang' => 'Semabor', 'tema' => 'Menjaga Ibadah Setelah Idul Fitri'],
      ],
    ];
  @endphp

  <div class="mt-8 space-y-6 text-left">
    @foreach ($videoMateriByMinggu as $minggu => $items)
        <details class="group rounded-3xl border border-[var(--color-brand-500)]/20 bg-white/85 p-5" @if ($minggu === 'Minggu 2') open @endif>
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
                @php
                  $embedUrl = isset($item['youtube_id'])
                    ? 'https://www.youtube.com/embed/'.$item['youtube_id']
                    : 'https://www.youtube.com/embed?listType=search&list='.urlencode('tausiyah Ramadan '.$item['tema'].' '.$item['penceramah']);
                  $embedUrl .= str_contains($embedUrl, '?') ? '&' : '?';
                  $embedUrl .= 'enablejsapi=1&rel=0';
                @endphp

                <iframe
                  id="video-materi-player-{{ $item['no'] }}"
                  class="video-materi-player w-full h-full"
                  loading="lazy"
                  src="{{ $embedUrl }}"
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
  <h2 class="text-2xl md:text-3xl font-extrabold text-slate-100">Jadwal Kegiatan Ramadan</h2>
  <p class="mt-2 text-slate-200 max-w-3xl mx-auto">
    Jadwal berikut mengikuti tema tausiyah Ramadan setiap minggu sesuai cabang.
  </p>

  <div class="mt-8 overflow-x-auto rounded-3xl border border-[var(--color-brand-500)]/20 bg-white/90 shadow-xl shadow-brand-900/10">
    <table class="jadwal-kegiatan-table min-w-full text-sm text-center">
      <thead class="bg-[var(--color-brand-50)] sticky top-0 z-10">
        <tr class="text-center text-slate-700">
          <th class="px-4 py-3 font-bold">No</th>
          <th class="px-6 py-3 font-bold">Penceramah</th>
          <th class="px-6 py-3 font-bold">Cabang</th>
          <th class="px-6 py-3 font-bold">Tema</th>
          <th class="px-4 py-3 font-bold">Instagram</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-[var(--color-brand-500)]/10 text-slate-700">
        <tr class="week-divider bg-gradient-to-r from-[var(--color-brand-50)] to-white font-bold text-[var(--color-brand-700)]">
          <td colspan="5" class="px-6 py-2">MINGGU 1</td>
        </tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">1</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">TK SU2</td><td class="px-6 py-3">Makna Ramadan: Tujuan Pendidikan Jiwa</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DU7utMWka0l/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">2</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">TK Pakjo</td><td class="px-6 py-3">Niat Puasa: Mengapa Niat Itu Penting?</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DU-bEZTk-SE/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">3</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">TK Sako</td><td class="px-6 py-3">Puasa Bukan Sekadar Lapar dan Haus</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVA36ObiTwh/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">4</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Ramadan sebagai Kesempatan Memperbaiki Diri</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVDjq7vEZDy/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Llihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">5</td><td class="px-6 py-3">Ust. Nur Muhammad</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Mengapa Ramadan Disebut Bulan Al-Qur’an</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVGFbZmkzp8/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">6</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Sako</td><td class="px-6 py-3">Keutamaan Orang yang Berpuasa</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVItrK0ia9V/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">7</td><td class="px-6 py-3">Ust. Sisharyadi</td><td class="px-6 py-3">Jakbar</td><td class="px-6 py-3">Ramadan dan Pengendalian Diri</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVLXJLij2Qm/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>

        <tr class="week-divider bg-gradient-to-r from-[var(--color-brand-50)] to-white font-bold text-[var(--color-brand-700)]">
          <td colspan="5" class="px-6 py-2">MINGGU 2</td>
        </tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">8</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Puasa Melatih Kejujuran</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVNx5DSExvY/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">9</td><td class="px-6 py-3">Ust. Farurozi</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Shalat Tepat Waktu di Bulan Ramadan</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVQTOaVEbqB/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">10</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Keutamaan Membaca Al-Qur’an Setiap Hari</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVS4ElYEk7w/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">11</td><td class="px-6 py-3">Ust. Andre</td><td class="px-6 py-3">Sako</td><td class="px-6 py-3">Sedekah di Bulan Ramadan: Kecil tapi Bermakna</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVXOaRFgTeg/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">12</td><td class="px-6 py-3">Menteri Agama Osis</td><td class="px-6 py-3">Jakbar</td><td class="px-6 py-3">Doa Orang Berpuasa yang Mustajab</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVYJN3cDzJZ/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">13</td><td class="px-6 py-3">Ust. Fikri</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Menjaga Lisan Saat Berpuasa</td><td class="px-4 py-3"><a href="https://www.instagram.com/reel/DVap6XsE0li/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0">Lihat</a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">14</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Puasa dan Disiplin Waktu</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Puasa%20dan%20Disiplin%20Waktu%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>

        <tr class="week-divider bg-gradient-to-r from-[var(--color-brand-50)] to-white font-bold text-[var(--color-brand-700)]">
          <td colspan="5" class="px-6 py-2">MINGGU 3</td>
        </tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">15</td><td class="px-6 py-3">Ust. Yunus</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Puasa Mengajarkan Kesabaran</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Puasa%20Mengajarkan%20Kesabaran%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">16</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Jakbar</td><td class="px-6 py-3">Menahan Amarah di Bulan Ramadan</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Menahan%20Amarah%20di%20Bulan%20Ramadan%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">17</td><td class="px-6 py-3">Ust. Ridho</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Ramadan dan Sikap Saling Menghargai</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Ramadan%20dan%20Sikap%20Saling%20Menghargai%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">18</td><td class="px-6 py-3">Menteri Agama</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Puasa dan Empati kepada Sesama</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Puasa%20dan%20Empati%20kepada%20Sesama%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">19</td><td class="px-6 py-3">Ust. Doris</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Menghindari Ghibah dan Perkataan Buruk</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Menghindari%20Ghibah%20dan%20Perkataan%20Buruk%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">20</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Sako</td><td class="px-6 py-3">Ramadan sebagai Latihan Akhlak Mulia</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Ramadan%20sebagai%20Latihan%20Akhlak%20Mulia%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">21</td><td class="px-6 py-3">Ust. Hafiz</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Berbagi dan Peduli di Bulan Ramadan</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Berbagi%20dan%20Peduli%20di%20Bulan%20Ramadan%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>

        <tr class="week-divider bg-gradient-to-r from-[var(--color-brand-50)] to-white font-bold text-[var(--color-brand-700)]">
          <td colspan="5" class="px-6 py-2">MINGGU 4</td>
        </tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">22</td><td class="px-6 py-3">Menteri Agama SLHT</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Makna Idul Fitri: Kembali Suci</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Makna%20Idul%20Fitri%3A%20Kembali%20Suci%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">23</td><td class="px-6 py-3">Ust. Angga</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Zakat Fitrah: Penyempurna Ibadah Puasa</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Zakat%20Fitrah%3A%20Penyempurna%20Ibadah%20Puasa%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">24</td><td class="px-6 py-3">Ust. Agus</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Siapa dan Kapan Membayar Zakat Fitrah?</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Siapa%20dan%20Kapan%20Membayar%20Zakat%20Fitrah%3F%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">25</td><td class="px-6 py-3">Ust. Dedi</td><td class="px-6 py-3">Pakjo</td><td class="px-6 py-3">Hikmah Zakat Fitrah bagi Sesama</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Hikmah%20Zakat%20Fitrah%20bagi%20Sesama%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">26</td><td class="px-6 py-3">Ust. Abil</td><td class="px-6 py-3">SU2</td><td class="px-6 py-3">Lailatul Qadar: Malam Lebih Baik dari Seribu Bulan</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Lailatul%20Qadar%3A%20Malam%20Lebih%20Baik%20dari%20Seribu%20Bulan%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">27</td><td class="px-6 py-3">Ust. Eki</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Ramadan Hampir Usai, Apa yang Kita Dapatkan?</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Ramadan%20Hampir%20Usai%2C%20Apa%20yang%20Kita%20Dapatkan%3F%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">28</td><td class="px-6 py-3">Ust. Muhtarom</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Istiqomah Setelah Ramadan</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Istiqomah%20Setelah%20Ramadan%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
        <tr class="transition-colors hover:bg-blue-50/60"><td class="px-4 py-3">29</td><td class="px-6 py-3">Ust. Muslim</td><td class="px-6 py-3">Semabor</td><td class="px-6 py-3">Menjaga Ibadah Setelah Idul Fitri</td><td class="px-4 py-3"><a href="https://www.instagram.com/explore/search/keyword/?q=Menjaga%20Ibadah%20Setelah%20Idul%20Fitri%20SIT%20Auladi%20Palembang" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-900 ring-1 ring-blue-200 transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-200 hover:shadow-md active:translate-y-0"></a></td></tr>
      </tbody>
    </table>
  </div>
</section>

<script>
  (function setupPhotoSliders() {
    const sliderCards = document.querySelectorAll('[data-slider]');

    sliderCards.forEach((card) => {
      const track = card.querySelector('[data-slider-track]');
      const dots = card.querySelectorAll('[data-slider-dot]');
      const prevBtn = card.querySelector('[data-slider-prev]');
      const nextBtn = card.querySelector('[data-slider-next]');

      if (!track || !dots.length) {
        return;
      }

      let currentIndex = 0;
      const totalSlides = dots.length;

      function renderSlide(index) {
        currentIndex = (index + totalSlides) % totalSlides;
        track.style.transform = `translateX(-${currentIndex * 100}%)`;

        dots.forEach((dot, dotIndex) => {
          const activeClasses = ['bg-[var(--color-brand-500)]', 'scale-110'];

          if (dotIndex === currentIndex) {
            dot.classList.add(...activeClasses);
            dot.classList.remove('bg-slate-300');
          } else {
            dot.classList.remove(...activeClasses);
            dot.classList.add('bg-slate-300');
          }
        });
      }

      prevBtn?.addEventListener('click', () => renderSlide(currentIndex - 1));
      nextBtn?.addEventListener('click', () => renderSlide(currentIndex + 1));

      dots.forEach((dot, dotIndex) => {
        dot.addEventListener('click', () => renderSlide(dotIndex));
      });

      renderSlide(0);
    });
  })();

  (function setupSingleVideoPlayback() {
    const playerIframes = document.querySelectorAll('.video-materi-player');

    if (!playerIframes.length) {
      return;
    }

    const players = new Map();

    function pauseOtherPlayers(activePlayerId) {
      players.forEach((player, playerId) => {
        if (playerId === activePlayerId) {
          return;
        }

        if (typeof player.pauseVideo === 'function') {
          player.pauseVideo();
        }
      });
    }

    window.onYouTubeIframeAPIReady = function onYouTubeIframeAPIReady() {
      playerIframes.forEach((iframe) => {
        const playerId = iframe.id;

        if (!playerId) {
          return;
        }

        const player = new YT.Player(playerId, {
          events: {
            onStateChange: (event) => {
              if (event.data === YT.PlayerState.PLAYING) {
                pauseOtherPlayers(playerId);
              }
            },
          },
        });

        players.set(playerId, player);
      });
    };

    const apiScript = document.createElement('script');
    apiScript.src = 'https://www.youtube.com/iframe_api';
    document.body.appendChild(apiScript);
  })();
</script>

@endsection
