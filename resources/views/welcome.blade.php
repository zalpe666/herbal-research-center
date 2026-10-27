@extends('layouts.app')
@section('title', 'Dashboard') @section('content') {{-- Hero --}}
<section class="relative bg-cover bg-center"
    style="background-image: url('{{ asset('images/banner/banner-taman-surgawi.jpeg') }}');"> {{-- Overlay --}} <div
        class="absolute inset-0 bg-green-900/60"></div> {{-- Content --}} <div
        class="relative mx-auto max-w-7xl px-6 py-20">
        <div class="max-w-3xl text-green-200">
            <h1 class="text-4xl font-bold leading-tight md:text-6xl"> Herbal Research Center <br> Universitas YARSI </h1>
            <p class="mt-6 text-lg leading-relaxed text-green-100"> Center of excellence for herbal phytochemistry, <br>
                experimental medicine and translational research. </p>
            <div class="mt-16 flex flex-wrap gap-4">

                {{-- Explore Research --}}
                <a href="#expertise"
                    class="group inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3 font-semibold text-green-700 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-green-50 hover:shadow-xl">

                    <i class="ri-microscope-line text-lg transition-transform duration-300 group-hover:scale-110"></i>

                    <span>
                        Expertise
                    </span>

                    <i
                        class="ri-arrow-right-line text-lg transition-transform duration-300 group-hover:translate-x-1"></i>

                </a>


                {{-- Learn More --}}
                <a href="{{ route('herbal-garden.index') }}"
                    class="group inline-flex items-center gap-2 rounded-lg border border-green-300/80 bg-green-900/20 px-6 py-3 font-semibold text-green-100 backdrop-blur-sm transition-all duration-300 hover:-translate-y-1 hover:bg-green-600/80 hover:text-white">

                    <i class="ri-leaf-line text-lg transition-transform duration-300 group-hover:scale-110"></i>

                    <span>
                        Herbal Garden
                    </span>

                    <i
                        class="ri-arrow-right-line text-lg transition-transform duration-300 group-hover:translate-x-1"></i>

                </a>

            </div>
        </div>
    </div>
</section>
<section id="expertise" class="py-20 bg-white">
    <div class="mx-auto max-w-7xl px-6">

        {{-- Section Header --}}
        <div class="max-w-2xl text-justify">
            <div class="mb-4 flex items-center gap-3">

                <span class="h-5 w-1 rounded-full bg-green-600"></span>

                <p class="text-sm font-semibold uppercase tracking-wider text-green-600">
                    Research Focus
                </p>

            </div>

            <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                Areas of Expertise
            </h2>

            <p class="mt-4 leading-relaxed text-gray-600">
                Our Herbal Research Laboratory provides secondary metabolite analysis, including antioxidant assays,
                qualitative and quantitative phytochemical testing, and LC–MS/MS analysis, as well as animal model
                research, histopathology, and immunohistochemistry (IHC) services.
            </p>
        </div>

        {{-- Research Buttons --}}
        <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-5">

            {{-- Phytochemistry --}}
            <a href="{{ route('herbal-testing-services.index') }}"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-4xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-leaf-line"></i>
                </div>

                <h3 class="relative z-10 mt-6 text-lg font-bold text-gray-900">
                    Herbal Testing Services
                </h3>

                <p class="relative z-10 mt-2 text-sm leading-relaxed text-gray-500">
                    Bioactive compound analysis
                </p>

                <div class="relative z-10 mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-green-50 transition-all duration-500 group-hover:scale-150">
                </div>
            </a>


            {{-- Animal Model --}}
            <a href="{{ route('animal-research.index') }}"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-4xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-dna-line"></i>
                </div>

                <h3 class="relative z-10 mt-6 text-lg font-bold text-gray-900">
                    Animal Model
                </h3>

                <p class="relative z-10 mt-2 text-sm leading-relaxed text-gray-500">
                    Herbal therapeutic research
                </p>
                <p class="relative z-10 mt-2 text-sm leading-relaxed text-gray-500">
                    On Going
                </p>

                <div class="relative z-10 mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-green-50 transition-all duration-500 group-hover:scale-150">
                </div>
            </a>


            {{-- Histology --}}
            <a href="{{ route('histology.index') }}"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-4xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-microscope-line"></i>
                </div>

                <h3 class="relative z-10 mt-6 text-md font-bold text-gray-900">
                    Histology & Immunohistochemistry
                </h3>

                <p class="relative z-10 mt-2 text-sm leading-relaxed text-gray-500">
                    Tissue & molecular analysis
                </p>
                <p class="relative z-10 mt-2 text-sm leading-relaxed text-gray-500">
                    DONE
                </p>
                <div class="relative z-10 mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-green-50 transition-all duration-500 group-hover:scale-150">
                </div>
            </a>


            {{-- Herbal Garden --}}
            <a href="{{ route('herbal-garden.index') }}"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-4xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-plant-line"></i>
                </div>

                <h3 class="relative z-10 mt-6 text-lg font-bold text-gray-900">
                    Herbal Garden
                </h3>

                <p class="relative z-10 mt-2 text-sm leading-relaxed text-gray-500">
                    Living laboratory & conservation
                </p>

                <div class="relative z-10 mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-green-50 transition-all duration-500 group-hover:scale-150">
                </div>
            </a>


            {{-- Collaboration --}}
            <a href="{{ route('shop') }}"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-4xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-shopping-bag-3-line"></i>
                </div>

                <h3 class="relative z-10 mt-6 text-lg font-bold text-gray-900">
                    Shop
                </h3>

                <p class="relative z-10 mt-2 text-sm leading-relaxed text-gray-500">
                    Explore our plants, fertilizers, and herbal products.
                </p>

                <div class="relative z-10 mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-green-50 transition-all duration-500 group-hover:scale-150">
                </div>

            </a>

        </div>
    </div>
</section>
{{-- Research --}}
<section id="research" class="bg-gray-100 py-16">
    <div class="mx-auto max-w-7xl px-6">
        <h2 class="text-3xl font-bold text-gray-900"> Research </h2>
        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="rounded-xl bg-white p-6 shadow-sm">
                <h3 class="text-xl font-semibold"> Herbal Plants </h3>
                <p class="mt-3 text-gray-600"> Explore information about various herbal plants found in Indonesia. </p>
            </div>
            <div class="rounded-xl bg-white p-6 shadow-sm">
                <h3 class="text-xl font-semibold"> Research Data </h3>
                <p class="mt-3 text-gray-600"> Documentation and research data related to herbal medicine. </p>
            </div>
            <div class="rounded-xl bg-white p-6 shadow-sm">
                <h3 class="text-xl font-semibold"> Publications </h3>
                <p class="mt-3 text-gray-600"> Research findings and publications from herbal studies. </p>
            </div>
        </div>
    </div>
</section>
@endsection
