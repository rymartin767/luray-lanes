<x-app-layout>

    @include('layouts.header')

    <div class="max-w-7xl mx-auto flex flex-col space-y-12">
        <img src="{{ asset('site-images/wall.jpg') }}" alt="">

        <!-- ATTRACTIONS -->
        <section class="grid grid-cols-5 px-6 lg:px-0 gap-3">
            <div class="col-span-5">
                <div class="section-title">ATTRACTIONS</div>
            </div>
            <div class="col-span-5 lg:col-span-1 shadow-md dark:shadow-none rounded-md overflow-hidden">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('site-images/league.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white dark:bg-gray-800 place-content-center">
                        <div role="button" class="btn p-1">
                            <a href="{{ route('reservations') }}">RESERVE A LANE</a>
                        </div>
                    </div>
                </div>
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
            <div class="col-span-3 grid grid-cols-3 gap-3">
                <!-- BOWLING -->
                <!-- HOURS CARD -->
                <div class="col-span-3 lg:col-span-1 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-xl font-bold text-white dark:text-gray-400 bg-black rounded-md p-3">SUMMER HOURS</h5>
                    <div class="flex flex-col space-y-2">
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-bold">MONDAY</div>
                            <div>CLOSED</div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-bold">TUESDAY</div>
                            <div class="text-sm lg:text-base">6PM - 9PM</div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-bold">WEDNESDAY</div>
                            <div class="text-sm lg:text-base">CLOSED</div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-bold">THURSDAY</div>
                            <div class="text-sm lg:text-base">9AM to 1PM & 5PM to 9PM</div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-bold">FRIDAY</div>
                            <div class="text-sm lg:text-base">6PM - 9PM</div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-bold">SATURDAY</div>
                            <div class="text-sm lg:text-base">4PM - 9PM</div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-bold">SUNDAY</div>
                            <div class="text-sm lg:text-base">6PM - 9PM</div>
                        </div>
                    </div>
                </div>
                @foreach ($bowling as $bowl)
                <!-- FLOW CARD -->
                <div class="col-span-3 lg:col-span-1 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 lg:text-xl font-bold text-white dark:text-gray-400 bg-orange-500 rounded-md p-3">{{ $bowl->name }}</h5>
                    @foreach ($bowl->prices as $price)
                    <div class="flex items-baseline text-gray-900 dark:text-white mb-4">
                        <span class="text-3xl font-semibold">$</span>
                        <span class="text-5xl font-extrabold tracking-tight">{{ Str::of($price)->after('$')->before('/') }}</span>
                        <span class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">/{{ Str::of($price)->after('/') }}</span>
                    </div>
                    @endforeach

                    <ul role="list" class="space-y-5 my-7">
                        @forelse ($bowl->hours as $time)
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current size-4 text-blue-500"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $time }}</span>
                        </li>
                        @empty
                        <li></li>
                        @endforelse

                        @if (! is_null($bowl->description))
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current size-4 text-blue-500"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM240 80a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM208 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm-64-64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $bowl->description }}</span>
                        </li>
                        @endif
                    </ul>
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
                        <div class="text-2xl font-fig text-center dark:text-gray-400 font-bold uppercase">{{ $event->title }}</div>
                        <a role="button" href="/specials#{{ $event->slug }}" class="btn p-3">CLICK HERE FOR DETAILS</a>
                    </div>
                </div>
            </div>
            @empty
            <div>NO EVENTS SCHEDULED!</div>
            @endforelse
        </section>

        <!-- FLYERS -->
        <section class="grid grid-cols-4 px-6 lg:px-0 gap-3">
            <div class="col-span-4">
                <div class="section-title">FEATURED FLYERS</div>
            </div>

            <div class="hidden lg:block col-span-4 my-3 bg-white dark:bg-gray-800 rounded-lg py-3 border border-gray-50 shadow-sm">
                <div class="text-6xl text-center font-alex">
                    <span class="text-black dark:text-gray-900">EAT.</span>
                    <span class="text-gray-400">DRINK.</span>
                    <span class="text-orange-500">BOWL.</span>
                </div>
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/bowling-pass-flyer.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/buckets.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/birthday-flyer.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/senior-special-flyer.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/all-you-can-bowl-summer-2024.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/family-bowl.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/cosmic-flyer-2024.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/sipper.jpg') }}" alt="" loading="lazy">
            </div>
        </section>

        <!-- NEWSLETTER -->
        <livewire:newsletter />
    </div>

</x-app-layout>