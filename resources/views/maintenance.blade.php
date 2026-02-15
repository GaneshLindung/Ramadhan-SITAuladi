<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance - Ramadhan SIT Auladi Palembang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes twinkle {
            0%, 100% { opacity: 0.2; transform: scale(0.9); }
            50% { opacity: 1; transform: scale(1.15); }
        }

        @keyframes pulseRing {
            0% { transform: scale(0.9); opacity: 0.45; }
            70% { transform: scale(1.12); opacity: 0.05; }
            100% { transform: scale(1.15); opacity: 0; }
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        @keyframes preloaderFade {
            from { opacity: 1; visibility: visible; }
            to { opacity: 0; visibility: hidden; }
        }

        @keyframes contentAppear {
            from { opacity: 0; transform: translateY(14px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes moonFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        @keyframes starOrbit {
            0% { transform: rotate(0deg) translateX(42px) rotate(0deg); }
            100% { transform: rotate(360deg) translateX(42px) rotate(-360deg); }
        }

        @keyframes starGlow {
            0%, 100% { opacity: .5; transform: scale(.9); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        .preloader-hide { animation: preloaderFade .6s ease forwards; }
        .content-ready { animation: contentAppear .7s ease forwards; }
    </style>
</head>
<body class="min-h-screen min-h-[100dvh] w-screen overflow-hidden bg-slate-950 text-slate-100">
    <div id="preloader" class="fixed inset-0 z-[100] flex flex-col items-center justify-center gap-6 bg-slate-950">
        <div class="relative flex h-20 w-20 items-center justify-center">
            <span class="absolute inset-0 rounded-full border-4 border-amber-300/20"></span>
            <span class="absolute inset-0 rounded-full border-4 border-transparent border-t-amber-300" style="animation: spin 1s linear infinite;"></span>
            <span class="absolute inset-3 rounded-full border-4 border-transparent border-r-orange-300" style="animation: spin 1.4s linear infinite reverse;"></span>
        </div>
        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-amber-300">Loading Maintenance Page</p>
    </div>

    <main id="maintenance-content" class="relative min-h-screen min-h-[100dvh] w-screen overflow-hidden opacity-0">
        <div class="absolute inset-0">
            <img src="{{ asset('images/bg-ramadan2.jpg') }}" alt="Background Ramadhan" class="h-full w-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950/95 via-slate-900/90 to-slate-950/95"></div>
        </div>

        <div class="pointer-events-none absolute inset-0">
            <span class="absolute left-[12%] top-[18%] h-2 w-2 rounded-full bg-amber-200" style="animation: twinkle 2.6s infinite;"></span>
            <span class="absolute right-[18%] top-[26%] h-1.5 w-1.5 rounded-full bg-white" style="animation: twinkle 2.2s infinite .4s;"></span>
            <span class="absolute left-[24%] bottom-[20%] h-2 w-2 rounded-full bg-amber-100" style="animation: twinkle 2.8s infinite .2s;"></span>
            <span class="absolute right-[28%] bottom-[24%] h-1.5 w-1.5 rounded-full bg-white" style="animation: twinkle 2s infinite .8s;"></span>
        </div>

        <section class="relative z-10 flex min-h-screen min-h-[100dvh] w-full items-center justify-center px-4 py-4 md:px-6 md:py-6">
            <div class="relative h-full w-full max-w-[1366px] overflow-hidden rounded-[2rem] border border-amber-200/25 bg-slate-900/70 p-8 text-center shadow-[0_0_80px_rgba(251,191,36,0.12)] backdrop-blur-xl md:p-12 flex flex-col items-center justify-center">
                <div class="absolute -top-24 -left-16 h-56 w-56 rounded-full bg-amber-300/10 blur-3xl"></div>
                <div class="absolute -right-20 -bottom-20 h-56 w-56 rounded-full bg-indigo-300/10 blur-3xl"></div>

                <div class="relative mx-auto mb-6 flex h-28 w-28 items-center justify-center">
                    <span class="absolute inset-0 rounded-full border border-amber-300/35" style="animation: pulseRing 2.5s infinite;"></span>
                    <span class="absolute inset-2 rounded-full border border-amber-300/30" style="animation: pulseRing 2.5s infinite .6s;"></span>

                    <div class="relative flex h-16 w-16 items-center justify-center text-amber-300" style="animation: moonFloat 3s ease-in-out infinite;">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-full w-full drop-shadow-[0_0_14px_rgba(251,191,36,0.6)]" aria-hidden="true">
                            <path d="M14.5 3.2a8.9 8.9 0 1 0 6.3 14.9 8 8 0 1 1-6.3-14.9Z"/>
                        </svg>
                    </div>

                    <span class="absolute h-3 w-3 rounded-full bg-amber-200 shadow-[0_0_16px_rgba(253,230,138,.8)]" style="animation: starOrbit 4s linear infinite, starGlow 1.4s ease-in-out infinite;"></span>
                </div>

                <p class="mb-3 text-xs font-semibold uppercase tracking-[0.35em] text-amber-300">Sedang Pembaruan Sistem</p>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-white md:text-5xl">Website Dalam Mode Maintenance</h1>
                <p class="mx-auto max-w-3xl text-base leading-relaxed text-slate-200 md:text-lg">
                    Kami sedang melakukan peningkatan fitur agar pengalaman Ramadhan di SIT Auladi Palembang jadi lebih cepat, aman, dan nyaman.
                    Mohon tunggu sebentar, kami akan segera kembali online.
                </p>

                <div class="mt-8 inline-flex items-center gap-3 rounded-full border border-emerald-200/35 bg-emerald-300/10 px-5 py-2 text-sm font-medium text-emerald-100">
                    <span class="relative flex h-3 w-3">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-300 opacity-75"></span>
                        <span class="relative inline-flex h-3 w-3 rounded-full bg-emerald-300"></span>
                    </span>
                    Tim teknis sedang bekerja
                </div>
            </div>
        </section>
    </main>

    <script>
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            const content = document.getElementById('maintenance-content');

            setTimeout(() => {
                preloader?.classList.add('preloader-hide');
                content?.classList.add('content-ready');
                content?.classList.remove('opacity-0');
            }, 1200);
        });
    </script>
</body>
</html>