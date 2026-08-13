<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Admin Dashboard') - Herbal Research Center
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50 text-gray-900">

    <div class="flex min-h-screen">

        {{-- =========================
            Sidebar
        ========================== --}}
        <aside class="fixed inset-y-0 left-0 z-40 flex w-64 flex-col border-r border-gray-200 bg-white">

            {{-- Logo --}}
            <div class="flex h-20 items-center border-b border-gray-200 px-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-700 text-white">
                        <i data-lucide="leaf" class="h-5 w-5"></i>
                    </div>

                    <div>
                        <h1 class="text-sm font-bold text-gray-900">
                            Herbal Research
                        </h1>
                        <p class="text-xs text-gray-500">
                            Admin Panel
                        </p>
                    </div>
                </a>
            </div>


            {{-- Navigation --}}
            <nav class="flex-1 space-y-1 overflow-y-auto p-4">

                <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
                    Main Menu
                </p>

                {{-- Dashboard --}}
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition
                    {{ request()->routeIs('admin.dashboard')
                        ? 'bg-green-50 text-green-700'
                        : 'text-gray-600 hover:bg-gray-50 hover:text-green-700' }}">

                    <i data-lucide="layout-dashboard" class="h-5 w-5"></i>

                    <span>Dashboard</span>
                </a>


                {{-- Plants --}}
                <a href="{{ route('admin.plants') }}"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-50 hover:text-green-700">

                    <i data-lucide="sprout" class="h-5 w-5"></i>

                    <span>Plants</span>
                </a>


                {{-- Categories --}}
                <a href="#"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-50 hover:text-green-700">

                    <i data-lucide="folder-tree" class="h-5 w-5"></i>

                    <span>Categories</span>
                </a>


                {{-- Articles --}}
                <a href="#"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-50 hover:text-green-700">

                    <i data-lucide="file-text" class="h-5 w-5"></i>

                    <span>Articles</span>
                </a>


                <div class="my-5 border-t border-gray-100"></div>

                <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
                    Management
                </p>


                {{-- Users --}}
                <a href="#"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-50 hover:text-green-700">

                    <i data-lucide="users" class="h-5 w-5"></i>

                    <span>Users</span>
                </a>


                {{-- Settings --}}
                <a href="#"
                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-gray-600 transition hover:bg-gray-50 hover:text-green-700">

                    <i data-lucide="settings" class="h-5 w-5"></i>

                    <span>Settings</span>
                </a>

            </nav>


            {{-- User --}}
            <div class="border-t border-gray-200 p-4">

                <div class="flex items-center gap-3">

                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100 font-semibold text-green-700">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>

                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-semibold text-gray-900">
                            {{ auth()->user()->name ?? 'Administrator' }}
                        </p>

                        <p class="truncate text-xs text-gray-500">
                            {{ auth()->user()->email ?? 'admin@example.com' }}
                        </p>
                    </div>

                </div>

            </div>

        </aside>


        {{-- =========================
            Main Content
        ========================== --}}
        <div class="ml-64 flex min-h-screen flex-1 flex-col">

            {{-- Header --}}
            <header
                class="sticky top-0 z-30 flex h-20 items-center justify-between border-b border-gray-200 bg-white/90 px-8 backdrop-blur">

                <div>
                    <h2 class="text-lg font-semibold text-gray-900">
                        @yield('header', 'Dashboard')
                    </h2>

                    <p class="text-sm text-gray-500">
                        Herbal Research Center
                    </p>
                </div>


                {{-- Right Header --}}
                <div class="flex items-center gap-4">

                    {{-- Website --}}
                    <a href="{{ url('/') }}" target="_blank"
                        class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-gray-600 transition hover:bg-gray-100 hover:text-green-700">

                        <i data-lucide="external-link" class="h-4 w-4"></i>

                        View Website
                    </a>


                    {{-- Logout --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit"
                            class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-gray-600 transition hover:bg-red-50 hover:text-red-600">

                            <i data-lucide="log-out" class="h-4 w-4"></i>

                            Logout
                        </button>
                    </form>

                </div>

            </header>


            {{-- Page Content --}}
            <main class="flex-1 p-8">

                @yield('content')

            </main>

        </div>

    </div>


    <script>
        lucide.createIcons();
    </script>

    @stack('scripts')

</body>

</html>
