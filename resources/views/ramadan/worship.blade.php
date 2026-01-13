@extends('layouts.ramadan')

@section('title', 'Tadarus & Laporan Ibadah - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Tadarus & Target Ibadah</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">
        Siswa dapat mengisi laporan ibadah harian untuk memantau progres tadarus dan pembiasaan Ramadhan.
      </p>
    </div>
    <a href="{{ route('videos') }}" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
      Lihat Materi →
    </a>
  </div>

  @if(session('success'))
    <div class="mt-6 rounded-2xl border border-emerald-400/20 bg-emerald-400/10 p-4 text-emerald-200">
      {{ session('success') }}
    </div>
  @endif

  <div class="mt-8 grid lg:grid-cols-2 gap-6 items-start">
    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
      <h2 class="text-xl font-bold">Target Harian (Contoh)</h2>
      @php
        $targets = [
          ['t'=>'Tadarus', 'd'=>'Minimal 2 halaman/hari'],
          ['t'=>'Shalat Dhuha', 'd'=>'Minimal 2 rakaat'],
          ['t'=>'Sedekah', 'd'=>'Koin sedekah / infak'],
          ['t'=>'Adab', 'd'=>'Jaga lisan & disiplin waktu'],
        ];
      @endphp

      <div class="mt-5 grid sm:grid-cols-2 gap-4 text-sm">
        @foreach($targets as $t)
          <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
            <div class="font-semibold">{{ $t['t'] }}</div>
            <div class="mt-1 text-slate-300">{{ $t['d'] }}</div>
          </div>
        @endforeach
      </div>

      <div class="mt-6 rounded-2xl border border-white/10 bg-slate-950/40 p-4 text-sm text-slate-300">
        Catatan: Target dapat disesuaikan oleh sekolah/ wali kelas.
      </div>
    </div>

    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
      <h2 class="text-xl font-bold">Form Laporan Ibadah Harian</h2>
      <p class="mt-2 text-sm text-slate-300">Isi data dengan benar. (Versi MySQL bisa menyimpan data.)</p>

      <form class="mt-6 space-y-4" method="POST" action="{{ route('worship.store') }}">
        @csrf

        <div>
          <label class="text-sm text-slate-300">Nama Siswa</label>
          <input name="name" value="{{ old('name') }}"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="Nama lengkap">
          @error('name') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
          <label class="text-sm text-slate-300">Kelas</label>
          <input name="class" value="{{ old('class') }}"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="Contoh: 5A">
          @error('class') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
          <label class="text-sm text-slate-300">Jumlah Halaman Tadarus (opsional)</label>
          <input type="number" name="tadarus_pages" value="{{ old('tadarus_pages') }}"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="Contoh: 2">
          @error('tadarus_pages') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
          <label class="text-sm text-slate-300">Catatan (opsional)</label>
          <textarea name="notes" rows="3"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="Misal: sudah shalat dhuha, sedekah, dsb">{{ old('notes') }}</textarea>
          @error('notes') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <button
          class="w-full px-6 py-3 rounded-2xl bg-emerald-400 text-slate-950 font-semibold hover:bg-emerald-300 transition">
          Kirim Laporan
        </button>

        <p class="text-xs text-slate-400">
          Data ini digunakan untuk pemantauan pembiasaan Ramadhan. (Nanti bisa dibuat akun siswa bila diperlukan.)
        </p>
      </form>
    </div>
  </div>
</section>
@endsection
