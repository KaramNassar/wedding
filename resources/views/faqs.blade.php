@extends('layouts.app')

@section('content')

    @include('partials.header')

    <section class="py-28 px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-amber-900">{{ trans('Frequently Asked Questions') }}</h1>
            <p class="text-lg text-amber-800 mt-2">{{ trans('Here are some common questions and answers to help you.') }}</p>
        </div>

        <div class="max-w-4xl mx-auto">
            <!-- Question 1 -->
            <div x-data="{ open: false }" class="mb-6 bg-amber-900 rounded-lg shadow-md overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 focus:outline-none">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-medium text-amber-50">What should I wear to the wedding?</span>
                        <svg x-show="!open" class="w-5 h-5 text-amber-50" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        <svg x-show="open" class="w-5 h-5 text-amber-50" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                        </svg>
                    </div>
                </button>
                <div x-show="open" class="px-6 py-4 text-amber-100">
                    Please dress in formal attire. Men can wear suits, and women can opt for elegant dresses. Be mindful
                    of
                    the theme if specified.
                </div>
            </div>

            <div x-data="{ open: false }" class="mb-6 bg-amber-900 rounded-lg shadow-md overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 focus:outline-none">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-medium text-amber-50">What should I wear to the wedding?</span>
                        <svg x-show="!open" class="w-5 h-5 text-amber-50" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        <svg x-show="open" class="w-5 h-5 text-amber-50" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                        </svg>
                    </div>
                </button>
                <div x-show="open" class="px-6 py-4 text-amber-100">
                    Please dress in formal attire. Men can wear suits, and women can opt for elegant dresses. Be mindful
                    of
                    the theme if specified.
                </div>
            </div>

            <div x-data="{ open: false }" class="mb-6 bg-amber-900 rounded-lg shadow-md overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 focus:outline-none">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-medium text-amber-50">What should I wear to the wedding?</span>
                        <svg x-show="!open" class="w-5 h-5 text-amber-50" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        <svg x-show="open" class="w-5 h-5 text-amber-50" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                        </svg>
                    </div>
                </button>
                <div x-show="open" class="px-6 py-4 text-amber-100">
                    Please dress in formal attire. Men can wear suits, and women can opt for elegant dresses. Be mindful
                    of
                    the theme if specified.
                </div>
            </div>

        </div>

        <div class="max-w-4xl mx-auto mt-12 bg-amber-900 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-amber-50 mb-4">Have a question that's not listed here?</h2>
            <form action="/submit-question" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-amber-100 font-medium mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg bg-amber-50 focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Enter your name" required>
                </div>
                <div>
                    <label for="email" class="block text-amber-100 font-medium mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg bg-amber-50 focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Enter your email" required>
                </div>
                <div>
                    <label for="question" class="block text-amber-100 font-medium mb-2">Your Question</label>
                    <textarea id="question" name="question" rows="4" class="w-full px-4 py-2 border rounded-lg bg-amber-50 focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Enter your question" required></textarea>
                </div>
                <button type="submit" class="w-full bg-amber-800 text-white font-medium py-2 rouded-lg shadow-lg hover:bg-amber-700 focus:ring-2 focus:ring-amber-500">Submit Question</button>
            </form>
        </div>
    </section>


    @include('partials.footer')

@endsection
