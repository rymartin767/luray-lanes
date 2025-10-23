<x-app-layout>
    <div class="py-12 max-w-5xl mx-auto space-y-10">

        <div class="flex flex-col">
            <div class="text-2xl lg:text-4xl font-bold text-center font-alex tracking-wide dark:text-gray-400">BROWSE OUR</div>
            <div class="text-5xl lg:text-8xl font-bangers text-center text-purple-400">SPECIALS & EVENTS</div>
            <img src="{{ asset('site-images/jumbo-glow-bowling.webp') }}" alt="Glow Bowling Image" class="mt-6 rounded-md">
        </div>

        @foreach ($events as $event)
            <section class="px-6 lg:px-0">
                <div id="{{ $event->slug }}" class="grid grid-cols-4 gap-6">
                    <div class="col-span-4">
                        <div class="section-title text-center">{{ $event->title }}</div>
                    </div>

                    @if ($event->description != null)
                        <div class="col-span-4 bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-lg p-6 dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50">
                            <div class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                                {{ $event->description }}
                            </div>
                        </div>
                    @endif

                    <div class="col-span-4 md:col-span-1 mt-3">
                        <div class="flex flex-col space-y-4 text-center bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-xl overflow-hidden dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50 p-6">
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="{{ $event->awsUrl() }}" alt="{{ $event->title }} Image" class="rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="flex items-center justify-center gap-2">
                                <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current text-white h-4 w-4">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                    </svg>
                                </div>
                                <div class="uppercase text-orange-600 dark:text-orange-400 font-bold text-sm">See our list of FAQs for additional information!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-3 mt-3">
                        @php
                            $eventFaqs = [];
                            foreach ($event->faqs as $faq) {
                                $eventFaqs[$faq->id] = [
                                    'question' => $faq->question,
                                    'answer' => $faq->answer
                                ];
                            }
                        @endphp
                        <x-faq :faqs="$eventFaqs" />
                    </div>
                </div>
            </section>
        @endforeach

    </div>
</x-app-layout>