@extends('layouts.app')

@section('title', 'Herbal Testing Services')

@section('content')

    <section class="relative overflow-hidden pt-36 pb-48">
        {{-- Background Image & Overlays --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/banner/extraction.jpeg') }}" alt="Phytochemistry Analysis"
                class="h-full w-full object-cover scale-105" />

            {{-- Main Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-green-900 via-green-600/90 to-green-600/45"></div>

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
            <p class="text-lg text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </section>


    <x-contact-cta />

@endsection
