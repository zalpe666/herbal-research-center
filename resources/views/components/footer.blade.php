<footer class="border-t border-green-900/20 bg-green-700 text-white">

    <div class="mx-auto max-w-7xl px-6">

        <div class="grid gap-10 py-12 md:grid-cols-2 lg:grid-cols-3">

            {{-- Brand --}}
            <div>

                <div class="flex items-center gap-3">

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white">

                        <img src="{{ asset('images/logo-uy.png') }}" alt="Logo Universitas YARSI"
                            class="h-7 w-7 object-contain">

                    </div>

                    <div>
                        <p class="text-sm font-bold tracking-wide">
                            UNIVERSITAS YARSI
                        </p>

                        <p class="text-xs text-green-200/70">
                            Herbal Research Center
                        </p>
                    </div>

                </div>

                <p class="mt-5 max-w-sm text-sm leading-relaxed text-green-100/70">
                    A center of excellence dedicated to herbal phytochemistry,
                    experimental medicine, and translational research.
                </p>

            </div>


            {{-- Navigation --}}
            <div>

                <h3 class="text-sm font-semibold tracking-wide text-white">
                    Navigation
                </h3>

                <div class="mt-5 space-y-3">

                    <a href="{{ url('/') }}" class="block text-sm text-green-100/70 transition hover:text-white">
                        Home
                    </a>

                    <a href="{{ route('about-us') }}"
                        class="block text-sm text-green-100/70 transition hover:text-white">
                        About Us
                    </a>

                    <a href="{{ route('herbal-garden.index') }}"
                        class="block text-sm text-green-100/70 transition hover:text-white">
                        Herbal Garden
                    </a>

                    <a href="{{ url('/#research') }}"
                        class="block text-sm text-green-100/70 transition hover:text-white">
                        Research
                    </a>

                </div>

            </div>


            {{-- Research --}}
            <div>

                <h3 class="text-sm font-semibold tracking-wide text-white">
                    Research Areas
                </h3>

                <div class="mt-5 space-y-3">

                    <div class="flex items-center gap-2 text-sm text-green-100/70">
                        <i class="ri-flask-line text-green-300"></i>
                        Phytochemistry Analysis
                    </div>

                    <div class="flex items-center gap-2 text-sm text-green-100/70">
                        <i class="ri-microscope-line text-green-300"></i>
                        Animal Model Research
                    </div>

                    <div class="flex items-center gap-2 text-sm text-green-100/70">
                        <i class="ri-dna-line text-green-300"></i>
                        Histology & Immunohistochemistry
                    </div>

                    <div class="flex items-center gap-2 text-sm text-green-100/70">
                        <i class="ri-team-line text-green-300"></i>
                        Collaboration
                    </div>

                </div>

            </div>

        </div>


        {{-- Bottom Footer --}}
        <div
            class="flex flex-col gap-3 border-t border-white/10 py-6 text-sm md:flex-row md:items-center md:justify-between">

            <p class="text-green-100/50">
                &copy; {{ date('Y') }} Herbal Research Center, Universitas YARSI.
            </p>

            <div class="flex items-center gap-5">

                <a href="#" class="text-green-100/50 transition hover:text-white" aria-label="Instagram">
                    <i class="ri-instagram-line text-lg"></i>
                </a>

                <a href="#" class="text-green-100/50 transition hover:text-white" aria-label="LinkedIn">
                    <i class="ri-linkedin-box-line text-lg"></i>
                </a>

                <a href="#" class="text-green-100/50 transition hover:text-white" aria-label="Email">
                    <i class="ri-mail-line text-lg"></i>
                </a>

            </div>

        </div>

    </div>

</footer>
