@extends('layouts.app')

@section('title', $plant->name . ' - Herbal Garden')

@section('content')
    <div class="bg-white">

        {{-- Hero --}}
        <section class="relative overflow-hidden bg-gradient-to-br from-green-50 via-white to-emerald-50">

            {{-- Decorative --}}
            <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-green-100/60 blur-3xl">
            </div>
            <div class="pointer-events-none absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl">
            </div>

            <div class="relative mx-auto max-w-7xl px-6 py-12 lg:px-8 lg:py-20">

                {{-- Breadcrumb --}}
                <div class="mb-10 flex items-center gap-2 text-sm text-gray-500">

                    <a href="{{ url('/') }}" class="transition hover:text-green-700">
                        Home
                    </a>

                    <i class="ri-arrow-right-s-line"></i>

                    <a href="{{ route('herbal-garden.index') }}" class="transition hover:text-green-700">
                        Herbal Garden
                    </a>

                    <i class="ri-arrow-right-s-line"></i> <a href="{{ route('herbal-garden.plants') }}"
                        class="transition hover:text-green-700">
                        Plants
                    </a>

                    <i class="ri-arrow-right-s-line"></i>

                    <span class="font-medium text-gray-900">
                        {{ $plant->name }}
                    </span>

                </div>


                <div class="grid items-center gap-12 lg:grid-cols-2">

                    {{-- Image --}}
                    <div class="relative">

                        <div class="absolute -inset-3 rounded-[2rem] bg-green-100/70 blur-xl"></div>

                        <div class="relative overflow-hidden rounded-[2rem] border border-white bg-gray-100 shadow-2xl">

                            @if ($plant->image)
                                <img src="{{ asset('storage/' . $plant->image) }}" alt="{{ $plant->name }}"
                                    class="aspect-[4/3] w-full object-cover">
                            @else
                                <div class="flex aspect-[4/3] items-center justify-center bg-green-50">
                                    <i class="ri-leaf-line text-8xl text-green-200"></i>
                                </div>
                            @endif

                        </div>

                    </div>


                    {{-- Information --}}
                    <div>

                        <span
                            class="inline-flex items-center gap-2 rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-700">
                            <i class="ri-leaf-line"></i>
                            Medicinal Plant
                        </span>


                        <h1 class="mt-5 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                            {{ $plant->name }}
                        </h1>


                        @if ($plant->scientific_name)
                            <p class="mt-3 text-lg italic text-green-600">
                                {{ $plant->scientific_name }}
                            </p>
                        @endif


                        <div class="mt-8 h-px w-20 bg-green-600"></div>


                        @if ($plant->benefits)
                            <div class="mt-8 text-lg leading-relaxed text-gray-600">
                                {!! $plant->benefits !!}
                            </div>
                        @endif

                    </div>

                </div>

            </div>

        </section>


        {{-- Main Information --}}
        <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

            {{-- FIX: Menambahkan items-start agar kolom konten dan sidebar tingginya mengikuti isinya (tidak stretch melar ke bawah) --}}
            <div class="grid items-start gap-8 lg:grid-cols-3">

                <div class="min-w-0 space-y-8 lg:col-span-2">

                    {{-- Chemical Content --}}
                    @if ($plant->chemical_content)
                        <article class="rounded-3xl border border-gray-200 bg-white p-7 shadow-sm">

                            <div class="mb-6 flex items-center gap-4">

                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-green-100 text-xl text-green-700">
                                    <i class="ri-flask-line"></i>
                                </div>

                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">
                                        Chemical Content
                                    </h2>

                                    <p class="text-sm text-gray-500">
                                        Important compounds found in this plant
                                    </p>
                                </div>

                            </div>

                            <div class="rich-content overflow-hidden">
                                {!! $plant->chemical_content !!}
                            </div>

                        </article>
                    @endif


                    {{-- Benefits --}}
                    @if ($plant->benefits)
                        <article class="rounded-3xl border border-gray-200 bg-white p-7 shadow-sm">

                            <div class="mb-6 flex items-center gap-4">

                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-100 text-xl text-emerald-700">
                                    <i class="ri-heart-pulse-line"></i>
                                </div>

                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">
                                        Benefits
                                    </h2>

                                    <p class="text-sm text-gray-500">
                                        Potential benefits and traditional uses
                                    </p>
                                </div>

                            </div>

                            <div class="rich-content overflow-hidden">
                                {!! $plant->benefits !!}
                            </div>

                        </article>
                    @endif


                    {{-- Usage --}}
                    @if ($plant->usage)
                        <article class="rounded-3xl border border-gray-200 bg-white p-7 shadow-sm">

                            <div class="mb-6 flex items-center gap-4">

                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-100 text-xl text-blue-700">
                                    <i class="ri-cup-line"></i>
                                </div>

                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">
                                        How to Use
                                    </h2>

                                    <p class="text-sm text-gray-500">
                                        Common methods of preparation and use
                                    </p>
                                </div>

                            </div>

                            <div class="rich-content overflow-hidden">
                                {!! $plant->usage !!}
                            </div>

                        </article>
                    @endif

                </div>


                {{-- Sidebar --}}
                <aside class="min-w-0 space-y-6 lg:sticky lg:top-24">
                    {{-- FIX Tambahan: Memberikan sticky top pada sidebar agar nyaman di layar lebar saat discroll --}}

                    {{-- Side Effects --}}
                    @if ($plant->side_effects)
                        <div class="rounded-3xl border border-amber-200 bg-amber-50 p-6">

                            <div class="flex items-start gap-4">

                                <div
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-100 text-xl text-amber-700">
                                    <i class="ri-alert-line"></i>
                                </div>

                                <div>

                                    <h2 class="font-bold text-gray-900">
                                        Side Effects
                                    </h2>

                                    <p class="mt-1 text-xs text-gray-500">
                                        Important information
                                    </p>

                                </div>

                            </div>

                            <div class="rich-content mt-4">
                                {!! $plant->side_effects !!}
                            </div>

                        </div>
                    @endif


                    {{-- References --}}
                    @if ($plant->references)
                        <div class="rounded-3xl border border-gray-200 bg-white p-6 shadow-sm">

                            <div class="flex items-start gap-4">

                                <div
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gray-100 text-xl text-gray-700">
                                    <i class="ri-book-open-line"></i>
                                </div>

                                <div>

                                    <h2 class="font-bold text-gray-900">
                                        References
                                    </h2>

                                    <p class="mt-1 text-xs text-gray-500">
                                        Sources and further reading
                                    </p>

                                </div>

                            </div>

                            <div class="rich-content mt-4">
                                {!! $plant->references !!}
                            </div>

                        </div>
                    @endif


                    {{-- Back --}}
                    <a href="{{ route('herbal-garden.plants') }}"
                        class="group flex w-full items-center justify-center gap-2 rounded-2xl border border-gray-200 bg-white px-5 py-4 text-sm font-semibold text-gray-700 shadow-sm transition hover:border-green-200 hover:bg-green-50 hover:text-green-700">

                        <i class="ri-arrow-left-line transition-transform duration-300 group-hover:-translate-x-1"></i>

                        Back to Herbal Garden

                    </a>

                </aside>

            </div>

        </section>


        {{-- Disclaimer --}}
        <section class="border-t border-gray-100 bg-gray-50">

            <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">

                <div class="flex gap-4">

                    <i class="ri-information-line mt-0.5 text-xl text-gray-400"></i>

                    <p class="text-sm leading-relaxed text-gray-500">
                        The information provided on this page is intended for
                        educational and informational purposes. It should not be
                        considered a substitute for professional medical advice,
                        diagnosis, or treatment.
                    </p>

                </div>

            </div>

        </section>

    </div>
    <style>
        /* =========================================================
                                   RICH CONTENT - CKEDITOR
                                ========================================================= */

        .rich-content {
            width: 100%;
            max-width: 100%;
            min-width: 0;

            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.8;

            overflow-wrap: anywhere;
            word-break: break-word;
        }

        /* Paragraph */
        .rich-content p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .rich-content p:last-child {
            margin-bottom: 0;
        }


        /* =========================================================
                                   HEADING
                                ========================================================= */

        .rich-content h1,
        .rich-content h2,
        .rich-content h3,
        .rich-content h4,
        .rich-content h5,
        .rich-content h6 {
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;

            color: #111827;
            font-weight: 700;
            line-height: 1.4;
        }

        .rich-content h1 {
            font-size: 1.5rem;
        }

        .rich-content h2 {
            font-size: 1.35rem;
        }

        .rich-content h3 {
            font-size: 1.2rem;
        }

        .rich-content h4 {
            font-size: 1.05rem;
        }


        /* =========================================================
                                   UNORDERED LIST
                                ========================================================= */

        .rich-content ul {
            display: block !important;

            margin-top: 0.75rem !important;
            margin-bottom: 1rem !important;

            padding-left: 1.75rem !important;

            list-style-type: disc !important;
        }

        .rich-content ul ul {
            list-style-type: circle !important;
        }

        .rich-content ul ul ul {
            list-style-type: square !important;
        }


        /* =========================================================
                                   ORDERED LIST
                                ========================================================= */

        .rich-content ol {
            display: block !important;

            margin-top: 0.75rem !important;
            margin-bottom: 1rem !important;

            padding-left: 1.75rem !important;

            list-style-type: decimal !important;
        }


        /* =========================================================
                                   LIST ITEM
                                ========================================================= */

        .rich-content li {
            display: list-item !important;

            margin-bottom: 0.45rem;

            padding-left: 0.25rem;

            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .rich-content li:last-child {
            margin-bottom: 0;
        }

        .rich-content li::marker {
            color: #15803d;
            font-weight: 600;
        }


        /* =========================================================
                                   BOLD / ITALIC
                                ========================================================= */

        .rich-content strong {
            color: #1f2937;
            font-weight: 700;
        }

        .rich-content em {
            font-style: italic;
        }


        /* =========================================================
                                   LINK
                                ========================================================= */

        .rich-content a {
            color: #15803d;
            font-weight: 600;
            text-decoration: underline;
            text-decoration-thickness: 1px;
            text-underline-offset: 3px;

            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .rich-content a:hover {
            color: #166534;
        }


        /* =========================================================
                                   BLOCKQUOTE
                                ========================================================= */

        .rich-content blockquote {
            margin: 1.25rem 0;

            border-left: 4px solid #22c55e;
            border-radius: 0 0.75rem 0.75rem 0;

            background: #f0fdf4;

            padding: 1rem 1.25rem;

            color: #374151;
            font-style: italic;
        }


        /* =========================================================
                                   TABLE CKEDITOR
                                ========================================================= */

        .rich-content figure.table {
            width: 100% !important;
            max-width: 100% !important;

            margin: 1.25rem 0;

            overflow-x: auto;
            overflow-y: hidden;

            -webkit-overflow-scrolling: touch;
        }

        .rich-content figure.table table {
            width: 100% !important;
            max-width: 100% !important;

            min-width: 0 !important;

            border-collapse: collapse;

            border: 1px solid #e5e7eb;
        }

        .rich-content table {
            width: 100% !important;
            max-width: 100% !important;

            min-width: 0 !important;

            border-collapse: collapse;

            border: 1px solid #e5e7eb;
        }

        .rich-content th,
        .rich-content td {
            max-width: 0;

            padding: 0.75rem 1rem;

            border: 1px solid #e5e7eb;

            vertical-align: top;

            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .rich-content th {
            background: #f0fdf4;

            color: #166534;

            font-weight: 700;

            text-align: left;
        }

        .rich-content td {
            color: #4b5563;
            background: white;
        }

        .rich-content tr:nth-child(even) td {
            background: #fafafa;
        }


        /* =========================================================
                                   IMAGE DARI CKEDITOR
                                ========================================================= */

        .rich-content figure.image {
            max-width: 100%;

            margin: 1.5rem auto;

            text-align: center;
        }

        .rich-content figure.image img {
            display: block;

            max-width: 100%;
            width: auto;
            height: auto;

            margin: 0 auto;

            border-radius: 1rem;
        }

        .rich-content img {
            display: block;

            max-width: 100% !important;
            width: auto;
            height: auto;

            margin: 1rem auto;

            border-radius: 1rem;
        }


        /* =========================================================
                                   HORIZONTAL RULE
                                ========================================================= */

        .rich-content hr {
            margin: 1.5rem 0;

            border: 0;
            border-top: 1px solid #e5e7eb;
        }


        /* =========================================================
                                   CKEDITOR ALIGNMENT
                                ========================================================= */

        .rich-content .text-align-left {
            text-align: left;
        }

        .rich-content .text-align-center {
            text-align: center;
        }

        .rich-content .text-align-right {
            text-align: right;
        }

        .rich-content .text-align-justify {
            text-align: justify;
        }


        /* =========================================================
                                   CODE
                                ========================================================= */

        .rich-content code {
            border-radius: 0.375rem;

            background: #f3f4f6;

            padding: 0.15rem 0.4rem;

            color: #374151;

            font-size: 0.875em;
        }


        /* =========================================================
                                   RESPONSIVE
                                ========================================================= */

        @media (max-width: 1023px) {

            .rich-content {
                font-size: 0.925rem;
            }

            .rich-content table {
                min-width: 450px !important;
            }

        }


        @media (max-width: 640px) {

            .rich-content {
                font-size: 0.9rem;
            }

            .rich-content table {
                min-width: 420px !important;
            }

            .rich-content th,
            .rich-content td {
                padding: 0.65rem 0.75rem;
            }

        }
    </style>
@endsection
