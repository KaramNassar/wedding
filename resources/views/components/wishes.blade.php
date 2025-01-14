<section class="pt-28 pb-4 text-center">
    <div class="w-full rounded-2xl flex gap-4 flex-col items-center justify-center">
        <h2 class="text-3xl font-bold text-amber-900 sm:text-4xl">{{ trans('From Our Loved Ones') }}</h2>
        <p class="text-lg px-4 mb-8 text-amber-800">{{ trans('Wishes from family and friends for our special day') }}</p>
        {{ $slot }}
    </div>
    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper w-max">
                @foreach($wishes as $wish)
                    <div class="swiper-slide">
                        <div class="p-4 m-4 bg-amber-900 rounded-xl overflow-hidden">
                            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="relative">
                                    <blockquote class="mt-4">
                                        <div
                                            class="max-w-3xl mx-auto text-center text-xl leading-9 text-amber-50 font-medium text-raleway">
                                            <p>
                                                {{ $wish->message }}
                                            </p>
                                        </div>
                                        <footer class="mt-8">
                                            <div class="flex justify-center flex-col items-center gap-2">
                                                <div class="text-base leading-6 font-medium text-amber-100">
                                                    {{ $wish->name }}
                                                </div>
                                            </div>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="mt-12 max-w-md mx-2 sm:mx-auto bg-amber-900 shadow-md rounded-lg p-6">
        <h3 class="text-2xl font-bold text-amber-50">{{ trans('Share Your Love With Us') }}</h3>
        <p class="mb-8 text-sm text-amber-50">{{ trans('Your kind words mean the world to us! Write a heartfelt wish, let your message be part of our journey') }}</p>

        <livewire:wish-form/>
    </div>
</section>
