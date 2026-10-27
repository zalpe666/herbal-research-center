@extends('layouts.app')

@section('title', 'Herbal Testing Services')

@section('content')
    {{-- Hero --}}
    <section class="relative overflow-hidden pt-36 pb-48">
        {{-- Background Image & Overlays --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/banner/test1.jpeg') }}" alt="Phytochemistry Analysis"
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
                    {{-- Badge --}}
                    <div
                        class="mb-6 inline-flex items-center gap-3 rounded-full border border-green-300/30 bg-green-950/40 px-4 py-2 shadow-lg shadow-green-950/20 backdrop-blur-md">
                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-green-400/10">
                            <i class="ri-shield-check-line text-green-300"></i>
                        </span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-green-200">
                            Laboratorium Herbal Terpadu
                        </span>
                    </div>

                    {{-- Heading --}}
                    <h1
                        class="max-w-4xl text-4xl font-black leading-[1.05] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                        Layanan Pengujian
                        <span class="text-green-300">Herbal</span>
                        Terpadu
                    </h1>

                    {{-- Description --}}
                    <p class="mt-7 max-w-2xl text-white text-2xl">
                        Punya bahan alam? Kami bantu buktikan potensinya dengan data ilmiah yang kuat—siap untuk riset,
                        publikasi, dan pengembangan produk.
                    </p>

                    {{-- Feature Pills --}}
                    <div class="mt-8 flex flex-wrap gap-3">
                        <div
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 backdrop-blur-sm">
                            <i class="ri-checkbox-circle-line text-green-300"></i>
                            <span class="text-sm text-green-100">Metode Valid & Terstandar</span>
                        </div>
                        <div
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 backdrop-blur-sm">
                            <i class="ri-file-chart-line text-green-300"></i>
                            <span class="text-sm text-green-100">Laporan Hasil Uji (LHU)</span>
                        </div>
                        <div
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 backdrop-blur-sm">
                            <i class="ri-award-line text-lg text-green-300"></i>
                            <span class="text-sm text-green-100">Tim Analis Berpengalaman</span>
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
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-400/10">
                                    <i class="ri-microscope-line text-xl text-green-300"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-white">Panel Pengujian</p>
                                    <p class="text-xs text-green-200/50">Fitokimia & Mutu Herbal</p>
                                </div>
                            </div>
                            <span class="flex h-2.5 w-2.5 rounded-full bg-green-400 shadow-lg shadow-green-400/50"></span>
                        </div>

                        {{-- Divider --}}
                        <div class="my-6 h-px bg-white/10"></div>

                        {{-- Compound List --}}
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/5">
                                        <i class="ri-flask-line text-green-300"></i>
                                    </div>
                                    <span class="text-sm text-green-100">Uji Alkaloid</span>
                                </div>
                                <i class="ri-checkbox-circle-fill text-green-400"></i>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/5">
                                        <i class="ri-leaf-line text-green-300"></i>
                                    </div>
                                    <span class="text-sm text-green-100">Uji Flavonoid</span>
                                </div>
                                <i class="ri-checkbox-circle-fill text-green-400"></i>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/5">
                                        <i class="ri-contrast-2-line text-green-300"></i>
                                    </div>
                                    <span class="text-sm text-green-100">Tanin & Polifenol</span>
                                </div>
                                <i class="ri-checkbox-circle-fill text-green-400"></i>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/5">
                                        <i class="ri-drop-line text-green-300"></i>
                                    </div>
                                    <span class="text-sm text-green-100">Saponin & Steroid</span>
                                </div>
                                <i class="ri-checkbox-circle-fill text-green-400"></i>
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

    {{-- Konten 1: Ekstraksi --}}
    <section id="ekstraksi" class="bg-white py-20 lg:py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-6xl">
                <div class="flex items-center gap-3 text-sm font-semibold text-green-700">
                    <span class="h-4 w-1 bg-green-700"></span>
                    <span>Ekstraksi</span>
                </div>

                <!-- Content -->
                <div class="grid items-center gap-8 text-justify lg:grid-cols-[3fr_2fr]">
                    <!-- Kiri -->
                    <div class="">
                        <h2 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 sm:text-4xl">
                            Punya bahan alam dan ingin mengolahnya menjadi
                            <span class="text-green-700">Ekstrak</span>
                            yang siap diteliti?
                        </h2>

                        <p class="mt-4 max-w-2xl leading-7 text-gray-600">
                            Laboratorium Herbal Universitas YARSI menyediakan layanan ekstraksi bahan alam
                            dari berbagai sumber seperti daun, buah, biji, akar, dan rempah menggunakan
                            pelarut yang disesuaikan dengan tujuan penelitian.
                        </p>
                    </div>

                    <!-- Kanan -->
                    <div class="text-green-700/10 ml-16">
                        {{-- <i class="ri-flask-line hidden text-[10rem] md:block translate-x-40"></i> --}}
                        <img src="{{ asset('/ilustration/extraction.jpeg') }}" alt="Phytochemistry Analysis"
                            class="w-[300px] h-auto" />
                    </div>

                </div>
            </div>
            <div
                class="mt-10 grid items-center gap-8 overflow-hidden rounded-3xl border border-gray-100 bg-gray-50 p-6 sm:p-8 lg:grid-cols-[1fr_auto] lg:p-10">
                <div class="flex items-start gap-5">
                    <div
                        class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-green-100 text-green-700">
                        <i class="ri-flask-line text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900"> Menghasilkan Ekstrak Siap Diteliti </h3>
                        <p class="mt-2 max-w-3xl text-sm leading-7 text-gray-600 sm:text-base">Hasil ekstraksi dapat
                            digunakan sebagai bahan awal untuk
                            analisis kandungan, pengujian aktivitas, maupun pengembangan riset dan produk berikutnya </p>
                    </div>
                </div>
                <a href="{{ route('herbal-testing-services.extraction') }}"
                    class="group inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white transition duration-300 hover:bg-green-800">
                    <span>Selengkapnya</span> <i
                        class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i> </a>
            </div>

        </div>
    </section>

    {{-- Konten 2: Fraksinasi --}}
    <section id="fraksinasi" class="bg-gray-50 py-20 lg:py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-6xl">
                <div class="flex items-center gap-3 text-sm font-semibold text-green-700">
                    <span class="h-4 w-1 bg-green-700"></span>
                    <span>Fraksinasi</span>
                </div>

                <!-- Content -->
                <div class="grid items-center gap-8 text-justify lg:grid-cols-[3fr_2fr]">
                    <!-- Kiri -->
                    <div class="">
                        <h2 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 sm:text-4xl">
                            Masih belum tahu
                            <span class="text-green-700">Fraksi</span>
                            mana yang paling potensial dari ekstrak Anda?
                        </h2>

                        <p class="mt-4 max-w-2xl leading-7 text-gray-600">
                            Laboratorium Herbal Universitas YARSI menyediakan layanan ekstraksi bahan alam
                            dari berbagai sumber seperti daun, buah, biji, akar, dan rempah menggunakan
                            pelarut yang disesuaikan dengan tujuan penelitian.
                        </p>
                    </div>

                    <!-- Kanan -->
                    <div class="ml-16 text-green-700/10">
                        {{-- <i class="ri-test-tube-line hidden text-[10rem] md:block translate-x-40"></i> --}}
                        <img src="{{ asset('/ilustration/fraksinasi-removebg.png') }}" alt="Phytochemistry Analysis"
                            class="w-[300px] h-auto" />/>

                    </div>

                </div>
            </div>
            <div
                class="mt-10 grid items-center gap-8 overflow-hidden rounded-3xl border border-gray-100 bg-white p-6 sm:p-8 lg:grid-cols-[1fr_auto] lg:p-10">
                <div class="flex items-start gap-5">
                    <div
                        class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-green-100 text-green-700">
                        <i class="ri-test-tube-line text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900"> Menemukan Fraksi yang Paling Potensial </h3>
                        <p class="mt-2 max-w-3xl text-sm leading-7 text-gray-600 sm:text-base">Proses ini membantu Anda
                            lebih cepat menemukan fraksi yang paling aktif dan menjanjikan untuk dilanjutkan ke tahap
                            isolasi, pengujian lanjutan, publikasi, maupun pengembangan produk.</p>
                    </div>
                </div> <a href="#"
                    class="group inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white transition duration-300 hover:bg-green-800">
                    <span>Selengkapnya</span> <i
                        class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i> </a>
            </div>

        </div>
    </section>

    {{-- Konten 3: Analisis LC-MS/MS --}}
    <section id="lc-ms-ms" class="bg-white py-20 lg:py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-6xl">
                <div class="flex items-center gap-3 text-sm font-semibold text-green-700">
                    <span class="h-4 w-1 bg-green-700"></span>
                    <span>Analisis LC–MS/MS</span>
                </div>

                <!-- Content -->
                <div class="grid items-center gap-8 text-justify lg:grid-cols-[3fr_2fr]">
                    <!-- Kiri -->
                    <div class="">
                        <h2 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 sm:text-4xl">
                            Ingin tahu lebih dalam senyawa apa yang terkandung dalam ekstrak Anda melalui
                            <span class="text-green-700">LC–MS/MS</span>?
                        </h2>

                        <p class="mt-4 max-w-2xl leading-7 text-gray-600">
                            Laboratorium Herbal Universitas YARSI siap membantu Anda melalui analisis LC–MS/MS untuk
                            membaca profil senyawa secara lebih mendalam berdasarkan karakteristik massa dan pola
                            fragmentasinya.
                        </p>
                    </div>

                    <!-- Kanan -->
                    <div class="text-green-700/10 ml-16">
                        {{-- <i class="ri-microscope-line hidden text-[10rem] md:block translate-x-40"></i> --}}
                        <img src="{{ asset('/ilustration/lc-ms-removebg.png') }}" alt="Phytochemistry Analysis"
                            class="w-[800px] h-auto" />

                    </div>
                </div>
            </div>
            <div
                class="mt-10 grid items-center gap-8 overflow-hidden rounded-3xl border border-gray-100 bg-gray-50 p-6 sm:p-8 lg:grid-cols-[1fr_auto] lg:p-10">
                <div class="flex items-start gap-5">
                    <div
                        class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-green-100 text-green-700">
                        <i class="ri-microscope-line text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900"> Membaca Profil Senyawa Secara Mendalam </h3>
                        <p class="mt-2 max-w-3xl text-sm leading-7 text-gray-600 sm:text-base"> Hasil analisis membantu
                            mengenali kandidat komponen utama, membandingkan profil antar sampel, dan menghasilkan data
                            ilmiah yang lebih kuat untuk mendukung riset, publikasi, hingga pengembangan produk.</p>
                    </div>
                </div> <a href="#"
                    class="group inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white transition duration-300 hover:bg-green-800">
                    <span>Selengkapnya</span> <i
                        class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i> </a>
            </div>
        </div>
    </section>

    {{-- Konten 4: Fitokimia --}}
    <section id="fitokimia" class="bg-gray-50 py-20 lg:py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-6xl">
                <div class="flex items-center gap-3 text-sm font-semibold text-green-700">
                    <span class="h-4 w-1 bg-green-700"></span>
                    <span>Fitokimia</span>
                </div>

                <!-- Content -->
                <div class="grid items-center gap-8 text-justify lg:grid-cols-[3fr_2fr]">
                    <!-- Kiri -->
                    <div class="">
                        <h2 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 sm:text-4xl">
                            Penasaran dengan Kandungan Ekstrak Anda melalui Uji
                            <span class="text-green-700">Fitokimia</span>?
                        </h2>

                        <p class="mt-4 max-w-2xl leading-7 text-gray-600">
                            Laboratorium Herbal Universitas YARSI siap membantu Anda mulai dari skrining fitokimia untuk
                            melihat
                            gambaran awal kelompok senyawa, dilanjutkan dengan KLT untuk melihat pola kandungan dan
                            membandingkannya
                            dengan standar, hingga spektrofotometri untuk mengetahui kadar senyawa penting.
                        </p>
                    </div>

                    <!-- Kanan -->
                    <div class="text-green-700/10">
                        <i class="ri-test-tube-line hidden text-[10rem] md:block translate-x-40"></i>
                    </div>
                </div>
            </div>
            <div
                class="mt-10 grid items-center gap-8 overflow-hidden rounded-3xl border border-gray-100 bg-white p-6 sm:p-8 lg:grid-cols-[1fr_auto] lg:p-10">
                <div class="flex items-start gap-5">
                    <div
                        class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-green-100 text-green-700">
                        <i class="ri-test-tube-line text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900"> Dari Skrining hingga Data Terukur </h3>
                        <p class="mt-2 max-w-3xl text-sm leading-7 text-gray-600 sm:text-base">Dari sekadar mengetahui “ada
                            atau tidak”, kami bantu mengubahnya menjadi data yang lebih jelas, terukur, dan siap mendukung
                            riset, publikasi, maupun pengembangan produk.</p>
                    </div>
                </div> <a href="#"
                    class="group inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white transition duration-300 hover:bg-green-800">
                    <span>Selengkapnya</span> <i
                        class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i> </a>
            </div>
        </div>
    </section>

    {{-- Konten 5: Uji Antioksidan --}}
    <section id="antioksidan" class="bg-white py-20 lg:py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-6xl">
                <div class="flex items-center gap-3 text-sm font-semibold text-green-700">
                    <span class="h-4 w-1 bg-green-700"></span>
                    <span>Uji Antioksidan</span>
                </div>

                <!-- Content -->
                <div class="grid items-center gap-8 text-justify lg:grid-cols-[3fr_2fr]">
                    <!-- Kiri -->
                    <div class="">
                        <h2 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 sm:text-4xl">
                            Punya ekstrak dan ingin tahu seberapa besar potensi Ekstrak Anda melalui Uji
                            <span class="text-green-700">Antioksidan</span>-nya?
                        </h2>

                        <p class="mt-4 max-w-2xl leading-7 text-gray-600">
                            Di Laboratorium Herbal Universitas YARSI, pengujian DPPH, ABTS, FRAP, dan Reducing Power
                            membantu memetakan kekuatan antioksidan sampel dari berbagai sudut.
                        </p>
                    </div>

                    <!-- Kanan -->
                    <div class="text-green-700/10">
                        <i class="ri-shield-check-line hidden text-[10rem] md:block translate-x-40"></i>
                    </div>
                </div>
            </div>
            <div
                class="mt-10 grid items-center gap-8 overflow-hidden rounded-3xl border border-gray-100 bg-gray-50 p-6 sm:p-8 lg:grid-cols-[1fr_auto] lg:p-10">
                <div class="flex items-start gap-5">
                    <div
                        class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-green-100 text-green-700">
                        <i class="ri-shield-check-line text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900"> Mengukur Potensi Aktivitas Antioksidan </h3>
                        <p class="mt-2 max-w-3xl text-sm leading-7 text-gray-600 sm:text-base">Hasilnya bukan sekadar
                            angka, tetapi petunjuk awal untuk memilih arah riset yang paling menjanjikan, memperkuat
                            publikasi, dan membuka peluang pengembangan bioaktivitas maupun produk herbal berikutnya.</p>
                    </div>
                </div> <a href="#"
                    class="group inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white transition duration-300 hover:bg-green-800">
                    <span>Selengkapnya</span> <i
                        class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i> </a>
            </div>
        </div>
    </section>

    {{-- CTA / Contact Information Section --}}
    <x-contact-cta />

@endsection
