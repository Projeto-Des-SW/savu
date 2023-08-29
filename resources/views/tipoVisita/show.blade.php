<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tipo de Visita') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="flex flex-row max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
            <div class="max-w-2xl mx-auto">
                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        @foreach ($tipoVisita->fotos as $foto)
							<div class="hidden duration-700 ease-in-out" data-carousel-item>
								<span
									class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
									Slide</span>
								<img src="{{  asset('storage/'.$foto->path) }}"
									class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
									alt="...">
							</div>
						@endforeach
                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
						@foreach ($tipoVisita->fotos as $foto)
							<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
							data-carousel-slide-to="0"></button>
						@endforeach
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>

                <p class="mt-5">This carousel slider component is part of a larger, open-source library of Tailwind
                    CSS components. Learn
                    more
                    by going to the official <a class="text-blue-600 hover:underline"
                        href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite
                        Documentation</a>.
                </p>
                <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
            </div>
        </div>
    </div>

</x-app-layout>
