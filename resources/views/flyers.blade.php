<section class="grid grid-cols-4 px-6 lg:px-0 gap-3">
    <div class="col-span-4">
        <div class="section-title">FEATURED FLYERS</div>
    </div>

    <div class="hidden lg:block col-span-4 my-3 bg-white dark:bg-gray-800 rounded-lg py-3 border border-gray-50 shadow-sm">
        <div class="text-6xl text-center font-alex">
            <span class="text-black dark:text-white">EAT.</span>
            <span class="text-gray-400">DRINK.</span>
            <span class="text-orange-500">BOWL.</span>
        </div>
    </div>

    @forelse ($flyers as $flyer)
        <div class="col-span-4 md:col-span-1 shadow-md rounded-md overflow-hidden">
            <img src="{{ Storage::disk('s3')->url($flyer->image_url) }}" alt="{{ $flyer->title }} Image Flyer" loading="lazy">
        </div>
    @empty
        <div>No current flyers.</div>
    @endforelse
</section>