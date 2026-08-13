@extends('layouts.dashboard')

@section('title', 'Edit Tanaman')

@section('content')

    <div class="mx-auto max-w-5xl">

        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">
                Edit Tanaman
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Perbarui informasi tanaman herbal.
            </p>
        </div>

        <form action="{{ route('admin.plants.update', $plant) }}" method="POST" enctype="multipart/form-data"
            class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            @csrf
            @method('PUT')

            @include('admin.plants._form')

            <div class="mt-8 flex items-center justify-end gap-3">

                <a href="{{ route('admin.plants') }}"
                    class="rounded-xl border border-gray-300 px-5 py-3
                       text-sm font-medium text-gray-700 hover:bg-gray-50">
                    Batal
                </a>

                <button type="submit"
                    class="rounded-xl bg-green-600 px-5 py-3
                       text-sm font-semibold text-white
                       hover:bg-green-700">
                    Update Tanaman
                </button>

            </div>

        </form>

    </div>

@endsection
