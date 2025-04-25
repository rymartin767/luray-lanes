<x-app-layout>

    @include('layouts.header')

    <div class="max-w-7xl mx-auto flex flex-col space-y-12">
        <img src="{{ asset('site-images/wall.jpg') }}" alt="">

        <!-- ATTRACTIONS -->
        <section class="grid grid-cols-5 px-6 lg:px-0 gap-3">
            <div class="col-span-5">
                <div class="section-title">ATTRACTIONS</div>
            </div>
            <div class="col-span-5 lg:col-span-1 shadow-md rounded-md overflow-hidden">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('site-images/birthday.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white dark:bg-gray-800 place-content-center">
                        <div role="button" class="btn p-1">
                            <a href="{{ route('birthdays') }}">BIRTHDAY PARTIES</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-5 lg:col-span-1 shadow-md rounded-md overflow-hidden">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('site-images/pizza.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white dark:bg-gray-800 place-content-center">
                        <div role="button" class="btn p-1">
                            <a href="{{ route('food') }}">OUR FOOD & BAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-5 lg:col-span-1 shadow-md rounded-md overflow-hidden">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('site-images/glow.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white dark:bg-gray-800 place-content-center">
                        <div role="button" class="btn p-1">
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
            <div class="col-span-3 italic">Summer hours start on April 28th and are subject to change due to our business needs.</div>
            <div class="col-span-3 grid grid-cols-3 gap-3">
                <!-- HOURS CARD -->
                <div class="col-span-3 lg:col-span-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 lg:text-2xl uppercase bg-orange-600 text-white rounded-t-md font-alex font-bold dark:text-white/90 text-center p-3 border-b-4 border-black">SPRING / SUMMER 2025 HOURS</h5>
                    <div class="flex flex-col space-y-2 py-3 px-6">
                        @foreach (config('general.hours') as $day => $hours)
                            <div class="flex justify-between items-center dark:text-white/90">
                                <div class="text-xl font-bold">{{ $day }}</div>
                                <div>{{ $hours }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @foreach ($bowling->groupBy('name') as $day => $bowling)
                    <!-- FLOW CARD -->
                    <div class="col-span-3 lg:col-span-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 lg:text-2xl uppercase bg-black text-white rounded-t-md font-alex font-bold dark:text-white/90 text-center p-3 border-b-4 border-orange-500">{{ $day }}</h5>
                        @foreach ($bowling as $model)
                            <div class="flex flex-col mb-4 py-3 px-6">
                                <div class="flex items-center space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current size-4 dark:text-orange-400"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <div class="font-alex font-semibold text-lg dark:text-white/90">{{ $model->hours[0] }}</div>
                                </div>
                                @foreach ($model->prices as $price)
                                    <div class="font-fig">
                                        <div class="pl-6 font-bold text-xl dark:text-white/80">
                                            {{ $price }}
                                        </div>
                                    </div>
                                @endforeach
                                <div class="pl-6 italic dark:text-white/50">{{ $model->description }}</div>
                            </div>
                        @endforeach
                    </div>
                    <!-- END FLOW CARD -->
                @endforeach
            </div>
        </section>

        <!-- EVENTS -->
        <section class="grid grid-cols-3 px-6 lg:px-0 gap-3">
            <div class="col-span-3">
                <div class="section-title">SPECIAL EVENTS</div>
            </div>

            @forelse ($events as $event)
                <div class="col-span-3 md:col-span-1 shadow-md rounded-md overflow-hidden">
                    <div class="flex flex-col">
                        <img src="{{ $event->awsUrl() }}" alt="" loading="lazy">
                        <div class="flex flex-col p-4 bg-white dark:bg-gray-800 space-y-3">
                            <div class="text-2xl font-fig text-center dark:text-white/80 font-bold uppercase">{{ $event->title }}</div>
                            <a role="button" href="/specials#{{ $event->slug }}" class="btn p-3">CLICK HERE FOR DETAILS</a>
                        </div>
                    </div>
                </div>
            @empty
                <div>NO EVENTS SCHEDULED!</div>
            @endforelse
        </section>

        <!-- FLYERS -->
        @include('flyers')

        <!-- NEWSLETTER -->
        <livewire:newsletter />
    </div>

</x-app-layout>