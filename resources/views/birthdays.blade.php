<x-app-layout>
    <div class="py-12 max-w-5xl mx-auto space-y-10">

        <div class="flex flex-col">
            <div class="text-4xl font-bold text-center font-alex tracking-wide">EASY FOR PARENTS</div>
            <div class="text-8xl font-bangers text-center text-purple-400">AWESOME FOR KIDS</div>
            <img src="{{ asset('site-images/jumbo-birthday.webp') }}" alt="" class="mt-6 rounded-md">
        </div>
    
        <section>
            <div class="grid grid-cols-4 gap-3">
                <div class="col-span-4">
                    <div class="text-4xl font-bold text-center font-alex tracking-wide">BIRTHDAY DETAILS</div>
                </div>
                <div class="col-span-4 md:col-span-1 mt-6 bg-white border-4 border-purple-600 rounded-xl shadow-lg">
                    <div class="flex flex-col text-center p-6">
                        <div class="font-alex uppercase text-xl">Birthday Bowling Pins</div>
                        <div class="uppercase text-pink-500">GIFT ITEMS</div>
                        
                        <div class="text-xl">$18</div>
                    </div>
                </div>
                <div class="col-span-4 md:col-span-2 mt-6 bg-white border-4 border-purple-600 rounded-xl shadow-lg">
                    <div class="flex flex-col text-center p-6">
                        <div class="font-alex uppercase text-3xl">The "Strike" Package</div>
                        <div class="uppercase text-pink-500">Create the perfect day</div>
                        <ul class="py-4 list-inside list-disc">
                            <li>One Lane for 1 Hour of bowling</li>
                            <li>Maximum 6 Bowlers per lane</li>
                            <li>Rental Shoes</li>
                            <li>One Pitcher of soda</li>
                        </ul>
                        <div class="text-3xl text-pink-500">ALL FOR ONLY $60!</div>
                    </div>
                </div>
                <div class="col-span-4 md:col-span-1 mt-6 bg-white border-4 border-purple-600 rounded-xl shadow-lg">
                    <div class="flex flex-col text-center p-6">
                        <div class="font-alex uppercase text-xl">Pin Sipper Cup</div>
                        <div class="uppercase text-pink-500">GIFT ITEMS</div>
                        
                        <div class="text-xl">$8.50 Each (Empty)</div>
                        <div class="text-xl">$9.50 Each (w/Soda)</div>
                    </div>
                </div>
            </div>
            

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
                        'answer' => 'We will place the food order on your behalf. Just advise us of your order upon arrival. No coupons are accepted.'
                    ],
                ];
            @endphp

            <div class="max-w-5xl mx-auto p-4">
                <div x-data="{ selected: null }" class="border border-gray-200 rounded-lg" class="p-3">
                    <!-- The accordion items -->
                    <div class="[&>*]:border-b [&>*]:border-b-gray-200 last:[&>*]:border-b-0 bg-white rounded-md">
                        <!-- Accordion item 1 -->
                        @foreach ($faqs as $k => $v)
                        <div>
                            <!-- The button that toggles the accordion item -->
                            <button @click="selected !== {{ $k }} ? selected = {{ $k }} : selected = null" class="w-full flex justify-between items-center p-3 ">
                                <!-- The title of the accordion item -->
                                <h3 class="text-base">{{ $v['question'] }}</h3>
                                <!-- The icon that indicates whether the accordion item is expanded or collapsed -->
                                <div>
                                    <span class="text-lg transition-all block" :class="selected === {{ $k }} ? 'rotate-45' : ''">+</span>
                                </div>
                            </button>
                            <div x-cloak x-show="selected === {{ $k }}" class="text-lg text-black/50 p-3" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95">
                                {{ $v['answer']}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- ACCORDION END -->
        </section>

    </div>
</x-app-layout>