<x-app-layout>

    @include('layouts.header')

    <div class="max-w-7xl mx-auto flex flex-col space-y-12">
        <img src="{{ asset('site-images/wall.jpg') }}" alt="">

        <!-- ATTRACTIONS -->
        <section class="grid grid-cols-5 px-6 lg:px-0 gap-3">
            <div class="col-span-5">
                <div class="section-title">ATTRACTIONS</div>
            </div>
            <div class="col-span-5 lg:col-span-1 shadow-md dark:shadow-none rounded-md overflow-hidden bg-pink-200">
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
            <div class="col-span-3 lg:col-span-1 flex flex-wrap place-content-center bg-white dark:bg-gray-800 p-4 rounded-xl shadow-lg">
                <div class="flex flex-col space-y-8 w-full">
                    <div class="flex flex-row items-center">
                        <div class="lg:text-2xl flex-grow dark:text-gray-50">MONDAY</div>
                        <div class="text-sm lg:text-base text-gray-400">9AM to 9PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="lg:text-2xl flex-grow dark:text-gray-50">TUESDAY</div>
                        <div class="text-sm lg:text-base text-gray-400">5PM to 10PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="lg:text-2xl flex-grow dark:text-gray-50">WEDNESDAY</div>
                        <div class="text-sm lg:text-base text-gray-400">3PM to 9PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="lg:text-2xl flex-grow dark:text-gray-50">THURSDAY</div>
                        <div class="text-sm lg:text-base text-gray-400">9AM to 9PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="lg:text-2xl flex-grow dark:text-gray-50">FRIDAY</div>
                        <div class="text-sm lg:text-base text-gray-400">8AM to 12PM & 5PM to 11PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="lg:text-2xl flex-grow dark:text-gray-50">SATURDAY</div>
                        <div class="text-sm lg:text-base text-gray-400">10AM to 11PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="lg:text-2xl flex-grow dark:text-gray-50">SUNDAY</div>
                        <div class="text-sm lg:text-base text-gray-400">12PM to 9PM</div>
                    </div>
                </div>
            </div>
            <div class="col-span-3 lg:col-span-2">
                <!-- DESKTOP TABLE -->
                <div class="hidden lg:block">
                    <table class="w-full rounded-xl overflow-hidden shadow-lg">
                        <thead class="bg-gradient-to-r from-orange-300 to-orange-500 text-white">
                            <tr class="">
                                <th class="py-6 lg:py-4 text-sm lg:text-xl">BOWLING</th>
                                <th class="text-sm lg:text-xl">GAME PRICE</th>
                                <th class="text-sm lg:text-xl">HOURLY PRICE</th>
                            </tr>
                        </thead>
                        <tbody class="text-center text-sm">
                            <tr class="bg-white border-b border-gray-200">
                                <td class="p-3">MON-FRI OPEN BOWL</td>
                                <td>$5</td>
                                <td>$30/LANE</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="pt-3 px-3">ALL YOU CAN BOWL FOR 2 HOURS</td>
                                <td></td>
                                <td>$14/PERSON</td>
                            </tr>
                            <tr class="bg-gray-50 border-b border-gray-200">
                                <td colspan="4" class="italic text-gray-400 py-3">Monday 5-9P / Wednesday 3-9P / Thursday 4-9P</td>
                            </tr>
                            <tr class="bg-white border-b border-gray-200">
                                <td class="py-3">THURSDAY SENIOR SPECIAL</td>
                                <td>$9</td>
                                <td></td>
                            </tr>
                            <tr class="bg-gray-50 border-b border-gray-200">
                                <td class="py-3">FRIDAY & SATURDAY COSMIC BOWL</td>
                                <td>$5</td>
                                <td>$30/Lane</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="pt-3">SUNDAY FAMILY FUN DAY</td>
                                <td></td>
                                <td>$65/Lane</td>
                            </tr>
                            <tr class="bg-white border-b border-gray-200">
                                <td colspan="4" class="py-3 italic text-gray-400">Includes 1 Lane for 2 hours + Shoes + Pizza</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="pt-3">BIRTHDAY PACKAGE</td>
                                <td></td>
                                <td>$60/Lane</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td colspan="4" class="py-3 italic text-gray-400">Includes 1 Lane for an hour + Shoes + Pitcher of pop</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- MOBILE -->
                <div class="block lg:hidden">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="col-span-2 bg-white shadow-md rounded-lg p-3 text-center">
                            <div class="text-xl text-orange-500 font-bold font-alex mb-3">MON-FRI OPEN BOWLING</div>
                            <div>$5/GAME</div>
                            <div>$30/LANE PER HOUR</div>
                        </div>
                        <div class="col-span-2 bg-white shadow-md rounded-lg p-3 text-center">
                            <div class="text-xl text-orange-500 font-bold font-alex">ALL YOU CAN BOWL</div>
                            <div class="text-xl text-orange-500 font-bold font-alex mb-3">2 HOURS</div>
                            <div>$14/PER PERSON</div>
                            <div class="text-xs italic text-gray-500">Monday 5-9P / Wednesday 3-9P / Thursday 4-9P</div>
                        </div>
                    </div>
                </div>
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
                <img src="{{ asset('site-images/all-you-can-bowl-flyer.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/family-fun-day-flyer.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/cosmic-flyer.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('site-images/sipper.jpg') }}" alt="" loading="lazy">
            </div>
        </section>

        <!-- NEWSLETTER -->
        <livewire:newsletter />
    </div>

</x-app-layout>