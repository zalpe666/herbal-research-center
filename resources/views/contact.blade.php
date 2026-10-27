@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <section class="min-h-[calc(100vh-80px)] bg-gray-50">
        <div class="mx-auto flex min-h-[calc(100vh-80px)] max-w-7xl items-center px-6 py-16">

            <div class="grid w-full items-center gap-12 lg:grid-cols-2">

                {{-- LEFT : Lottie --}}
                <div class="flex items-center justify-center">

                    <div class="w-full max-w-lg">
                        <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>

                        <dotlottie-wc src="https://lottie.host/91d7fc07-b734-4dd7-8944-67be35af0ad3/L4pWszCUiN.lottie"
                            autoplay loop style="width: 100%; height: 480px;">
                        </dotlottie-wc>
                    </div>

                </div>


                {{-- RIGHT : Contact --}}
                <div>

                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-green-50 px-4 py-2 text-sm font-semibold text-green-700">
                        <i class="ri-mail-send-line"></i>
                        Get In Touch
                    </span>

                    <h1 class="mt-5 text-4xl font-bold tracking-tight text-gray-900 md:text-5xl">
                        Contact
                        <span class="text-green-700">Us</span>
                    </h1>

                    <p class="mt-5 max-w-xl leading-relaxed text-gray-500">
                        Have questions about our research, facilities, or collaboration
                        opportunities? Send us a message and our team will get back to you.
                    </p>


                    {{-- Contact Information --}}
                    <div class="mt-8 space-y-4">

                        {{-- Email --}}
                        <div
                            class="flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-4 shadow-sm transition hover:border-green-200 hover:shadow-md">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-50 text-xl text-green-700">
                                <i class="ri-mail-line"></i>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Email
                                </p>

                                <p class="mt-1 text-sm font-medium text-gray-900">
                                    research@yarsi.ac.id
                                </p>
                            </div>

                        </div>


                        {{-- Phone --}}
                        <div
                            class="flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-4 shadow-sm transition hover:border-green-200 hover:shadow-md">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-50 text-xl text-green-700">
                                <i class="ri-phone-line"></i>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Phone
                                </p>

                                <p class="mt-1 text-sm font-medium text-gray-900">
                                    +62 21 1234 5678
                                </p>
                            </div>

                        </div>


                        {{-- Location --}}
                        <div
                            class="flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-4 shadow-sm transition hover:border-green-200 hover:shadow-md">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-50 text-xl text-green-700">
                                <i class="ri-map-pin-line"></i>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                    Location
                                </p>

                                <p class="mt-1 text-sm font-medium text-gray-900">
                                    Universitas YARSI, Jakarta
                                </p>
                            </div>

                        </div>

                    </div>


                    {{-- Contact Button --}}
                    <div class="mt-8 flex flex-wrap gap-3">

                        <a href="mailto:research@yarsi.ac.id"
                            class="inline-flex items-center gap-2 rounded-xl bg-green-700 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition duration-300 hover:-translate-y-0.5 hover:bg-green-800 hover:shadow-lg">

                            <i class="ri-mail-send-line text-lg"></i>
                            Send Email

                        </a>

                        <a href="#"
                            class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-6 py-3.5 text-sm font-semibold text-gray-700 transition duration-300 hover:border-green-200 hover:bg-green-50 hover:text-green-700">

                            <i class="ri-map-pin-line text-lg"></i>
                            View Location

                        </a>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
