<x-app-layout>
    <div class="py-12 max-w-5xl mx-auto space-y-10">

        <div class="flex flex-col">
            <div class="text-2xl lg:text-4xl font-bold text-center font-alex tracking-wide dark:text-gray-400">BROWSE OUR</div>
            <div class="text-6xl lg:text-8xl font-bangers text-center text-orange-500">FULL MENU & BAR</div>
        </div>

        <section class="px-6 lg:px-0">
            <div class="grid grid-cols-2 gap-3 mt-8">
                <div class="col-span-2 lg:col-span-1 flex flex-col h-full space-y-2">
                    <!-- COUNTER BAR -->
                    <div class="p-3 h-40 lg:h-1/2 rounded-md" style="background-image: url('site-images/bar.jpg');">

                        <!-- BAR MODAL START -->
                        <div x-data="{ show: false }">

                            <!-- Modal toggle -->
                            <button type="button" @click="show = true" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-orange-500 bg-white hover:bg-orange-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600" type="button">
                                SNACK COUNTER | BAR
                            </button>

                            <!-- Main modal -->
                            <div x-show="show" x-transition.opacity class="fixed top-0 left-0 right-0 z-50 bg-gray-700 bg-opacity-75 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 max-h-full">
                                <div class="relative w-full max-w-2xl mx-auto max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Snack Counter | Bar
                                            </h3>
                                            <button type="button" @click="show=false" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <div class="p-6 space-y-6">
                                            <div>
                                                <div class="text-2xl font-bold underline">BEER</div>
                                                <ul class="text-gray-500">
                                                    <li>Cans of Beer | $2.50</li>
                                                    <li>Bottles of Beer | $3 - $4</li>
                                                    <li>Standard Bucket | $14</li>
                                                    <li>Specialty Bucket | $18</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="text-2xl font-bold underline">LIQUOR</div>
                                                <ul class="text-gray-500">
                                                    <li>Wine Coolers | $4</li>
                                                    <li>Shots | $4</li>
                                                    <li>Mixed Drinks | $5.57</li>
                                                    <li>Mixed Drinks (Double Shot) | $8</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button @click="show=false" data-modal-hide="defaultModal" type="button" class="text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-500">CLOSE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- BAR MODAL END -->

                    </div>

                    <!-- GIONINO PIZZA -->
                    <div class="p-3 h-40 lg:h-1/2 rounded-md" style="background-image: url('site-images/pizza.webp');">

                        <!-- GIONINOS MODAL START -->
                        <div x-data="{ show: false }">

                            <!-- Modal toggle -->
                            <button type="button" @click="show = true" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-orange-500 bg-white hover:bg-orange-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600" type="button">
                                GIONINO'S PIZZA
                            </button>

                            <!-- Main modal -->
                            <div x-show="show" x-transition.opacity class="fixed top-0 left-0 right-0 z-50 bg-gray-700 bg-opacity-75 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 max-h-full">
                                <div class="relative w-full max-w-2xl mx-auto max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Gionino's Pizza
                                            </h3>
                                            <button type="button" @click="show=false" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-3">
                                            <div class="flex flex-col space-y-4">
                                                <div class="text-xl font-bold">
                                                    Pizza, Subs, Wings, & More!
                                                </div>
                                                <div>
                                                    Full menu available including pizza, subs, salads, wings, and more. Place your order with the front desk. A $3 delivery fee will be added to all orders.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button @click="show=false" data-modal-hide="defaultModal" type="button" class="text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">CLOSE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- GIONINO MODAL END -->

                    </div>
                    
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <img src="{{ asset('site-images/2025-menu.jpg') }}" alt="" class="rounded-md">
                </div>
                <div class="col-span-2">
                    <div class="grid grid-cols-4 gap-3">
                        <div class="col-span-1">
                            <img src="{{ asset('site-images/beers.webp') }}" alt="" class="rounded-md">
                        </div>
                        <div class="col-span-1">
                            <img src="{{ asset('site-images/stix.jpg') }}" alt="" class="rounded-md">
                        </div>
                        <div class="col-span-1">
                            <img src="{{ asset('site-images/fries.jpg') }}" alt="" class="rounded-md">
                        </div>
                        <div class="col-span-1">
                            <img src="{{ asset('site-images/burger.jpg') }}" alt="" class="rounded-md">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FLYERS -->
         @include('flyers')
            
    </div>
</x-app-layout>