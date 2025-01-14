<ul class="bg-gradient-to-br from-amber-900 via-amber-900 to-amber-900 max-lg:fixed max-lg:top-0 max-lg:left-0 rtl:max-lg:right-0 z-50 max-lg:h-full max-lg:w-1/2 max-lg:overflow-auto lg:bg-none max-lg:p-4 max-lg:shadow-md max-lg:space-y-3 max-lg:min-w-[300px] lg:flex lg:gap-x-8  transition-all duration-500 ease-in-out">
    <li>
        <a href="{{ route('home') }}" class="py-2 text-sm text-amber-900 relative group">{{ trans('common.home') }}
            <span
                class="absolute left-0 bottom-0 block w-0 h-0.5 bg-amber-900 transition-all duration-300 group-hover:w-full"></span>
        </a>
    </li>

    <li>
        <a href="{{ route('our-story') }}" class="py-2 text-sm text-amber-900 relative group">{{ trans('common.our story') }}
            <span
                class="absolute left-0 bottom-0 block w-0 h-0.5 bg-amber-900 transition-all duration-300 group-hover:w-full"></span>
        </a>
    </li>
    <li>
        <a href="{{ route('faqs') }}" class="py-2 text-sm text-amber-900 relative group">{{ trans('common.faqs') }}
            <span
                class="absolute left-0 bottom-0 block w-0 h-0.5 bg-amber-900 transition-all duration-300 group-hover:w-full"></span>
        </a>
    </li>
</ul>
