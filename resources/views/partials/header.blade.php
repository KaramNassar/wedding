<header class='sticky top-0 bg-gradient-to-r from-pink-200 via-pink-100 to-pink-200 shadow-md z-[100]'
        x-data="{ mobileMenuIsOpen : false }"
        @click.away="mobileMenuIsOpen = false">
    <x-container>
        <section
            class='flex items-center justify-between py-2'>

            <a href="{{ route('home') }}" class="group">
                <div class="flex items-center justify-center gap-2 text-xl font-serif text-pink-700">
                    <span class="font-bold">{{ $settings->groom_name }}</span>
                    <svg class="w-8 h-8 text-red-500 group-hover:animate-ping" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <span class="font-bold">{{ $settings->bride_name }}</span>
                </div>
            </a>

            <div class='absolute lg:relative flex flex-wrap justify-center px-10 py-3'>

                <div id="collapseMenu"
                     class='max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50 hidden lg:block'
                     :class="mobileMenuIsOpen ? 'max-lg:block' : 'max-lg:hidden'"
                >
                    <button @click="mobileMenuIsOpen = false" id="toggleClose"
                            class='fixed top-2 right-4 rtl:left-4 rtl:right-auto rounded-full bg-white p-3 text-slate-700 z-[100] lg:hidden'>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    @include('partials.navbar')
                </div>
            </div>

            <div class="flex justify-between gap-2">
                <div class="flex items-center space-x-2">
                    <span class="relative">
                        <x-language-switcher/>
                    </span>

                </div>

                <button @click="mobileMenuIsOpen = true" id="toggleOpen"
                        class="text-slate-700 lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>
        </section>

    </x-container>
</header>
