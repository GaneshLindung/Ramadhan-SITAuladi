@extends('layouts.ramadan')

@section('title', 'Pengumuman - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Pengumuman & Informasi Penting</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">Edaran resmi sekolah, perubahan jadwal KBM, libur Ramadhan & Idul Fitri.</p>
    </div>
    <a href="{{ route('schedule') }}" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
      Lihat Jadwal →
    </a>
  </div>

  @php
    $ann = [
      ['title'=>'Edaran Libur Ramadhan & Idul Fitri', 'date'=>'2026-03-10', 'type'=>'Resmi', 'desc'=>'Informasi jadwal libur dan masuk kembali sekolah.'],
      ['title'=>'Perubahan Jadwal KBM Pekan Ini', 'date'=>'2026-03-12', 'type'=>'Update', 'desc'=>'Penyesuaian jam belajar karena kegiatan pesantren kilat.'],
      ['title'=>'Pengumuman Finalis Lomba Ramadhan', 'date'=>'2026-03-18', 'type'=>'Lomba', 'desc'=>'Daftar finalis lomba adzan, ceramah, hafalan, poster, video.'],
    ];
  @endphp

  <div class="mt-8 space-y-4">
    @foreach($ann as $a)
      <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
        <div class="flex flex-wrap items-center gap-2 justify-between">
          <div class="flex items-center gap-2">
            <span class="text-xs px-3 py-1 rounded-full bg-slate-950/40 border border-white/10">{{ $a['type'] }}</span>
            <span class="text-xs text-slate-400">{{ $a['date'] }}</span>
          </div>
        </div>
        <div class="mt-2 font-bold text-lg">{{ $a['title'] }}</div>
        <p class="mt-2 text-sm text-slate-300">{{ $a['desc'] }}</p>
      </div>
    @endforeach
  </div>

  <div class="mt-10 rounded-3xl border border-amber-300/20 bg-amber-300/10 p-6 text-amber-100">
    <div class="font-semibold">Catatan:</div>
    <div class="mt-1 text-sm">
      Pengumuman di halaman ini adalah sumber informasi resmi. Silakan pantau secara berkala.
    </div>
  </div>
</section>
@endsection
