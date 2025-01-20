@php use Carbon\Carbon; @endphp
<x-section :title="trans('common.ceremonies.title')"
           :description="trans('common.ceremonies.subtitle')">
    <div class="mt-8 grid grid-cols-1 mx-6 gap-8">
        @foreach($settings->events as $event)

            <!-- Location 1 -->
            <div class="bg-amber-50 rounded-lg shadow-xl border border-amber-800 p-6">
                <h3 class="text-2xl font-bold text-amber-800">{{ $event['name'][config('app.locale')] }}</h3>
                @foreach(explode('|', $event['address'][config('app.locale')]) as $address)
                    <p class="text-amber-700">{{ $address }}</p>
                @endforeach
                <p class="mt-2 text-sm text-gray-500">{{ trans('common.date') . ": " . Carbon::parse($event['date'])->translatedFormat('F d, Y') }}
                    | {{ trans('common.time') . ": " . Carbon::parse($event['date'])->translatedFormat('h:i A') }}
                </p>
                <div class="mt-4 relative w-full h-48">
                    <iframe
                        src="https://www.google.com/maps?q={{ $event['location']['lat'] }},{{ $event['location']['lng'] }}&hl=es;z=14&output=embed"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        class="rounded-lg">
                    </iframe>
                </div>
            </div>
        @endforeach
    </div>
    <h3 class="text-xl font-bold text-amber-900 sm:text-4xl mt-12">{{ trans('common.notice') }}</h3>
    <p class="text-lg px-4 text-amber-800 max-w-3xl">{{ trans('common.rsvp') }}</p>
</x-section>
