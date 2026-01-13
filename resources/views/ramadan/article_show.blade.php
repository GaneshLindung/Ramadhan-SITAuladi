@extends('layouts.ramadan')

@section('title', 'Artikel - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <a href="{{ route('articles') }}" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
    ← Kembali ke Artikel
  </a>

  <div class="mt-6 rounded-3xl border border-white/10 bg-white/5 p-6 md:p-10">
    <div class="text-xs text-slate-400">Slug: {{ $slug }}</div>
    <h1 class="mt-2 text-3xl md:text-4xl font-extrabold">Judul Artikel (Contoh)</h1>
    <p class="mt-2 text-slate-300">Tanggal: 2026-03-01 • Kategori: Kegiatan</p>

    <div class="mt-8 prose prose-invert max-w-none prose-p:text-slate-200/90 prose-headings:text-white">
      <p>
        Ini adalah halaman detail artikel. Nanti versi MySQL akan mengambil judul, isi, tanggal, dan penulis berdasarkan slug.
      </p>
      <p>
        Kamu bisa isi konten kegiatan Ramadhan harian, artikel motivasi, atau karya siswa seperti cerpen/puisi islami.
      </p>
      <ul>
        <li>Update kegiatan</li>
        <li>Motivasi Ramadhan</li>
        <li>Karya siswa</li>
      </ul>
    </div>
  </div>
</section>
@endsection
