@extends('layouts.app')

@section('title', 'Taman Herbal Surgawi Nusantara')

@section('content')
    {{-- =========================
    Hero
========================== --}}
    <section class="relative overflow-hidden pt-36 pb-20">

        {{-- Background Image --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/banner/bannerr-taman-herbal.jpeg') }}" alt="Taman Herbal Surgawi Nusantara"
                class="h-full w-full object-cover" />

            {{-- Dark Green Overlay --}}
            <div
                class="absolute inset-0 bg-gradient-to-r
                   from-green-950/95 via-green-950/80 to-green-950/40">
            </div>

            {{-- Bottom Gradient --}}
            <div class="absolute inset-x-0 bottom-0 h-40
                   bg-gradient-to-t from-green-950 to-transparent">
            </div>

            {{-- Soft Green Glow --}}
            <div class="absolute -right-32 -top-32 h-96 w-96
                   rounded-full bg-green-300/10 blur-3xl">
            </div>
        </div>


        {{-- Content --}}
        <div class="relative mx-auto max-w-7xl px-6">

            <div class="grid items-center gap-12 lg:grid-cols-[1fr_420px]">

                {{-- Content --}}
                <div class="max-w-4xl">

                    {{-- Badge --}}
                    <div
                        class="mb-5 inline-flex items-center gap-2 rounded-full
                           border border-green-200/30
                           bg-green-950/30
                           px-4 py-2
                           backdrop-blur-md">

                        <i class="ri-leaf-line text-green-300"></i>

                        <span
                            class="text-xl font-semibold uppercase
                               tracking-[0.18em] text-green-100">
                            Herbal Garden
                        </span>

                    </div>


                    {{-- Heading --}}
                    <h1
                        class="text-4xl font-bold leading-tight
                           tracking-tight text-white md:text-6xl">

                        Taman Herbal

                        <span
                            class="block bg-gradient-to-r
                               from-green-200 via-lime-200 to-green-400
                               bg-clip-text text-transparent">
                            Surgawi Nusantara
                        </span>

                    </h1>


                    {{-- Subtitle --}}
                    <p class="mt-6 text-2xl font-medium leading-relaxed
                           text-green-50">

                        Dari Lahan Terbengkalai
                        <span class="text-green-300">
                            Menjadi Laboratorium Hidup
                        </span>

                    </p>


                    {{-- Description --}}
                    <p class="mt-6 text-2xl max-w-3xl leading-8
                           text-green-50/80">

                        Sebuah <strong class="text-green-200">living laboratory</strong>
                        yang menghubungkan penelitian herbal,
                        pendidikan, pelestarian lingkungan, dan pemberdayaan masyarakat
                        dalam satu ekosistem yang berkelanjutan.

                    </p>
                    {{-- CTA Buttons --}}
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#journey"
                            class="group inline-flex items-center gap-2.5
                                    rounded-xl border border-white/15
                                    bg-white/10 px-5 py-3
                                    text-base font-semibold text-white
                                    backdrop-blur-md
                                    transition-all duration-300
                                    hover:-translate-y-1
                                    hover:border-green-300/40
                                    hover:bg-white/15">

                            <span
                                class="flex h-8 w-8 items-center justify-center rounded-lg
                                        bg-white/10 text-green-200
                                        transition group-hover:bg-green-400/15">

                                <i class="ri-history-line text-lg"></i>

                            </span>

                            <span>Perjalanan</span>

                            <i
                                class="ri-arrow-right-line text-green-300
                                transition-transform duration-300
                                group-hover:translate-x-1"></i>
                        </a>
                        {{-- Sustainable --}}
                        {{-- <a href="#sustainable"
                            class="group inline-flex items-center gap-2.5
                                rounded-xl border border-green-300/30
                                bg-green-900/40 px-5 py-3
                                text-base font-semibold text-white
                                shadow-lg shadow-green-950/20
                                backdrop-blur-md
                                transition-all duration-300
                                hover:-translate-y-1
                                hover:border-green-300/60
                                hover:bg-green-800/60
                                hover:shadow-green-900/30">

                            <span
                                class="flex h-8 w-8 items-center justify-center rounded-lg
                                bg-green-400/15 text-green-300
                                transition group-hover:bg-green-400/25">

                                <i class="ri-leaf-line text-lg"></i>

                            </span>

                            <span>Sustainable</span>
                        </a> --}}


                        {{-- Plant Collection --}}
                        <a href="#plant"
                            class="group inline-flex items-center gap-2.5
                                    rounded-xl border border-white/15
                                    bg-white/10 px-5 py-3
                                    text-base font-semibold text-white
                                    backdrop-blur-md
                                    transition-all duration-300
                                    hover:-translate-y-1
                                    hover:border-green-300/40
                                    hover:bg-white/15">

                            <span
                                class="flex h-8 w-8 items-center justify-center rounded-lg
                                        bg-white/10 text-green-200
                                        transition group-hover:bg-green-400/15">

                                <i class="ri-seedling-line text-lg"></i>

                            </span>

                            <span>Koleksi Tanaman</span>
                        </a>
                        {{-- Waste Management --}}
                        <a href="#waste"
                            class="group inline-flex items-center gap-2.5
           rounded-xl border border-white/15
           bg-white/10 px-5 py-3
           text-base font-semibold text-white
           backdrop-blur-md
           transition-all duration-300
           hover:-translate-y-1
           hover:border-green-300/40
           hover:bg-white/15">

                            <span
                                class="flex h-8 w-8 items-center justify-center rounded-lg
                 bg-white/10 text-green-200
                 transition group-hover:bg-green-400/15">

                                <i class="ri-recycle-line text-lg"></i>

                            </span>

                            <span>Pengelolaan Sampah</span>

                            <i
                                class="ri-arrow-right-line text-green-300
              transition-transform duration-300
              group-hover:translate-x-1"></i>
                        </a>
                        {{-- History --}}

                    </div>

                </div>
            </div>

        </div>

    </section>


    {{-- =========================
    Introduction
========================== --}}
    <section class="relative overflow-hidden bg-white py-20">

        {{-- Left Leaf Silhouette --}}
        <div class="pointer-events-none absolute -left-16 top-1/2 -translate-y-1/2 opacity-[0.06]">
            <svg width="280" height="420" viewBox="0 0 280 420" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path
                    d="M238 24C168 42 86 91 48 163C13 229 35 305 94 352C136 385 188 399 232 402C210 350 211 293 232 237C254 178 273 110 238 24Z"
                    fill="currentColor" class="text-green-800" />

                <path d="M224 53C169 121 132 190 108 282C96 326 96 363 101 397" stroke="currentColor" stroke-width="4"
                    stroke-linecap="round" class="text-green-950" />

                <path d="M168 143C139 143 111 136 83 121" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                    class="text-green-950" />

                <path d="M143 194C112 190 84 179 59 162" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                    class="text-green-950" />

                <path d="M124 247C94 241 69 229 47 212" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                    class="text-green-950" />

            </svg>
        </div>


        {{-- Small Left Leaf --}}
        <div class="pointer-events-none absolute left-24 top-16 rotate-[-25deg] opacity-[0.035]">
            <svg width="130" height="180" viewBox="0 0 130 180" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path
                    d="M110 8C72 19 32 45 17 82C4 114 18 146 47 164C67 176 92 177 112 170C100 143 101 116 112 89C124 58 128 31 110 8Z"
                    fill="currentColor" class="text-green-800" />

                <path d="M101 23C72 60 54 101 49 166" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                    class="text-green-950" />

            </svg>
        </div>


        {{-- Right Leaf Silhouette --}}
        <div class="pointer-events-none absolute -right-16 top-1/2 -translate-y-1/2 scale-x-[-1] opacity-[0.06]">

            <svg width="280" height="420" viewBox="0 0 280 420" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path
                    d="M238 24C168 42 86 91 48 163C13 229 35 305 94 352C136 385 188 399 232 402C210 350 211 293 232 237C254 178 273 110 238 24Z"
                    fill="currentColor" class="text-green-800" />

                <path d="M224 53C169 121 132 190 108 282C96 326 96 363 101 397" stroke="currentColor" stroke-width="4"
                    stroke-linecap="round" class="text-green-950" />

                <path d="M168 143C139 143 111 136 83 121" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                    class="text-green-950" />

                <path d="M143 194C112 190 84 179 59 162" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                    class="text-green-950" />

                <path d="M124 247C94 241 69 229 47 212" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                    class="text-green-950" />

            </svg>
        </div>

        <section class="bg-gray-50 py-20" id="introduction">
            <div class="container mx-auto px-6">
                <div class="aspect-video w-full max-w-5xl mx-auto overflow-hidden rounded-2xl shadow-lg">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/fofwtquChjo" title="Introduction"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        {{-- Content --}}
        <div class="relative mx-auto max-w-4xl px-6">

            <div class="flex items-start gap-5">

                <div
                    class="hidden h-12 w-12 shrink-0 items-center justify-center
                       rounded-xl bg-green-50 text-2xl text-green-700 sm:flex">
                    <i class="ri-leaf-line"></i>
                </div>

                <div>

                    <span class="text-sm font-semibold uppercase tracking-wider text-green-700">
                        Living Laboratory
                    </span>

                    <h2 class="mt-2 text-3xl font-bold text-gray-900">
                        Menghubungkan Ilmu dan Kehidupan
                    </h2>

                    <p class="mt-6 text-xl leading-8 text-gray-600 text-justify">
                        Taman Herbal Surgawi Nusantara merupakan
                        <strong class="font-semibold text-gray-800">
                            laboratorium hidup (living laboratory)
                        </strong>
                        yang menghubungkan penelitian herbal,
                        pendidikan, pelestarian lingkungan, dan pemberdayaan masyarakat.
                    </p>

                    <p class="mt-5 text-xl leading-8 text-gray-600 text-justify">
                        Taman ini dikembangkan dari aktivitas penelitian di Laboratorium Herbal,
                        Pusat Penelitian Herbal Universitas YARSI, dengan semangat menghadirkan
                        ilmu pengetahuan agar tidak berhenti di dalam laboratorium, tetapi tumbuh
                        dan memberikan manfaat nyata bagi masyarakat.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
    Timeline
========================== --}}
    <section class="bg-gray-50 py-20" id="journey">
        <div class="mx-auto max-w-7xl px-6">

            <div class="max-w-2xl">
                <div class="mb-4 flex items-center gap-3">

                    <span class="h-5 w-1 rounded-full bg-green-600"></span>

                    <p class="text-3xl font-semibold uppercase tracking-wider text-green-600">
                        Our Journey
                    </p>

                </div>

                <h2 class="mt-2 text-3xl font-bold text-gray-900 md:text-4xl">
                    Berawal dari Sebuah Gagasan
                </h2>
            </div>


            <div class="relative mt-12 max-w-4xl">

                {{-- Line --}}
                <div class="absolute left-[15px] top-2 bottom-2 hidden w-px bg-green-200 sm:block"></div>


                {{-- 2018 --}}
                <div class="relative flex gap-6 pb-12">

                    <div
                        class="relative z-10 flex h-8 w-8 shrink-0 items-center justify-center rounded-full border-4 border-gray-50 bg-green-700">
                        <span class="h-2 w-2 rounded-full bg-white"></span>
                    </div>

                    <div>
                        <span class="text-xl font-bold text-green-700">
                            2018
                        </span>

                        <h3 class="mt-1 text-xl font-bold text-gray-900">
                            Awal Penanaman
                        </h3>

                        <p class="text-xl mt-3 leading-7 text-gray-600 text-justify">
                            Penanaman mulai dilakukan dengan menghadirkan tanaman bernilai
                            penting seperti kurma, tin, bidara, serta berbagai tanaman yang
                            disebutkan dalam Al-Qur’an dan hadis Nabi.
                        </p>
                    </div>

                </div>


                {{-- 2023 --}}
                <div class="relative flex gap-6">

                    <div
                        class="relative z-10 flex h-8 w-8 shrink-0 items-center justify-center rounded-full border-4 border-gray-50 bg-green-700">
                        <span class="h-2 w-2 rounded-full bg-white"></span>
                    </div>

                    <div>
                        <span class="text-xl font-bold text-green-700">
                            23 Juli 2023
                        </span>

                        <h3 class="mt-1 text-xl font-bold text-gray-900">
                            Pengembangan Infrastruktur
                        </h3>

                        <p class="text-xl  mt-3 leading-7 text-gray-600 text-justify">
                            Pengembangan taman diperkuat melalui pembangunan infrastruktur
                            secara lebih terarah dan sistematis. Kegiatan ini mendapat dukungan
                            dari warga Cluster Nusantara serta hibah pengabdian kepada masyarakat
                            dari Yayasan YARSI dan Direktorat Jenderal Pendidikan Tinggi,
                            Sains, dan Teknologi.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="overflow-hidden bg-gray-50" id="waste">

        <div class="mx-auto max-w-7xl px-6 py-20 md:py-28">

            {{-- =========================
            SECTION HEADER
        ========================== --}}
            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-4 flex items-center justify-center gap-3">

                    <span class="h-5 w-1 rounded-full bg-green-600"></span>

                    <p class="text-sm font-semibold uppercase tracking-[0.18em] text-green-600">
                        Sustainable System
                    </p>

                </div>

                <h2 class="text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                    Sustainable Waste
                    <span class="text-green-700">
                        Management
                    </span>
                </h2>

                <p class="mx-auto mt-5 max-w-2xl text-base leading-relaxed text-gray-600 md:text-lg">
                    An integrated circular system that transforms plant waste
                    into valuable organic resources while supporting healthy
                    soil, sustainable cultivation, and environmental responsibility.
                </p>

            </div>


            {{-- =====================================================
            RADIAL SYSTEM
        ====================================================== --}}
            <div class="relative mx-auto mt-20 hidden h-[650px] max-w-[850px] md:block">


                {{-- =========================
                DECORATIVE CIRCLES
            ========================== --}}

                <div
                    class="absolute left-1/2 top-1/2 h-[430px] w-[430px]
                       -translate-x-1/2 -translate-y-1/2 rounded-full
                       border border-green-100">
                </div>

                <div
                    class="absolute left-1/2 top-1/2 h-[300px] w-[300px]
                       -translate-x-1/2 -translate-y-1/2 rounded-full
                       border border-dashed border-green-200">
                </div>


                {{-- =========================
                CENTER
            ========================== --}}
                <div
                    class="absolute left-1/2 top-1/2 z-20
                       flex h-48 w-48 -translate-x-1/2 -translate-y-1/2
                       flex-col items-center justify-center
                       rounded-full bg-green-800 text-center
                       shadow-2xl ring-8 ring-green-100">

                    <div
                        class="mb-3 flex h-14 w-14 items-center justify-center
                           rounded-2xl bg-white/10 text-3xl text-green-200">

                        <i class="ri-recycle-line"></i>

                    </div>

                    <h3 class="px-5 text-lg font-bold leading-snug text-white">
                        Sustainable
                        <br>
                        Waste Management
                    </h3>

                    <p class="mt-2 text-xs text-green-200">
                        Herbal Garden
                    </p>

                </div>


                {{-- =================================================
                CONNECTION POINTS
            ================================================== --}}

                {{-- Decorative center dots --}}
                <div
                    class="absolute left-1/2 top-[125px] h-2 w-2
                       -translate-x-1/2 rounded-full bg-green-300">
                </div>

                <div class="absolute right-[135px] top-[245px] h-2 w-2
                       rounded-full bg-green-300">
                </div>

                <div
                    class="absolute right-[190px] bottom-[115px] h-2 w-2
                       rounded-full bg-green-300">
                </div>

                <div class="absolute left-[190px] bottom-[115px] h-2 w-2
                       rounded-full bg-green-300">
                </div>

                <div class="absolute left-[135px] top-[245px] h-2 w-2
                       rounded-full bg-green-300">
                </div>


                {{-- =================================================
                01 - PLANT WASTE COLLECTION
            ================================================== --}}
                <div class="group absolute left-0 top-1/2
                       w-52 -translate-y-1/2">

                    <div
                        class="rounded-2xl border border-gray-200 bg-white p-5
                           shadow-sm transition-all duration-300
                           hover:-translate-y-1 hover:border-green-300
                           hover:shadow-xl">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center
                                   rounded-xl bg-green-100 text-2xl text-green-700
                                   transition-transform duration-300
                                   group-hover:scale-110">

                                <i class="ri-leaf-line"></i>

                            </div>

                            <div>

                                <span class="text-[10px] font-bold uppercase tracking-widest text-green-600">
                                    01
                                </span>

                                <h3 class="mt-1 text-sm font-bold text-gray-900">
                                    Plant Waste
                                    <br>
                                    Collection
                                </h3>

                            </div>

                        </div>

                        <p class="mt-4 text-xs leading-relaxed text-gray-500">
                            Collection and sorting of organic plant residues
                            generated within the garden.
                        </p>

                    </div>

                </div>


                {{-- =================================================
                02 - COMPOSTING UNIT
            ================================================== --}}
                <div class="group absolute left-1/2 top-0
                       w-52 -translate-x-1/2">

                    <div
                        class="rounded-2xl border border-gray-200 bg-white p-5
                           shadow-sm transition-all duration-300
                           hover:-translate-y-1 hover:border-green-300
                           hover:shadow-xl">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center
                                   rounded-xl bg-green-100 text-2xl text-green-700
                                   transition-transform duration-300
                                   group-hover:scale-110">

                                <i class="ri-inbox-archive-line"></i>

                            </div>

                            <div>

                                <span class="text-[10px] font-bold uppercase tracking-widest text-green-600">
                                    02
                                </span>

                                <h3 class="mt-1 text-sm font-bold text-gray-900">
                                    Composting
                                    <br>
                                    Unit
                                </h3>

                            </div>

                        </div>

                        <p class="mt-4 text-xs leading-relaxed text-gray-500">
                            Organic materials are processed and converted
                            into nutrient-rich compost.
                        </p>

                    </div>

                </div>


                {{-- =================================================
                03 - LIQUID ORGANIC FERTILIZER
            ================================================== --}}
                <div class="group absolute right-0 top-1/2
                       w-52 -translate-y-1/2">

                    <div
                        class="rounded-2xl border border-gray-200 bg-white p-5
                           shadow-sm transition-all duration-300
                           hover:-translate-y-1 hover:border-green-300
                           hover:shadow-xl">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center
                                   rounded-xl bg-green-100 text-2xl text-green-700
                                   transition-transform duration-300
                                   group-hover:scale-110">

                                <i class="ri-drop-line"></i>

                            </div>

                            <div>

                                <span class="text-[10px] font-bold uppercase tracking-widest text-green-600">
                                    03
                                </span>

                                <h3 class="mt-1 text-sm font-bold text-gray-900">
                                    Liquid Organic
                                    <br>
                                    Fertilizer
                                </h3>

                            </div>

                        </div>

                        <p class="mt-4 text-xs leading-relaxed text-gray-500">
                            Organic materials are processed into liquid
                            fertilizer for plant nutrition.
                        </p>

                    </div>

                </div>


                {{-- =================================================
                04 - ORGANIC FERTILIZER APPLICATION
            ================================================== --}}
                <div class="group absolute bottom-0 right-[120px]
                       w-52">

                    <div
                        class="rounded-2xl border border-gray-200 bg-white p-5
                           shadow-sm transition-all duration-300
                           hover:-translate-y-1 hover:border-green-300
                           hover:shadow-xl">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center
                                   rounded-xl bg-green-100 text-2xl text-green-700
                                   transition-transform duration-300
                                   group-hover:scale-110">

                                <i class="ri-seedling-line"></i>

                            </div>

                            <div>

                                <span class="text-[10px] font-bold uppercase tracking-widest text-green-600">
                                    04
                                </span>

                                <h3 class="mt-1 text-sm font-bold text-gray-900">
                                    Organic Fertilizer
                                    <br>
                                    Application
                                </h3>

                            </div>

                        </div>

                        <p class="mt-4 text-xs leading-relaxed text-gray-500">
                            Compost and organic fertilizer are applied
                            to support sustainable plant growth.
                        </p>

                    </div>

                </div>


                {{-- =================================================
                05 - SOIL & PLANT NUTRITION
            ================================================== --}}
                <div class="group absolute bottom-0 left-[120px]
                       w-52">

                    <div
                        class="rounded-2xl border border-green-200 bg-green-50 p-5
                           shadow-sm transition-all duration-300
                           hover:-translate-y-1 hover:border-green-400
                           hover:shadow-xl">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center
                                   rounded-xl bg-green-700 text-2xl text-white
                                   transition-transform duration-300
                                   group-hover:scale-110">

                                <i class="ri-plant-line"></i>

                            </div>

                            <div>

                                <span class="text-[10px] font-bold uppercase tracking-widest text-green-700">
                                    05
                                </span>

                                <h3 class="mt-1 text-sm font-bold text-gray-900">
                                    Soil & Plant
                                    <br>
                                    Nutrition
                                </h3>

                            </div>

                        </div>

                        <p class="mt-4 text-xs leading-relaxed text-gray-600">
                            Healthy soil provides essential nutrients that
                            support continuous plant growth.
                        </p>

                    </div>

                </div>

            </div>


            {{-- =====================================================
            MOBILE VERSION
        ====================================================== --}}
            <div class="mt-14 space-y-4 md:hidden">

                {{-- Center --}}
                <div class="rounded-3xl bg-green-800 p-8 text-center shadow-xl">

                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center
                           rounded-2xl bg-white/10 text-3xl text-green-200">

                        <i class="ri-recycle-line"></i>

                    </div>

                    <h3 class="text-xl font-bold text-white">
                        Sustainable Waste Management
                    </h3>

                    <p class="mt-2 text-sm text-green-200">
                        Herbal Garden
                    </p>

                </div>


                {{-- Mobile Items --}}
                <div class="grid gap-4 sm:grid-cols-2">

                    <div
                        class="group rounded-2xl border border-gray-200 bg-white p-5
                           shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center
                               rounded-xl bg-green-100 text-2xl text-green-700
                               group-hover:scale-105 transition">

                            <i class="ri-leaf-line"></i>

                        </div>

                        <span class="text-xs font-bold text-green-600">
                            01
                        </span>

                        <h3 class="mt-1 font-bold text-gray-900">
                            Plant Waste Collection
                        </h3>

                        <p class="mt-2 text-sm leading-relaxed text-gray-500">
                            Collection of organic plant residues.
                        </p>

                    </div>


                    <div
                        class="group rounded-2xl border border-gray-200 bg-white p-5
                           shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center
                               rounded-xl bg-green-100 text-2xl text-green-700
                               group-hover:scale-105 transition">

                            <i class="ri-inbox-archive-line"></i>

                        </div>

                        <span class="text-xs font-bold text-green-600">
                            02
                        </span>

                        <h3 class="mt-1 font-bold text-gray-900">
                            Composting Unit
                        </h3>

                        <p class="mt-2 text-sm leading-relaxed text-gray-500">
                            Processing organic waste into compost.
                        </p>

                    </div>


                    <div
                        class="group rounded-2xl border border-gray-200 bg-white p-5
                           shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center
                               rounded-xl bg-green-100 text-2xl text-green-700
                               group-hover:scale-105 transition">

                            <i class="ri-drop-line"></i>

                        </div>

                        <span class="text-xs font-bold text-green-600">
                            03
                        </span>

                        <h3 class="mt-1 font-bold text-gray-900">
                            Liquid Organic Fertilizer
                        </h3>

                        <p class="mt-2 text-sm leading-relaxed text-gray-500">
                            Production of liquid organic fertilizer.
                        </p>

                    </div>


                    <div
                        class="group rounded-2xl border border-gray-200 bg-white p-5
                           shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center
                               rounded-xl bg-green-100 text-2xl text-green-700
                               group-hover:scale-105 transition">

                            <i class="ri-seedling-line"></i>

                        </div>

                        <span class="text-xs font-bold text-green-600">
                            04
                        </span>

                        <h3 class="mt-1 font-bold text-gray-900">
                            Organic Fertilizer Application
                        </h3>

                        <p class="mt-2 text-sm leading-relaxed text-gray-500">
                            Applying organic fertilizer to the garden.
                        </p>

                    </div>


                    <div
                        class="group rounded-2xl border border-green-200 bg-green-50 p-5
                           shadow-sm transition hover:-translate-y-1 hover:shadow-lg sm:col-span-2">

                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center
                               rounded-xl bg-green-700 text-2xl text-white
                               group-hover:scale-105 transition">

                            <i class="ri-plant-line"></i>

                        </div>

                        <span class="text-xs font-bold text-green-700">
                            05
                        </span>

                        <h3 class="mt-1 font-bold text-gray-900">
                            Soil & Plant Nutrition
                        </h3>

                        <p class="mt-2 text-sm leading-relaxed text-gray-600">
                            Healthy soil supports continuous plant growth.
                        </p>

                    </div>

                </div>

            </div>


            {{-- Bottom Caption --}}
            <div class="mt-14 text-center">

                <div
                    class="inline-flex items-center gap-2 rounded-full
                       border border-green-200 bg-white px-5 py-2.5
                       text-sm font-medium text-green-700 shadow-sm">

                    <i class="ri-leaf-fill"></i>

                    <span>
                        From plant waste to sustainable growth
                    </span>

                </div>

            </div>

        </div>

    </section>
    {{-- =========================
    Transformation
========================== --}}
    <section class="bg-white py-20">
        <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-2 lg:items-center">

            <div>
                <div class="mb-4 flex items-center gap-3">

                    <span class="h-5 w-1 rounded-full bg-green-600"></span>

                    <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                        Transformation
                    </p>

                </div>

                <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                    Transformasi Lahan Menjadi Ruang Produktif
                </h2>

                <p class="mt-6 leading-8 text-gray-600">
                    Taman Herbal Surgawi Nusantara berlokasi di lahan fasilitas umum
                    seluas kurang lebih <strong class="text-gray-800">500 m²</strong>
                    di Cluster Nusantara, Perumahan Banjar Wijaya, Kota Tangerang.
                </p>

                <p class="mt-5 leading-8 text-gray-600">
                    Lahan yang sebelumnya tidak termanfaatkan kemudian ditransformasikan
                    melalui kolaborasi antara akademisi, mahasiswa, dan masyarakat menjadi
                    ruang hijau yang produktif.
                </p>

                <p class="mt-5 leading-8 text-gray-600">
                    Di tempat ini, ilmu pengetahuan, kepedulian terhadap lingkungan,
                    dan pemberdayaan masyarakat dipadukan untuk mendukung terwujudnya
                    ekonomi hijau yang berkelanjutan.
                </p>
            </div>


            {{-- Highlight --}}
            <div class="rounded-3xl bg-green-950 p-8 text-white md:p-10">

                <i class="ri-landscape-line text-4xl text-green-300"></i>

                <div class="mt-8">
                    <p class="text-5xl font-bold">
                        500<span class="text-2xl text-green-300">+</span>
                    </p>

                    <p class="mt-2 text-green-100/70">
                        m² ruang hijau produktif
                    </p>
                </div>

                <div class="mt-8 border-t border-white/10 pt-6">
                    <p class="text-sm leading-7 text-green-100/70">
                        Kolaborasi akademisi, mahasiswa, dan masyarakat
                        dalam menciptakan ruang pembelajaran dan konservasi.
                    </p>
                </div>

            </div>

        </div>
    </section>


    {{-- =========================
    Learning Laboratory
========================== --}}
    <section class="bg-gray-50 py-20">
        <div class="mx-auto max-w-7xl px-6">

            <div class="max-w-3xl">
                <div class="mb-4 flex items-center gap-3">

                    <span class="h-5 w-1 rounded-full bg-green-600"></span>

                    <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                        Education
                    </p>

                </div>

                <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                    Laboratorium Pembelajaran di Alam Terbuka
                </h2>

                <p class="mt-6 leading-8 text-gray-600">
                    Sebagai sebuah <em>living laboratory</em>, Taman Herbal Surgawi
                    Nusantara tidak hanya menjadi tempat koleksi dan budidaya tanaman obat,
                    tetapi juga berfungsi sebagai ruang pembelajaran kontekstual bagi
                    mahasiswa dan masyarakat.
                </p>
            </div>


            <div class="mt-10 grid gap-6 md:grid-cols-2">

                <a href="https://www.youtube.com/watch?v=G3SBCWqL2Ls" target="_blank" rel="noopener noreferrer"
                    class="group block rounded-2xl border border-gray-200 bg-white p-7
           transition-all duration-300
           hover:-translate-y-1 hover:border-green-200 hover:shadow-lg">

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-xl
               bg-green-50 text-xl text-green-700
               transition-colors duration-300
               group-hover:bg-green-700 group-hover:text-white">
                        <i class="ri-graduation-cap-line"></i>
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-gray-900">
                        Pembelajaran Mahasiswa
                    </h3>

                    <p class="mt-3 leading-7 text-gray-600">
                        Mahasiswa, khususnya mahasiswa Fakultas Kedokteran, dapat
                        memanfaatkan taman sebagai wahana pembelajaran dalam blok
                        elektif herbal.
                    </p>

                    {{-- See More --}}
                    <div class="mt-6 flex items-center gap-2 text-sm font-semibold
               text-green-700">

                        <span>See More</span>

                        <i
                            class="ri-arrow-right-line transition-transform duration-300
                   group-hover:translate-x-1">
                        </i>

                    </div>

                </a>


                <div class="rounded-2xl border border-gray-200 bg-white p-7">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-50 text-xl text-green-700">
                        <i class="ri-search-eye-line"></i>
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-gray-900">
                        Evidence-Based Medicine
                    </h3>

                    <p class="mt-3 leading-7 text-gray-600">
                        Mahasiswa dapat mengamati tanaman secara langsung, mengenali
                        karakteristiknya, mempelajari kandungan dan potensinya, serta
                        menghubungkannya dengan pendekatan <em>evidence-based medicine</em>.
                    </p>
                </div>

            </div>


            <div class="mt-8 rounded-2xl border border-green-100 bg-green-50 p-7">
                <div class="flex gap-4">
                    <i class="ri-link text-2xl text-green-700"></i>

                    <p class="leading-8 text-green-950">
                        Taman menjadi jembatan antara penelitian dasar, penelitian
                        eksperimental, pendidikan kedokteran, dan pengembangan potensi
                        aplikasi klinis tanaman herbal berbasis bukti ilmiah.
                    </p>
                </div>
            </div>

        </div>
    </section>


    {{-- =========================
    Scientific & Islamic Values
========================== --}}
    <section class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-6">

            <div class="grid gap-12 lg:grid-cols-2">

                <div>
                    <div class="mb-4 flex items-center gap-3">

                        <span class="h-5 w-1 rounded-full bg-green-600"></span>

                        <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                            Our values
                        </p>

                    </div>
                    <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                        Memadukan Nilai Ilmiah dan Nilai Islami
                    </h2>
                </div>

                <div>
                    <p class="leading-8 text-gray-600">
                        Keunikan Taman Herbal Surgawi Nusantara terletak pada perpaduan
                        antara nilai ilmiah, nilai Islami, dan kearifan budaya.
                    </p>

                    <p class="mt-5 leading-8 text-gray-600">
                        Tanaman yang dikembangkan tidak hanya dipilih berdasarkan potensi
                        farmakologisnya, tetapi juga mencakup tanaman yang dikenal dalam
                        tradisi pengobatan serta disebutkan dalam Al-Qur’an dan hadis Nabi,
                        seperti <strong>tin, bidara, delima, dan kurma</strong>.
                    </p>

                    <p class="mt-5 leading-8 text-gray-600">
                        Pengetahuan empiris dan nilai tradisional tetap dihargai,
                        kemudian diperkuat melalui penelitian ilmiah yang terstruktur.
                    </p>
                </div>

            </div>

        </div>
    </section>


    {{-- =========================
    QR Education
========================== --}}
    <<section class="relative overflow-hidden bg-green-950 py-20 text-white">

        {{-- Decorative Subtle QR - Left --}}
        <div class="pointer-events-none absolute -left-20 top-1/2 hidden -translate-y-1/2 opacity-5 lg:block">
            <svg class="h-80 w-80 rotate-[-12deg] text-white" viewBox="0 0 100 100" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <!-- Top Left Marker -->
                <path d="M0,0 h30 v30 h-30 z m5,5 v20 h20 v-20 z m5,5 h10 v10 h-10 z" />
                <!-- Top Right Marker -->
                <path d="M70,0 h30 v30 h-30 z m5,5 v20 h20 v-20 z m5,5 h10 v10 h-10 z" />
                <!-- Bottom Left Marker -->
                <path d="M0,70 h30 v30 h-30 z m5,5 v20 h20 v-20 z m5,5 h10 v10 h-10 z" />
                <!-- Random Data Dots/Blocks -->
                <rect x="40" y="10" width="10" height="10" />
                <rect x="55" y="0" width="10" height="10" />
                <rect x="40" y="25" width="20" height="10" />
                <rect x="10" y="40" width="20" height="10" />
                <rect x="40" y="40" width="10" height="20" />
                <rect x="60" y="40" width="30" height="10" />
                <rect x="55" y="55" width="15" height="15" />
                <rect x="80" y="60" width="20" height="10" />
                <rect x="40" y="75" width="20" height="20" />
                <rect x="70" y="80" width="10" height="20" />
                <rect x="85" y="85" width="15" height="15" />
            </svg>
        </div>


        {{-- Decorative Subtle QR - Right --}}
        <div class="pointer-events-none absolute -right-16 top-1/2 hidden -translate-y-1/2 opacity-[0.04] lg:block">
            <svg class="h-96 w-96 rotate-[15deg] text-white" viewBox="0 0 100 100" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <!-- Top Left Marker -->
                <path d="M0,0 h30 v30 h-30 z m5,5 v20 h20 v-20 z m5,5 h10 v10 h-10 z" />
                <!-- Top Right Marker -->
                <path d="M70,0 h30 v30 h-30 z m5,5 v20 h20 v-20 z m5,5 h10 v10 h-10 z" />
                <!-- Bottom Left Marker -->
                <path d="M0,70 h30 v30 h-30 z m5,5 v20 h20 v-20 z m5,5 h10 v10 h-10 z" />
                <!-- Random Data Dots/Blocks -->
                <rect x="40" y="0" width="20" height="10" />
                <rect x="50" y="15" width="15" height="15" />
                <rect x="40" y="35" width="10" height="10" />
                <rect x="0" y="40" width="10" height="20" />
                <rect x="20" y="45" width="15" height="15" />
                <rect x="60" y="40" width="40" height="10" />
                <rect x="45" y="55" width="25" height="20" />
                <rect x="80" y="55" width="10" height="10" />
                <rect x="40" y="80" width="15" height="20" />
                <rect x="65" y="75" width="15" height="10" />
                <rect x="75" y="90" width="25" height="10" />
            </svg>
        </div>


        {{-- Decorative Glow --}}
        <div
            class="pointer-events-none absolute left-1/2 top-0 h-96 w-96 -translate-x-1/2 rounded-full bg-green-500/10 blur-3xl">
        </div>


        {{-- Content --}}
        <div class="relative mx-auto max-w-7xl px-6">

            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

                {{-- Left Content --}}
                <div>

                    <div class="mb-4 flex items-center gap-3">

                        <span class="h-5 w-1 rounded-full bg-green-300"></span>

                        <p class="text-sm font-semibold uppercase tracking-wider text-green-300">
                            Digital Education
                        </p>

                    </div>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight md:text-4xl">
                        Edukasi Digital melalui QR Code
                    </h2>

                    <p class="mt-6 leading-8 text-green-100/70">
                        Setiap tanaman dilengkapi dengan QR code yang terhubung
                        dengan poster ilmiah dan video edukasi yang dikembangkan
                        oleh mahasiswa.
                    </p>

                    <p class="mt-5 leading-8 text-green-100/70">
                        Teknologi ini menjadikan taman sebagai ruang pembelajaran
                        yang interaktif, mandiri, dan inklusif bagi mahasiswa,
                        akademisi, pelajar, serta masyarakat umum.
                    </p>

                </div>


                {{-- Right Features --}}
                <div class="grid gap-3 sm:grid-cols-2">

                    @foreach (['Nama lokal dan nama ilmiah tanaman', 'Ciri dan karakteristik tanaman', 'Kandungan senyawa aktif', 'Pemanfaatan secara tradisional', 'Potensi farmakologis berdasarkan penelitian', 'Cara penggunaan yang tepat dan aman'] as $item)
                        <div
                            class="group flex items-start gap-3 rounded-xl border border-white/10 bg-white/5 p-4 backdrop-blur-sm transition duration-300 hover:border-green-400/30 hover:bg-white/10">

                            <div
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-green-400/10 text-green-300 transition group-hover:bg-green-400/20">
                                <i class="ri-qr-scan-2-line text-lg"></i>
                            </div>

                            <span class="text-sm leading-6 text-green-100/80">
                                {{ $item }}
                            </span>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

        </section>


        {{-- =========================
    Circular Economy
========================== --}}
        <section class="bg-gray-50 py-20" id="introduction">
            <div class="container mx-auto px-6">
                <div class="aspect-video w-full max-w-5xl mx-auto overflow-hidden rounded-2xl shadow-lg">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/G3SBCWqL2Ls" title="Introduction"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <section class="bg-white py-20" id="sustainable">
            <div class="mx-auto max-w-7xl px-6">

                <div class="max-w-3xl">
                    <div class="mb-4 flex items-center gap-3">

                        <span class="h-5 w-1 rounded-full bg-green-600"></span>

                        <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                            Sustainable
                        </p>

                    </div>
                    <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                        Membangun Ekonomi Sirkular
                    </h2>

                    <p class="mt-6 leading-8 text-gray-600">
                        Taman Herbal Surgawi Nusantara menerapkan prinsip
                        <strong>ekonomi sirkular</strong> melalui pengelolaan limbah
                        organik secara berkelanjutan.
                    </p>
                </div>


                <div class="mt-10 grid gap-4 sm:grid-cols-3">

                    <div class="rounded-2xl bg-gray-50 p-6">
                        <i class="ri-recycle-line text-3xl text-green-700"></i>

                        <h3 class="mt-5 font-bold text-gray-900">
                            Pengolahan Limbah
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Daun dan sisa tanaman diolah menjadi kompos dan pupuk organik cair.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-gray-50 p-6">
                        <i class="ri-seedling-line text-3xl text-green-700"></i>

                        <h3 class="mt-5 font-bold text-gray-900">
                            Budidaya Berkelanjutan
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Produk organik digunakan kembali untuk mendukung budidaya tanaman.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-gray-50 p-6">
                        <i class="ri-community-line text-3xl text-green-700"></i>

                        <h3 class="mt-5 font-bold text-gray-900">
                            Pemberdayaan
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Pembibitan membuka peluang konservasi sekaligus usaha berbasis komunitas.
                        </p>
                    </div>

                </div>

                <div class="mt-8 rounded-2xl border border-green-100 bg-green-50 p-6">
                    <p class="text-sm leading-7 text-green-950">
                        Sistem ini membentuk siklus tertutup
                        (<em>closed-loop system</em>) yang mengurangi limbah,
                        meningkatkan efisiensi sumber daya, dan memberikan nilai
                        tambah bagi masyarakat.
                    </p>
                </div>

            </div>
        </section>


        {{-- =========================
    SDGs
========================== --}}
        <section class="bg-gray-50 py-20">
            <div class="mx-auto max-w-7xl px-6">

                <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">

                    <div>
                        <div class="mb-4 flex items-center gap-3">

                            <span class="h-5 w-1 rounded-full bg-green-600"></span>

                            <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                                Sustainable Developmen
                            </p>

                        </div>

                        <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                            Mendukung Pencapaian SDGs
                        </h2>

                        <p class="mt-5 leading-7 text-gray-600">
                            Pengembangan taman sejalan dengan prinsip
                            <strong>Sustainable Development Goals (SDGs)</strong>
                            dalam berbagai aspek kesehatan, pendidikan, lingkungan,
                            dan pemberdayaan masyarakat.
                        </p>
                    </div>


                    <div class="grid gap-3 sm:grid-cols-2">

                        @foreach (['Peningkatan kesehatan dan kesejahteraan masyarakat', 'Pendidikan berkualitas dan pembelajaran sepanjang hayat', 'Pengelolaan lingkungan yang bertanggung jawab', 'Produksi dan konsumsi yang berkelanjutan', 'Pelestarian keanekaragaman hayati', 'Penguatan ekonomi hijau berbasis masyarakat', 'Kolaborasi antara perguruan tinggi dan masyarakat'] as $item)
                            <div class="flex gap-3 rounded-xl border border-gray-200 bg-white p-4">
                                <i class="ri-checkbox-circle-fill mt-0.5 text-green-600"></i>

                                <span class="text-sm leading-6 text-gray-600">
                                    {{ $item }}
                                </span>
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </section>


        {{-- =========================
    Future Vision
========================== --}}
        <section class="relative overflow-hidden bg-white py-20">

            {{-- Decorative Silhouette Left --}}
            <div
                class="pointer-events-none absolute -left-24 top-1/2 hidden -translate-y-1/2 text-green-900/[0.035] lg:block">
                <svg width="300" height="500" viewBox="0 0 300 500" fill="none"
                    xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="M150 470
                                                                                                                                                                                   C145 400 148 340 140 285
                                                                                                                                                                                   C132 230 105 190 70 155
                                                                                                                                                                                   C42 127 25 95 35 60
                                                                                                                                                                                   C48 85 68 105 94 118
                                                                                                                                                                                   C76 82 78 48 96 18
                                                                                                                                                                                   C110 60 135 88 155 105
                                                                                                                                                                                   C160 62 180 30 207 5
                                                                                                                                                                                   C201 60 195 100 180 135
                                                                                                                                                                                   C215 112 250 105 280 112
                                                                                                                                                                                   C245 140 215 160 185 172
                                                                                                                                                                                   C220 190 250 220 267 255
                                                                                                                                                                                   C225 242 195 225 170 207
                                                                                                                                                                                   C178 275 175 345 185 470
                                                                                                                                                                                   Z"
                        fill="currentColor" />

                    <path
                        d="M151 470
                                                                                                                                                                                   C153 370 150 275 158 190
                                                                                                                                                                                   C162 145 180 105 207 65"
                        stroke="currentColor" stroke-width="5" stroke-linecap="round" />

                </svg>
            </div>


            {{-- Decorative Silhouette Right --}}
            <div
                class="pointer-events-none absolute -right-24 top-1/2 hidden -translate-y-1/2 scale-x-[-1] text-green-900/[0.035] lg:block">
                <svg width="300" height="500" viewBox="0 0 300 500" fill="none"
                    xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="M150 470
                                                                                                                                                                                   C145 400 148 340 140 285
                                                                                                                                                                                   C132 230 105 190 70 155
                                                                                                                                                                                   C42 127 25 95 35 60
                                                                                                                                                                                   C48 85 68 105 94 118
                                                                                                                                                                                   C76 82 78 48 96 18
                                                                                                                                                                                   C110 60 135 88 155 105
                                                                                                                                                                                   C160 62 180 30 207 5
                                                                                                                                                                                   C201 60 195 100 180 135
                                                                                                                                                                                   C215 112 250 105 280 112
                                                                                                                                                                                   C245 140 215 160 185 172
                                                                                                                                                                                   C220 190 250 220 267 255
                                                                                                                                                                                   C225 242 195 225 170 207
                                                                                                                                                                                   C178 275 175 345 185 470
                                                                                                                                                                                   Z"
                        fill="currentColor" />

                    <path
                        d="M151 470
                                                                                                                                                                                   C153 370 150 275 158 190
                                                                                                                                                                                   C162 145 180 105 207 65"
                        stroke="currentColor" stroke-width="5" stroke-linecap="round" />

                </svg>
            </div>


            {{-- Main Content --}}
            <div class="relative z-10 mx-auto max-w-7xl px-6">

                <div class="max-w-3xl">
                    <div class="mb-4 flex items-center gap-3">

                        <span class="h-5 w-1 rounded-full bg-green-600"></span>

                        <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                            Looking Ahead
                        </p>

                    </div>
                    <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                        Tumbuh Bersama Masyarakat
                    </h2>

                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        Lebih dari sekadar ruang hijau, Taman Herbal Surgawi Nusantara
                        merupakan representasi dari upaya menghidupkan potensi lahan
                        yang terabaikan menjadi sumber pembelajaran, kesehatan,
                        dan kesejahteraan.
                    </p>

                    <p class="mt-5 leading-8 text-gray-600">
                        Di dalamnya, ilmu pengetahuan tumbuh bersama nilai-nilai kebaikan.
                        Inovasi berjalan beriringan dengan kepedulian terhadap lingkungan,
                        sedangkan kolaborasi menjadi kekuatan utama dalam menciptakan perubahan.
                    </p>
                </div>


                {{-- Future Direction --}}
                <div class="mt-12 grid gap-4 md:grid-cols-2 lg:grid-cols-5">

                    @foreach ([['ri-book-open-line', 'Pusat edukasi tanaman obat berbasis komunitas'], ['ri-flask-line', 'Laboratorium lapangan untuk penelitian herbal terintegrasi'], ['ri-graduation-cap-line', 'Wahana pembelajaran bagi mahasiswa, pelajar, dan masyarakat'], ['ri-seedling-line', 'Pusat konservasi dan pembibitan tanaman herbal'], ['ri-global-line', 'Model pengembangan ekonomi hijau yang dapat direplikasi']] as [$icon, $text])
                        <div
                            class="group rounded-2xl border border-gray-200 bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-lg">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-green-50 text-xl text-green-700 transition group-hover:bg-green-700 group-hover:text-white">
                                <i class="{{ $icon }}"></i>
                            </div>

                            <p class="mt-4 text-sm font-medium leading-6 text-gray-700">
                                {{ $text }}
                            </p>

                        </div>
                    @endforeach

                </div>


                {{-- Closing Statement --}}
                <div class="mt-16 rounded-3xl bg-green-950 px-7 py-10 text-center md:px-16">

                    <i class="ri-leaf-line text-3xl text-green-300"></i>

                    <p class="mx-auto mt-5 max-w-4xl text-xl font-medium leading-9 text-white md:text-2xl">
                        Taman Herbal Surgawi Nusantara bukan hanya sebuah taman,
                        melainkan <span class="text-green-300">ekosistem hidup</span>
                        yang menghubungkan manusia, ilmu pengetahuan, nilai Islami,
                        dan alam dalam satu kesatuan yang memberikan manfaat nyata
                        bagi kesehatan dan kehidupan.
                    </p>

                </div>

            </div>

        </section>
        <section class="bg-white" id="plant">

            <div class="mx-auto max-w-7xl px-6 py-16">

                <div class="flex items-end justify-between gap-4">

                    <div class="max-w-3xl">
                        <p
                            class="mb-3 border-l-4 border-green-600 pl-3 text-sm font-semibold uppercase tracking-wider text-green-600">
                            Our Collection
                        </p>
                        <h2 class="text-3xl font-bold text-gray-900">
                            Medicinal Plants Collection </h2>

                        <p class="mt-4 leading-relaxed text-gray-600">
                            Explore various medicinal plants cultivated within our
                            herbal garden. Each plant represents an important resource
                            for research, education, and the development of herbal medicine.
                        </p>
                    </div>

                    <a href="{{ route('herbal-garden.plants') }}"
                        class="group inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-900">
                        See More

                        <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>

                </div>


                {{-- =========================
                Plant Grid
            ========================== --}}
                <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

                    @forelse($plants as $plant)
                        <x-plant-card :plant="$plant" />

                    @empty

                        <div class="col-span-full py-16 text-center">

                            <i class="ri-leaf-line text-5xl text-gray-300"></i>

                            <h3 class="mt-4 text-lg font-semibold text-gray-700">
                                No Plants Available
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                There are currently no herbal plants in the garden.
                            </p>

                        </div>
                    @endforelse

                </div>

            </div>

        </section>

    @endsection
