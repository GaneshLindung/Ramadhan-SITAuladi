@extends('layouts.ramadan')

@section('title', 'Profil & Tujuan - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Profil & Tujuan Kegiatan Ramadhan</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">
        Halaman ini menjelaskan latar belakang, sasaran, dan nilai-nilai yang ingin dibangun dalam program Ramadhan SIT Auladi.
      </p>
    </div>
    <a href="{{ route('schedule') }}"
       class="px-4 py-2 rounded-xl bg-amber-300 text-slate-950 font-semibold hover:bg-amber-200 transition">
      Lihat Jadwal
    </a>
  </div>

  <div class="mt-8 grid lg:grid-cols-3 gap-5">
    <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
      <div class="text-2xl">🎯</div>
      <h2 class="mt-2 font-bold text-lg">Tujuan Program</h2>
      <ul class="mt-3 text-sm text-slate-300 space-y-2 list-disc list-inside">
        <li>Meningkatkan keimanan dan ketakwaan siswa</li>
        <li>Membiasakan ibadah Ramadhan (puasa, tadarus, sedekah)</li>
        <li>Menguatkan adab dan akhlak mulia</li>
        <li>Menumbuhkan kepedulian sosial dan berbagi</li>
      </ul>
    </div>

    <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
      <div class="text-2xl">👥</div>
      <h2 class="mt-2 font-bold text-lg">Sasaran</h2>
      <p class="mt-3 text-sm text-slate-300 leading-relaxed">
        Program ditujukan untuk seluruh civitas sekolah:
      </p>
      <div class="mt-4 grid gap-3">
        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4 text-sm">
          <div class="font-semibold">Siswa</div>
          <div class="text-slate-300">Pembiasaan ibadah & karakter</div>
        </div>
        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4 text-sm">
          <div class="font-semibold">Guru</div>
          <div class="text-slate-300">Pendampingan & keteladanan</div>
        </div>
        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4 text-sm">
          <div class="font-semibold">Orang Tua</div>
          <div class="text-slate-300">Kolaborasi pembiasaan di rumah</div>
        </div>
      </div>
    </div>

    <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
      <div class="text-2xl">🌙</div>
      <h2 class="mt-2 font-bold text-lg">Tema Ramadhan</h2>
      <p class="mt-3 text-slate-300 leading-relaxed">
        <span class="font-semibold text-amber-200">“Ramadhan Berkah, Pelajar Berakhlak”</span>
      </p>
      <p class="mt-3 text-sm text-slate-300 leading-relaxed">
        Tema ini menekankan pembentukan akhlak dan pembiasaan ibadah yang konsisten, baik di sekolah maupun di rumah.
      </p>
    </div>
  </div>

  <div class="mt-10 rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
    <h2 class="text-2xl font-bold">Nilai-nilai yang Dibangun</h2>
    <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-4 text-sm">
      @php
        $values = [
          ['t'=>'Iman', 'd'=>'Menguatkan aqidah & ketakwaan'],
          ['t'=>'Disiplin', 'd'=>'Tertib jadwal dan konsisten ibadah'],
          ['t'=>'Adab', 'd'=>'Santun, hormat, dan jujur'],
          ['t'=>'Peduli Sosial', 'd'=>'Zakat, infak, sedekah, berbagi'],
        ];
      @endphp
      @foreach($values as $v)
        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
          <div class="font-semibold">{{ $v['t'] }}</div>
          <div class="mt-1 text-slate-300">{{ $v['d'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
