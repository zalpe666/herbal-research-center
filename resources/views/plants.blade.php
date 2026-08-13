@extends('layouts.app')

@section('title', 'Katalog Tanaman Herbal')

@section('content')

    <div class="min-h-screen bg-gray-50">


        <section class="bg-green-950 text-white">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

                <div class="max-w-3xl">

                    <div
                        class="mb-5 inline-flex items-center gap-2 rounded-full border border-green-300/30 bg-green-950/20 px-4 py-2 backdrop-blur-sm">

                        <i class="ri-leaf-line text-green-300"></i>

                        <span class="text-sm font-semibold uppercase tracking-[0.18em] text-green-200">
                            Herbal Garden
                        </span>

                    </div>

                    <h1 class="mt-5 text-4xl font-bold tracking-tight md:text-5xl">
                        Katalog Tanaman Herbal
                    </h1>

                    <p class="mt-5 text-lg leading-8 text-green-100">
                        Jelajahi berbagai tanaman herbal beserta nama ilmiah,
                        kandungan kimia, khasiat, cara pemanfaatan, dan informasi
                        lainnya.
                    </p>

                </div>

            </div>
        </section>


        {{-- =========================
        STATISTICS
    ========================== --}}
        <section class="-mt-8 relative z-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="grid gap-4 md:grid-cols-3">

                    <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-lg">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-green-100 text-green-700">

                                <i class="ri-leaf-line text-2xl"></i>

                            </div>

                            <div>
                                <p class="text-sm text-gray-500">
                                    Total Tanaman
                                </p>

                                <p class="text-2xl font-bold text-gray-900">
                                    {{ $totalPlants }}
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-lg">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-blue-100 text-blue-700">

                                <i class="ri-image-line text-2xl"></i>

                            </div>

                            <div>
                                <p class="text-sm text-gray-500">
                                    Dengan Gambar
                                </p>

                                <p class="text-2xl font-bold text-gray-900">
                                    {{ $totalWithImage }}
                                </p>
                            </div>

                        </div>

                    </div>


                    {{-- Tanpa gambar --}}
                    <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-lg">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-orange-100 text-orange-700">

                                <i class="ri-image-2-line text-2xl"></i>

                            </div>

                            <div>
                                <p class="text-sm text-gray-500">
                                    Tanpa Gambar
                                </p>

                                <p class="text-2xl font-bold text-gray-900">
                                    {{ $totalWithoutImage }}
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section class="mx-auto max-w-7xl px-6 pt-12 lg:px-8">

            <form method="GET" action="{{ route('herbal-garden-plants.index') }}"
                class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

                <div class="grid gap-4 md:grid-cols-[1fr_auto_auto]">

                    {{-- Search --}}
                    <div class="relative">

                        <i
                            class="ri-search-line absolute left-4 top-1/2
                              -translate-y-1/2 text-lg text-gray-400"></i>

                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari nama tanaman, nama ilmiah, khasiat..."
                            class="w-full rounded-xl border border-gray-300
                               py-3 pl-11 pr-4 text-sm
                               outline-none transition
                               focus:border-green-500
                               focus:ring-2 focus:ring-green-100">

                    </div>


                    {{-- Sorting --}}
                    <select name="sort"
                        class="rounded-xl border border-gray-300
                           px-4 py-3 text-sm
                           outline-none
                           focus:border-green-500
                           focus:ring-2 focus:ring-green-100">

                        <option value="newest" @selected(request('sort', 'newest') === 'newest')>
                            Terbaru
                        </option>

                        <option value="oldest" @selected(request('sort') === 'oldest')>
                            Terlama
                        </option>

                        <option value="name_asc" @selected(request('sort') === 'name_asc')>
                            Nama A - Z
                        </option>

                        <option value="name_desc" @selected(request('sort') === 'name_desc')>
                            Nama Z - A
                        </option>

                    </select>


                    {{-- Button --}}
                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2
                           rounded-xl bg-green-700 px-6 py-3
                           text-sm font-semibold text-white
                           transition hover:bg-green-800">

                        <i class="ri-search-line"></i>

                        Cari

                    </button>

                </div>


                @if (request()->hasAny(['search', 'sort']))
                    <div class="mt-4">

                        <a href="{{ route('herbal-garden-plants.index') }}"
                            class="inline-flex items-center gap-2
                               text-sm font-medium text-gray-500
                               transition hover:text-green-700">

                            <i class="ri-refresh-line"></i>

                            Reset pencarian

                        </a>

                    </div>
                @endif

            </form>

        </section>

        <section class="mx-auto max-w-7xl px-6 pt-8 lg:px-8">

            <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-center">

                <div>
                    <h2 class="text-xl font-bold text-gray-900">
                        Koleksi Tanaman
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Menampilkan
                        <span class="font-semibold text-gray-700">
                            {{ $plants->firstItem() ?? 0 }}
                        </span>
                        -
                        <span class="font-semibold text-gray-700">
                            {{ $plants->lastItem() ?? 0 }}
                        </span>
                        dari
                        <span class="font-semibold text-gray-700">
                            {{ $plants->total() }}
                        </span>
                        tanaman
                    </p>
                </div>


                {{-- View Switcher --}}
                <div class="inline-flex self-start rounded-xl border border-gray-200 bg-white p-1 shadow-sm">

                    <button type="button" id="cardViewBtn" onclick="setPlantView('card')"
                        class="view-toggle rounded-lg bg-green-700 px-3 py-2 text-sm font-medium text-white transition">
                        <i class="ri-grid-line text-lg"></i>
                        <span class="ml-1 hidden sm:inline">Card</span>
                    </button>

                    <button type="button" id="listViewBtn" onclick="setPlantView('list')"
                        class="view-toggle rounded-lg px-3 py-2 text-sm font-medium text-gray-500 transition hover:bg-gray-50">
                        <i class="ri-list-check text-lg"></i>
                        <span class="ml-1 hidden sm:inline">List</span>
                    </button>

                </div>

            </div>

        </section>

        <section class="mx-auto max-w-7xl px-6 py-8 lg:px-8">

            @if ($plants->count())

                {{-- =========================
            CARD VIEW
        ========================== --}}
                <div id="cardView" class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                    @foreach ($plants as $plant)
                        <x-plant-card :plant="$plant" />
                    @endforeach

                </div>


                {{-- =========================
            LIST VIEW
        ========================== --}}
                <div id="listView" class="hidden space-y-4">

                    @foreach ($plants as $plant)
                        <a href="{{ route('herbal-garden.show', $plant->slug) }}"
                            class="group flex flex-col overflow-hidden rounded-2xl
                           border border-gray-200 bg-white
                           shadow-sm transition duration-300
                           hover:border-green-200
                           hover:shadow-lg
                           sm:flex-row">

                            {{-- Image --}}
                            <div
                                class="relative h-56 w-full shrink-0 overflow-hidden
                               bg-green-50 sm:h-40 sm:w-56">

                                @if ($plant->image)
                                    <img src="{{ asset('storage/' . $plant->image) }}" alt="{{ $plant->name }}"
                                        loading="lazy"
                                        class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-105">
                                @else
                                    <div class="flex h-full w-full items-center justify-center">

                                        <div class="text-center text-green-700">

                                            <i class="ri-leaf-line text-5xl"></i>

                                            <p class="mt-2 text-xs font-medium">
                                                Belum ada gambar
                                            </p>

                                        </div>

                                    </div>
                                @endif

                            </div>


                            {{-- Content --}}
                            <div class="flex flex-1 flex-col justify-between p-5">

                                <div>

                                    <div class="flex items-start justify-between gap-4">

                                        <div class="min-w-0">

                                            <h3
                                                class="text-xl font-bold text-gray-900
                                               transition
                                               group-hover:text-green-700">
                                                {{ $plant->name }}
                                            </h3>

                                            @if ($plant->scientific_name)
                                                <p class="mt-1 text-sm italic text-gray-500">
                                                    {{ $plant->scientific_name }}
                                                </p>
                                            @endif

                                        </div>


                                        <span
                                            class="flex h-10 w-10 shrink-0 items-center
                                           justify-center rounded-full
                                           bg-green-50 text-green-700">
                                            <i class="ri-leaf-line text-lg"></i>
                                        </span>

                                    </div>


                                    {{-- Khasiat --}}
                                    @if ($plant->benefits)
                                        <div class="mt-4">

                                            <p
                                                class="text-xs font-semibold uppercase
                                               tracking-wider text-gray-400">
                                                Khasiat
                                            </p>

                                            <div
                                                class="mt-1 line-clamp-2 text-sm
                                               leading-6 text-gray-600">
                                                {!! strip_tags($plant->benefits) !!}
                                            </div>

                                        </div>
                                    @endif

                                </div>


                                {{-- Footer --}}
                                <div
                                    class="mt-5 flex items-center justify-between
                                   border-t border-gray-100 pt-4">

                                    <span class="text-sm text-gray-400">
                                        Tanaman Herbal
                                    </span>

                                    <span
                                        class="inline-flex items-center gap-2
                                       text-sm font-semibold text-green-700">
                                        Lihat detail

                                        <i
                                            class="ri-arrow-right-line transition
                                           group-hover:translate-x-1"></i>

                                    </span>

                                </div>

                            </div>

                        </a>
                    @endforeach

                </div>
            @else
                {{-- Empty State --}}
                <div
                    class="rounded-3xl border border-dashed border-gray-300
                        bg-white px-6 py-20 text-center">

                    <div
                        class="mx-auto flex h-20 w-20 items-center justify-center
                           rounded-full bg-green-50 text-green-700">
                        <i class="ri-search-eye-line text-4xl"></i>
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-gray-900">
                        Tanaman tidak ditemukan
                    </h3>

                    <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-gray-500">
                        Tidak ada tanaman yang sesuai dengan pencarian
                        <strong>"{{ request('search') }}"</strong>.
                        Coba gunakan kata kunci lain.
                    </p>

                    <a href="{{ route('herbal-garden-plants.index') }}"
                        class="mt-6 inline-flex items-center gap-2
                           rounded-xl bg-green-700 px-5 py-3
                           text-sm font-semibold text-white
                           transition hover:bg-green-800">

                        <i class="ri-refresh-line"></i>

                        Tampilkan Semua

                    </a>

                </div>

            @endif

        </section>

        @if ($plants->hasPages())
            <section class="mx-auto max-w-7xl px-6 pb-16 lg:px-8">

                <div class="flex justify-center">

                    {{ $plants->links() }}

                </div>

            </section>
        @endif

    </div>
    <script>
        function setPlantView(view) {
            const cardView = document.getElementById('cardView');
            const listView = document.getElementById('listView');

            const cardViewBtn = document.getElementById('cardViewBtn');
            const listViewBtn = document.getElementById('listViewBtn');

            if (view === 'list') {

                cardView.classList.add('hidden');
                listView.classList.remove('hidden');

                listViewBtn.classList.add(
                    'bg-green-700',
                    'text-white'
                );

                listViewBtn.classList.remove(
                    'text-gray-500'
                );

                cardViewBtn.classList.remove(
                    'bg-green-700',
                    'text-white'
                );

                cardViewBtn.classList.add(
                    'text-gray-500'
                );

            } else {

                listView.classList.add('hidden');
                cardView.classList.remove('hidden');

                cardViewBtn.classList.add(
                    'bg-green-700',
                    'text-white'
                );

                cardViewBtn.classList.remove(
                    'text-gray-500'
                );

                listViewBtn.classList.remove(
                    'bg-green-700',
                    'text-white'
                );

                listViewBtn.classList.add(
                    'text-gray-500'
                );

            }

            // Simpan pilihan user
            localStorage.setItem('plantView', view);
        }


        // Ambil pilihan terakhir
        document.addEventListener('DOMContentLoaded', function() {

            const savedView = localStorage.getItem('plantView') || 'card';

            setPlantView(savedView);

        });
    </script>
@endsection
