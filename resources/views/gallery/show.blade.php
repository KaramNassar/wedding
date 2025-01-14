@extends('layouts.app')

@section('content')

    @include('partials.header')

    <section class="py-28 px-4">
        <h1 class="text-4xl font-bold text-center mb-10 text-gray-800">Gallery</h1>

        <h1 class="text-4xl font-bold text-center mb-10 text-gray-800">Vacation Memories</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Image -->
            <img src="https://via.placeholder.com/400" alt="Vacation 1" class="rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">

            <!-- Video -->
            <video controls class="rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            </video>

            <!-- Image -->
            <img src="https://via.placeholder.com/400" alt="Vacation 2" class="rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">

            <!-- Video -->
            <video controls class="rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            </video>

            <!-- More media... -->
        </div>
    </section>

    @include('partials.footer')

@endsection
