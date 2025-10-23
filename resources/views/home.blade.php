<x-app-layout>

    @include('layouts.header')

    <div class="max-w-7xl mx-auto flex flex-col space-y-12">
        <img src="{{ asset('site-images/wall.jpg') }}" alt="">

        <!-- ATTRACTIONS -->
        <section class="grid grid-cols-5 px-6 lg:px-0 gap-6">
            <div class="col-span-5">
                <div class="section-title">ATTRACTIONS</div>
            </div>
            <div class="col-span-5 lg:col-span-1 bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50 group">
                <div class="flex flex-col h-full">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('site-images/birthday.webp') }}" alt="" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="flex flex-col flex-grow p-6 place-content-center">
                        <div role="button" class="btn p-4 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 hover:from-orange-600 hover:via-orange-700 hover:to-orange-800 text-white font-bold text-center rounded-xl shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                            <a href="{{ route('birthdays') }}">BIRTHDAY PARTIES</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-5 lg:col-span-1 bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50 group">
                <div class="flex flex-col h-full">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('site-images/pizza.webp') }}" alt="" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="flex flex-col flex-grow p-6 place-content-center">
                        <div role="button" class="btn p-4 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 hover:from-orange-600 hover:via-orange-700 hover:to-orange-800 text-white font-bold text-center rounded-xl shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                            <a href="{{ route('food') }}">OUR FOOD & BAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-5 lg:col-span-1 bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50 group">
                <div class="flex flex-col h-full">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('site-images/glow.webp') }}" alt="" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="flex flex-col flex-grow p-6 place-content-center">
                        <div role="button" class="btn p-4 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 hover:from-orange-600 hover:via-orange-700 hover:to-orange-800 text-white font-bold text-center rounded-xl shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                            <a href="specials/#cosmic-glow-bowling">COSMIC BOWLING</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OPEN BOWLING -->
        <section class="grid grid-cols-3 px-6 lg:px-0 gap-3">
            <div class="col-span-3">
                <div class="section-title">OPEN BOWLING</div>
            </div>
            <div class="col-span-3 italic">Fall hours start on September 1st and are subject to change due to our business needs.</div>
            <div class="col-span-3 grid grid-cols-3 gap-3">
                <!-- HOURS CARD -->
                <div class="col-span-3 lg:col-span-1 bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50">
                    <!-- Header with gradient -->
                    <div class="relative bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 p-6 overflow-hidden">
                        <!-- Decorative circles -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-black/10 rounded-full -ml-12 -mb-12"></div>

                        <div class="relative z-10">
                            <!-- Icon -->
                            <div class="flex justify-center mb-3">
                                <div class="bg-white/20 backdrop-blur-sm rounded-full p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current text-white size-8">
                                        <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                </div>
                            </div>
                            <h5 class="text-2xl lg:text-3xl uppercase text-white text-center font-alex font-bold tracking-wide">
                                Fall 2025 Hours
                            </h5>
                        </div>
                    </div>

                    <!-- Hours list -->
                    <div class="p-6 space-y-3">
                        @foreach (config('general.hours') as $day => $hours)
                            <div class="flex justify-between items-center p-3 rounded-xl bg-white dark:bg-gray-800 hover:bg-orange-50 dark:hover:bg-gray-700/50 transition-colors duration-200 border border-gray-100 dark:border-gray-700">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 rounded-full bg-gradient-to-r from-orange-400 to-orange-600"></div>
                                    <div class="text-lg font-bold text-gray-800 dark:text-white/90">{{ $day }}</div>
                                </div>
                                <div class="text-gray-600 dark:text-white/70 font-medium">{{ $hours }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @php
                    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                    $sortedBowling = $bowling->groupBy('name')->sortBy(function($item, $key) use ($daysOfWeek) {
                        return array_search($key, $daysOfWeek);
                    });
                @endphp
                @foreach ($sortedBowling as $day => $bowling)
                    <!-- FLOW CARD -->
                    <div class="col-span-3 lg:col-span-1 bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50">
                        <!-- Header with gradient -->
                        <div class="relative bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 p-6 overflow-hidden">
                            <!-- Decorative circles -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-black/10 rounded-full -ml-12 -mb-12"></div>

                            <div class="relative z-10">
                                <!-- Icon -->
                                <div class="flex justify-center mb-3">
                                    <div class="bg-white/20 backdrop-blur-sm rounded-full p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current text-white size-8">
                                            <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                        </svg>
                                    </div>
                                </div>
                                <h5 class="text-2xl lg:text-3xl uppercase text-white text-center font-alex font-bold tracking-wide">
                                    {{ $day }}
                                </h5>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 space-y-4">
                            @foreach ($bowling as $model)
                                <div class="p-4 rounded-xl bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <div class="w-2 h-2 rounded-full bg-gradient-to-r from-orange-400 to-orange-600"></div>
                                        <div class="font-alex font-semibold text-lg dark:text-white/90">{{ $model->hours[0] }}</div>
                                    </div>
                                    @foreach ($model->prices as $price)
                                        <div class="font-fig pl-5 font-bold text-xl dark:text-white/80 mb-2">
                                            {{ $price }}
                                        </div>
                                    @endforeach
                                    <div class="pl-5 italic text-gray-600 dark:text-white/50">{{ $model->description }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- END FLOW CARD -->
                @endforeach
            </div>
        </section>

        <!-- EVENTS -->
        <section class="grid grid-cols-3 px-6 lg:px-0 gap-6">
            <div class="col-span-3">
                <div class="section-title">SPECIAL EVENTS</div>
            </div>

            @forelse ($events as $event)
                <div class="col-span-3 md:col-span-1 bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50 group">
                    <div class="flex flex-col h-full">
                        <div class="relative overflow-hidden">
                            <img src="{{ $event->awsUrl() }}" alt="" loading="lazy" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <!-- Event Title Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <div class="text-2xl lg:text-3xl font-fig font-bold text-white drop-shadow-lg">{{ $event->title }}</div>
                            </div>
                        </div>
                        <div class="flex flex-col flex-grow p-6 place-content-center">
                            <a role="button" href="/specials#{{ $event->slug }}" class="btn p-4 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 hover:from-orange-600 hover:via-orange-700 hover:to-orange-800 text-white font-bold text-center rounded-xl shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                                CLICK HERE FOR DETAILS
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center p-8 bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50">
                    <div class="text-2xl font-alex font-bold text-gray-400 dark:text-gray-500">NO EVENTS SCHEDULED!</div>
                </div>
            @endforelse
        </section>

        <!-- FLYERS -->
        @include('flyers')

        <!-- NEWSLETTER -->
        <livewire:newsletter />
    </div>

</x-app-layout>