<title>@yield('title', 'Herbal Research Center')</title>

<link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet">

@vite(['resources/css/app.css', 'resources/js/app.js'])


{{-- =========================
    Navbar
========================== --}}
<header class="sticky top-0 z-50 border-b border-gray-200 bg-white">

    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6">

        {{-- Brand --}}
        <a href="{{ url('/') }}" class="group flex items-center gap-3">

            <div
                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-200 bg-gray-50 transition duration-300 group-hover:bg-green-50">

                <img src="{{ asset('images/logo-uy.png') }}" alt="Logo Universitas YARSI" class="h-6 w-6 object-contain">

            </div>

            <div class="hidden leading-tight sm:block">

                <div class="text-sm font-bold tracking-wide text-gray-900">
                    UNIVERSITAS YARSI
                </div>

                <div class="text-xs font-medium tracking-wide text-gray-500">
                    Herbal Research Center
                </div>

            </div>

        </a>


        {{-- Navigation --}}
        <nav class="flex items-center gap-1">

            {{-- Home --}}
            <a href="{{ url('/') }}"
                class="group relative flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition duration-300 hover:bg-green-50 hover:text-green-700">

                <i class="ri-home-5-line text-base"></i>

                <span>Home</span>

                <span
                    class="absolute bottom-1 left-1/2 h-0.5 w-0 -translate-x-1/2 rounded-full bg-green-700 transition-all duration-300 group-hover:w-5">
                </span>

            </a>


            {{-- About --}}
            <a href="{{ route('about-us') }}"
                class="group relative flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition duration-300 hover:bg-green-50 hover:text-green-700">

                <i class="ri-information-line text-base"></i>

                <span>About</span>

                <span
                    class="absolute bottom-1 left-1/2 h-0.5 w-0 -translate-x-1/2 rounded-full bg-green-700 transition-all duration-300 group-hover:w-5">
                </span>

            </a>


            {{-- Contact --}}
            <a href="#"
                class="group relative flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition duration-300 hover:bg-green-50 hover:text-green-700">

                <i class="ri-mail-line text-base"></i>

                <span>Contact</span>

                <span
                    class="absolute bottom-1 left-1/2 h-0.5 w-0 -translate-x-1/2 rounded-full bg-green-700 transition-all duration-300 group-hover:w-5">
                </span>

            </a>
            @if (auth()->check())
                <a href="{{ route('admin.dashboard') }}"
                    class="group relative flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition duration-300 hover:bg-green-50 hover:text-green-700">

                    <i class="ri-dashboard-line text-base"></i>

                    <span>Dashboard</span>

                    <span
                        class="absolute bottom-1 left-1/2 h-0.5 w-0 -translate-x-1/2 rounded-full bg-green-700 transition-all duration-300 group-hover:w-5">
                    </span>

                </a>
            @else
                <a href="{{ route('login') }}"
                    class="group relative flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium text-gray-700 transition duration-300 hover:bg-green-50 hover:text-green-700">

                    <i class="ri-login-box-line text-base"></i>

                    <span>Login</span>

                    <span
                        class="absolute bottom-1 left-1/2 h-0.5 w-0 -translate-x-1/2 rounded-full bg-green-700 transition-all duration-300 group-hover:w-5">
                    </span>

                </a>
            @endif

        </nav>

    </div>

</header>


{{-- =========================
    Main Content
========================== --}}
<main>
    @yield('content')
</main>
<x-footer />
