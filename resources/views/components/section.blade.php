@props(['title', 'description'])
<section {{ $attributes->class(['pt-28 text-center']) }}>
    <div class="w-full rounded-2xl flex gap-4 flex-col items-center justify-center">
        <h2 class="text-3xl font-bold text-amber-900 sm:text-4xl">{{ $title }}</h2>
        <p class="text-lg px-4 text-amber-800">{{ $description }}</p>

        {{ $slot }}
    </div>
</section>
