@props(['faqs'])

<div x-data="{ selected: null }" class="space-y-4">
    @foreach ($faqs as $k => $v)
        <div class="bg-gradient-to-br from-white to-gray-50 border-2 border-orange-200 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden dark:from-gray-800 dark:to-gray-900 dark:border-orange-900/50">
            <!-- Question Button -->
            <button
                @click="selected !== {{ $k }} ? selected = {{ $k }} : selected = null"
                class="w-full flex justify-between items-center p-6 text-left group"
            >
                <div class="flex items-center gap-4 flex-1">
                    <!-- Icon -->
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-full p-2 shadow-md group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current text-white h-5 w-5">
                            <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/>
                        </svg>
                    </div>
                    <!-- Question Text -->
                    <div class="text-lg lg:text-xl font-bold text-gray-800 dark:text-white group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors duration-300">
                        {{ $v['question'] }}
                    </div>
                </div>
                <!-- Toggle Icon -->
                <div class="ml-4">
                    <div class="bg-orange-100 dark:bg-orange-900/30 rounded-full p-2 group-hover:bg-orange-200 dark:group-hover:bg-orange-800/50 transition-colors duration-300">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                            class="fill-current text-orange-600 dark:text-orange-400 h-5 w-5 transition-transform duration-300"
                            :class="selected === {{ $k }} ? 'rotate-180' : ''"
                        >
                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/>
                        </svg>
                    </div>
                </div>
            </button>

            <!-- Answer -->
            <div
                x-cloak
                x-show="selected === {{ $k }}"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="border-t-2 border-orange-200 dark:border-orange-900/50"
            >
                <div class="p-6 bg-orange-50/50 dark:bg-gray-900/50">
                    <div class="flex items-start gap-3">
                        <!-- Answer Icon -->
                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-full p-1.5 mt-1 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-current text-white h-3 w-3">
                                <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                            </svg>
                        </div>
                        <!-- Answer Text -->
                        <div class="text-base lg:text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                            {{ $v['answer'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
