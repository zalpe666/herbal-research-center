@extends('layouts.app')

@section('title', 'Histologi & Imunohistokimia')

@section('content')
    <section class="relative overflow-hidden pt-36 pb-48">
        {{-- Background Image & Overlays --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/banner/histology.jpeg') }}" alt="Phytochemistry Analysis"
                class="h-full w-full object-cover scale-105" />

            {{-- Main Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-green-950 via-green-950/90 to-green-950/45"></div>

            {{-- Bottom Fade --}}
            <div class="absolute inset-x-0 bottom-0 h-52 bg-gradient-to-t from-green-950 via-green-950/60 to-transparent">
            </div>

            {{-- Top Fade --}}
            <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-green-950/60 to-transparent"></div>
        </div>

        {{-- Decorative Grid --}}
        <div class="absolute inset-0 opacity-[0.08]"
            style="background-image: linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px); background-size: 60px 60px;">
        </div>

        {{-- Decorative Glows --}}
        <div class="absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-green-400/10 blur-3xl"></div>
        <div class="absolute -bottom-40 left-1/3 h-[450px] w-[450px] rounded-full bg-emerald-400/10 blur-3xl"></div>

        {{-- Content --}}
        <div class="relative mx-auto max-w-7xl px-6">
            <div class="grid items-center gap-14 lg:grid-cols-[1fr_400px]">

                {{-- Left Content --}}
                <div class="max-w-4xl">
                    {{-- Badge (Diubah menyoroti layanan lab) --}}
                    <div
                        class="mb-6 inline-flex items-center gap-3 rounded-full border border-green-300/30 bg-green-950/40 px-4 py-2 shadow-lg shadow-green-950/20 backdrop-blur-md">
                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-green-400/10">
                            <i class="ri-shield-check-line text-green-300"></i>
                        </span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-green-200">
                            Herbal Research Center
                        </span>
                        <span class="h-1.5 w-1.5 rounded-full bg-green-300"></span>
                        <span class="text-xs text-green-300">
                            Histology & Immunohistochemistry
                        </span>
                    </div>

                    {{-- Heading (Lebih berfokus pada layanan & mutu produk klien) --}}
                    <h1
                        class="max-w-4xl text-4xl font-black leading-[1.05] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                        Layanan Uji
                        <span class="text-green-300">Histologi & Imunohistokimia</span>
                        <br>
                        untuk Produk Anda
                    </h1>

                    {{-- Description --}}
                    <p class="mt-7 max-w-2xl text-base leading-relaxed text-green-100/80 md:text-lg">
                        Fasilitas pengolahan dan analisis sampel jaringan organ secara profesional. Mendukung riset dan
                        validasi keamanan bahan herbal dengan presisi tingkat seluler dan molekuler.
                    </p>

                    {{-- Feature Pills (Diubah menyesuaikan konteks jasa pengujian) --}}
                    <div class="mt-10 flex flex-wrap gap-3">
                        <div
                            class="inline-flex items-center gap-2 rounded-full bg-white/5 border border-white/10 px-4 py-2 backdrop-blur-sm transition hover:bg-white/10">
                            <i class="ri-microscope-line text-green-400"></i>
                            <span class="text-sm font-medium text-green-50">Pengujian HE</span>
                        </div>
                        <div
                            class="inline-flex items-center gap-2 rounded-full bg-white/5 border border-white/10 px-4 py-2 backdrop-blur-sm transition hover:bg-white/10">
                            <i class="ri-drop-fill text-green-400"></i>
                            <span class="text-sm font-medium text-green-50">Masson’s Trichrome</span>
                        </div>
                        <div
                            class="inline-flex items-center gap-2 rounded-full bg-white/5 border border-white/10 px-4 py-2 backdrop-blur-sm transition hover:bg-white/10">
                            <i class="ri-dna-line text-green-400"></i>
                            <span class="text-sm font-medium text-green-50">Biomarker IHK</span>
                        </div>
                    </div>
                </div>

                {{-- Right Floating Research Card --}}
                <div class="relative hidden lg:block">
                    {{-- Glow --}}
                    <div class="absolute inset-0 rounded-[2rem] bg-green-400/10 blur-2xl"></div>

                    {{-- Main Card --}}
                    <div
                        class="relative overflow-hidden rounded-[2rem] border border-white/15 bg-green-950/40 p-7 shadow-2xl backdrop-blur-xl">

                        {{-- Card Header --}}
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-500/20 border border-green-400/20">
                                <i class="ri-shield-check-fill text-2xl text-green-300"></i>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-white">Keunggulan Layanan</h3>
                                <p class="text-sm text-green-200/60">Standar Laboratorium Riset</p>
                            </div>
                        </div>

                        {{-- Divider --}}
                        <div class="my-6 h-px bg-white/10"></div>

                        {{-- Compound List --}}
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <i class="ri-check-double-line text-green-400 text-lg"></i>
                                    <div>
                                        <p class="text-sm font-bold text-gray-100">Validasi Ahli</p>
                                        <p class="text-xs text-green-200/60 mt-0.5">Disupervisi spesialis Patologi Anatomi
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <i class="ri-mac-line text-green-400 text-lg"></i>
                                    <div>
                                        <p class="text-sm font-bold text-gray-100">Teknologi Modern</p>
                                        <p class="text-xs text-green-200/60 mt-0.5">Menggunakan Mikroskop Olympus CX33</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <i class="ri-file-list-3-line text-green-400 text-lg"></i>
                                    <div>
                                        <p class="text-sm font-bold text-gray-100">Siap Publikasi</p>
                                        <p class="text-xs text-green-200/60 mt-0.5">Dokumentasi hasil resolusi tinggi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Bottom Info --}}
                        <div class="mt-7 rounded-xl border border-green-400/10 bg-green-400/5 p-4">
                            <div class="flex items-center gap-3">
                                <i class="ri-information-line text-green-300"></i>
                                <p class="text-xs leading-relaxed text-green-100/60">
                                    Cocok untuk kebutuhan skripsi, riset akademisi, registrasi BPOM, & industri herbal.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-white py-20 lg:py-28 overflow-hidden">
        {{-- Subtle SVG Accents (Cellular/Hexagon Pattern) --}}
        <div class="absolute -left-20 top-0 opacity-[0.03] pointer-events-none">
            <svg width="400" height="400" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 25L100 0L150 25V75L100 100L50 75V25Z" stroke="#047857" stroke-width="2" />
                <path d="M100 100L150 75L200 100V150L150 175L100 150V100Z" stroke="#047857" stroke-width="2" />
                <path d="M0 100L50 75L100 100V150L50 175L0 150V100Z" stroke="#047857" stroke-width="2" />
                <circle cx="100" cy="50" r="4" fill="#047857" />
                <circle cx="150" cy="125" r="4" fill="#047857" />
                <circle cx="50" cy="125" r="4" fill="#047857" />
            </svg>
        </div>

        <div class="relative z-10 mx-auto max-w-7xl px-6 text-center">
            {{-- <div class="mx-auto max-w-4xl">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl leading-tight">
                        Analisis Mikroskopis & Molekuler <br class="hidden md:block"> Presisi untuk Riset Anda
                    </h2>
                    <div class="mt-8 rounded-3xl bg-green-50/50 p-8 md:p-10 shadow-sm border border-green-100 backdrop-blur-sm">
                        <p class="text-base md:text-lg leading-relaxed text-gray-700">
                            Di Pusat Pengujian Kami, tersedia fasilitas pengolahan dan analisis sampel jaringan organ hewan coba
                            (tikus/mencit) secara profesional dan terstandar.
                            Layanan kami dirancang untuk membantu peneliti, akademisi, maupun industri dalam <strong>memvalidasi
                                efek perlindungan organ (organoprotektif)</strong> dan <strong>tingkat keamanan</strong> dari
                            bahan herbal yang diteliti hingga ke tingkat seluler.
                        </p>
                    </div>
                </div> --}}
            <div class="grid items-center gap-8 text-justify lg:grid-cols-[3fr_2fr]">
                <!-- Kiri -->
                <div class="">
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl leading-tight text-left">
                        Analisis Mikroskopis & Molekuler Presisi untuk Riset Anda
                    </h1>
                    <p
                        class="text-xl mt-4 max-w-2xl leading-7 text-gray-600 bg-green-50/50 p-4 md:p-8 shadow-sm border border-green-100 backdrop-blur-sm">
                        Di Pusat Pengujian Kami, tersedia fasilitas pengolahan dan analisis sampel jaringan organ hewan coba
                        (tikus/mencit) secara profesional dan terstandar.
                        Layanan kami dirancang untuk membantu peneliti, akademisi, maupun industri dalam <strong>memvalidasi
                            efek perlindungan organ (organoprotektif)</strong> dan <strong>tingkat keamanan</strong> dari
                        bahan herbal yang diteliti hingga ke tingkat seluler.
                    </p>
                </div>

                <!-- Kanan -->
                <div class="text-green-700/10 ml-16">
                    {{-- <i class="ri-microscope-line hidden text-[10rem] md:block translate-x-40"></i> --}}
                    <img src="{{ asset('/ilustration/preparat-HE.jpeg') }}" alt="Phytochemistry Analysis"
                        class="w-[800px] h-auto" />

                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 3. MAIN SERVICES (PANEL UJI)               --}}
    {{-- ========================================== --}}
    <section id="layanan" class="relative bg-gray-50 py-24 border-t border-gray-100">
        <div class="mx-auto max-w-7xl px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-green-600/20 bg-green-50 px-4 py-1.5 mb-4">
                    <i class="ri-list-check-2 text-green-700"></i>
                    <span class="text-xs font-bold uppercase tracking-widest text-green-800">Panel Analisis</span>
                </span>
                <h3 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Layanan Pengujian Jaringan Organ
                </h3>
            </div>

            <div class="grid gap-8">
                {{-- Service 1: Pengujian Histologi Rutin (HE) --}}
                <div
                    class="group relative overflow-hidden rounded-[2rem] bg-white border border-gray-100 shadow-sm transition-all hover:shadow-xl hover:border-green-200">
                    <div
                        class="absolute top-0 right-0 p-8 opacity-5 transition-opacity group-hover:opacity-10 pointer-events-none">
                        {{-- <i class="ri-microscope-line text-9xl text-green-600"></i> --}}
                    </div>
                    <div class="relative p-8 md:p-10 flex flex-col md:flex-row gap-8">
                        <div
                            class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white shadow-lg shadow-green-600/30">
                            <i class="ri-focus-3-line text-3xl"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-gray-900 mb-4">1. Pengujian Histologi Rutin (Pewarnaan HE)
                            </h4>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600 leading-relaxed">
                                <div class="text-xl">
                                    <strong class="block text-gray-900 mb-1"><i
                                            class="ri-body-scan-line text-green-600 mr-1"></i> Analisis Struktur
                                        Organ</strong>
                                    Evaluasi perubahan struktur mikroskopis pada organ target seperti hati, ginjal, jantung,
                                    paru-paru, lambung, otak, pankreas, kulit, testis, hingga jaringan tumor.
                                    <br>
                                    <strong class="block text-gray-900 mb-1 mt-3"><i
                                            class="ri-shield-check-line text-green-600 mr-1"></i> Validasi Keamanan &
                                        Efikasi</strong>
                                    Penilaian tingkat kerusakan sel atau perbaikan jaringan untuk mendukung riset
                                    penyembuhan luka (wound healing), uji toksisitas (akut/subkronis/kronis), dan uji
                                    organoprotektif.
                                </div>
                                <div class="ml-16">
                                    <img src="{{ asset('/ilustration/perwarna-he.jpeg') }}" alt="Phytochemistry Analysis"
                                        class="w-[300px] h-auto" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 2: Masson's Trichrome --}}
                <div
                    class="group relative overflow-hidden rounded-[2rem] bg-white border border-gray-100 shadow-sm transition-all hover:shadow-xl hover:border-green-200">
                    <div
                        class="absolute top-0 right-0 p-8 opacity-5 transition-opacity group-hover:opacity-10 pointer-events-none">
                        {{-- <i class="ri-drop-fill text-9xl text-green-600"></i> --}}
                    </div>
                    <div class="relative p-8 md:p-10 flex flex-col md:flex-row gap-8">
                        <div
                            class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white shadow-lg shadow-green-600/30">
                            <i class="ri-contrast-drop-2-line text-3xl"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-gray-900 mb-4">2. Pewarnaan Khusus: Masson’s Trichrome</h4>
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600 leading-relaxed">
                                <div class="text-xl">
                                    <strong class="block text-gray-900 mb-1"><i
                                            class="ri-search-eye-line text-green-600 mr-1"></i> Deteksi & Evaluasi
                                        Fibrosis</strong>
                                    Membedakan serat kolagen (berwarna biru) dari jaringan otot atau parenkim (berwarna
                                    merah) untuk mengukur secara presisi tingkat fibrosis pada suatu organ.
                                    <strong class="block text-gray-900 mb-1"><i
                                            class="ri-leaf-line text-green-600 mr-1"></i> Aplikasi Riset Herbal</strong>
                                    Sangat ideal untuk membuktikan efikasi bahan alam sebagai agen anti-fibrotik (model
                                    sirosis hati, fibrosis ginjal, remodeling jaringan jantung, atau penyembuhan luka).
                                </div>
                                <div>
                                    <img src="{{ asset('/ilustration/massons-triccrom.jpeg') }}"
                                        alt="Phytochemistry Analysis" class="w-[300px] h-auto ml-16" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 3: Immunohistochemistry (IHC) --}}
                <div
                    class="group relative overflow-hidden rounded-[2rem] bg-white border border-gray-100 shadow-sm transition-all hover:shadow-xl hover:border-green-200">
                    <div
                        class="absolute top-0 right-0 p-8 opacity-5 transition-opacity group-hover:opacity-10 pointer-events-none">
                        <i class="ri-dna-line text-9xl text-green-600"></i>
                    </div>
                    <div class="relative p-8 md:p-10 flex flex-col md:flex-row gap-8">
                        <div
                            class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white shadow-lg shadow-green-600/30">
                            <i class="ri-dna-line text-3xl"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="text-2xl font-bold text-gray-900 mb-4">3. Pengujian Imunohistokimia (IHK)</h4>
                            <p class="text-sm text-gray-600 mb-6">Analisis molekuler spesifik untuk mendeteksi ekspresi
                                protein target dalam jaringan, mengungkap mekanisme kerja biologis secara mendalam.</p>

                            {{-- Container Grid --}}
                            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600 leading-relaxed">
                                <div class="text-xl">
                                    <strong class="block text-gray-900 mb-1"><i
                                            class="ri-search-eye-line text-green-600 mr-1"></i>Deteksi Biomarker
                                        Spesifik</strong>
                                    Pemetaan lokasi dan pengukuran tingkat ekspresi protein
                                    target pada sampel jaringan organ secara spesifik.
                                    <strong class="block text-gray-900 mb-1"><i
                                            class="ri-leaf-line text-green-600 mr-1"></i> Pembuktian Mekanisme
                                        Kerja</strong>
                                    Mengidentifikasi penanda molekuler yang berperan dalam
                                    jalur inflamasi, apoptosis, stres oksidatif, respons antioksidan, angiogenesis,
                                    proliferasi sel, fibrosis, penanda tumor, dan modulasi sistem imun.
                                </div>
                                <div>
                                    <img src="{{ asset('/ilustration/ihk.jpeg') }}"
                                        alt="Phytochemistry Analysis" class="w-[600px] h-auto ml-10" />
                                </div>
                            </div>
                        </div>

                        {{-- Skrip Toggle (Bisa diletakkan di bawah file atau di dalam <head>) --}}
                        <script>
                            function toggleIHC() {
                                // Ambil semua elemen yang di-hide
                                const hiddenItems = document.querySelectorAll('.ihc-hidden-item');
                                const btnText = document.getElementById('btn-text-ihc');
                                const btnIcon = document.getElementById('btn-icon-ihc');
                                let isCurrentlyHidden = hiddenItems[0].classList.contains('hidden');

                                hiddenItems.forEach(item => {
                                    if (isCurrentlyHidden) {
                                        // Munculkan: Hapus class hidden, tambahkan flex
                                        item.classList.remove('hidden');
                                        item.classList.add('flex');
                                    } else {
                                        // Sembunyikan: Hapus flex, kembalikan hidden
                                        item.classList.add('hidden');
                                        item.classList.remove('flex');
                                    }
                                });

                                // Ubah Teks & Icon pada Tombol
                                if (isCurrentlyHidden) {
                                    btnText.innerText = 'Sembunyikan';
                                    btnIcon.classList.add('rotate-180'); // Memutar panah ke atas
                                } else {
                                    btnText.innerText = 'Lihat 5 Poin Lainnya';
                                    btnIcon.classList.remove('rotate-180'); // Memutar panah ke bawah
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 4. SPECS & WHY CHOOSE US                   --}}
    {{-- ========================================== --}}
    <section id="informasi" class="py-24 bg-white relative overflow-hidden">
        {{-- Molecular SVG Accent --}}
        <div class="absolute right-0 bottom-0 opacity-[0.03] pointer-events-none translate-x-1/4 translate-y-1/4">
            <svg width="400" height="400" viewBox="0 0 200 200" fill="none" stroke="#047857" stroke-width="2">
                <circle cx="100" cy="100" r="80" stroke-dasharray="8 8" />
                <circle cx="100" cy="100" r="60" />
                <circle cx="70" cy="80" r="15" fill="#047857" opacity="0.5" />
                <circle cx="130" cy="90" r="10" fill="#047857" opacity="0.5" />
                <circle cx="100" cy="130" r="20" fill="#047857" opacity="0.5" />
                <path d="M70 80 Q 100 100 130 90" stroke="#047857" stroke-width="2" />
                <path d="M70 80 Q 85 105 100 130" stroke="#047857" stroke-width="2" />
                <path d="M130 90 Q 115 110 100 130" stroke="#047857" stroke-width="2" />
            </svg>
        </div>

        <div class="relative z-10 mx-auto max-w-7xl px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-start">

                {{-- Spesifikasi Sampel --}}
                <div class="rounded-[2rem] bg-gray-50 border border-gray-200 p-8 md:p-10 shadow-sm">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-700">
                            <i class="ri-test-tube-fill text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Spesifikasi Sampel</h3>
                    </div>
                    <p class="text-gray-600 mb-6 font-medium">Laboratorium kami menerima sampel jaringan organ
                        (tikus/mencit) dalam berbagai persiapan:</p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                            <i class="ri-flask-line text-green-600 text-xl mt-0.5"></i>
                            <div>
                                <strong class="block text-gray-900">Organ Basah (Fiksasi)</strong>
                                <span class="text-sm text-gray-600">Jaringan organ yang telah difiksasi dalam cairan
                                    formalin (NBF 10%).</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                            <i class="ri-shape-line text-green-600 text-xl mt-0.5"></i>
                            <div>
                                <strong class="block text-gray-900">Blok Parafin (Paraffin Block)</strong>
                                <span class="text-sm text-gray-600">Sampel yang sudah dicetak dalam blok parafin dan siap
                                    dipotong (mikrotom).</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                            <i class="ri-microscope-line text-green-600 text-xl mt-0.5"></i>
                            <div>
                                <strong class="block text-gray-900">Preparat Siap Warnai</strong>
                                <span class="text-sm text-gray-600">Slide atau preparat jaringan yang sudah berada di atas
                                    kaca objek dan siap diwarnai.</span>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- Mengapa Memilih Kami & Referensi --}}
                <div class="space-y-8">
                    <div class="rounded-[2rem] bg-green-900 p-8 md:p-10 shadow-xl relative overflow-hidden">
                        {{-- Soft light effect in dark card --}}
                        <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-green-500/30 blur-3xl"></div>

                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-white mb-6">Mengapa Memilih Kami?</h3>
                            <ul class="space-y-6">
                                <li class="flex items-start gap-4">
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/10 text-green-300 backdrop-blur-sm border border-white/10">
                                        <i class="ri-settings-3-fill text-lg"></i>
                                    </div>
                                    <div>
                                        <strong class="block text-white text-lg">Prosedur Terintegrasi</strong>
                                        <p class="text-sm text-green-100/80 mt-1 leading-relaxed">Meliputi pemrosesan
                                            jaringan, pewarnaan khusus, pemotongan mikrotom berpresisi tinggi, hingga
                                            dokumentasi analisis mikroskopis.</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/10 text-green-300 backdrop-blur-sm border border-white/10">
                                        <i class="ri-team-fill text-lg"></i>
                                    </div>
                                    <div>
                                        <strong class="block text-white text-lg">Tim Ahli Berpengalaman</strong>
                                        <p class="text-sm text-green-100/80 mt-1 leading-relaxed">Proses pengujian
                                            ditangani langsung oleh tenaga ahli dan disupervisi oleh patologi yang
                                            berpengalaman dibidang biomedis dan bahan alam.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Referensi --}}
                    <div
                        class="rounded-2xl border border-gray-100 bg-gray-50 p-6 flex gap-4 items-start text-gray-500 text-sm">
                        <i class="ri-book-read-line text-gray-400 text-xl"></i>
                        <div>
                            <strong class="text-gray-700 block mb-1">Referensi Standar Pengujian:</strong>
                            <p class="leading-relaxed">Juniarti. 2026. Histokimia dan Immunohistokimia dari Dasar Molekuler
                                hingga Diagnosis: Bab 6. Pemrosesan, Embedding, Pemotongan, dan Preparasi Jaringan. CV.
                                Eureka Media Aksara.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 5. CALL TO ACTION                          --}}
    {{-- ========================================== --}}
    <x-contact-cta />

@endsection
