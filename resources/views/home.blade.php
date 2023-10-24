<x-app-layout>

    @include('layouts.header')

    <div class="max-w-7xl mx-auto flex flex-col space-y-12">
        <img src="{{ asset('images/wall.jpg') }}" alt="">

        <!-- ATTRACTIONS -->
        <section class="grid grid-cols-5 gap-3">
            <div class="col-span-5">
                <div class="text-4xl font-alex border-l-4 border-orange-500 pl-3">ATTRACTIONS</div>
            </div>
            <div class="col-span-5 md:col-span-1 shadow-md rounded-md overflow-hidden bg-pink-200">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('images/league.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white place-content-center">
                        <div class="text-2xl font-semibold text-center font-fig rounded-md">RESERVE A LANE</div>
                    </div>
                </div>
            </div>
            <div class="col-span-5 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('images/birthday.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white place-content-center">
                        <div class="text-2xl font-semibold text-center font-fig">BIRTHDAY PARTIES</div>
                    </div>
                </div>
            </div>
            <div class="col-span-5 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('images/glow.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white place-content-center">
                        <div class="text-2xl font-semibold text-center font-fig">CORPORATE EVENTS</div>
                    </div>
                </div>
            </div>
            <div class="col-span-5 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('images/pizza.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white place-content-center">
                        <div role="button" class="text-xl font-semibold text-center font-fig bg-gradient-to-r from-orange-300 to-orange-500 px-5 py-1 text-white hover:text-black rounded-lg">
                            <a href="{{ route('food') }}">OUR FOOD & BAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-5 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <div class="flex flex-col flex-wrap h-full">
                    <img src="{{ asset('images/glow.webp') }}" alt="">
                    <div class="flex flex-col flex-grow flex-wrap p-3 bg-white place-content-center">
                        <div class="text-2xl font-semibold text-center font-fig">WEEKEND GLOW BOWL</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EAT.DRINK.BOWL -->
        <div class="text-6xl text-center font-alex">
            <span class="text-black">EAT.</span>
            <span class="text-gray-400">DRINK.</span>
            <span class="text-orange-500">BOWL.</span>
        </div>

        <!-- OPEN BOWLING -->
        <section class="grid grid-cols-3 gap-3">
            <div class="col-span-3">
                <div class="text-4xl font-alex border-l-4 border-orange-500 pl-3">OPEN BOWLING</div>
            </div>
            <div class="col-span-1 flex flex-wrap place-content-center bg-white p-4 rounded-xl shadow-lg">
                <div class="flex flex-col space-y-8 w-full">
                    <div class="flex flex-row items-center">
                        <div class="text-2xl flex-grow">MONDAY</div>
                        <div class="text-gray-400">9AM to 9PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="text-2xl flex-grow">TUESDAY</div>
                        <div class="text-gray-400">5PM to 10PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="text-2xl flex-grow">WEDNESDAY</div>
                        <div class="text-gray-400">3PM to 9PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="text-2xl flex-grow">THURSDAY</div>
                        <div class="text-gray-400">9AM to 9PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="text-2xl flex-grow">FRIDAY</div>
                        <div class="text-gray-400">8AM to 12PM & 5PM to 11PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="text-2xl flex-grow">SATURDAY</div>
                        <div class="text-gray-400">10AM to 11PM</div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="text-2xl flex-grow">SUNDAY</div>
                        <div class="text-gray-400">12PM to 9PM</div>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <table class="w-full rounded-xl overflow-hidden shadow-lg">
                    <thead class="bg-gradient-to-r from-orange-300 to-orange-500 text-white">
                        <tr>
                            <th class="py-3 text-xl">BOWLING</th>
                            <th class="text-xl">GAME PRICE</th>
                            <th class="text-xl">HOURLY PRICE</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b border-gray-200">
                            <td class="py-3">MON-FRI OPEN BOWL</td>
                            <td>$5</td>
                            <td>$30/LANE</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="pt-3">ALL YOU CAN BOWL (2 HOURS)</td>
                            <td></td>
                            <td>$14/PERSON</td>
                        </tr>
                        <tr class="bg-gray-50 border-b border-gray-200">
                            <td colspan="4" class="italic text-gray-400 pb-3">Monday 5-9P / Wednesday 3-9P / Thursday 4-9P</td>
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
                            <td colspan="4" class="pb-3 italic text-gray-400">Includes 1 Lane for 2 hours + Shoes + Pizza</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="pt-3">BIRTHDAY PACKAGE</td>
                            <td></td>
                            <td>$60/Lane</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td colspan="4" class="pb-3 italic text-gray-400">Includes 1 Lane for an hour + Shoes + Pitcher of pop</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- EVENTS -->
        <section class="grid grid-cols-3 gap-3">
            <div class="col-span-3">
                <div class="text-4xl font-alex border-l-4 border-orange-500 pl-3">SPECIAL EVENTS</div>
            </div>

            @forelse ($events as $event)
                <div class="col-span-3 md:col-span-1 shadow-md rounded-md overflow-hidden">
                    <div class="flex flex-col">
                        <img src="{{ Str::of($event->images[0])->after('public/') }}" alt="" loading="lazy">
                        <div class="flex flex-col p-4 bg-white space-y-3">
                            <div class="text-2xl font-fig text-center font-bold uppercase">{{ $event->title }}</div>
                            <a role="button" href="/specials#{{ $event->slug }}" class="btn text-center">CLICK HERE FOR DETAILS</a>
                        </div>
                    </div>
                </div>
            @empty
                <div>NO EVENTS SCHEDULED!</div>
            @endforelse
        </section>

        <!-- FLYERS -->
        <section class="grid grid-cols-3 gap-3">
            <div class="col-span-3">
                <div class="text-4xl font-alex border-l-4 border-orange-500 pl-3">FEATURED FLYERS</div>
            </div>

            <div class="col-span-3 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('images/bowling-pass-flyer.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-3 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('images/birthday-flyer.jpg') }}" alt="" loading="lazy">
            </div>

            <div class="col-span-3 md:col-span-1 shadow-md rounded-md overflow-hidden">
                <img src="{{ asset('images/birthday-flyer.jpg') }}" alt="" loading="lazy">
            </div>
        </section>

        <!-- NEWSLETTER -->
        <livewire:newsletter/>
    </div>

</x-app-layout>