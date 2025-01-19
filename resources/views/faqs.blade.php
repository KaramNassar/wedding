@extends('layouts.app')

@section('content')

    @include('partials.header')

    <section class="py-28 px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-amber-900">{{ trans('common.faqs page.title') }}</h1>
            <p class="text-lg text-amber-800 mt-2">{{ trans('common.faqs page.subtitle') }}</p>
        </div>

        <livewire:faq-section/>


    </section>


    @include('partials.footer')

@endsection
