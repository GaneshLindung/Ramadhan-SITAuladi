@extends('layouts.ramadan')

@section('title', 'Jadwal Kegiatan - Ramadhan SIT Auladi')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12 md:py-16">
  <div class="flex flex-wrap items-end justify-between gap-6">
    <div>
      <h1 class="text-3xl md:text-4xl font-extrabold">Jadwal Kegiatan Ramadhan</h1>
      <p class="mt-2 text-slate-300 max-w-2xl">
        Jadwal untuk siswa, guru, dan orang tua. (Sementara statis—nanti bisa dibuat dinamis dari MySQL.)
      </p>
    </div>

    <button onclick="window.print()"
      class="px-4 py-2 rounded-xl border border-white/15 bg-white/5 font-semibold hover:bg-white/10 transition">
      Cetak Jadwal
    </button>
  </div>

  @php
    $rows = [
      ['tgl'=>'1 Ramadhan', 'waktu'=>'07:00 - 08:00', 'kegiatan'=>'Pembukaan & Tausiyah', 'peserta'=>'Siswa & Guru', 'kategori'=>'Umum'],
      ['tgl'=>'1-10 Ramadhan', 'waktu'=>'08:00 - 09:00', 'kegiatan'=>'Pesantren Kilat', 'peserta'=>'Siswa', 'kategori'=>'Pesantren Kilat'],
      ['tgl'=>'Setiap Hari', 'waktu'=>'09:00 - 09:15', 'kegiatan'=>'Kultum Harian', 'peserta'=>'Siswa', 'kategori'=>'Kultum'],
      ['tgl'=>'Setiap Hari', 'waktu'=>'09:15 - 10:00', 'kegiatan'=>'Tadarus Bersama', 'peserta'=>'Siswa', 'kategori'=>'Tadarus'],
      ['tgl'=>'20 Ramadhan', 'waktu'=>'08:00 - 10:00', 'kegiatan'=>'Pengumpulan Zakat/Infak', 'peserta'=>'Siswa & Orang Tua', 'kategori'=>'Zakat/Infak'],
      ['tgl'=>'25 Ramadhan', 'waktu'=>'16:30 - 18:30', 'kegiatan'=>'Buka Puasa Bersama', 'peserta'=>'Siswa, Guru, Orang Tua', 'kategori'=>'Buka Bersama'],
    ];
  @endphp

  <div class="mt-8 rounded-3xl border border-white/10 bg-white/5 overflow-hidden">
    <div class="px-6 py-4 border-b border-white/10 flex flex-wrap gap-2 items-center justify-between">
      <div class="text-sm text-slate-300">Tabel Jadwal</div>
      <div class="flex flex-wrap gap-2 text-xs">
        <span class="px-3 py-1 rounded-full bg-emerald-400/15 border border-emerald-400/20 text-emerald-200">Tadarus</span>
        <span class="px-3 py-1 rounded-full bg-amber-300/15 border border-amber-300/20 text-amber-200">Zakat/Infak</span>
        <span class="px-3 py-1 rounded-full bg-indigo-400/15 border border-indigo-400/20 text-indigo-200">Pesantren Kilat</span>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-950/40 text-slate-200">
          <tr class="text-left">
            <th class="px-6 py-4 font-semibold">Tanggal</th>
            <th class="px-6 py-4 font-semibold">Waktu</th>
            <th class="px-6 py-4 font-semibold">Kegiatan</th>
            <th class="px-6 py-4 font-semibold">Peserta</th>
            <th class="px-6 py-4 font-semibold">Kategori</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-white/10">
          @foreach($rows as $r)
            <tr class="hover:bg-white/5 transition">
              <td class="px-6 py-4">{{ $r['tgl'] }}</td>
              <td class="px-6 py-4 text-slate-300">{{ $r['waktu'] }}</td>
              <td class="px-6 py-4 font-semibold">{{ $r['kegiatan'] }}</td>
              <td class="px-6 py-4 text-slate-300">{{ $r['peserta'] }}</td>
              <td class="px-6 py-4">
                <span class="px-3 py-1 rounded-full text-xs border border-white/10 bg-white/5">
                  {{ $r['kategori'] }}
                </span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="px-6 py-4 text-xs text-slate-400 border-t border-white/10">
      Catatan: Jadwal dapat berubah sesuai kebijakan sekolah. Pantau halaman Pengumuman untuk update terbaru.
    </div>
  </div>
</section>
@endsection
