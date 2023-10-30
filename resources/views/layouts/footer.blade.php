<footer class="bg-white rounded-lg shadow dark:bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 lg:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0">
                <img src="{{ asset('site-images/logo.jpg') }}" alt="" class="h-12 w-12 mr-3">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Luray Lanes</span>
            </a>
            <ul class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 flex-wrap items-center mb-6 text-lg lg:text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="/reservations" wire:navigate class="hover:underline lg:mr-6 ">Reserve A Lane</a>
                </li>
                <li>
                    <a href="/birthdays" wire:navigate class="hover:underline lg:mr-6">Birthdays</a>
                </li>
                <li>
                    <a href="/specials" wire:navigate class="hover:underline lg:mr-6 ">Specials</a>
                </li>
                <li>
                    <a href="/food" wire:navigate class="hover:underline lg:mr-6 ">Food & Bar</a>
                </li>
                <li>
                    <a href="/contact" wire:navigate class="hover:underline">Contact Us</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center">
            <div class="flex flex-row items-center justify-center">
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    © 2023 Luray Lanes. All Rights Reserved
                </div>
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1421.333" height="1706.667" viewBox="0 0 1066 1280" class="h-6 w-6 pl-2 fill-current text-red-600">
                    <path d="M195.6 5.5c1.7 2.2 10.4 13.3 19.2 24.7 8.9 11.5 16 20.8 15.8 20.8-.3 0-8.9-9.5-19.1-21-10.3-11.6-18.9-21-19.1-21-.2 0 7.1 10 16.3 22.2 28.4 37.6 28.3 37.6-2.7 1.5C194.4 19.1 184.6 8 184.4 8c-.2 0 9.5 13.2 21.7 29.4 16.1 21.5 21.8 29.9 21.2 31-.6 1.2-5.8-2.3-24.7-16.5-13.2-9.8-24.1-17.9-24.4-17.9-.2 0 3.5 4.4 8.4 9.7 17 18.8 27.8 30.8 30.3 33.8l2.6 3-3.5-3.1c-1.9-1.7-9.3-8.2-16.5-14.5l-13-11.4 13.1 14c7.3 7.7 14.4 15.1 15.8 16.4 2.6 2.5 3.3 4.1 1.7 4.1-.7 0-12.3-7.1-50.5-30.7-2.2-1.4-3.6-2.1-3.1-1.5 1.4 1.4 44.5 35.1 47.3 37 1.2.8 2.1 1.6 1.9 1.9-.3.3-37.6-15-39.9-16.4-.5-.2-.8-.2-.8 0s7.7 6.4 17.1 13.8c9.3 7.3 16.6 13.5 16.2 13.6-.5.2-8.2-2.2-17.2-5.2-9.1-3-16.6-5.3-16.8-5.2-.1.2 6.8 4.8 15.4 10.2 8.6 5.4 15.2 10 14.6 10.2-.5.2-6-1.5-12.2-3.7-6.2-2.2-11.6-4-11.9-4-.4 0 4.1 3.2 10 7.1l10.6 7.1-16.8 33.1c-9.3 18.3-24.6 49.8-34 70.2-21.1 45.3-24.7 52.5-36.2 72.3C78.1 352.4 55.4 401.1 41.9 444c-5.1 16.1-5.8 17.7-12.9 30-5.4 9.4-11.8 23.8-15.8 35.5-31.1 91.7-5.6 203.1 66.2 289 38 45.4 86 81 147.8 109.6 14.9 6.9 42.4 18.4 50.1 20.9 4.8 1.5 4.3 3.3-1 4.1-2.4.3-5.6 1.7-7.8 3.5-6.4 5.2-13.7 9.3-18.9 10.8-5.9 1.6-23.3 4.3-32.2 4.9-6.9.5-11.8 2.7-13.5 6-1.4 2.5-7 21-6.5 21.4.1.2 1.8-1.9 3.7-4.7 5.8-8.6 6-6.2.7 8.4-1.6 4.3-2.7 8.1-2.5 8.3.2.2 2.5-3.2 5-7.6 2.6-4.4 5.1-8.2 5.7-8.6 1.7-1 1.2 5.2-1.4 16.5-1.3 5.8-2.3 10.6-2.1 10.8.2.2 1.5-3 3-7 1.6-4 4-9.8 5.5-12.8 5.5-11.4 7.2-12.5 9.1-5.7 1.6 5.3 2.5 6.5 3.4 3.8.3-1.1 2.3-3 4.5-4.2 2.1-1.2 4.3-3.2 4.9-4.5 1.4-3.1 4.1-3.1 14.7.2 13.1 4.1 20.7 1.8 28.9-8.8 2.3-2.9 5.2-5.3 7.7-6.3 7.3-2.9 12.7-7.4 16-13.1 1.9-3.6 3.5-5.3 4.4-5 7.5 2.9 36 10.3 53.9 14.1 6.1 1.3 10.3 2.5 9.5 2.8-1.4.5-12.8 1.3-53 3.7-25.8 1.5-28.5 2.8-37 18.2-2.5 4.6-5.5 9.6-6.5 11.3-1.9 3-1.9 3 0 1.3 3.5-2.9 16.8-11.8 17.7-11.8 1.7 0-.5 4.4-7.9 15.9-4.2 6.4-6.5 10.7-5.2 9.5 21.7-19.2 25.9-22.1 25.9-17.5 0 2.3-4.6 14.8-9 24.6-3.7 8.2-3.5 8.1 6.3-5 4.1-5.6 10.7-13.1 14.7-16.9 6.2-5.8 7.6-6.7 10.3-6.4 2.7.2 3.6 1.1 5.7 5 3.5 6.4 3.5 6.4 7 3.5 1.7-1.5 6.2-3.6 10-4.7 3.9-1.1 8.2-3.2 9.7-4.6 1.4-1.3 3.8-2.7 5.2-3.1 1.4-.4 10.3.7 19.6 2.3 19.1 3.3 37 3.9 46.5 1.5 7.3-1.8 19-7.2 24.8-11.5 5.8-4.2 13.5-6.2 27.2-7.1 26-1.6 51.7-5.6 70-11l8.4-2.4 18 5 18.1 4.9 10.9 11.2c34.2 35.4 81.4 99.3 135.4 183.3 17.2 27 18.2 28.8 27.3 52.7 11.5 30.4 19.1 43.9 32.8 57.9 7.3 7.4 7.9 7.7 15.6 9.8 24 6.3 48 4.8 70.4-4.3 3.3-1.3 6.3-2 6.8-1.6.4.5 5.7 1.4 11.7 2 20.3 2.2 45-2.2 74-13l13.9-5.2 3.1 3.5c4.2 4.8 6.4 5.7 13.8 5.7 8.7 0 16.6-2.2 27.6-7.6 11-5.4 21.1-14.4 23.2-20.8l1.3-3.9-11.9-11.6C928.8 1096.5 804 971.8 771.9 936.9c-6.2-6.7-12.4-14.9-17.4-22.9-20.1-32.3-48.4-73.5-66.3-96.5-4.7-6.1-9-11.6-9.6-12.4-1.4-1.8-.5-1.3 13.9 7.4 16.6 10 45.5 23.9 59.7 28.6 7 2.4 13 4 13.3 3.7 1.2-1.1-9.5-32.2-19-55.3-31.8-77.7-79.4-158.9-130.1-222-22-27.4-58.5-65.5-78.9-82.4-29.9-24.8-57.3-42.3-83.9-53.7-12.2-5.2-31.3-11.7-38.2-13-1.9-.3-3.6-.9-3.8-1.3-.3-.4-1-6.3-1.7-13.2-.9-9.6-.9-15 0-23.4 4.9-45.7 6.2-59.4 6.8-70.7.5-9.9 1-13.4 2.2-14.6 3.6-3.6 23.4-15.7 35.1-21.4 6.9-3.4 12.7-6.3 12.9-6.5.9-.7-14.5-15.5-24.1-23.3-10.8-8.8-17.8-13.5-26.8-18-3.3-1.7-6-3.6-6-4.4 0-.8-1.8-5-4.1-9.5-3.1-6.2-6.7-11-15.7-20.8-20.8-22.6-35.1-37-66.9-66.9-40.5-38.2-59.1-58-72.5-77.1-2.8-4-5.5-7-5.9-6.8-.4.3-3.8-2.8-7.6-6.7-20.3-21.6-20.4-21.6-7.8-4.5 6.4 8.8 11.5 16 11.3 16.2-.2.2-7.5-6.4-16.3-14.7C198.4 6.5 192.1.9 195.6 5.5z" />
                </svg>
            </div>

            <!-- SOCIALS -->
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                </a>
            </div>

            <div class="flex flex-row items-center space-x-1 mx-auto lg:mx-0 justify-center">
                <div class="text-sm text-gray-600">Designed with</div>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current text-red-500 h-3 w-3">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                        <path d="M0 190.9v-5.8c0-69.9 50.52-129.52 119.4-141 44.7-7.59 92 7.27 124.6 39.92L256 96l11.1-11.98C300.6 51.37 347 36.51 392.6 44.1c68.9 11.48 119.4 71.1 119.4 141v5.8c0 41.5-17.2 81.2-47.6 109.5L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9L47.59 300.4C17.23 272.1 0 232.4 0 190.9z" />
                    </svg>
                </span>
                <div>+</div>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current text-red-600 h-3 w-3">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                        <path d="M504.4 115.83a5.72 5.72 0 0 0-.28-.68 8.52 8.52 0 0 0-.53-1.25 6 6 0 0 0-.54-.71 9.36 9.36 0 0 0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84 8.84 0 0 0-.9-.68L404.4 55.55a8 8 0 0 0-8 0L300.12 111a8.07 8.07 0 0 0-.88.69 7.68 7.68 0 0 0-.78.6 8.23 8.23 0 0 0-.72.93c-.17.24-.39.45-.54.71a9.7 9.7 0 0 0-.52 1.25c-.08.23-.21.44-.28.68a8.08 8.08 0 0 0-.28 2.08v105.24l-80.22 46.19V63.44a7.8 7.8 0 0 0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35 8.35 0 0 0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36 9.36 0 0 0-.72-.94 9.46 9.46 0 0 0-.78-.6 9.8 9.8 0 0 0-.88-.68L115.61 1.07a8 8 0 0 0-8 0L11.34 56.49a6.52 6.52 0 0 0-.88.69 7.81 7.81 0 0 0-.79.6 8.15 8.15 0 0 0-.71.93c-.18.25-.4.46-.55.72a7.88 7.88 0 0 0-.51 1.24 6.46 6.46 0 0 0-.29.67 8.18 8.18 0 0 0-.28 2.1v329.7a8 8 0 0 0 4 6.95l192.5 110.84a8.83 8.83 0 0 0 1.33.54c.21.08.41.2.63.26a7.92 7.92 0 0 0 4.1 0c.2-.05.37-.16.55-.22a8.6 8.6 0 0 0 1.4-.58L404.4 400.09a8 8 0 0 0 4-6.95V287.88l92.24-53.11a8 8 0 0 0 4-7V117.92a8.63 8.63 0 0 0-.24-2.09ZM111.6 17.28l80.19 46.15-80.2 46.18-80.18-46.17Zm88.25 60V278.6l-46.53 26.79-33.69 19.4V123.5l46.53-26.79Zm0 412.78L23.37 388.5V77.32L57.06 96.7l46.52 26.8v215.18a6.94 6.94 0 0 0 .12.9 8 8 0 0 0 .16 1.18 5.92 5.92 0 0 0 .38.9 6.38 6.38 0 0 0 .42 1 8.54 8.54 0 0 0 .6.78 7.62 7.62 0 0 0 .66.84c.23.22.52.38.77.58a8.93 8.93 0 0 0 .86.66l92.19 52.18Zm8-106.17-80.06-45.32 84.09-48.41 92.26-53.11 80.13 46.13-58.8 33.56Zm184.52 4.57L215.88 490.11V397.8l130.72-74.6 45.77-26.15Zm0-119.13L358.68 250l-46.53-26.79v-91.42l33.69 19.4L392.37 178Zm8-105.28-80.2-46.17 80.2-46.16 80.18 46.15Zm8 105.28V178L455 151.19l33.68-19.4v91.39Z" />
                    </svg>
                </span>
                <div class="text-sm text-gray-600">by NT4C Labs</div>
            </div>
        </div>

    </div>
</footer>