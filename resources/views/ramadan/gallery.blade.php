@extends('layouts.ramadan')

@section('title', 'Galeri - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Galeri Kegiatan</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">Dokumentasi foto/video kegiatan Ramadhan SIT Auladi.</p>
    </div>
    <a href="{{ route('announcements') }}" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
      Lihat Pengumuman →
    </a>
  </div>

  @php
    $items = [
      ['title'=>'Pesantren Kilat', 'cap'=>'Pembinaan adab dan ibadah harian.', 'img'=>'https://images.unsplash.com/photo-1542810100-99a0c1b0b4b9?auto=format&fit=crop&w=1200&q=70'],
      ['title'=>'Tadarus Bersama', 'cap'=>'Membiasakan cinta Al-Qur’an.', 'img'=>'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=1200&q=70'],
      ['title'=>'Kultum Harian', 'cap'=>'Latih public speaking dan ilmu agama.', 'img'=>'https://images.unsplash.com/photo-1482192505345-5655af888cc4?auto=format&fit=crop&w=1200&q=70'],
      ['title'=>'Zakat & Infak', 'cap'=>'Menumbuhkan kepedulian sosial.', 'img'=>'https://images.unsplash.com/photo-1520975661595-6453be3f7070?auto=format&fit=crop&w=1200&q=70'],
      ['title'=>'Buka Bersama', 'cap'=>'Kebersamaan sekolah & orang tua.', 'img'=>'https://images.unsplash.com/photo-1520975682030-1a4b2b2c932a?auto=format&fit=crop&w=1200&q=70'],
      ['title'=>'Lomba Ramadhan', 'cap'=>'Adzan, hafalan, ceramah, poster.', 'img'=>'https://images.unsplash.com/photo-1520960743086-00f1a2f0e9b1?auto=format&fit=crop&w=1200&q=70'],
    ];
  @endphp

  <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
    @foreach($items as $it)
      <figure class="rounded-3xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="{{ $it['img'] }}" alt="{{ $it['title'] }}" class="h-full w-full object-cover opacity-90 hover:scale-105 transition duration-300">
        </div>
        <figcaption class="p-5">
          <div class="font-bold">{{ $it['title'] }}</div>
          <div class="mt-1 text-sm text-slate-300">{{ $it['cap'] }}</div>
        </figcaption>
      </figure>
    @endforeach
  </div>
</section>
@endsection
