@extends('layouts.ramadan')

@section('title', 'Materi Video - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Materi Ramadhan (Video)</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">
        Kumpulan video ceramah singkat, fiqih puasa, akhlak & adab Ramadhan, serta kultum siswa.
      </p>
    </div>
    <a href="https://youtube.com" target="_blank"
      class="px-4 py-2 rounded-xl bg-emerald-400 text-slate-950 font-semibold hover:bg-emerald-300 transition">
      YouTube Sekolah
    </a>
  </div>

  @php
    $videos = [
      ['title'=>'Fiqih Puasa: Niat & Hal yang Membatalkan', 'speaker'=>'Ust. A', 'id'=>'aqz-KE-bpKQ', 'tag'=>'Fiqih'],
      ['title'=>'Adab Ramadhan di Sekolah & Rumah', 'speaker'=>'Ustz. B', 'id'=>'dQw4w9WgXcQ', 'tag'=>'Adab'],
      ['title'=>'Kultum Siswa: Keutamaan Sedekah', 'speaker'=>'Siswa', 'id'=>'aqz-KE-bpKQ', 'tag'=>'Kultum'],
    ];
    $main = $videos[0];
  @endphp

  <div class="mt-8 grid lg:grid-cols-2 gap-6">
    <div class="rounded-3xl overflow-hidden border border-white/10 bg-white/5">
      <div class="aspect-video">
        <iframe class="w-full h-full"
          src="https://www.youtube.com/embed/{{ $main['id'] }}"
          title="Video Utama" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
      <div class="p-6">
        <div class="flex items-center justify-between gap-3">
          <div class="font-bold text-lg">{{ $main['title'] }}</div>
          <span class="text-xs px-3 py-1 rounded-full bg-amber-300 text-slate-950 font-semibold">{{ $main['tag'] }}</span>
        </div>
        <div class="mt-1 text-sm text-slate-300">Pemateri: {{ $main['speaker'] }}</div>
      </div>
    </div>

    <div class="space-y-4">
      @foreach($videos as $v)
        <div class="rounded-3xl border border-white/10 bg-white/5 p-5 flex gap-4 items-start">
          <div class="h-12 w-12 rounded-2xl bg-slate-950/40 border border-white/10 flex items-center justify-center text-xl">🎥</div>
          <div class="flex-1">
            <div class="flex flex-wrap items-center gap-2">
              <div class="font-semibold">{{ $v['title'] }}</div>
              <span class="text-xs px-2 py-1 rounded-full border border-white/10 bg-white/5">{{ $v['tag'] }}</span>
            </div>
            <div class="text-sm text-slate-300 mt-1">Pemateri: {{ $v['speaker'] }}</div>
            <a class="inline-flex mt-3 text-sm font-semibold text-emerald-300 hover:text-emerald-200"
               href="https://www.youtube.com/watch?v={{ $v['id'] }}" target="_blank">
              Tonton di YouTube →
            </a>
          </div>
        </div>
      @endforeach

      <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
        <div class="font-bold">Unduhan Materi (Opsional)</div>
        <p class="mt-2 text-sm text-slate-300">Nanti bisa ditambahkan link PDF/slide materi dari sekolah.</p>
        <div class="mt-4 flex gap-2 flex-wrap">
          <span class="px-3 py-2 rounded-2xl bg-slate-950/40 border border-white/10 text-sm">📄 Materi Fiqih Puasa (PDF)</span>
          <span class="px-3 py-2 rounded-2xl bg-slate-950/40 border border-white/10 text-sm">📄 Adab Ramadhan (PDF)</span>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
