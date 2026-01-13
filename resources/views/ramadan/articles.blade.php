@extends('layouts.ramadan')

@section('title', 'Artikel & Berita - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Berita & Artikel Ramadhan</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">Update kegiatan harian, artikel motivasi, dan karya siswa.</p>
    </div>
    <a href="{{ route('gallery') }}" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
      Lihat Galeri →
    </a>
  </div>

  @php
    $posts = [
      ['title'=>'Hari 1: Pembukaan Kegiatan Ramadhan', 'date'=>'2026-03-01', 'tag'=>'Kegiatan', 'slug'=>'hari-1-pembukaan', 'excerpt'=>'Pembukaan Ramadhan dengan tausiyah dan pengarahan program.'],
      ['title'=>'Motivasi: Menjaga Lisan di Bulan Ramadhan', 'date'=>'2026-03-03', 'tag'=>'Motivasi', 'slug'=>'motivasi-menjaga-lisan', 'excerpt'=>'Ramadhan mengajarkan kontrol diri dan adab berbicara.'],
      ['title'=>'Karya Siswa: Puisi Islami “Bulan Penuh Cahaya”', 'date'=>'2026-03-05', 'tag'=>'Karya Siswa', 'slug'=>'puisi-bulan-penuh-cahaya', 'excerpt'=>'Puisi karya siswa tentang keindahan Ramadhan.'],
    ];
  @endphp

  <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-5">
    @foreach($posts as $p)
      <article class="rounded-3xl border border-white/10 bg-white/5 p-6 hover:bg-white/10 transition">
        <div class="flex items-center justify-between gap-3">
          <span class="text-xs px-3 py-1 rounded-full bg-slate-950/40 border border-white/10 text-slate-200">
            {{ $p['tag'] }}
          </span>
          <span class="text-xs text-slate-400">{{ $p['date'] }}</span>
        </div>
        <h2 class="mt-3 font-bold text-lg leading-snug">{{ $p['title'] }}</h2>
        <p class="mt-2 text-sm text-slate-300">{{ $p['excerpt'] }}</p>
        <a href="{{ route('articles.show', $p['slug']) }}"
           class="mt-4 inline-flex text-sm font-semibold text-emerald-300 hover:text-emerald-200">
          Baca selengkapnya →
        </a>
      </article>
    @endforeach
  </div>
</section>
@endsection
