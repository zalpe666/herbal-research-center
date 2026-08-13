@extends('layouts.dashboard')

@section('title', 'Tanaman Herbal')

@section('content')

    <div class="space-y-6">

        {{-- Header --}}
        <div class="flex items-center justify-between">

            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    Tanaman Herbal
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Kelola data tanaman herbal.
                </p>
            </div>

            <a href="{{ route('admin.plants.create') }}"
                class="rounded-xl bg-green-600 px-5 py-3
                   text-sm font-semibold text-white
                   transition hover:bg-green-700">
                + Tambah Tanaman
            </a>

        </div>


        {{-- Success --}}
        @if (session('success'))
            <div class="rounded-xl border border-green-200 bg-green-50 px-4 py-3
                    text-sm text-green-700">
                {{ session('success') }}
            </div>
        @endif


        {{-- Table --}}
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="w-full text-left">

                    <thead class="border-b border-gray-200 bg-gray-50">
                        <tr>

                            <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                                #
                            </th>

                            <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                                Tanaman
                            </th>

                            <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                                Nama Ilmiah
                            </th>

                            <th class="px-6 py-4 text-sm font-semibold text-gray-700">
                                Dibuat
                            </th>

                            <th class="px-6 py-4 text-right text-sm font-semibold text-gray-700">
                                Aksi
                            </th>

                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        @forelse($plants as $plant)
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ $plants->firstItem() + $loop->index }}
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex items-center gap-3">

                                        @if ($plant->image)
                                            <img src="{{ asset('storage/' . $plant->image) }}"
                                                class="h-12 w-12 rounded-xl object-cover">
                                        @else
                                            <div
                                                class="flex h-12 w-12 items-center justify-center
                                                    rounded-xl bg-green-50 text-green-600">
                                                🌿
                                            </div>
                                        @endif

                                        <div>
                                            <p class="font-semibold text-gray-900">
                                                {{ $plant->name }}
                                            </p>
                                        </div>

                                    </div>

                                </td>

                                <td class="px-6 py-4 text-sm italic text-gray-600">
                                    {{ $plant->scientific_name ?: '-' }}
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ $plant->created_at->format('d M Y') }}
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex justify-end gap-2">

                                        <a href="{{ route('admin.plants.edit', $plant) }}"
                                            class="rounded-lg bg-blue-50 px-3 py-2
                                               text-sm font-medium text-blue-600
                                               hover:bg-blue-100">
                                            Edit
                                        </a>

                                        <form action="{{ route('admin.plants.destroy', $plant) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus tanaman ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="rounded-lg bg-red-50 px-3 py-2
                                                   text-sm font-medium text-red-600
                                                   hover:bg-red-100">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-sm text-gray-500">
                                    Belum ada data tanaman.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>


            {{-- Pagination --}}
            @if ($plants->hasPages())
                <div class="border-t border-gray-200 px-6 py-4">
                    {{ $plants->links() }}
                </div>
            @endif

        </div>

    </div>

@endsection
