<div>
    <div class="max-w-4xl mx-auto">
        @foreach ($faqs as $faq)
            <div x-data="{ open: false }" class="mb-6 bg-amber-900 rounded-lg shadow-md overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 focus:outline-none">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-medium text-amber-50">{{ $faq->question[$locale] ?? __('Question not available') }}</span>
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
                    {{ $faq->answer[$locale] ?? __('Answer not available') }}
                </div>
            </div>
        @endforeach
    </div>

    <div class="max-w-4xl mx-auto mt-12 bg-amber-900 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-amber-50 mb-4">{{ trans('Have a question that is not listed here?') }}</h2>
        @if (session()->has('message'))
            <div class="text-amber-200 mb-4">{{ session('message') }}</div>
        @endif
        <form wire:submit.prevent="submitQuestion" class="space-y-4">
            <div>
                <label for="name" class="block text-amber-100 font-medium mb-2">{{ trans('Your Name') }} *</label>
                <input type="text" id="name" name="name"
                       wire:model="name"
                       class="w-full px-4 py-2 border rounded-lg bg-amber-50 focus:outline-none focus:ring-2 focus:ring-amber-500"
                       placeholder="Enter your name" required>
                @error('name')
                    <p class="text-amber-50 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-amber-100 font-medium mb-2">{{ trans('Your Email') }} *</label>
                <input type="email" id="email" name="email"
                       wire:model="email"
                       class="w-full px-4 py-2 border rounded-lg bg-amber-50 focus:outline-none focus:ring-2 focus:ring-amber-500"
                       placeholder="Enter your email" required>
                @error('email')
                    <p class="text-amber-50 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="question" class="block text-amber-100 font-medium mb-2">{{ trans('Your Question') }} *</label>
                <textarea id="question" name="question" rows="4"
                          wire:model="question"
                          class="w-full px-4 py-2 border rounded-lg bg-amber-50 focus:outline-none focus:ring-2 focus:ring-amber-500"
                          placeholder="Enter your question" required></textarea>
                @error('question')
                    <p class="text-amber-50 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                    class="w-full bg-amber-800 text-white font-medium py-2 rounded-lg shadow-lg hover:bg-amber-700 focus:ring-2 focus:ring-amber-500">
                {{ trans('Submit Question') }}
            </button>
        </form>
    </div>
</div>
