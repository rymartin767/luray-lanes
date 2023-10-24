<x-app-layout>
    <div class="py-12 max-w-5xl mx-auto space-y-10">

        <div class="flex flex-col">
            <div class="text-4xl font-bold text-center font-alex tracking-wide">BROWSE OUR</div>
            <div class="text-8xl font-bangers text-center text-purple-400">SPECIALS & EVENTS</div>
            <img src="{{ asset('images/glow.webp') }}" alt="" class="mt-6 rounded-md">
        </div>

        @foreach ($events as $event)
            <section class="">
                <div id="{{ $event->slug }}" class="grid grid-cols-4 gap-3">
                    <div class="col-span-4">
                        <div class="text-4xl font-bold text-center font-alex tracking-wide">{{ $event->title }}</div>
                    </div>
                    <div class="col-span-4 md:col-span-1 mt-3">
                        <div class="flex flex-col text-center border-4 border-purple-600 p-8">
                            <div class="font-alex uppercase text-3xl">All you can play</div>
                            <div class="uppercase text-pink-500">Create the perfect day</div>
                            <div class="mt-3 text-xl">Starting at $11.99</div>
                            <button class="mt-4 bg-purple-600 text-white p-3 rounded-sm">LEARN MORE</button>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-3 mt-3">
                        <div x-data="{ selected: null }" class="border border-gray-200 rounded-lg" class="p-3">
                            <!-- The accordion items -->
                            <div class="[&>*]:border-b [&>*]:border-b-gray-200 last:[&>*]:border-b-0 bg-white rounded-md">
                                <!-- Accordion item 1 -->
                                @foreach ($event->faqs as $faq)
                                    <div>
                                        <!-- The button that toggles the accordion item -->
                                        <button @click="selected !== {{ $faq->id }} ? selected = {{ $faq->id }} : selected = null" class="w-full flex justify-between items-center p-3 ">
                                            <!-- The title of the accordion item -->
                                            <h3 class="text-sm font-semibold">{{ $faq->question }}</h3>
                                            <!-- The icon that indicates whether the accordion item is expanded or collapsed -->
                                            <div>
                                                <span class="text-lg transition-all block" :class="selected === {{ $faq->id }} ? 'rotate-45' : ''">+</span>
                                            </div>
                                        </button>
                                        <div x-cloak x-show="selected === {{ $faq->id }}" class="text-sm text-black/50 p-3" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

    </div>
</x-app-layout>