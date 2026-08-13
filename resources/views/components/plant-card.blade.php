<a href="{{ route('herbal-garden.show', $plant->slug) }}"
    class="group overflow-hidden rounded-2xl
           border border-gray-200 bg-white
           shadow-sm transition duration-300
           hover:-translate-y-1
           hover:border-green-200
           hover:shadow-xl">

    {{-- Image --}}
    <div class="relative aspect-[4/3] overflow-hidden bg-green-50">

        @if ($plant->image)
            <img src="{{ asset('storage/' . $plant->image) }}" alt="{{ $plant->name }}" loading="lazy"
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


        {{-- Overlay --}}
        <div
            class="absolute inset-0 bg-gradient-to-t
                   from-black/40 via-transparent to-transparent
                   opacity-0 transition
                   group-hover:opacity-100">
        </div>


        {{-- Arrow --}}
        <div
            class="absolute bottom-4 right-4 flex h-9 w-9
                   translate-y-3 items-center justify-center
                   rounded-full bg-white text-green-700
                   opacity-0 shadow-lg transition
                   group-hover:translate-y-0
                   group-hover:opacity-100">

            <i class="ri-arrow-right-line"></i>

        </div>

    </div>


    {{-- Content --}}
    <div class="p-5">

        <div class="flex items-start justify-between gap-3">

            <div class="min-w-0">

                <h3
                    class="truncate text-lg font-bold
                           text-gray-900
                           group-hover:text-green-700">

                    {{ $plant->name }}

                </h3>


                @if ($plant->scientific_name)
                    <p class="mt-1 truncate text-sm italic
                               text-gray-500">

                        {{ $plant->scientific_name }}

                    </p>
                @endif

            </div>


            <span
                class="flex h-9 w-9 shrink-0 items-center
                       justify-center rounded-full
                       bg-green-50 text-green-700">

                <i class="ri-leaf-line"></i>

            </span>

        </div>


        {{-- Khasiat --}}
        @if ($plant->benefits)
            <div class="mt-4 border-t border-gray-100 pt-4">

                <p class="text-xs font-semibold uppercase
                           tracking-wider text-gray-400">

                    Khasiat

                </p>


                <div class="mt-1 line-clamp-2 text-sm
                           leading-6 text-gray-600">

                    {!! strip_tags($plant->benefits) !!}

                </div>

            </div>
        @endif


        {{-- Detail --}}
        <div class="mt-5 flex items-center justify-between
                   text-sm font-semibold text-green-700">

            <span>
                Lihat detail
            </span>

            <i class="ri-arrow-right-line transition
                       group-hover:translate-x-1">
            </i>

        </div>

    </div>

</a>
