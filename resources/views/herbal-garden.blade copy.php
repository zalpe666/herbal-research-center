@extends('layouts.app')

@section('title', 'Herbal Garden')

@section('content')

{{-- =========================
        Page Banner
    ========================== --}}
<section class="relative overflow-hidden bg-gradient-to-br from-green-900 via-green-800 to-green-700">

    {{-- Decorative Background --}}
    <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-green-400/10 blur-3xl"></div>
    <div class="absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-emerald-300/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-24 md:py-28">

        <div class="grid items-center gap-12 lg:grid-cols-2">

            {{-- =========================
                Text Content
            ========================== --}}
            <div class="max-w-2xl text-white">

                <div
                    class="mb-5 inline-flex items-center gap-2 rounded-full border border-green-300/30 bg-green-950/20 px-4 py-2 backdrop-blur-sm">

                    <i class="ri-leaf-line text-green-300"></i>

                    <span class="text-sm font-semibold uppercase tracking-[0.18em] text-green-200">
                        Herbal Garden
                    </span>

                </div>


                <h1 class="text-4xl font-bold leading-[1.1] tracking-tight sm:text-5xl md:text-6xl">

                    Explore Our

                    <span class="block text-green-200">
                        Herbal Garden
                    </span>

                </h1>


                <p class="mt-6 max-w-xl text-base leading-relaxed text-green-100 sm:text-lg">
                    Discover a collection of medicinal plants cultivated
                    and studied by the Herbal Research Center,
                    Universitas YARSI.
                </p>

            </div>


            {{-- =========================
                Lottie Animation
            ========================== --}}
            <div class="relative flex justify-center lg:justify-end">

                {{-- Glow --}}
                <div class="absolute h-72 w-72 rounded-full bg-green-300/10 blur-3xl"></div>


                <div class="relative">

                    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.4/dist/dotlottie-wc.js" type="module"></script>

                    <dotlottie-wc src="https://lottie.host/3107273a-2704-46f3-b45f-fbc244927372/bhnz4GIsEC.json"
                        style="width: 360px; height: 360px;" autoplay loop>
                    </dotlottie-wc>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
        Introduction
    ========================== --}}
<section class="bg-white">

    <div class="mx-auto max-w-7xl px-6 py-16">

        <div class="max-w-3xl">

            <p
                class="mb-3 border-l-4 border-green-600 pl-3 text-sm font-semibold uppercase tracking-wider text-green-600">
                Our Collection
            </p>

            <h2 class="text-3xl font-bold text-gray-900 md:text-4xl">
                Medicinal Plants Collection
            </h2>

            <p class="mt-4 leading-relaxed text-gray-600">
                Explore various medicinal plants cultivated within our
                herbal garden. Each plant represents an important resource
                for research, education, and the development of herbal medicine.
            </p>

        </div>


        {{-- =========================
                Plant Grid
            ========================== --}}
        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">


            {{-- Plant 1 --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="aspect-[4/3] overflow-hidden bg-gray-100">

                    <img src="https://images.unsplash.com/photo-1615485290382-441e4d049cb5?auto=format&fit=crop&w=900&q=80"
                        alt="Turmeric plant"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                </div>

                <div class="p-6">

                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Turmeric
                            </h3>

                            <p class="mt-1 text-sm italic text-green-600">
                                Curcuma longa
                            </p>
                        </div>

                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                            Medicinal
                        </span>

                    </div>

                    <p class="mt-4 text-sm leading-relaxed text-gray-600">
                        A rhizomatous plant widely studied for its
                        curcumin content and potential health benefits.
                    </p>

                    <a href="#"
                        class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-900">

                        View Details

                        <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>

                    </a>

                </div>

            </article>


            {{-- Plant 2 --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="aspect-[4/3] overflow-hidden bg-gray-100">

                    <img src="https://images.unsplash.com/photo-1530968464165-7a1861cbaf9f?auto=format&fit=crop&w=900&q=80"
                        alt="Aloe vera plant"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                </div>

                <div class="p-6">

                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Aloe Vera
                            </h3>

                            <p class="mt-1 text-sm italic text-green-600">
                                Aloe vera
                            </p>
                        </div>

                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                            Medicinal
                        </span>

                    </div>

                    <p class="mt-4 text-sm leading-relaxed text-gray-600">
                        A succulent plant known for its gel and
                        long history of traditional medicinal applications.
                    </p>

                    <a href="#"
                        class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-900">

                        View Details

                        <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>

                    </a>

                </div>

            </article>


            {{-- Plant 4 --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="aspect-[4/3] overflow-hidden bg-gray-100">

                    <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?auto=format&fit=crop&w=900&q=80"
                        alt="Cinnamon plant"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                </div>

                <div class="p-6">

                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Cinnamon
                            </h3>

                            <p class="mt-1 text-sm italic text-green-600">
                                Cinnamomum verum
                            </p>
                        </div>

                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                            Medicinal
                        </span>

                    </div>

                    <p class="mt-4 text-sm leading-relaxed text-gray-600">
                        An aromatic plant traditionally used as a spice
                        and investigated for various biological activities.
                    </p>

                    <a href="#"
                        class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-900">

                        View Details

                        <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>

                    </a>

                </div>

            </article>


            {{-- Plant 5 --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="aspect-[4/3] overflow-hidden bg-gray-100">

                    <img src="https://images.unsplash.com/photo-1601004890684-d8cbf643f5f2?auto=format&fit=crop&w=900&q=80"
                        alt="Mint plant"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                </div>

                <div class="p-6">

                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Mint
                            </h3>

                            <p class="mt-1 text-sm italic text-green-600">
                                Mentha
                            </p>
                        </div>

                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                            Medicinal
                        </span>

                    </div>

                    <p class="mt-4 text-sm leading-relaxed text-gray-600">
                        An aromatic herb containing essential oils
                        and traditionally used in herbal preparations.
                    </p>

                    <a href="#"
                        class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-900">

                        View Details

                        <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>

                    </a>

                </div>

            </article>


            {{-- Plant 6 --}}
            <article
                class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="aspect-[4/3] overflow-hidden bg-gray-100">

                    <img src="https://images.unsplash.com/photo-1515586000433-45406d8e6662?auto=format&fit=crop&w=900&q=80"
                        alt="Basil plant"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                </div>

                <div class="p-6">

                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Basil
                            </h3>

                            <p class="mt-1 text-sm italic text-green-600">
                                Ocimum basilicum
                            </p>
                        </div>

                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                            Medicinal
                        </span>

                    </div>

                    <p class="mt-4 text-sm leading-relaxed text-gray-600">
                        An aromatic herb widely cultivated for culinary
                        use and traditional herbal applications.
                    </p>

                    <a href="#"
                        class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-900">

                        View Details

                        <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>

                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- =========================
        Information Section
    ========================== --}}
<section class="bg-green-50">

    <div class="mx-auto max-w-7xl px-6 py-16">

        <div class="grid gap-10 md:grid-cols-3">

            <div>
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-700 text-xl text-white">
                    <i class="ri-leaf-line"></i>
                </div>

                <h3 class="text-lg font-bold text-gray-900">
                    Plant Diversity
                </h3>

                <p class="mt-2 text-sm leading-relaxed text-gray-600">
                    A diverse collection of medicinal plants supporting
                    research and education.
                </p>
            </div>


            <div>
                <div
                    class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-700 text-xl text-white">
                    <i class="ri-flask-line"></i>
                </div>

                <h3 class="text-lg font-bold text-gray-900">
                    Research Support
                </h3>

                <p class="mt-2 text-sm leading-relaxed text-gray-600">
                    Plant resources that support phytochemistry and
                    experimental medicine research.
                </p>
            </div>


            <div>
                <div
                    class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-700 text-xl text-white">
                    <i class="ri-seedling-line"></i>
                </div>

                <h3 class="text-lg font-bold text-gray-900">
                    Sustainable Cultivation
                </h3>

                <p class="mt-2 text-sm leading-relaxed text-gray-600">
                    Supporting responsible cultivation and preservation
                    of medicinal plant resources.
                </p>
            </div>

        </div>

    </div>

</section>

@endsection