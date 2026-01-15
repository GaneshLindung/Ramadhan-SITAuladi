@extends('layouts.ramadan')

@section('title', 'Beranda - Ramadhan SIT Auladi Palembang')

@section('content')

<!-- HERO FULL SCREEN -->
<section class="relative h-auto min-h-[calc(100svh-var(--header-h,80px))] md:min-h-[calc(100vh-var(--header-h,80px))] overflow-hidden flex items-start md:items-center pt-4 pb-8 md:py-0">
  <!-- Background -->
  <div class="absolute inset-0">
    <img
      src="{{ asset('images/bg-ramadan.jpg') }}"
      alt="Background Ramadhan"
      class="h-full w-full object-cover opacity-45"
    >

    <!-- Overlay cream (lebih transparan supaya gambar terlihat) -->
    <div class="absolute inset-0 bg-gradient-to-b
                from-[var(--color-brand-50)]/70
                via-[var(--color-brand-50)]/45
                to-white/85"></div>

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
        <circle class="glow" cx="55" cy="130" r="48" fill="rgba(245,127,37,0.20)"/>

        <!-- KUBAH -->
        <path d="M35 72C35 52 55 42 55 42C55 42 75 52 75 72V80H35V72Z"
              fill="rgba(255,255,255,0.9)"
              stroke="rgba(245,127,37,0.6)"
              stroke-width="3"/>

        <!-- BADAN -->
        <ellipse cx="55" cy="120" rx="32" ry="38"
                 fill="rgba(255,255,255,0.9)"
                 stroke="rgba(245,127,37,0.55)"
                 stroke-width="3"/>

        <!-- ORNAMEN -->
        <path d="M23 120H87" stroke="rgba(245,127,37,0.25)" stroke-width="3" stroke-linecap="round"/>
        <path d="M30 102H80" stroke="rgba(245,127,37,0.18)" stroke-width="2" stroke-linecap="round"/>

        <!-- CAHAYA -->
        <path class="light"
              d="M25 160C38 180 72 180 85 160
                 C76 176 66 196 55 196
                 C44 196 34 176 25 160Z"
              fill="rgba(245,127,37,0.22)"/>
      </svg>
    </div>

    <!-- Lentera 2 (sedang) -->
    <div class="lantern right-32 top-6 md:right-64 md:top-10"
         style="--swing:4.4deg; --swing-dur:4.2s; --swing-delay:-1.1s;
                --glow-dur:2.8s; --glow-delay:-.6s; --light-dur:2.2s; --light-delay:-.4s; opacity:0.9;">
      <svg width="95" height="200" viewBox="0 0 110 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M55 0V46" stroke="rgba(60,60,60,0.35)" stroke-width="3" stroke-linecap="round"/>
        <circle cx="55" cy="54" r="7" fill="rgba(60,60,60,0.18)"/>

        <circle class="glow" cx="55" cy="130" r="44" fill="rgba(245,127,37,0.17)"/>

        <path d="M37 74C37 56 55 46 55 46C55 46 73 56 73 74V82H37V74Z"
              fill="rgba(255,255,255,0.88)"
              stroke="rgba(245,127,37,0.58)"
              stroke-width="3"/>

        <ellipse cx="55" cy="122" rx="29" ry="35"
                 fill="rgba(255,255,255,0.88)"
                 stroke="rgba(245,127,37,0.52)"
                 stroke-width="3"/>

        <path d="M28 122H82" stroke="rgba(245,127,37,0.22)" stroke-width="3" stroke-linecap="round"/>

        <path class="light"
              d="M28 160C40 178 70 178 82 160
                 C74 174 64 192 55 192
                 C46 192 36 174 28 160Z"
              fill="rgba(245,127,37,0.19)"/>
      </svg>
    </div>

    <!-- Lentera 3 (kecil) -->
    <div class="lantern right-2 top-0 md:right-20 md:top-2"
         style="--swing:2.6deg; --swing-dur:3.3s; --swing-delay:-.7s;
                --glow-dur:2.0s; --glow-delay:-.3s; --light-dur:1.6s; --light-delay:-.2s; opacity:0.85;">
      <svg width="80" height="175" viewBox="0 0 110 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M55 0V46" stroke="rgba(60,60,60,0.35)" stroke-width="3" stroke-linecap="round"/>
        <circle cx="55" cy="54" r="7" fill="rgba(60,60,60,0.18)"/>

        <circle class="glow" cx="55" cy="130" r="38" fill="rgba(245,127,37,0.14)"/>

        <path d="M39 78C39 62 55 54 55 54C55 54 71 62 71 78V86H39V78Z"
              fill="rgba(255,255,255,0.86)"
              stroke="rgba(245,127,37,0.48)"
              stroke-width="3"/>

        <ellipse cx="55" cy="126" rx="25" ry="30"
                 fill="rgba(255,255,255,0.86)"
                 stroke="rgba(245,127,37,0.45)"
                 stroke-width="3"/>

        <path d="M33 126H77" stroke="rgba(245,127,37,0.18)" stroke-width="3" stroke-linecap="round"/>

        <path class="light"
              d="M32 160C42 172 68 172 78 160
                 C71 171 62 184 55 184
                 C48 184 39 171 32 160Z"
              fill="rgba(245,127,37,0.16)"/>
      </svg>
    </div>

  </div>

  <!-- Content -->
  <div class="relative w-full">
    <div class="max-w-6xl mx-auto px-6">
      <div class="w-full md:max-w-3xl">

        <!-- Ucapan -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full translate-y-0 md:translate-y-5
                    bg-white/70 border border-[var(--color-brand-500)]/20 backdrop-blur
                    text-sm text-slate-700">
          🌙 Selamat Menunaikan Ibadah Puasa Ramadhan
        </div>

        <h1 class="mt-4 text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-slate-800">
          Ramadhan Kareem
          <span class="block text-[var(--color-brand-500)] mt-1">
            SIT Auladi Palembang
          </span>
        </h1>

        <p class="mt-3 text-slate-700/90 text-lg leading-relaxed">
          Semoga Ramadhan ini membawa berkah, memperkuat iman, dan membentuk pelajar berakhlak mulia.
        </p>

        <!-- Countdown -->
        <div class="mt-6 max-w-xl rounded-3xl border border-[var(--color-brand-500)]/25
                    bg-gradient-to-br from-white/90 via-white/70 to-[var(--color-brand-50)]/80
                    backdrop-blur p-6 shadow-lg shadow-[var(--color-brand-500)]/10">
          <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-3">
              <div class="flex h-12 w-12 items-center justify-center rounded-2xl
                          bg-[var(--color-brand-500)]/10 text-2xl">
                ✨
              </div>
              <div>
                <div class="text-xs uppercase tracking-widest text-[var(--color-brand-600)]">
                  Countdown menuju
                </div>
                <div class="text-2xl font-extrabold text-slate-800">Idul Fitri</div>
              </div>
            </div>

            <a href="#jadwal"
               class="inline-flex items-center gap-2 px-4 py-2 rounded-xl
                      bg-[var(--color-brand-500)] text-white font-semibold
                      shadow-md shadow-[var(--color-brand-500)]/30
                      hover:bg-[var(--color-brand-600)] transition">
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

<!-- KEGIATAN -->
<section id="kegiatan" class="scroll-mt-28 max-w-6xl mx-auto px-6 pb-16 mt-10">
  <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800">Kegiatan Ramadhan</h2>
  <p class="mt-2 text-slate-600 max-w-2xl">
    Rangkaian kegiatan Ramadhan SIT Auladi disusun untuk memperkuat ibadah, karakter, dan kebersamaan.
    Setiap kegiatan didampingi guru pembina dan terdokumentasi secara berkala.
  </p>

  <div class="mt-8 grid md:grid-cols-3 gap-5">
    <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 backdrop-blur p-6 shadow-sm">
      <div class="text-2xl">🏫</div>
      <div class="mt-2 font-bold text-slate-800">Pesantren Kilat</div>
      <p class="mt-2 text-sm text-slate-600">
        Pembinaan iman, adab, dan ibadah siswa dengan materi fiqih puasa, akhlak, serta praktik ibadah harian.
      </p>
      <ul class="mt-3 text-xs text-slate-500 space-y-1">
        <li>📅 Pekan 1-2 Ramadhan</li>
        <li>👥 Pembina: Ustaz/Ustazah SIT Auladi</li>
        <li>📍 Ruang kelas & musala</li>
      </ul>
    </div>

    <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 backdrop-blur p-6 shadow-sm">
      <div class="text-2xl">🤲</div>
      <div class="mt-2 font-bold text-slate-800">Zakat & Infak</div>
      <p class="mt-2 text-sm text-slate-600">
        Menumbuhkan kepedulian sosial melalui pengumpulan dan penyaluran zakat/infak bersama komite sekolah.
      </p>
      <ul class="mt-3 text-xs text-slate-500 space-y-1">
        <li>🧺 Pengumpulan: setiap pagi</li>
        <li>🤝 Penyaluran: menjelang akhir Ramadhan</li>
        <li>📍 Posko amal sekolah</li>
      </ul>
    </div>

    <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 backdrop-blur p-6 shadow-sm">
      <div class="text-2xl">🍽️</div>
      <div class="mt-2 font-bold text-slate-800">Buka Bersama</div>
      <p class="mt-2 text-sm text-slate-600">
        Momen kebersamaan siswa, guru, dan orang tua disertai tausiyah singkat serta doa bersama.
      </p>
      <ul class="mt-3 text-xs text-slate-500 space-y-1">
        <li>🕒 16.30 - 19.00 WIB</li>
        <li>🍱 Menu iftar sehat bersama</li>
        <li>📍 Aula utama</li>
      </ul>
    </div>
  </div>

  <div class="mt-10">
    <div class="flex items-center justify-between flex-wrap gap-3">
      <h3 class="text-xl font-bold text-slate-800">Dokumentasi Kegiatan</h3>
      <p class="text-sm text-slate-500">Ringkasan dokumentasi per kegiatan untuk arsip sekolah.</p>
    </div>

    <div class="mt-6 grid md:grid-cols-3 gap-5">
      <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 p-5 shadow-sm">
        <div class="h-36 rounded-2xl bg-gradient-to-br from-[var(--color-brand-50)] to-white border border-[var(--color-brand-500)]/10 flex items-center justify-center text-sm text-slate-500">
          Foto Pesantren Kilat
        </div>
        <div class="mt-4 font-semibold text-slate-800">Hari Pembukaan Pesantren</div>
        <p class="mt-2 text-sm text-slate-600">Pembacaan ayat suci, tausiyah, dan kontrak belajar Ramadhan.</p>
        <div class="mt-3 text-xs text-slate-500 space-y-1">
          <div>📸 Dokumentasi: Tim Humas</div>
          <div>🗓️ Tanggal: 12 Ramadhan</div>
        </div>
      </div>

      <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 p-5 shadow-sm">
        <div class="h-36 rounded-2xl bg-gradient-to-br from-[var(--color-brand-50)] to-white border border-[var(--color-brand-500)]/10 flex items-center justify-center text-sm text-slate-500">
          Foto Tadarus & Kultum
        </div>
        <div class="mt-4 font-semibold text-slate-800">Tadarus Pagi Bersama</div>
        <p class="mt-2 text-sm text-slate-600">Kegiatan tadarus 1 juz per pekan dilanjutkan kultum siswa.</p>
        <div class="mt-3 text-xs text-slate-500 space-y-1">
          <div>📸 Dokumentasi: Wali kelas</div>
          <div>🗓️ Tanggal: 14-20 Ramadhan</div>
        </div>
      </div>

      <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 p-5 shadow-sm">
        <div class="h-36 rounded-2xl bg-gradient-to-br from-[var(--color-brand-50)] to-white border border-[var(--color-brand-500)]/10 flex items-center justify-center text-sm text-slate-500">
          Foto Buka Bersama
        </div>
        <div class="mt-4 font-semibold text-slate-800">Iftar & Doa Bersama</div>
        <p class="mt-2 text-sm text-slate-600">Kebersamaan seluruh keluarga besar SIT Auladi.</p>
        <div class="mt-3 text-xs text-slate-500 space-y-1">
          <div>📸 Dokumentasi: OSIS & Panitia</div>
          <div>🗓️ Tanggal: 22 Ramadhan</div>
        </div>
      </div>
    </div>

    <details class="mt-6 group">
      <summary class="inline-flex items-center gap-2 rounded-2xl border border-[var(--color-brand-500)]/30 bg-white/80 px-5 py-2 text-sm font-semibold text-[var(--color-brand-600)] transition hover:border-[var(--color-brand-500)]/60">
        Lihat lainnya
        <span class="text-lg leading-none transition group-open:rotate-90">›</span>
      </summary>
      <div class="mt-5 grid md:grid-cols-3 gap-5">
        <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 p-5 shadow-sm">
          <div class="h-36 rounded-2xl bg-gradient-to-br from-[var(--color-brand-50)] to-white border border-[var(--color-brand-500)]/10 flex items-center justify-center text-sm text-slate-500">
            Foto Bakti Sosial
          </div>
          <div class="mt-4 font-semibold text-slate-800">Aksi Berbagi Sembako</div>
          <p class="mt-2 text-sm text-slate-600">Kunjungan siswa ke panti asuhan disertai pembagian paket sembako.</p>
          <div class="mt-3 text-xs text-slate-500 space-y-1">
            <div>📸 Dokumentasi: Tim Humas</div>
            <div>🗓️ Tanggal: 18 Ramadhan</div>
          </div>
        </div>

        <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 p-5 shadow-sm">
          <div class="h-36 rounded-2xl bg-gradient-to-br from-[var(--color-brand-50)] to-white border border-[var(--color-brand-500)]/10 flex items-center justify-center text-sm text-slate-500">
            Foto Kelas Inspiratif
          </div>
          <div class="mt-4 font-semibold text-slate-800">Kelas Adab & Akhlak</div>
          <p class="mt-2 text-sm text-slate-600">Diskusi interaktif tentang adab berbicara dan bersosial media.</p>
          <div class="mt-3 text-xs text-slate-500 space-y-1">
            <div>📸 Dokumentasi: Guru BK</div>
            <div>🗓️ Tanggal: 20 Ramadhan</div>
          </div>
        </div>

        <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 p-5 shadow-sm">
          <div class="h-36 rounded-2xl bg-gradient-to-br from-[var(--color-brand-50)] to-white border border-[var(--color-brand-500)]/10 flex items-center justify-center text-sm text-slate-500">
            Foto Lomba Islami
          </div>
          <div class="mt-4 font-semibold text-slate-800">Lomba Adzan & Tartil</div>
          <p class="mt-2 text-sm text-slate-600">Penampilan siswa terbaik dalam lomba adzan dan tartil Al-Qur'an.</p>
          <div class="mt-3 text-xs text-slate-500 space-y-1">
            <div>📸 Dokumentasi: OSIS</div>
            <div>🗓️ Tanggal: 24 Ramadhan</div>
          </div>
        </div>
      </div>
    </details>
  </div>
</section>

<!-- VIDEO MATERI -->
<section id="materi" class="scroll-mt-28 max-w-6xl mx-auto px-6 pb-16">
  <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800">Video Materi</h2>
  <p class="mt-2 text-slate-600 max-w-2xl">
    Materi Ramadhan untuk siswa dan orang tua, berisi penguatan ibadah, adab, dan motivasi belajar.
    Silakan ganti tautan video YouTube sesuai kebutuhan.
  </p>

  <div class="mt-8 grid md:grid-cols-2 gap-6">
    <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 p-6 shadow-sm">
      <div class="font-bold text-slate-800">Kajian Ramadhan: Adab Puasa</div>
      <div class="mt-2 text-sm text-slate-600">
        Pemateri: Ustaz Ahmad | Durasi: 18 menit | Target: SD-SMP
      </div>
      <div class="mt-4 aspect-video rounded-2xl overflow-hidden border border-[var(--color-brand-500)]/10">
        <iframe class="w-full h-full"
          src="https://www.youtube.com/embed/dQw4w9WgXcQ"
          title="Video Materi"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
    </div>

    <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 p-6 shadow-sm">
      <div class="font-bold text-slate-800">Kultum Singkat: Keutamaan Ramadhan</div>
      <div class="mt-2 text-sm text-slate-600">
        Pemateri: Ustazah Nisa | Durasi: 12 menit | Target: TK-SD
      </div>
      <div class="mt-4 aspect-video rounded-2xl overflow-hidden border border-[var(--color-brand-500)]/10">
        <iframe class="w-full h-full"
          src="https://www.youtube.com/embed/dQw4w9WgXcQ"
          title="Video Materi"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <details class="mt-6 group">
    <summary class="inline-flex items-center gap-2 rounded-2xl border border-[var(--color-brand-500)]/30 bg-white/80 px-5 py-2 text-sm font-semibold text-[var(--color-brand-600)] transition hover:border-[var(--color-brand-500)]/60">
      Lihat lainnya
      <span class="text-lg leading-none transition group-open:rotate-90">›</span>
    </summary>
    <div class="mt-5 grid md:grid-cols-2 gap-6">
      <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 p-6 shadow-sm">
        <div class="font-bold text-slate-800">Motivasi Belajar: Ramadhan Produktif</div>
        <div class="mt-2 text-sm text-slate-600">
          Pemateri: Tim BK | Durasi: 15 menit | Target: SMP
        </div>
        <div class="mt-4 aspect-video rounded-2xl overflow-hidden border border-[var(--color-brand-500)]/10">
          <iframe class="w-full h-full"
            src="https://www.youtube.com/embed/dQw4w9WgXcQ"
            title="Video Materi"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>

      <div class="rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/80 p-6 shadow-sm">
        <div class="font-bold text-slate-800">Fiqih Puasa: Tanya Jawab</div>
        <div class="mt-2 text-sm text-slate-600">
          Pemateri: Ustaz Khalid | Durasi: 20 menit | Target: Orang tua
        </div>
        <div class="mt-4 aspect-video rounded-2xl overflow-hidden border border-[var(--color-brand-500)]/10">
          <iframe class="w-full h-full"
            src="https://www.youtube.com/embed/dQw4w9WgXcQ"
            title="Video Materi"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </details>
</section>

<!-- JADWAL -->
<section id="jadwal" class="scroll-mt-28 max-w-6xl mx-auto px-6 pb-16">
  <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800">Jadwal Kegiatan Ramadhan</h2>
  <p class="mt-2 text-slate-600 max-w-2xl">
    Jadwal berikut dapat disesuaikan oleh wali kelas dan panitia. Waktu bersifat estimasi dan
    dapat berubah sesuai kondisi sekolah.
  </p>

  <div class="mt-8 overflow-x-auto rounded-3xl border border-[var(--color-brand-500)]/15 bg-white/85 shadow-sm">
    <table class="min-w-full text-sm">
      <thead class="bg-[var(--color-brand-50)]">
        <tr class="text-left text-slate-700">
          <th class="px-6 py-4 font-bold">Tanggal</th>
          <th class="px-6 py-4 font-bold">Kegiatan</th>
          <th class="px-6 py-4 font-bold">Waktu</th>
          <th class="px-6 py-4 font-bold">Tempat</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-[var(--color-brand-500)]/10">
        <tr class="text-slate-700">
          <td class="px-6 py-4">Senin, 11 Maret</td>
          <td class="px-6 py-4">Pembukaan Ramadhan & Tausiyah</td>
          <td class="px-6 py-4">07.30 - 09.00</td>
          <td class="px-6 py-4">Aula</td>
        </tr>
        <tr class="text-slate-700">
          <td class="px-6 py-4">Selasa, 12 Maret</td>
          <td class="px-6 py-4">Pesantren Kilat: Fiqih Puasa</td>
          <td class="px-6 py-4">08.00 - 10.00</td>
          <td class="px-6 py-4">Kelas</td>
        </tr>
        <tr class="text-slate-700">
          <td class="px-6 py-4">Rabu, 13 Maret</td>
          <td class="px-6 py-4">Tadarus & Kultum Siswa</td>
          <td class="px-6 py-4">07.00 - 08.00</td>
          <td class="px-6 py-4">Musala</td>
        </tr>
        <tr class="text-slate-700">
          <td class="px-6 py-4">Kamis, 14 Maret</td>
          <td class="px-6 py-4">Kelas Karakter: Adab Berpuasa</td>
          <td class="px-6 py-4">09.30 - 11.00</td>
          <td class="px-6 py-4">Aula</td>
        </tr>
        <tr class="text-slate-700">
          <td class="px-6 py-4">Jumat, 15 Maret</td>
          <td class="px-6 py-4">Pengumpulan Zakat & Infak</td>
          <td class="px-6 py-4">07.00 - 08.30</td>
          <td class="px-6 py-4">Posko Amal</td>
        </tr>
        <tr class="text-slate-700">
          <td class="px-6 py-4">Jumat, 22 Maret</td>
          <td class="px-6 py-4">Buka Bersama & Doa</td>
          <td class="px-6 py-4">16.30 - 19.00</td>
          <td class="px-6 py-4">Aula</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

@endsection