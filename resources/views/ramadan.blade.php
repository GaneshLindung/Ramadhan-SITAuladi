<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page Ramadan</title>
    <meta name="description" content="Landing page Ramadan: promo, video, paket spesial, dan pendaftaran via WhatsApp.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-slate-100 antialiased selection:bg-emerald-500/30">

    <!-- ======= HERO (FULL WIDTH BACKGROUND) ======= -->
    <section class="relative overflow-hidden">
        <!-- Background image -->
        <div class="absolute inset-0">
            <!-- Ganti URL ini kalau mau pakai gambar sendiri -->
            <img
                src="https://images.unsplash.com/photo-1542810100-99a0c1b0b4b9?auto=format&fit=crop&w=2400&q=70"
                alt="Ramadan Background"
                class="h-full w-full object-cover opacity-40"
            >
            <!-- Gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/70 via-slate-950/60 to-slate-950"></div>
            <!-- Decorative blur -->
            <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-emerald-500/20 blur-3xl"></div>
            <div class="absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-indigo-500/20 blur-3xl"></div>
        </div>

        <!-- Header -->
        <header class="relative z-10">
            <div class="mx-auto max-w-6xl px-6 py-6 flex items-center justify-between">
                <a href="#" class="flex items-center gap-2">
                    <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white/10 border border-white/10">
                        <span class="text-lg">☪</span>
                    </span>
                    <span class="font-extrabold tracking-wide">RAMADAN</span>
                </a>

                <nav class="hidden md:flex items-center gap-6 text-sm text-slate-200">
                    <a href="#video" class="hover:text-white">Video</a>
                    <a href="#fitur" class="hover:text-white">Fitur</a>
                    <a href="#paket" class="hover:text-white">Paket</a>
                    <a href="#faq" class="hover:text-white">FAQ</a>
                </nav>

                <div class="flex items-center gap-2">
                    <a href="#form"
                       class="px-4 py-2 rounded-xl bg-emerald-400 text-slate-950 font-semibold hover:bg-emerald-300 transition">
                        Ambil Promo
                    </a>
                </div>
            </div>
        </header>

        <!-- Hero content -->
        <div class="relative z-10">
            <div class="mx-auto max-w-6xl px-6 pt-10 pb-16 md:pt-16 md:pb-24 grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/10 text-sm text-slate-200">
                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                        Promo Terbatas Bulan Ramadan
                    </div>

                    <h1 class="mt-4 text-4xl md:text-6xl font-extrabold leading-tight">
                        Welcome to <span class="text-emerald-300">Ramadan</span>
                    </h1>

                    <p class="mt-4 text-slate-200/90 text-lg leading-relaxed">
                        Landing page Ramadan siap pakai untuk promosi, kampanye, atau pendaftaran. Lengkap dengan video YouTube,
                        paket promo, testimoni, FAQ, dan form kontak.
                    </p>

                    <div class="mt-7 flex flex-col sm:flex-row gap-3">
                        <a href="#paket"
                           class="px-6 py-3 rounded-2xl bg-white text-slate-950 font-semibold hover:bg-slate-100 transition text-center">
                            Lihat Paket
                        </a>

                        <a href="#video"
                           class="px-6 py-3 rounded-2xl border border-white/15 bg-white/5 font-semibold hover:bg-white/10 transition text-center">
                            Tonton Video
                        </a>
                    </div>

                    <div class="mt-6 grid grid-cols-3 gap-3 max-w-md">
                        <div class="rounded-2xl bg-white/5 border border-white/10 p-4">
                            <div class="text-2xl font-extrabold">24/7</div>
                            <div class="text-xs text-slate-300 mt-1">Respon Cepat</div>
                        </div>
                        <div class="rounded-2xl bg-white/5 border border-white/10 p-4">
                            <div class="text-2xl font-extrabold">+Bonus</div>
                            <div class="text-xs text-slate-300 mt-1">Paket Pilihan</div>
                        </div>
                        <div class="rounded-2xl bg-white/5 border border-white/10 p-4">
                            <div class="text-2xl font-extrabold">Aman</div>
                            <div class="text-xs text-slate-300 mt-1">Terpercaya</div>
                        </div>
                    </div>
                </div>

                <!-- Right card -->
                <div class="rounded-3xl bg-white/5 border border-white/10 p-6 md:p-8 backdrop-blur">
                    <div class="flex items-center justify-between">
                        <h2 class="font-bold text-lg">Ringkasan Promo</h2>
                        <span class="text-xs px-3 py-1 rounded-full bg-emerald-400 text-slate-950 font-semibold">
                            Diskon
                        </span>
                    </div>

                    <p class="mt-3 text-slate-200/90">
                        Dapatkan penawaran spesial Ramadan. Isi form, tim kami akan menghubungi via WhatsApp.
                    </p>

                    <div class="mt-6 space-y-3 text-sm text-slate-200">
                        <div class="flex gap-3">
                            <span class="mt-0.5">✅</span>
                            <span>Harga promo + bonus untuk paket tertentu</span>
                        </div>
                        <div class="flex gap-3">
                            <span class="mt-0.5">✅</span>
                            <span>Konsultasi gratis sebelum memilih paket</span>
                        </div>
                        <div class="flex gap-3">
                            <span class="mt-0.5">✅</span>
                            <span>Proses cepat & transparan</span>
                        </div>
                    </div>

                    <a href="#form"
                       class="mt-7 inline-flex w-full items-center justify-center px-6 py-3 rounded-2xl bg-emerald-400 text-slate-950 font-semibold hover:bg-emerald-300 transition">
                        Ambil Promo Sekarang
                    </a>

                    <p class="mt-3 text-xs text-slate-300">
                        *Syarat & ketentuan berlaku.
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom wave-ish divider -->
        <div class="relative z-10">
            <div class="h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>
        </div>
    </section>

    <!-- ======= VIDEO SECTION ======= -->
    <section id="video" class="py-16 md:py-20">
        <div class="mx-auto max-w-6xl px-6">
            <div class="flex items-end justify-between gap-6 flex-wrap">
                <div>
                    <h2 class="text-3xl md:text-4xl font-extrabold">Video Ramadan</h2>
                    <p class="mt-2 text-slate-300">Sematkan video YouTube untuk intro kampanye/promo.</p>
                </div>
                <a href="#form" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
                    Konsultasi via WhatsApp →
                </a>
            </div>

            <div class="mt-8 grid lg:grid-cols-2 gap-6 items-start">
                <!-- Video embed responsive -->
                <div class="rounded-3xl overflow-hidden border border-white/10 bg-white/5">
                    <div class="aspect-video">
                        <!-- GANTI ID VIDEO: contoh ini pakai ID dummy -->
                        <iframe
                            class="w-full h-full"
                            src="https://www.youtube.com/embed/aqz-KE-bpKQ"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>

                <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
                    <h3 class="text-xl font-bold">Kenapa pakai landing page ini?</h3>
                    <p class="mt-3 text-slate-300 leading-relaxed">
                        Karena tampilannya modern, mobile-first, cepat, dan sudah ada section yang biasa dipakai untuk promosi Ramadan.
                        Kamu tinggal ganti teks, gambar, dan video.
                    </p>

                    <div class="mt-6 grid sm:grid-cols-2 gap-4 text-sm">
                        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
                            <div class="font-semibold">⚡ Cepat & ringan</div>
                            <div class="text-slate-300 mt-1">Tailwind + Vite build cepat.</div>
                        </div>
                        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
                            <div class="font-semibold">📱 Mobile ready</div>
                            <div class="text-slate-300 mt-1">Layout responsif.</div>
                        </div>
                        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
                            <div class="font-semibold">🧩 Section lengkap</div>
                            <div class="text-slate-300 mt-1">Promo, paket, FAQ, form.</div>
                        </div>
                        <div class="rounded-2xl bg-slate-950/40 border border-white/10 p-4">
                            <div class="font-semibold">🗃️ Siap MySQL</div>
                            <div class="text-slate-300 mt-1">Form lead bisa disimpan.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= FEATURES ======= -->
    <section id="fitur" class="py-16 md:py-20 border-t border-white/10">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold">Fitur Utama</h2>
            <p class="mt-2 text-slate-300">Bagian-bagian penting untuk landing page promo Ramadan.</p>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-5">
                @php
                    $features = [
                        ['icon' => '🌙', 'title' => 'Hero Full Width', 'desc' => 'Background full-width dengan overlay elegan dan CTA jelas.'],
                        ['icon' => '🎥', 'title' => 'Video YouTube', 'desc' => 'Embed video responsif untuk memperkuat pesan kampanye.'],
                        ['icon' => '🏷️', 'title' => 'Paket Promo', 'desc' => 'Kartu paket promo dengan badge dan harga.'],
                        ['icon' => '💬', 'title' => 'Testimoni', 'desc' => 'Meningkatkan kepercayaan dengan review pelanggan.'],
                        ['icon' => '❓', 'title' => 'FAQ', 'desc' => 'Menjawab pertanyaan umum tanpa harus chat dulu.'],
                        ['icon' => '📝', 'title' => 'Form Lead', 'desc' => 'Tangkap prospek (nama, WA, email) untuk follow up.'],
                    ];
                @endphp

                @foreach($features as $f)
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
                        <div class="text-3xl">{{ $f['icon'] }}</div>
                        <div class="mt-3 font-bold text-lg">{{ $f['title'] }}</div>
                        <p class="mt-2 text-slate-300 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ======= PACKAGES ======= -->
    <section id="paket" class="py-16 md:py-20">
        <div class="mx-auto max-w-6xl px-6">
            <div class="flex items-end justify-between gap-6 flex-wrap">
                <div>
                    <h2 class="text-3xl md:text-4xl font-extrabold">Paket Promo Ramadan</h2>
                    <p class="mt-2 text-slate-300">Contoh paket. Nanti bisa kamu ambil dari database MySQL.</p>
                </div>
                <a href="#form" class="text-sm font-semibold text-emerald-300 hover:text-emerald-200">
                    Minta penawaran →
                </a>
            </div>

            @php
                $packages = [
                    ['name' => 'Paket Hemat', 'desc' => 'Untuk kebutuhan dasar, cocok buat mulai.', 'price' => '199.000', 'badge' => null],
                    ['name' => 'Paket Favorit', 'desc' => 'Paling sering dipilih saat Ramadan.', 'price' => '349.000', 'badge' => 'Best Seller'],
                    ['name' => 'Paket Premium', 'desc' => 'Benefit lengkap + prioritas pengerjaan.', 'price' => '599.000', 'badge' => 'Premium'],
                ];
            @endphp

            <div class="mt-8 grid md:grid-cols-3 gap-5">
                @foreach($packages as $p)
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-6 hover:bg-white/10 transition">
                        <div class="flex items-start justify-between gap-3">
                            <h3 class="text-lg font-bold">{{ $p['name'] }}</h3>
                            @if($p['badge'])
                                <span class="text-xs px-3 py-1 rounded-full bg-emerald-400 text-slate-950 font-semibold">
                                    {{ $p['badge'] }}
                                </span>
                            @endif
                        </div>

                        <p class="mt-2 text-slate-300 text-sm">{{ $p['desc'] }}</p>

                        <div class="mt-5 text-3xl font-extrabold">
                            Rp {{ $p['price'] }}
                        </div>
                        <div class="text-xs text-slate-300 mt-1">*Harga contoh, bisa kamu ganti.</div>

                        <a href="#form"
                           class="mt-6 inline-flex w-full items-center justify-center px-5 py-3 rounded-2xl bg-white text-slate-950 font-semibold hover:bg-slate-100 transition">
                            Pilih Paket
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ======= TESTIMONIALS ======= -->
    <section class="py-16 md:py-20 border-t border-white/10">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold">Testimoni</h2>
            <p class="mt-2 text-slate-300">Contoh testimoni untuk meningkatkan trust.</p>

            @php
                $testi = [
                    ['name' => 'Aulia', 'role' => 'Pelanggan', 'text' => 'Landing page-nya rapi, cepat, dan langsung bikin conversion naik.'],
                    ['name' => 'Rizky', 'role' => 'Owner UMKM', 'text' => 'Bagian paket promo & formnya jelas. Tim cepat follow up via WA.'],
                    ['name' => 'Nadia', 'role' => 'Marketer', 'text' => 'Desainnya modern, cocok buat campaign Ramadan. Tinggal ganti konten.'],
                ];
            @endphp

            <div class="mt-8 grid md:grid-cols-3 gap-5">
                @foreach($testi as $t)
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
                        <p class="text-slate-200 leading-relaxed">“{{ $t['text'] }}”</p>
                        <div class="mt-5 flex items-center gap-3">
                            <div class="h-10 w-10 rounded-xl bg-white/10 border border-white/10 flex items-center justify-center">
                                😊
                            </div>
                            <div>
                                <div class="font-semibold">{{ $t['name'] }}</div>
                                <div class="text-xs text-slate-300">{{ $t['role'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ======= FAQ ======= -->
    <section id="faq" class="py-16 md:py-20 border-t border-white/10">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold">FAQ</h2>
            <p class="mt-2 text-slate-300">Pertanyaan yang sering ditanyakan.</p>

            @php
                $faqs = [
                    ['q' => 'Bisa ganti gambar background?', 'a' => 'Bisa. Cukup ganti URL gambar di bagian hero. Kalau mau pakai file lokal, taruh di public/images lalu pakai /images/namafile.jpg'],
                    ['q' => 'Bisa ganti video YouTube?', 'a' => 'Bisa. Ganti link iframe, cukup ubah ID video YouTube pada src.'],
                    ['q' => 'Formnya bisa masuk database MySQL?', 'a' => 'Bisa. Nanti kita buat tabel leads dan controller untuk simpan data.'],
                    ['q' => 'Bisa dibuat jadi multi halaman?', 'a' => 'Bisa, tinggal buat view tambahan dan route baru.'],
                ];
            @endphp

            <div class="mt-8 grid md:grid-cols-2 gap-5">
                @foreach($faqs as $f)
                    <details class="rounded-3xl border border-white/10 bg-white/5 p-6 group">
                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4">
                            <span class="font-semibold">{{ $f['q'] }}</span>
                            <span class="text-slate-300 group-open:rotate-45 transition">+</span>
                        </summary>
                        <p class="mt-3 text-slate-300 text-sm leading-relaxed">{{ $f['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ======= FORM LEAD (STATIC DULU) ======= -->
    <section id="form" class="py-16 md:py-20">
        <div class="mx-auto max-w-6xl px-6">
            <div class="rounded-3xl border border-white/10 bg-white/5 p-8 md:p-10">
                <div class="grid lg:grid-cols-2 gap-8 items-start">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-extrabold">Ambil Promo Ramadan</h2>
                        <p class="mt-3 text-slate-300 leading-relaxed">
                            Isi data kamu, nanti kita follow up via WhatsApp. (Form ini masih statis. Kalau kamu mau, aku lanjutkan sampai tersimpan ke MySQL.)
                        </p>

                        <div class="mt-6 space-y-3 text-sm text-slate-200">
                            <div class="flex gap-3"><span>✅</span><span>Respon cepat (jam kerja)</span></div>
                            <div class="flex gap-3"><span>✅</span><span>Konsultasi gratis</span></div>
                            <div class="flex gap-3"><span>✅</span><span>Penawaran sesuai kebutuhan</span></div>
                        </div>
                    </div>

                    <form class="space-y-4">
                        <div>
                            <label class="text-sm text-slate-300">Nama</label>
                            <input
                                class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
                                placeholder="Nama Anda">
                        </div>

                        <div>
                            <label class="text-sm text-slate-300">WhatsApp</label>
                            <input
                                class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
                                placeholder="08xxxxxxxxxx">
                        </div>

                        <div>
                            <label class="text-sm text-slate-300">Email (opsional)</label>
                            <input
                                class="mt-1 w-full rounded-2xl bg-slate-950/60 border border-white/10 px-4 py-3 outline-none focus:border-emerald-400"
                                placeholder="nama@email.com">
                        </div>

                        <button
                            type="button"
                            class="w-full px-6 py-3 rounded-2xl bg-emerald-400 text-slate-950 font-semibold hover:bg-emerald-300 transition">
                            Kirim
                        </button>

                        <p class="text-xs text-slate-400">
                            Dengan mengirim form, kamu setuju untuk dihubungi via WhatsApp.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= FOOTER ======= -->
    <footer class="border-t border-white/10">
        <div class="mx-auto max-w-6xl px-6 py-10 flex flex-col md:flex-row gap-4 md:items-center md:justify-between">
            <div class="text-sm text-slate-400">
                © {{ date('Y') }} Ramadan Landing. All rights reserved.
            </div>
            <div class="flex items-center gap-4 text-sm text-slate-300">
                <a href="#video" class="hover:text-white">Video</a>
                <a href="#paket" class="hover:text-white">Paket</a>
                <a href="#faq" class="hover:text-white">FAQ</a>
            </div>
        </div>
    </footer>

</body>
</html>
