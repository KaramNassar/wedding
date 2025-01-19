<form wire:submit="save">
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    @csrf
    <div class="mb-4">
        <label for="name"
               class="block text-sm font-medium text-amber-100">{{ trans('common.your name') }} *</label>
        <input type="text" name="name" id="name" wire:model="name"
               class="mt-1 block w-full bg-amber-50 rounded-md border-amber-800 shadow-sm focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
               required>
        @error('name')
        <p class="mt-1 text-sm text-amber-50">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="message"
               class="block text-sm font-medium text-amber-100">{{ trans('common.message') }} *</label>
        <textarea name="message" id="message" rows="3" wire:model="message"
                  class="mt-1 block w-full bg-amber-50 rounded-md border-amber-800 shadow-sm focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                  required></textarea>
        @error('message')
        <p class="mt-1 text-sm text-amber-50">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit"
            class="w-full py-2 px-4 bg-amber-800 hover:bg-amber-700 text-amber-100 rounded-lg flex items-center justify-center">
        <span>{{ trans('common.send') }}</span>
    </button>
</form>

