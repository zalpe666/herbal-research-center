@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    {{-- =========================
        Hero / Introduction
    ========================== --}}
    <section class="bg-green-800">

        <div class="mx-auto max-w-7xl px-6 py-24 md:py-28">

            <div class="max-w-4xl text-white">

                <h1 class="text-4xl font-bold leading-tight tracking-tight md:text-6xl">
                    Living Laboratory for
                    <span class="text-green-200">
                        Education, Research
                    </span>
                    and Community Empowerment
                </h1>

                <p class="mt-6 max-w-3xl text-lg leading-relaxed text-green-100">
                    A living collection of more than 130 medicinal plants
                    integrated with sustainable waste management and
                    organic fertilization system.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================
        About Introduction
    ========================== --}}
    <section class="bg-white">

        <div class="mx-auto max-w-7xl px-6 py-16 md:py-20">

            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

                {{-- Left --}}
                <div>

                    <div class="mb-4 flex items-center gap-3">

                        <span class="h-5 w-1 rounded-full bg-green-600"></span>

                        <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                            About Us
                        </p>

                    </div>

                    <h2 class="text-3xl font-bold leading-tight text-gray-900 md:text-4xl">
                        A Garden for
                        <span class="text-green-700">
                            Knowledge and Innovation
                        </span>
                    </h2>

                    <p class="mt-6 leading-relaxed text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptatem, necessitatibus. Doloremque, reprehenderit.
                        Quisquam, exercitationem. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit.
                    </p>

                    <p class="mt-4 leading-relaxed text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus, asperiores. Accusamus, praesentium.
                        Voluptatibus, temporibus. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit.
                    </p>

                </div>


                {{-- Right --}}
                <div class="rounded-2xl bg-green-50 p-8">

                    <div class="grid gap-6 sm:grid-cols-2">

                        <div>
                            <div
                                class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-green-700 text-xl text-white">
                                <i class="ri-seedling-line"></i>
                            </div>

                            <h3 class="font-bold text-gray-900">
                                130+
                            </h3>

                            <p class="mt-1 text-sm text-gray-600">
                                Medicinal Plants
                            </p>
                        </div>


                        <div>
                            <div
                                class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-green-700 text-xl text-white">
                                <i class="ri-flask-line"></i>
                            </div>

                            <h3 class="font-bold text-gray-900">
                                Research
                            </h3>

                            <p class="mt-1 text-sm text-gray-600">
                                Living Laboratory
                            </p>
                        </div>


                        <div>
                            <div
                                class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-green-700 text-xl text-white">
                                <i class="ri-recycle-line"></i>
                            </div>

                            <h3 class="font-bold text-gray-900">
                                Sustainable
                            </h3>

                            <p class="mt-1 text-sm text-gray-600">
                                Waste Management
                            </p>
                        </div>


                        <div>
                            <div
                                class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-green-700 text-xl text-white">
                                <i class="ri-community-line"></i>
                            </div>

                            <h3 class="font-bold text-gray-900">
                                Community
                            </h3>

                            <p class="mt-1 text-sm text-gray-600">
                                Empowerment
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-20 md:py-24"> {{-- Section Heading --}} <div class="max-w-3xl">
                <div class="mb-4 flex items-center gap-3"> <span class="h-5 w-1 rounded-full bg-green-600"></span>
                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-green-600"> Our Journey </p>
                </div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 md:text-4xl"> History of Establishment </h2>
                <p class="mt-4 leading-relaxed text-gray-600"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repellendus, doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem,
                    necessitatibus. </p>
            </div> {{-- Timeline --}} <div class="relative mt-16"> {{-- Vertical Line --}} <div
                    class="absolute left-6 top-0 hidden h-full w-px bg-green-200 md:block"></div> {{-- 2020 --}} <div
                    class="group relative mb-14 grid gap-8 md:grid-cols-[180px_1fr]">
                    <div class="relative">
                        <div class="flex items-center gap-4 md:block"> <span
                                class="text-5xl font-black tracking-tight text-green-700 md:text-6xl"> 2020 </span> </div>
                    </div>
                    <div
                        class="relative rounded-2xl border border-gray-200 bg-gray-50 p-7 transition-all duration-300 group-hover:-translate-y-1 group-hover:border-green-200 group-hover:shadow-lg">
                        {{-- Timeline Dot --}} <div
                            class="absolute -left-[38px] top-8 hidden h-4 w-4 rounded-full border-4 border-white bg-green-600 shadow-sm md:block">
                        </div>
                        <div class="flex items-start gap-5">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-xl text-green-700">
                                <i class="ri-lightbulb-line"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900"> Initial Concept </h3>
                                <p class="mt-3 leading-relaxed text-gray-600"> Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Accusamus, pariatur. Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptatem, reprehenderit. </p>
                            </div>
                        </div>
                    </div>
                </div> {{-- 2021 --}} <div class="group relative mb-14 grid gap-8 md:grid-cols-[180px_1fr]">
                    <div> <span class="text-5xl font-black tracking-tight text-green-700 md:text-6xl"> 2021 </span> </div>
                    <div
                        class="relative rounded-2xl border border-gray-200 bg-gray-50 p-7 transition-all duration-300 group-hover:-translate-y-1 group-hover:border-green-200 group-hover:shadow-lg">
                        <div
                            class="absolute -left-[38px] top-8 hidden h-4 w-4 rounded-full border-4 border-white bg-green-600 shadow-sm md:block">
                        </div>
                        <div class="flex items-start gap-5">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-xl text-green-700">
                                <i class="ri-seedling-line"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900"> Garden Development </h3>
                                <p class="mt-3 leading-relaxed text-gray-600"> Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Repellendus, assumenda. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Quibusdam, consequatur. </p>
                            </div>
                        </div>
                    </div>
                </div> {{-- 2022 --}} <div class="group relative mb-14 grid gap-8 md:grid-cols-[180px_1fr]">
                    <div> <span class="text-5xl font-black tracking-tight text-green-700 md:text-6xl"> 2022 </span> </div>
                    <div
                        class="relative rounded-2xl border border-gray-200 bg-gray-50 p-7 transition-all duration-300 group-hover:-translate-y-1 group-hover:border-green-200 group-hover:shadow-lg">
                        <div
                            class="absolute -left-[38px] top-8 hidden h-4 w-4 rounded-full border-4 border-white bg-green-600 shadow-sm md:block">
                        </div>
                        <div class="flex items-start gap-5">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-xl text-green-700">
                                <i class="ri-flask-line"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900"> Research Integration </h3>
                                <p class="mt-3 leading-relaxed text-gray-600"> Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quisquam, laborum. Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Doloribus, architecto. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group relative mb-14 grid gap-8 md:grid-cols-[180px_1fr]">
                    <div> <span class="text-5xl font-black tracking-tight text-green-700 md:text-6xl"> 2023 </span> </div>
                    <div
                        class="relative rounded-2xl border border-gray-200 bg-gray-50 p-7 transition-all duration-300 group-hover:-translate-y-1 group-hover:border-green-200 group-hover:shadow-lg">
                        <div
                            class="absolute -left-[38px] top-8 hidden h-4 w-4 rounded-full border-4 border-white bg-green-600 shadow-sm md:block">
                        </div>
                        <div class="flex items-start gap-5">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-xl text-green-700">
                                <i class="ri-recycle-line"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900"> Sustainable System </h3>
                                <p class="mt-3 leading-relaxed text-gray-600"> Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Consequuntur, asperiores. Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Aliquid, perspiciatis. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group relative mb-14 grid gap-8 md:grid-cols-[180px_1fr]">
                    <div> <span class="text-5xl font-black tracking-tight text-green-700 md:text-6xl"> 2024 </span> </div>
                    <div
                        class="relative rounded-2xl border border-gray-200 bg-gray-50 p-7 transition-all duration-300 group-hover:-translate-y-1 group-hover:border-green-200 group-hover:shadow-lg">
                        <div
                            class="absolute -left-[38px] top-8 hidden h-4 w-4 rounded-full border-4 border-white bg-green-600 shadow-sm md:block">
                        </div>
                        <div class="flex items-start gap-5">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-xl text-green-700">
                                <i class="ri-recycle-line"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900"> Community Empowerment </h3>
                                <p class="mt-3 leading-relaxed text-gray-600"> Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptatibus, explicabo. Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Reiciendis, aspernatur. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group relative grid gap-8 md:grid-cols-[180px_1fr]">

                    <div>
                        <span class="text-5xl font-black tracking-tight text-green-700 md:text-6xl">
                            2026
                        </span>
                    </div>

                    <div
                        class="relative rounded-2xl border border-green-200 bg-green-50 p-7
               shadow-sm transition-all duration-300
               group-hover:-translate-y-1 group-hover:shadow-lg">

                        {{-- Timeline Dot --}}
                        <div
                            class="absolute -left-[38px] top-8 hidden h-4 w-4 rounded-full
                   border-4 border-white bg-green-700 shadow-sm md:block">
                        </div>

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center
                       rounded-xl bg-green-700 text-xl text-white">
                                <i class="ri-cpu-line"></i>
                            </div>

                            {{-- Content --}}
                            <div>

                                <h3 class="text-xl font-bold text-gray-900">
                                    IoT Smart Garden
                                </h3>

                                <p class="mt-3 leading-relaxed text-gray-600">
                                    Pengembangan sistem Smart Garden berbasis Internet of Things
                                    untuk memantau kondisi tanaman secara real-time melalui
                                    sensor kelembapan tanah dan suhu. Sistem ini membantu
                                    mengoptimalkan penyiraman tanaman berdasarkan kondisi
                                    lingkungan dan kebutuhan tanaman.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden bg-green-900"> {{-- Background Decoration --}} <div
            class="absolute -right-40 -top-40 h-96 w-96 rounded-full bg-green-400/10 blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-emerald-300/10 blur-3xl"></div>
        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-24"> {{-- Heading --}} <div class="max-w-3xl">
                <div class="mb-4 flex items-center gap-3"> <span class="h-5 w-1 rounded-full bg-green-300"></span>
                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-green-300"> Our Objectives </p>
                </div>
                <h2 class="text-3xl font-bold tracking-tight text-white md:text-4xl"> Building Knowledge, <span
                        class="text-green-300"> Innovation & Impact </span> </h2>
                <p class="mt-4 leading-relaxed text-green-100"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, exercitationem. Our objectives are designed to connect scientific research with education,
                    sustainability, and meaningful community impact. </p>
            </div> {{-- Objective Cards --}} <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                {{-- Objective 1 --}} <div
                    class="group rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-green-300/40 hover:bg-white/10">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-green-500/20 text-2xl text-green-300 transition-transform duration-300 group-hover:scale-110">
                        <i class="ri-book-open-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white"> Strengthen Education </h3>
                    <p class="mt-3 text-sm leading-relaxed text-green-100/80"> Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Provide meaningful learning experiences through direct interaction with medicinal
                        plants. </p>
                </div> {{-- Objective 2 --}} <div
                    class="group rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-green-300/40 hover:bg-white/10">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-green-500/20 text-2xl text-green-300 transition-transform duration-300 group-hover:scale-110">
                        <i class="ri-microscope-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white"> Advance Research </h3>
                    <p class="mt-3 text-sm leading-relaxed text-green-100/80"> Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Encourage interdisciplinary research in phytochemistry, herbal medicine, and
                        experimental science. </p>
                </div> {{-- Objective 3 --}} <div
                    class="group rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-green-300/40 hover:bg-white/10">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-green-500/20 text-2xl text-green-300 transition-transform duration-300 group-hover:scale-110">
                        <i class="ri-recycle-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white"> Promote Sustainability </h3>
                    <p class="mt-3 text-sm leading-relaxed text-green-100/80"> Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Develop environmentally responsible systems through organic fertilization and
                        waste management. </p>
                </div> {{-- Objective 4 --}} <div
                    class="group rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-green-300/40 hover:bg-white/10">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-green-500/20 text-2xl text-green-300 transition-transform duration-300 group-hover:scale-110">
                        <i class="ri-community-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white"> Empower Communities </h3>
                    <p class="mt-3 text-sm leading-relaxed text-green-100/80"> Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Build community capacity through knowledge sharing, collaboration, and herbal
                        resource utilization. </p>
                </div>
            </div> {{-- Bottom Statement --}} <div class="mt-12 border-t border-white/10 pt-8">
                <div class="flex flex-col gap-5 md:flex-row md:items-center md:justify-between">
                    <p class="max-w-2xl text-sm leading-relaxed text-green-100/80"> Our work aims to create a sustainable
                        ecosystem where plants, people, education, and scientific research grow together. </p> <a
                        href="#"
                        class="group inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-white transition hover:text-green-300">
                        Learn More <i
                            class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="overflow-hidden bg-gray-50">

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
        About Tabs
    ========================== --}}
    <section class="bg-gray-50">

        <div class="mx-auto max-w-7xl px-6 py-16 md:py-20">

            <div class="mb-10 max-w-3xl">

                <div class="mb-4 flex items-center gap-3">

                    <span class="h-5 w-1 rounded-full bg-green-600"></span>

                    <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                        Learn More
                    </p>

                </div>

                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl">
                    Discover Our Activities
                </h2>

                <p class="mt-4 text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Explore how the Herbal Research Center contributes to
                    education, research, and community development.
                </p>

            </div>


            {{-- Tab Navigation --}}
            <div class="border-b border-gray-200">

                <nav class="flex gap-8 overflow-x-auto" id="about-tabs">

                    <button type="button" data-tab="overview"
                        class="about-tab whitespace-nowrap border-b-2 border-green-700 px-1 pb-4 text-sm font-semibold text-green-700">
                        Overview
                    </button>

                    <button type="button" data-tab="education"
                        class="about-tab whitespace-nowrap border-b-2 border-transparent px-1 pb-4 text-sm font-semibold text-gray-500 transition hover:text-green-700">
                        Education
                    </button>

                    <button type="button" data-tab="research"
                        class="about-tab whitespace-nowrap border-b-2 border-transparent px-1 pb-4 text-sm font-semibold text-gray-500 transition hover:text-green-700">
                        Research
                    </button>

                    <button type="button" data-tab="community"
                        class="about-tab whitespace-nowrap border-b-2 border-transparent px-1 pb-4 text-sm font-semibold text-gray-500 transition hover:text-green-700">
                        Community Empowerment
                    </button>

                </nav>

            </div>


            {{-- =========================
                Tab Content
            ========================== --}}
            <div class="mt-10">


                {{-- Overview --}}
                <div id="tab-overview" class="about-content">

                    <div class="grid gap-8 md:grid-cols-2">

                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">
                                Our Living Laboratory
                            </h3>

                            <p class="mt-4 leading-relaxed text-gray-600">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Doloribus, accusamus. Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Voluptates perspiciatis
                                necessitatibus, doloremque atque.
                            </p>

                            <p class="mt-4 leading-relaxed text-gray-600">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam, exercitationem. Repellendus consequatur
                                architecto doloremque.
                            </p>
                        </div>

                        <div class="rounded-2xl bg-white p-8 shadow-sm">

                            <h3 class="text-lg font-bold text-gray-900">
                                Our Vision
                            </h3>

                            <p class="mt-4 leading-relaxed text-gray-600">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Consequatur, reprehenderit. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Education --}}
                <div id="tab-education" class="about-content hidden">

                    <div class="rounded-2xl bg-white p-8 shadow-sm">

                        <div class="flex items-start gap-5">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-xl text-green-700">
                                <i class="ri-graduation-cap-line"></i>
                            </div>

                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Education
                                </h3>

                                <p class="mt-4 leading-relaxed text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Laborum, molestias. Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quisquam necessitatibus exercitationem
                                    reprehenderit.
                                </p>

                                <p class="mt-4 leading-relaxed text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptatem, consequuntur. Doloremque reprehenderit
                                    praesentium.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Research --}}
                <div id="tab-research" class="about-content hidden">

                    <div class="rounded-2xl bg-white p-8 shadow-sm">

                        <div class="flex items-start gap-5">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-xl text-green-700">
                                <i class="ri-microscope-line"></i>
                            </div>

                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Research
                                </h3>

                                <p class="mt-4 leading-relaxed text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Accusamus, suscipit. Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quidem, asperiores.
                                </p>

                                <p class="mt-4 leading-relaxed text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit, pariatur. Voluptatum consequatur
                                    necessitatibus.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Community --}}
                <div id="tab-community" class="about-content hidden">

                    <div class="rounded-2xl bg-white p-8 shadow-sm">

                        <div class="flex items-start gap-5">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-xl text-green-700">
                                <i class="ri-community-line"></i>
                            </div>

                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Community Empowerment
                                </h3>

                                <p class="mt-4 leading-relaxed text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eum, assumenda. Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                </p>

                                <p class="mt-4 leading-relaxed text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quas, dolorem. Repellendus, necessitatibus.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
        Closing CTA
    ========================== --}}
    <section class="bg-green-800">

        <div class="mx-auto max-w-7xl px-6 py-16 text-center">

            <i class="ri-leaf-line text-4xl text-green-200"></i>

            <h2 class="mt-4 text-3xl font-bold text-white">
                Discover the Herbal Garden
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-green-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Explore our collection of medicinal plants and discover
                the potential of herbal research.
            </p>

            <a href="#"
                class="mt-7 inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3 font-semibold text-green-800 transition hover:bg-green-50">

                <i class="ri-seedling-line"></i>

                Explore Herbal Garden

                <i class="ri-arrow-right-line"></i>

            </a>

        </div>

    </section>


    {{-- =========================
        Tabs Script
    ========================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const tabs = document.querySelectorAll('.about-tab');
            const contents = document.querySelectorAll('.about-content');

            tabs.forEach(function(tab) {

                tab.addEventListener('click', function() {

                    const target = this.dataset.tab;

                    // Reset tabs
                    tabs.forEach(function(item) {

                        item.classList.remove(
                            'border-green-700',
                            'text-green-700'
                        );

                        item.classList.add(
                            'border-transparent',
                            'text-gray-500'
                        );

                    });

                    // Active tab
                    this.classList.remove(
                        'border-transparent',
                        'text-gray-500'
                    );

                    this.classList.add(
                        'border-green-700',
                        'text-green-700'
                    );

                    // Hide all content
                    contents.forEach(function(content) {
                        content.classList.add('hidden');
                    });

                    // Show selected content
                    document
                        .getElementById('tab-' + target)
                        .classList.remove('hidden');

                });

            });

        });
    </script>

@endsection
