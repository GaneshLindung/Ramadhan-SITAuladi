@extends('layouts.ramadan')

@section('title', 'Kontak - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Kontak & Media Sosial</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">
        Hubungi panitia Ramadhan SIT Auladi untuk pertanyaan kegiatan, jadwal, atau informasi lainnya.
      </p>
    </div>
    <a href="{{ route('home') }}" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
      Kembali ke Beranda →
    </a>
  </div>

  @if(session('success'))
    <div class="mt-6 rounded-2xl border border-emerald-400/20 bg-emerald-400/10 p-4 text-emerald-200">
      {{ session('success') }}
    </div>
  @endif

  <div class="mt-8 grid lg:grid-cols-2 gap-6 items-start">
    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
      <h2 class="text-xl font-bold">Kontak Panitia</h2>

      <div class="mt-5 space-y-3 text-sm text-slate-200">
        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
          <div class="font-semibold">📞 WhatsApp Panitia</div>
          <div class="text-slate-300 mt-1">08xxxxxxxxxx</div>
        </div>
        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
          <div class="font-semibold">✉️ Email Sekolah</div>
          <div class="text-slate-300 mt-1">info@sitauladi.sch.id</div>
        </div>
        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
          <div class="font-semibold">📍 Alamat</div>
          <div class="text-slate-300 mt-1">Isi alamat sekolah di sini</div>
        </div>
      </div>

      <div class="mt-6">
        <div class="text-sm font-semibold">Media Sosial</div>
        <div class="mt-3 flex flex-wrap gap-2 text-sm">
          <a class="px-4 py-2 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition" href="#" target="_blank">Instagram</a>
          <a class="px-4 py-2 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition" href="#" target="_blank">YouTube</a>
          <a class="px-4 py-2 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition" href="#" target="_blank">Facebook</a>
        </div>
      </div>
    </div>

    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
      <h2 class="text-xl font-bold">Kirim Pesan</h2>
      <p class="mt-2 text-sm text-slate-300">Form ini mengirim pesan (sementara hanya validasi & sukses). Bisa dibuat simpan ke MySQL/email.</p>

      <form class="mt-6 space-y-4" method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div>
          <label class="text-sm text-slate-300">Nama</label>
          <input name="name" value="{{ old('name') }}"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="Nama Anda">
          @error('name') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
          <label class="text-sm text-slate-300">WhatsApp (opsional)</label>
          <input name="whatsapp" value="{{ old('whatsapp') }}"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="08xxxxxxxxxx">
          @error('whatsapp') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
          <label class="text-sm text-slate-300">Pesan</label>
          <textarea name="message" rows="4"
            class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
            placeholder="Tulis pesan...">{{ old('message') }}</textarea>
          @error('message') <div class="text-sm text-red-300 mt-1">{{ $message }}</div> @enderror
        </div>

        <button class="w-full px-6 py-3 rounded-2xl bg-emerald-400 text-slate-950 font-semibold hover:bg-emerald-300 transition">
          Kirim Pesan
        </button>
      </form>
    </div>
  </div>
</section>
@endsection
