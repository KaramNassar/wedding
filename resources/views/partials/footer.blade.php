<footer class="w-full bg-amber-50 shadow-inner shadow-xl text-gray-800 py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <a href="{{ route('home') }}" class="group">
                <div class="flex items-center justify-center gap-2 text-xl font-great  text-amber-900">
                    <span class="font-bold">{{ $settings->groom_name }}</span>
                    <svg class="w-8 h-8 text-amber-900 group-hover:animate-ping" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <span class="font-bold">{{ $settings->bride_name }}</span>
                </div>
            </a>
            <h3 class="text-xl text-center text-amber-800">{{ trans('Thank You for Being Part of Our Journey!') }}</h3>
            <ul class="text-lg flex items-center justify-center flex-col gap-7 md:flex-row md:gap-12 transition-all duration-500 py-16 mb-10 border-b border-amber-100">
                <li>
                    <a href="{{ route('home') }}"
                       class="py-2 text-sm text-amber-800 relative group">{{ trans('common.home') }}
                        <span
                            class="absolute left-0 bottom-0 block w-0 h-0.5 bg-amber-800 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('our-story') }}"
                       class="py-2 text-sm text-amber-800 relative group">{{ trans('common.our story') }}
                        <span
                            class="absolute left-0 bottom-0 block w-0 h-0.5 bg-amber-800 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('faqs') }}" class="py-2 text-sm text-amber-800 relative group">{{ trans('common.faqs') }}
                        <span
                            class="absolute left-0 bottom-0 block w-0 h-0.5 bg-amber-800 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
            </ul>

            <div class="px-6 mx-auto text-amber-800 text-center">
                <p>&copy; 2024 {{ $settings->groom_name }} & {{ $settings->bride_name }} Wedding. All Rights Reserved.</p>
                <p>Designed with ❤️ by karam.nassar@hotmail.com</p>
            </div>
        </div>
    </div>
</footer>

