@extends('layouts.app')

@section('title', 'Shop')

@section('content')

    <div class="mx-auto max-w-7xl px-6 py-12">

        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900">
                Shop
            </h1>

            <p class="mt-2 text-gray-500">
                Temukan berbagai tanaman, pupuk, dan produk Herbal Research Center.
            </p>
        </div>


        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

            @foreach ($products as $product)
                <a href="{{ route('shop.show', $product) }}"
                    class="group overflow-hidden rounded-2xl border border-gray-200 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    {{-- Image --}}
                    <div class="aspect-square overflow-hidden bg-gray-100">

                        @if ($product->image)
                            <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        @else
                            <div class="flex h-full items-center justify-center text-gray-400">
                                <i class="ri-image-line text-5xl"></i>
                            </div>
                        @endif

                    </div>


                    {{-- Content --}}
                    <div class="p-5">

                        <h2 class="font-semibold text-gray-900">
                            {{ $product->name }}
                        </h2>

                        @if ($product->product_type)
                            <p class="mt-1 text-sm text-gray-500">
                                {{ ucfirst($product->product_type) }}
                            </p>
                        @endif


                        @php
                            $prices = $product->variations->pluck('price');
                        @endphp

                        @if ($prices->count())
                            <div class="mt-4 font-bold text-green-700">

                                @if ($prices->min() != $prices->max())
                                    Rp{{ number_format($prices->min(), 0, ',', '.') }}
                                    -
                                    Rp{{ number_format($prices->max(), 0, ',', '.') }}
                                @else
                                    Rp{{ number_format($prices->min(), 0, ',', '.') }}
                                @endif

                            </div>
                        @endif

                    </div>

                </a>
            @endforeach

        </div>


        <div class="mt-10">
            {{ $products->links() }}
        </div>

    </div>

@endsection
