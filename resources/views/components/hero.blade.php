<section class="relative text-center py-32">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover opacity-45" style="background-image: url({{ $settings->background_image }});"></div>

    <!-- Content -->
    <div class="relative z-10">
        <h1 class="text-5xl text-amber-900 sm:text-7xl group">
            <div class="flex flex-col sm:flex-row items-center justify-center gap-2 font-great text-amber-900">
                <span class="font-bold">{{ $settings->groom_name }}</span>
                <svg class="w-12 h-12 text-amber-900 group-hover:animate-ping" xmlns="http://www.w3.org/2000/svg"
                     fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <span class="font-bold">{{ $settings->bride_name }}</span>
            </div>
        </h1>
        <p class="mt-20 text-xl font-semibold text-amber-800">{{ trans('common.hero') }}</p>
        <p class="mt-2 text-2xl font-semibold text-amber-800">{{ Carbon\Carbon::parse($settings->date)->translatedFormat('F d, Y') }}</p>

    </div>
</section>

