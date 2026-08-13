@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')

    {{-- Welcome --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">
            Welcome back, {{ auth()->user()->name }} 👋
        </h1>

        <p class="mt-1 text-sm text-gray-500">
            Kelola data Herbal Research Center dari dashboard ini.
        </p>
    </div>


    {{-- Statistics --}}
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

        {{-- Plants --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Total Plants
                    </p>

                    <p class="mt-2 text-3xl font-bold text-gray-900">
                        0
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-green-700">
                    <i data-lucide="sprout" class="h-6 w-6"></i>
                </div>

            </div>

        </div>


        {{-- Categories --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Categories
                    </p>

                    <p class="mt-2 text-3xl font-bold text-gray-900">
                        0
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    <i data-lucide="folder-tree" class="h-6 w-6"></i>
                </div>

            </div>

        </div>


        {{-- Articles --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Articles
                    </p>

                    <p class="mt-2 text-3xl font-bold text-gray-900">
                        0
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-50 text-purple-600">
                    <i data-lucide="file-text" class="h-6 w-6"></i>
                </div>

            </div>

        </div>


        {{-- Users --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Users
                    </p>

                    <p class="mt-2 text-3xl font-bold text-gray-900">
                        0
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-50 text-orange-600">
                    <i data-lucide="users" class="h-6 w-6"></i>
                </div>

            </div>

        </div>

    </div>


    {{-- Recent Activity --}}
    <div class="mt-8 rounded-2xl border border-gray-200 bg-white shadow-sm">

        <div class="border-b border-gray-200 px-6 py-5">

            <h2 class="font-semibold text-gray-900">
                Recent Activity
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Aktivitas terbaru pada sistem.
            </p>

        </div>

        <div class="flex min-h-[200px] items-center justify-center px-6">

            <div class="text-center">

                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gray-100 text-gray-400">
                    <i data-lucide="activity" class="h-6 w-6"></i>
                </div>

                <p class="mt-3 text-sm font-medium text-gray-600">
                    Belum ada aktivitas
                </p>

                <p class="mt-1 text-xs text-gray-400">
                    Aktivitas sistem akan muncul di sini.
                </p>

            </div>

        </div>

    </div>

@endsection
