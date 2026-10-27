@extends('layouts.app')

@section('title', 'Phytochemistry Analysis')

@section('content')
    {{-- Hero --}}
    <section class="relative overflow-hidden pt-36 pb-48">
        {{-- Background Image & Overlays --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/banner/phytochemistry.jpeg') }}" alt="Phytochemistry Analysis"
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
                            Laboratorium Herbal Terpadu
                        </span>
                        <span class="h-1.5 w-1.5 rounded-full bg-green-300"></span>
                        <span class="text-xs text-green-300">
                            Standar Ilmiah Resmi
                        </span>
                    </div>

                    {{-- Heading (Lebih berfokus pada layanan & mutu produk klien) --}}
                    <h1
                        class="max-w-4xl text-4xl font-black leading-[1.05] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                        Layanan Pengujian
                        <span class="text-green-300">Herbal</span>
                        Terpadu
                    </h1>

                    {{-- Description --}}
                    <p class="mt-7 max-w-2xl text-base leading-relaxed text-green-100/80 md:text-lg">
                        Solusi terpadu untuk ekstraksi, fraksinasi, analisis LC–MS/MS, uji fitokimia, dan aktivitas
                        antioksidan bahan alam.
                    </p>

                    {{-- Feature Pills (Diubah menyesuaikan konteks jasa pengujian) --}}
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

    {{-- Introduction Section --}}
    <section class="relative bg-white py-24">
        <div class="mx-auto max-w-7xl px-6 text-center">
            <div class="mx-auto max-w-3xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Layanan Uji Fitokimia Terpercaya <br> untuk Mutu Herbal Anda
                </h2>
                <p class="mt-4 text-lg font-medium text-green-700">
                    Identifikasi senyawa aktif bahan alam secara presisi, akurat, dan berstandar ilmiah
                </p>
                <div class="mt-8 rounded-2xl bg-green-50 p-8 shadow-inner border border-green-100">
                    <p class=" leading-relaxed text-gray-700 text-lg">
                        Di <strong>Pusat Herbal</strong>, kami berkomitmen menjembatani kearifan herbal nusantara dengan
                        kepastian ilmiah. Setiap tumbuhan dan ekstrak bahan alam memiliki potensi luar biasa yang perlu
                        diuji secara presisi untuk menjamin keamanan, efektivitas, dan standar mutunya.
                    </p>
                    <p class="mt-4  leading-relaxed text-gray-700 text-lg">
                        Kami menyediakan layanan pengujian laboratorium terpadu yang dirancang untuk membantu para peneliti,
                        akademisi, pelaku UMKM jamu/herbal, hingga industri formulasi bahan alam.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Phytochemical Screening Section --}}
    <section class="relative bg-gray-50 py-24">
        <div class="mx-auto max-w-7xl px-6">

            <div class="grid gap-16 lg:grid-cols-2">
                {{-- Left: Description & Benefits --}}
                <div>
                    <div
                        class="inline-flex items-center gap-2 rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-800">
                        <i class="ri-test-tube-line"></i> Phytochemical Screening
                    </div>
                    <h3 class="mt-4 text-3xl font-bold tracking-tight text-gray-900">
                        Mengapa Uji Fitokimia Sangat Krusial?
                    </h3>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                        Ekstrak tanaman obat mengandung berbagai senyawa metabolit sekunder yang menentukan khasiat utama
                        bahan herbal. Uji Fitokimia di laboratorium kami bertujuan untuk mengidentifikasi dan menguji
                        keberadaan kelompok senyawa aktif secara akurat dan terstandar.
                    </p>

                    <div class="mt-10">
                        <h4 class="text-lg font-bold text-gray-900 mb-6">Manfaat Uji Fitokimia Bagi Anda:</h4>
                        <div class="space-y-5">
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-green-600 text-white shadow-md">
                                    <i class="ri-checkbox-circle-line text-xl"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">Kepastian Kandungan</h5>
                                    <p class="mt-1 text-sm text-gray-600">Memastikan bahan baku atau ekstrak anda
                                        benar-benar mengandung senyawa aktif yang diharapkan.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-green-600 text-white shadow-md">
                                    <i class="ri-scales-3-line text-xl"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">Standardisasi Mutu</h5>
                                    <p class="mt-1 text-sm text-gray-600">Membantu penyusunan profil bahan alam yang
                                        konsisten untuk kebutuhan legalitas dan registrasi produk.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-green-600 text-white shadow-md">
                                    <i class="ri-microscope-line text-xl"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">Validasi Ilmiah</h5>
                                    <p class="mt-1 text-sm text-gray-600">Memberikan dasar data kuantitatif & kualitatif
                                        yang kuat untuk kebutuhan publikasi ilmiah maupun klaim khasiat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Compounds Grid --}}
                <div class="rounded-3xl bg-white p-8 shadow-xl shadow-gray-200/50 border border-gray-100">
                    <h4 class="text-xl font-bold text-gray-900 mb-6">Kelompok Senyawa Aktif yang Kami Uji</h4>
                    <div class="space-y-4">
                        {{-- Alkaloid --}}
                        <div
                            class="group flex items-start gap-4 rounded-xl border border-gray-100 p-4 transition-all hover:border-green-300 hover:bg-green-50/50 hover:shadow-md">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-700 transition-colors group-hover:bg-green-600 group-hover:text-white">
                                <i class="ri-flask-fill text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900">Alkaloid</h5>
                                <p class="mt-1 text-sm text-gray-600">Mengidentifikasi potensi aktivitas biologis dan
                                    farmakologis.</p>
                            </div>
                        </div>

                        {{-- Flavonoid --}}
                        <div
                            class="group flex items-start gap-4 rounded-xl border border-gray-100 p-4 transition-all hover:border-green-300 hover:bg-green-50/50 hover:shadow-md">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-700 transition-colors group-hover:bg-green-600 group-hover:text-white">
                                <i class="ri-leaf-fill text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900">Flavonoid</h5>
                                <p class="mt-1 text-sm text-gray-600">Mengukur kandungan antioksidan tinggi penghambat
                                    radikal bebas.</p>
                            </div>
                        </div>

                        {{-- Tanin & Polifenol --}}
                        <div
                            class="group flex items-start gap-4 rounded-xl border border-gray-100 p-4 transition-all hover:border-green-300 hover:bg-green-50/50 hover:shadow-md">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-700 transition-colors group-hover:bg-green-600 group-hover:text-white">
                                <i class="ri-drop-fill text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900">Tanin & Polifenol</h5>
                                <p class="mt-1 text-sm text-gray-600">Menentukan sifat astringen dan proteksi sel.</p>
                            </div>
                        </div>

                        {{-- Saponin --}}
                        <div
                            class="group flex items-start gap-4 rounded-xl border border-gray-100 p-4 transition-all hover:border-green-300 hover:bg-green-50/50 hover:shadow-md">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-700 transition-colors group-hover:bg-green-600 group-hover:text-white">
                                <i class="ri-bubble-chart-fill text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900">Saponin</h5>
                                <p class="mt-1 text-sm text-gray-600">Menganalisis potensi agen antimikroba dan imunitas.
                                </p>
                            </div>
                        </div>

                        {{-- Steroid & Triterpenoid --}}
                        <div
                            class="group flex items-start gap-4 rounded-xl border border-gray-100 p-4 transition-all hover:border-green-300 hover:bg-green-50/50 hover:shadow-md">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-700 transition-colors group-hover:bg-green-600 group-hover:text-white">
                                <i class="ri-hexagon-fill text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900">Steroid & Triterpenoid</h5>
                                <p class="mt-1 text-sm text-gray-600">Mengidentifikasi komponen penyusun bioaktif alami.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Why Choose Us & Other Services Section --}}
    <section class="py-24 bg-white relative">
        <div class="mx-auto max-w-7xl px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Mengapa Memilih Layanan Uji Kami?</h2>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <div
                    class="text-center rounded-2xl bg-gray-50 p-8 border border-gray-100 transition-all hover:shadow-lg hover:border-green-200 hover:-translate-y-1">
                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-100 text-green-600 mb-6">
                        <i class="ri-shield-check-fill text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Metode Valid & Terstandar</h3>
                    <p class="text-lg text-gray-600">Pengujian dilakukan sesuai prosedur baku Farmakope Herbal Indonesia
                        dan standar laboratorium tervalidasi.</p>
                </div>

                <div
                    class="text-center rounded-2xl bg-gray-50 p-8 border border-gray-100 transition-all hover:shadow-lg hover:border-green-200 hover:-translate-y-1">
                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-100 text-green-600 mb-6">
                        <i class="ri-user-star-fill text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Tim Analis Berpengalaman</h3>
                    <p class="text-lg text-gray-600">Ditangani langsung oleh tenaga ahli yang kompeten dan berpengalaman di
                        bidang kimia bahan alam.</p>
                </div>

                <div
                    class="text-center rounded-2xl bg-gray-50 p-8 border border-gray-100 transition-all hover:shadow-lg hover:border-green-200 hover:-translate-y-1">
                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-100 text-green-600 mb-6">
                        <i class="ri-file-chart-fill text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Laporan Hasil Uji (LHU)</h3>
                    <p class="text-lg text-gray-600">Data disajikan secara sistematis, transparan, komprehensif, dan mudah
                        dipahami untuk kebutuhan klien.</p>
                </div>
            </div>

            <div
                class="mt-20 rounded-3xl bg-green-900 p-10 md:p-14 text-center text-white overflow-hidden relative shadow-2xl">
                {{-- Decorative background in the banner --}}
                <div
                    class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white via-transparent to-transparent">
                </div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold md:text-3xl mb-4">Layanan Pengujian Lainnya</h3>
                    <p class="text-green-200 mb-8 max-w-2xl mx-auto">Selain Uji Fitokimia, laboratorium kami juga melayani
                        analisis mutu herbal terpadu secara lengkap.</p>

                    <div class="flex flex-wrap justify-center gap-4">
                        <div
                            class="flex items-center gap-2 rounded-full bg-white/10 px-5 py-2.5 backdrop-blur-md border border-white/20">
                            <i class="ri-drop-line text-green-300"></i> Uji Kadar Air & Susut Pengeringan
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-full bg-white/10 px-5 py-2.5 backdrop-blur-md border border-white/20">
                            <i class="ri-fire-line text-green-300"></i> Uji Kadar Abu
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-full bg-white/10 px-5 py-2.5 backdrop-blur-md border border-white/20">
                            <i class="ri-bar-chart-2-line text-green-300"></i> Analisis Kromatografi (KLT / HPLC)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA / Contact Information Section --}}
    <x-contact-cta />



@endsection
