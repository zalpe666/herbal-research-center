@extends('layouts.app')

@section('title', $plantHerb->name)

@section('content')

    <div class="mx-auto max-w-7xl px-6 py-12">

        <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">

            {{-- Image --}}
            <div class="overflow-hidden rounded-3xl bg-gray-100">

                @if ($plantHerb->image)
                    <img src="{{ asset('storage/' . $plantHerb->image) }}" alt="{{ $plantHerb->name }}"
                        class="h-full max-h-[600px] w-full object-cover">
                @else
                    <div class="flex aspect-square items-center justify-center text-gray-400">
                        <i class="ri-image-line text-6xl"></i>
                    </div>
                @endif

            </div>


            {{-- Information --}}
            <div>

                <span class="text-sm font-medium uppercase tracking-wide text-green-700">
                    {{ $plantHerb->product_type }}
                </span>

                <h1 class="mt-2 text-4xl font-bold text-gray-900">
                    {{ $plantHerb->name }}
                </h1>

                @if ($plantHerb->scientific_name)
                    <p class="mt-2 italic text-gray-500">
                        {{ $plantHerb->scientific_name }}
                    </p>
                @endif


                {{-- Variations --}}
                <div class="mt-8">

                    <h2 class="mb-4 font-semibold text-gray-900">
                        Pilih Variasi
                    </h2>

                    <div class="space-y-3">

                        @foreach ($plantHerb->variations as $variation)
                            <label
                                class="flex cursor-pointer items-center justify-between rounded-xl border border-gray-200 p-4 transition hover:border-green-500 hover:bg-green-50">

                                <div class="flex items-center gap-3">

                                    <input type="radio" name="variation_id" value="{{ $variation->id }}"
                                        class="text-green-600" {{ $loop->first ? 'checked' : '' }}>

                                    <span class="font-medium">
                                        {{ $variation->unit }}
                                    </span>

                                </div>

                                <span class="font-semibold text-green-700">
                                    Rp{{ number_format($variation->price, 0, ',', '.') }}
                                </span>

                            </label>
                        @endforeach

                    </div>

                </div>


                {{-- Add Cart --}}
                <form action="{{ route('cart.add') }}" method="POST" class="mt-8">

                    @csrf

                    <input type="hidden" name="variation_id" id="variation_id"
                        value="{{ $plantHerb->variations->first()?->id }}">

                    <button type="submit"
                        class="flex w-full items-center justify-center gap-2 rounded-xl bg-green-700 px-6 py-3.5 font-semibold text-white transition hover:bg-green-800">

                        <i class="ri-shopping-cart-line"></i>

                        Tambah ke Keranjang

                    </button>

                </form>

            </div>

        </div>

    </div>

@endsection
