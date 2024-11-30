<div x-data="{ open: false}" class="relative inline-block">
    <div>
        <button @click="open = !open"
                class="py-2 text-sm text-pink-700 relative font-bold group">
            <span>{{ config('laravellocalization')['supportedLocales'][app()->getLocale()]['native'] }}</span>
            <span class="absolute left-0 bottom-0 block w-0 h-0.5 bg-pink-800 transition-all duration-300 group-hover:w-full"></span>


        </button>
    </div>
    <div x-show="open" x-cloak @click.away="open = false" x-transition
         class="absolute end-0 mt-2 w-40 rounded-xl shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1 rounded-xl bg-gradient-to-r from-pink-200 via-pink-100 to-pink-200" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if($localeCode !== app()->getLocale())
                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}"
                       class="flex gap-2 items-center flex-row-reverse rounded-xl  px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full"
                       role="menuitem">
                        <img src="https://flagcdn.com/{{ $properties['regional'] }}.svg" alt="Flag" class="h-5 w-5">
                        <span class="font-medium">
                            {{ $properties['native'] }}
                        </span>
                    </a>
                @endif
            @endforeach

        </div>
    </div>
</div>
