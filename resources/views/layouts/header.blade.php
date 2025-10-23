<header class="relative grid grid-cols-3 content-center bg-gradient-to-br from-white via-gray-50 to-white dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 py-12 overflow-hidden border-b-4 border-orange-500">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 left-1/3 w-80 h-80 bg-orange-600/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Address Section -->
    <div class="relative hidden col-span-3 md:col-span-1 md:flex md:flex-wrap md:content-center">
        <div class="w-full flex flex-col justify-center text-center space-y-2 px-4">
            <div class="flex flex-col items-center space-y-3">
                <!-- Location Icon -->
                <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-full p-3 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="fill-current text-white h-6 w-6">
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                    </svg>
                </div>
                <div class="text-2xl font-alex font-bold text-gray-800 dark:text-white">647 E. Main Street</div>
                <div class="text-lg text-gray-600 dark:text-gray-300">Ashland, OH 44805</div>
                <a href="tel:4192897560" class="text-xl font-bold text-orange-600 dark:text-orange-400 hover:text-orange-700 dark:hover:text-orange-300 transition-colors duration-200">
                    (419) 289-7560
                </a>
            </div>
        </div>
    </div>

    <!-- Logo & Title Section -->
    <div class="relative col-span-3 md:col-span-1">
        <div class="flex flex-col text-center items-center">
            <div class="text-5xl lg:text-6xl font-bold font-alex bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 bg-clip-text text-transparent mb-2">
                BOWL AT
            </div>
            <div class="text-5xl lg:text-6xl font-bold font-alex bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 bg-clip-text text-transparent mb-6">
                LURAY LANES
            </div>
            <div class="relative group">
                <div class="absolute inset-0 bg-orange-500/30 rounded-2xl blur-2xl group-hover:bg-orange-500/40 transition-all duration-300"></div>
                <img src="{{ asset('site-images/transparent-logo.png') }}" alt="" class="relative h-40 w-40 mx-auto transform group-hover:scale-105 transition-transform duration-300">
            </div>
        </div>
    </div>

    <!-- Tagline Section -->
    <div class="relative col-span-3 md:col-span-1 flex flex-wrap content-center">
        <div class="w-full flex justify-center items-center text-xl lg:text-2xl text-center text-gray-700 dark:text-gray-200 font-alex italic font-semibold px-8 py-6 md:py-0 leading-relaxed">
            A family owned and operated business since 1957
        </div>
    </div>
</header>