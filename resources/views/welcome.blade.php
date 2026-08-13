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
                <a href="#research"
                    class="group inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3 font-semibold text-green-700 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-green-50 hover:shadow-xl">

                    <i class="ri-microscope-line text-lg transition-transform duration-300 group-hover:scale-110"></i>

                    <span>
                        Explore Research
                    </span>

                    <i
                        class="ri-arrow-right-line text-lg transition-transform duration-300 group-hover:translate-x-1"></i>

                </a>


                {{-- Learn More --}}
                <a href="{{ route('herbal-garden') }}"
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
<section id="about" class="py-20 bg-white">
    <div class="mx-auto max-w-7xl px-6">

        {{-- Section Header --}}
        <div class="max-w-2xl">
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
                Our research activities cover multidisciplinary approaches in
                herbal medicine, experimental science, and translational research.
            </p>
        </div>

        {{-- Research Buttons --}}
        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Phytochemistry --}}
            <a href="#"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-2xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-flask-line"></i>

                </div>

                <h3 class="mt-5 text-lg font-bold text-gray-900">
                    Phytochemistry Analysis
                </h3>

                <p class="mt-2 text-sm leading-relaxed text-gray-500">
                    Analysis and identification of bioactive compounds
                    from medicinal plants.
                </p>

                <div class="mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-green-50 transition-all duration-300 group-hover:scale-150">
                </div>
            </a>


            {{-- Animal Model --}}
            <a href="#"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-2xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-dna-line"></i>
                </div>

                <h3 class="mt-5 text-lg font-bold text-gray-900">
                    Animal Model Research
                </h3>

                <p class="mt-2 text-sm leading-relaxed text-gray-500">
                    Experimental studies using animal models to evaluate
                    herbal therapeutic effects.
                </p>

                <div class="mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-green-50 transition-all duration-300 group-hover:scale-150">
                </div>
            </a>


            {{-- Histology --}}
            <a href="#"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-2xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-microscope-line"></i>

                </div>

                <h3 class="mt-5 text-lg font-bold text-gray-900">
                    Histology & Immunohistochemistry
                </h3>

                <p class="mt-2 text-sm leading-relaxed text-gray-500">
                    Tissue analysis and molecular localization to understand
                    biological responses.
                </p>

                <div class="mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-green-50 transition-all duration-300 group-hover:scale-150">
                </div>
            </a>


            {{-- Collaboration --}}
            <a href="{{ route('herbal-garden') }}"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-2xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-plant-line"></i>
                </div>

                <h3 class="mt-5 text-lg font-bold text-gray-900">
                    Herbal Garden
                </h3>

                <p class="mt-2 text-sm leading-relaxed text-gray-500">
                    Explore Taman Herbal Surgawi Nusantara, a living laboratory
                    for herbal education, research, and conservation.
                </p>

                <div class="mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-green-50 transition-all duration-300 group-hover:scale-150">
                </div>

            </a><a href="#"
                class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-200 hover:shadow-xl">

                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-2xl text-green-700 transition-all duration-300 group-hover:bg-green-700 group-hover:text-white">
                    <i class="ri-team-line"></i>
                </div>

                <h3 class="mt-5 text-lg font-bold text-gray-900">
                    Collaboration
                </h3>

                <p class="mt-2 text-sm leading-relaxed text-gray-500">
                    Building research partnerships and collaborations
                    across institutions and disciplines.
                </p>

                <div class="mt-5 flex items-center gap-2 text-sm font-semibold text-green-700">
                    Explore
                    <i class="ri-arrow-right-line transition-transform duration-300 group-hover:translate-x-1"></i>
                </div>

                <div
                    class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-green-50 transition-all duration-300 group-hover:scale-150">
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
