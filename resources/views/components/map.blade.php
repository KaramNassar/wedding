<x-section :title="trans('Locations')"
           :description="trans('Join us at these beautiful locations for our special day.')">
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Location 1 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-2xl font-bold text-pink-700">Church Ceremony</h3>
            <p class="mt-2 text-pink-600">St. Mary's Church</p>
            <p class="text-pink-600">123 Church Lane, Cityville</p>
            <p class="mt-2 text-sm text-gray-500">Date: May 20, 2024 | Time: 2:00 PM</p>
            <div class="mt-4 relative w-full h-48">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509568!2d-122.4194151846816!3d37.7749292797591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085817cbed4e9f7%3A0x58e4c3b6f731eedf!2sCity%20Hall%2C%20San%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1617983661441!5m2!1sen!2sus"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    class="rounded-lg">
                </iframe>
            </div>
        </div>

        <!-- Location 2 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-2xl font-bold text-pink-700">Reception</h3>
            <p class="mt-2 text-pink-600">The Grand Ballroom</p>
            <p class="text-pink-600">456 Reception Ave, Cityville</p>
            <p class="mt-2 text-sm text-gray-500">Date: May 20, 2024 | Time: 5:00 PM</p>
            <div class="mt-4 relative w-full h-48">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509568!2d-122.4194151846816!3d37.7749292797591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085817cbed4e9f7%3A0x58e4c3b6f731eedf!2sCity%20Hall%2C%20San%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1617983661441!5m2!1sen!2sus"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    class="rounded-lg">
                </iframe>
            </div>
        </div>
    </div>
</x-section>
