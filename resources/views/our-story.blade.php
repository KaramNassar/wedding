@extends('layouts.app')

@section('content')

    @include('partials.header')

    <section class="py-28 px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-amber-900">{{ trans('Our Stories') }}</h1>
            <p class="text-lg text-amber-800 mt-4">{{ trans('A journey of love, laughter, and unforgettable moments.') }}</p>
        </div>

        <x-story/>

    </section>

    @include('partials.footer')

@endsection
