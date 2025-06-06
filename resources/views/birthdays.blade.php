<x-app-layout>
    <div class="py-12 max-w-5xl mx-auto space-y-10">

        <div class="flex flex-col">
            <div class="text-2xl lg:text-4xl font-bold text-center font-alex tracking-wide dark:text-gray-400">EASY FOR PARENTS</div>
            <div class="text-6xl lg:text-8xl font-bangers text-center text-purple-400">AWESOME FOR KIDS</div>
            <img src="{{ asset('site-images/jumbo-birthday.webp') }}" alt="" class="mt-6 rounded-md">
        </div>
    
        <section class="px-6 lg:px-0">
            <div class="grid grid-cols-4 gap-3">
                <div class="col-span-4">
                    <div class="text-3xl lg:text-4xl font-bold text-center font-alex dark:text-gray-50">BIRTHDAY DETAILS</div>
                </div>
                <div class="col-span-4 md:col-span-1 mt-6 bg-white dark:bg-gray-700 rounded-xl shadow-lg">
                    <div class="flex flex-col text-center p-6">
                        <div class="font-alex uppercase text-xl dark:text-gray-50">Birthday Bowling Pins</div>
                        <div class="uppercase text-orange-500">GIFT ITEMS</div>
                        
                        <div class="text-xl dark:text-gray-50">$18</div>
                    </div>
                </div>
                <div class="flex flex-wrap content-center col-span-4 md:col-span-2 mt-6 bg-white dark:bg-gray-700 rounded-xl shadow-lg p-2">
                    <div class="flex flex-col text-center p-6 w-full">
                        <div class="font-alex uppercase text-4xl dark:text-gray-50">The "Strike" Package</div>
                        <div class="uppercase text-orange-500">Create the perfect day</div>
                        <ul class="py-4 list-inside list-disc dark:text-gray-50">
                            <li>One Lane for 2 Hours of bowling</li>
                            <li>Maximum 7 Bowlers per lane</li>
                            <li>Rental Shoes</li>
                            <li>One Pitcher of soda</li>
                        </ul>
                        <div class="text-3xl text-orange-500 font-bold">ALL FOR</div>
                        <div class="text-8xl text-orange-500 font-bold">$100!</div>
                    </div>
                </div>
                <div class="col-span-4 md:col-span-1 mt-6 bg-white dark:bg-gray-700 rounded-xl shadow-lg">
                    <div class="flex flex-col text-center p-6">
                        <div class="font-alex uppercase text-xl dark:text-gray-50 mb-2">Pin Sipper Cup</div>
                        <img src="{{ asset('site-images/sipper.webp') }}" alt="" class="mb-2 rounded-md shadow-sm" loading="lazy">
                        <div class="uppercase text-orange-500">GIFT ITEMS</div>
                        <div class="text-sm italic text-gray-400 dark:text-white/80">$9.00 Each (Empty)</div>
                        <div class="text-sm italic text-gray-400 dark:text-white/80">$10.00 Each (w/Soda)</div>
                    </div>
                </div>
            </div>
        </section>
            

        <!-- FAQ & ACCORDION -->
        @php
            $faqs = [
                1 => [
                    'question' => 'Can our party bumper bowl?',
                    'answer' => 'Yes! Bumpers are available at no extra charge.'
                ],
                2 => [
                    'question' => 'How much does additional time cost?',
                    'answer' => 'Each additional hour of bowling is $35/hour per lane.'
                ],
                3 => [
                    'question' => 'What do we need to bring?',
                    'answer' => 'Please bring your own plates, napkins, cups, and silverware.'
                ],
                4 => [
                    'question' => 'What party items can\'t we bring in?',
                    'answer' => 'Please do not bring silly string, glitter, confetti, or pinatas for parties.'
                ],
                5 => [
                    'question' => 'Is outside food permitted for our party?',
                    'answer' => 'Only desserts (cake & ice cream, etc.) are permitted. All other food and drinks must be purchased at the center. Gionino\'s restaurant menu is available at their menu price plus a $3 delivery fee.'
                ],
                6 => [
                    'question' => 'How are Gionino\'s pizza orders handled?',
                    'answer' => 'We will place the food order on your behalf. We kindly ask for your order at least 24 hours in advance. No coupons are accepted.'
                ],
            ];
        @endphp

        <section class="px-6 lg:px-0">
            <div x-data="{ selected: null }" class="border border-gray-200 rounded-lg" class="p-3">
                <!-- The accordion items -->
                <div class="[&>*]:border-b [&>*]:border-b-gray-200 last:[&>*]:border-b-0 bg-white rounded-md">
                    <!-- Accordion item 1 -->
                    @foreach ($faqs as $k => $v)
                    <div>
                        <!-- The button that toggles the accordion item -->
                        <button @click="selected !== {{ $k }} ? selected = {{ $k }} : selected = null" class="faq-button">
                            <!-- The title of the accordion item -->
                            <div class="text-sm lg:text-base">{{ $v['question'] }}</div>
                            <!-- The icon that indicates whether the accordion item is expanded or collapsed -->
                            <div>
                                <span class="text-lg transition-all block" :class="selected === {{ $k }} ? 'rotate-45' : ''">+</span>
                            </div>
                        </button>
                        <div x-cloak x-show="selected === {{ $k }}" class="faq-answer" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95">
                            {{ $v['answer']}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ACCORDION END -->

    </div>
</x-app-layout>