<x-section :title="trans('Locations')"
           :description="trans('Join us at these beautiful locations for our special day.')">
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($settings->events as $event)

            <!-- Location 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-bold text-pink-700">{{ $event['name'] }}</h3>
                <p class="mt-2 text-pink-600">St. Mary's Church</p>
                <p class="text-pink-600">123 Church Lane, Cityville</p>
                <p class="mt-2 text-sm text-gray-500">{{ trans('Date') . ": " . \Carbon\Carbon::parse($event['date'])->format('F d, Y') }} | {{ trans('Time') . ": " . \Carbon\Carbon::parse($event['date'])->format('h:i A') }}
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
