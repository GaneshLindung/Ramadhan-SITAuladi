@extends('layouts.ramadan')

@section('title', 'Beranda - Ramadhan SIT Auladi')

@section('content')
  <!-- HERO full width background -->
    <section class="relative overflow-hidden">
    <!-- Background layer -->
    <div class="absolute inset-0">
        <img
        src="/images/bg-ramadan.jpg"
        alt="Background Ramadhan SIT Auladi"
        class="h-full w-full object-cover opacity-35"
        >
        <!-- overlay gelap biar teks kebaca -->
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/80 via-slate-950/60 to-slate-950"></div>

        <!-- ornamen blur (optional) -->
        <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-emerald-500/20 blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-amber-300/15 blur-3xl"></div>
    </div>

    <!-- Konten hero -->
    <div class="relative max-w-6xl mx-auto px-6 py-16 md:py-24">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-sm text-slate-200">
        🌙 Selamat menunaikan ibadah puasa Ramadhan
        </div>

        <h1 class="mt-4 text-4xl md:text-6xl font-extrabold leading-tight">
        Welcome to <span class="text-emerald-300">Ramadhan</span>
        </h1>

        <p class="mt-4 text-slate-200/90 text-lg max-w-2xl">
        Tema: <span class="font-semibold text-amber-200">“Ramadhan Berkah, Pelajar Berakhlak”</span>.
        Temukan jadwal, materi, tadarus, galeri, lomba, dan pengumuman resmi SIT Auladi di sini.
        </p>

        <!-- (konten lainnya: countdown, highlight, dll) -->
    </div>

    <div class="h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>
    </section>

  <!-- Banner/Slider sederhana -->
  <section class="max-w-6xl mx-auto px-6 py-14">
    <h2 class="text-3xl font-extrabold">Kegiatan Ramadhan</h2>
    <p class="mt-2 text-slate-300">Banner/slider sederhana (bisa diupgrade jadi dinamis dari DB).</p>

    <div class="mt-6 grid lg:grid-cols-3 gap-5">
      @php
        $banners = [
          ['title'=>'Kultum Harian', 'desc'=>'Kultum sebelum KBM / setelah shalat dhuha.'],
          ['title'=>'Tadarus Bersama', 'desc'=>'Target bacaan & pembiasaan adab Qur’ani.'],
          ['title'=>'Lomba Ramadhan', 'desc'=>'Adzan, ceramah, hafalan, poster, video dakwah.'],
        ];
      @endphp

      @foreach($banners as $b)
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6 hover:bg-white/10 transition">
          <div class="text-sm text-amber-200 font-semibold">Highlight</div>
          <div class="mt-2 text-xl font-bold">{{ $b['title'] }}</div>
          <p class="mt-2 text-sm text-slate-300">{{ $b['desc'] }}</p>
          <a href="{{ route('schedule') }}" class="mt-4 inline-flex text-sm font-semibold text-emerald-300 hover:text-emerald-200">
            Lihat detail →
          </a>
        </div>
      @endforeach
    </div>
  </section>
@endsection
