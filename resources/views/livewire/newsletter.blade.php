<section id="newsletter" class="relative overflow-hidden bg-gradient-to-br from-white via-orange-50 to-white dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-40">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-orange-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-orange-600/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative py-12 px-6 mx-auto max-w-screen-xl text-center lg:py-20 z-10">
        <!-- Badge -->
        <a href="{{ route('specials') }}" class="inline-flex justify-between items-center py-1.5 px-1.5 pr-5 mb-8 text-sm bg-gradient-to-r from-orange-100 to-orange-200 rounded-full dark:from-orange-900/50 dark:to-orange-800/50 hover:from-orange-200 hover:to-orange-300 dark:hover:from-orange-800/70 dark:hover:to-orange-700/70 border-2 border-orange-300 dark:border-orange-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
            <span class="text-xs bg-gradient-to-r from-orange-500 to-orange-600 rounded-full text-white px-4 py-2 mr-3 font-bold shadow-md">New</span>
            <span class="text-sm font-bold text-orange-800 dark:text-orange-200">See what events and specials are coming soon!</span>
            <svg class="w-3 h-3 ml-2 text-orange-700 dark:text-orange-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </a>

        <!-- Heading -->
        <h1 class="mb-6 text-4xl font-extrabold font-alex tracking-tight leading-none md:text-5xl lg:text-6xl">
            <span class="bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 bg-clip-text text-transparent">Join our newsletter</span>
            <span class="block text-gray-900 dark:text-white mt-2">to receive special offers and event updates!</span>
        </h1>

        <!-- Subheading -->
        <p class="mb-10 text-lg font-medium text-gray-600 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-300">
            Exclusive food, drink, and bowling specials are available to our newsletter members!
        </p>

        <!-- Form -->
        <form wire:submit="formSubmitted" class="w-full max-w-2xl mx-auto">
            <label for="default-email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email sign-up</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-5 pointer-events-none">
                    <svg class="w-5 h-5 text-orange-500 dark:text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                </div>
                <input wire:model="email" type="email" id="default-email" class="block w-full p-5 pl-14 text-base text-gray-900 border-2 border-orange-300 rounded-xl bg-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-800 dark:border-orange-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500 shadow-lg transition-all duration-200" placeholder="Enter your email here..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 hover:from-orange-600 hover:via-orange-700 hover:to-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-bold rounded-lg text-base px-6 py-3 dark:focus:ring-orange-800 shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">Sign up</button>
            </div>
            @error('email')
                <div class="mt-3 text-red-600 dark:text-red-400 text-sm text-left font-medium italic bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 p-3 rounded">{{ $message }}</div>
            @enderror
        </form>
    </div>
</section>