@props(['title', 'description'])
<section {{ $attributes->class(['pt-28 bg-pink-50 text-center']) }}>
    <div class="w-full rounded-2xl flex gap-4 flex-col items-center justify-center">
        <h2 class="text-3xl font-bold text-pink-700 sm:text-4xl">{{ $title }}</h2>
        <p class="text-lg text-pink-600">{{ $description }}</p>

        {{ $slot }}
    </div>
</section>
