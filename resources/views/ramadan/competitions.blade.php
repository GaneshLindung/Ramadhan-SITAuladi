@extends('layouts.ramadan')

@section('title', 'Lomba Ramadhan - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Lomba Ramadhan</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">Pendaftaran lomba untuk siswa. Pengumuman pemenang dapat diposting di halaman Pengumuman.</p>
    </div>
    <a href="{{ route('announcements') }}" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
      Lihat Pengumuman →
    </a>
  </div>

  @if(session('success'))
    <div class="mt-6 rounded-2xl border border-emerald-400/20 bg-emerald-400/10 p-4 text-emerald-200">
      {{ session('success') }}
    </div>
  @endif

  @php
    $comps = [
      ['name'=>'Lomba Adzan', 'desc'=>'Penilaian: makhraj, tajwid, adab, suara.'],
      ['name'=>'Lomba Ceramah', 'desc'=>'Penilaian: materi, penyampaian, adab.'],
      ['name'=>'Lomba Hafalan', 'desc'=>'Penilaian: kelancaran, tajwid, ketepatan.'],
      ['name'=>'Lomba Poster Ramadhan', 'desc'=>'Penilaian: kreativitas, pesan, kerapian.'],
      ['name'=>'Lomba Video Dakwah', 'desc'=>'Penilaian: konten, kreativitas, durasi.'],
    ];
  @endphp

  <div class="mt-8 grid lg:grid-cols-2 gap-6 items-start">
    <div class="grid sm:grid-cols-2 gap-4">
      @foreach($comps as $c)
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
          <div class="text-2xl">🏆</div>
          <div class="mt-2 font-bold">{{ $c['name'] }}</div>
          <p class="mt-2 text-sm text-slate-300">{{ $c['desc'] }}</p>
        </div>
      @endforeach
    </div>

    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
      <h2 class="text-xl font-bold">Form Pendaftaran Lomba</h2>
      <p class="mt-2 text-sm text-slate-300">Isi data. (Nanti versi MySQL bisa menyimpan pendaftaran.)</p>

      <form class="mt-6 space-y-4" method="POST" action="{{ route('competitions.register') }}">
        @csrf

        <div>
          <label class="text-sm text-slate-300">Nama Siswa</label>
          <input name="student_name" value="{{ old('student_name') }}"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="Nama lengkap">
          @error('student_name') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
          <label class="text-sm text-slate-300">Kelas</label>
          <input name="class" value="{{ old('class') }}"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="Contoh: 4B">
          @error('class') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
          <label class="text-sm text-slate-300">Pilih Lomba</label>
          <select name="competition"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400">
            <option value="">-- Pilih --</option>
            @foreach($comps as $c)
              <option value="{{ $c['name'] }}" @selected(old('competition')===$c['name'])>{{ $c['name'] }}</option>
            @endforeach
          </select>
          @error('competition') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
          <label class="text-sm text-slate-300">WhatsApp (opsional)</label>
          <input name="whatsapp" value="{{ old('whatsapp') }}"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="08xxxxxxxxxx">
          @error('whatsapp') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <button
          class="w-full px-6 py-3 rounded-2xl bg-amber-300 text-slate-950 font-semibold hover:bg-amber-200 transition">
          Kirim Pendaftaran
        </button>

        <p class="text-xs text-slate-400">
          Pastikan data benar. Informasi lanjutan akan disampaikan melalui pengumuman sekolah.
        </p>
      </form>
    </div>
  </div>
</section>
@endsection
