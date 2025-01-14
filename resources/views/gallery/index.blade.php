@extends('layouts.app')

@section('content')

    @include('partials.header')

    <section class="py-28 px-4">
        <h1 class="text-4xl font-bold text-center mb-10 text-gray-800">Gallery</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Album Card 1 -->
            <a href="{{ route('gallery.show', 1) }}"
               class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition-transform duration-200">
                <img src="/storage/timeline/2.jpg" alt="Vacation Memories" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-bold text-gray-800">Vacation Memories</h2>
                    <p class="text-sm text-gray-600 mt-2">Our best moments by the sea.</p>
                </div>
            </a>

            <!-- Album Card 2 -->
            <a href="/album/wedding-day"
               class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition-transform duration-200">
                <img src="/storage/timeline/1.jpg" alt="Wedding Day" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-bold text-gray-800">Wedding Day</h2>
                    <p class="text-sm text-gray-600 mt-2">Highlights from the best day of our lives.</p>
                </div>
            </a>

            <!-- Album Card 3 -->
            <a href="/album/family-moments"
               class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition-transform duration-200">
                <img src="/storage/timeline/2.jpg" alt="Family Moments" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-bold text-gray-800">Family Moments</h2>
                    <p class="text-sm text-gray-600 mt-2">Cherished times with our loved ones.</p>
                </div>
            </a>
        </div>
    </section>

    @include('partials.footer')

@endsection
