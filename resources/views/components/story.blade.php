<section class="py-10">
    <div class="container mx-auto px-4 text-center">
        @if($videoUrl)
            <video controls class="w-full max-w-3xl mx-auto rounded-lg shadow-lg">
                <source src="{{ asset('storage/' . $videoUrl) }}" type="video/mp4">
                {{ trans('common.your browser does not support the video tag') }}
            </video>
        @else
            <p class="text-amber-700 text-xl">{{ trans('common.no video uploaded yet') }}</p>
        @endif
    </div>
</section>
