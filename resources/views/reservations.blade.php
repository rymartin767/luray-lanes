<x-app-layout>
    <section class="py-12">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col">
                <div class="text-2xl lg:text-4xl font-bold text-center font-alex tracking-wide dark:text-gray-400">EASY ONLINE</div>
                <div class="text-6xl lg:text-8xl font-bangers text-center text-orange-500">RESERVATIONS</div>
                <img src="{{ asset('site-images/reservations.jpg') }}" alt="" class="mt-6 rounded-md">
            </div>

            <div class="text-center p-3 mt-6">
                <!-- <a role="button" href="https://www.mybowlingpassport.com/2548/7389/book" target="_blank" class="btn">CLICK HERE TO MAKE A RESERVATION</a> -->
                <a role="button" href="" class="btn p-3">ONLINE RESERVATIONS - COMING SOON!</a>
            </div>

            @php
                $faqs = collect([
                    ['id' => 1, 'question' => 'When can I make an online reservation?', 'answer' => 'We expect online reservations to be available in Fall 2024'],
                ]);
            @endphp

            <div class="p-4">
                <div x-data="{ selected: null }" class="border border-gray-200 rounded-lg" class="p-3">
                    <!-- The accordion items -->
                    <div class="[&>*]:border-b [&>*]:border-b-gray-200 last:[&>*]:border-b-0 rounded-md">
                        <!-- Accordion item 1 -->
                        @forelse ($faqs as $faq)
                            <div class="bg-white dark:bg-gray-600 rounded-md">
                                <!-- The button that toggles the accordion item -->
                                <button @click="selected !== {{ $faq['id'] }} ? selected = {{ $faq['id'] }} : selected = null" class="faq-button">
                                    <!-- The title of the accordion item -->
                                    <h3 class="text-base">{{ $faq['question'] }}</h3>
                                    <!-- The icon that indicates whether the accordion item is expanded or collapsed -->
                                    <div>
                                        <span class="text-lg transition-all block" :class="selected === {{ $faq['id'] }} ? 'rotate-45' : ''">+</span>
                                    </div>
                                </button>
                                <div x-cloak x-show="selected === {{ $faq['id'] }}" class="faq-answer" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95">
                                    {{ $faq['answer'] }}
                                </div>
                            </div>
                        @empty
                            <div>NO FAQ AVAILABLE</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>