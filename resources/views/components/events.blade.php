@php use Carbon\Carbon; @endphp
<x-section :title="trans('Events')"
           :description="trans('Join us at these beautiful locations for our special day.')">
    <div class="mt-8 grid grid-cols-1 mx-6 gap-8">
        @foreach($settings->events as $event)

            <!-- Location 1 -->
            <div class="bg-amber-50 rounded-lg shadow-xl border border-amber-800 p-6">
                <h3 class="text-2xl font-bold text-amber-800">{{ $event['name'] }}</h3>
                @foreach(explode('|', $event['address']) as $address)
                    <p class="text-amber-700">{{ $address }}</p>
                @endforeach
                <p class="mt-2 text-sm text-gray-500">{{ trans('Date') . ": " . Carbon::parse($event['date'])->format('F d, Y') }}
                    | {{ trans('Time') . ": " . Carbon::parse($event['date'])->format('h:i A') }}
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
</x-section>
