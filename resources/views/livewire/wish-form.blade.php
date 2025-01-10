<form wire:submit="save">
    @if (session('success'))
        <div class=" mb-4 p-4 bg-green-100 border border-green-300 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    @csrf
    <div class="mb-4">
        <label for="name"
               class="block text-sm font-medium text-pink-700">{{ trans('Your Name') . ' (' . trans('required') . ')' }}</label>
        <input type="text" name="name" id="name" wire:model="name"
               class="mt-1 block w-full bg-pink-50 rounded-md border-pink-300 shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
        @error('name')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="message"
               class="block text-sm font-medium text-pink-700">{{ trans('Message')  . ' (' . trans('required') . ')' }}</label>
        <textarea name="message" id="message" rows="3" wire:model="message"
                  class="mt-1 block w-full bg-pink-50 rounded-md border-pink-300 shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm"></textarea>
        @error('message')
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit"
            class="w-full py-2 px-4 bg-pink-500 hover:bg-pink-600 text-white rounded-lg flex items-center justify-center">
            <span>{{ trans('Submit') }}</span>
    </button>
</form>

