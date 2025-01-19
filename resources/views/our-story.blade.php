@extends('layouts.app')

@section('content')

    @include('partials.header')

    <section class="py-28 px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-amber-900">{{ trans('common.our story page.title') }}</h1>
            <p class="text-lg text-amber-800 mt-4">{{ trans('common.our story page.subtitle') }}</p>
        </div>

        <x-story/>

    </section>

    @include('partials.footer')

@endsection
