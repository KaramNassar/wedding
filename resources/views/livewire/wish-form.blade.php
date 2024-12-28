@filepondScripts
<form wire:submit="save" x-data="{ isUploading: false }"
      @filepond-upload-started="isUploading = true"
      @filepond-upload-finished="isUploading = false"
      @filepond-upload-reset="isUploading = false">
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
        <label for="photo" class="block text-sm font-medium text-pink-700">{{ trans('Your Photo') }}</label>
        <x-filepond::upload wire:model="file" :allowImageResize="true" :imageResizeTargetWidth="400"
                            :imageResizeTargetHeight="400" :imageResizeUpscale="true"/>
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
        <button type="submit" class="w-full py-2 px-4 bg-pink-500 hover:bg-pink-600 text-white rounded-lg flex items-center justify-center"
                :disabled="isUploading">
            <template x-if="!isUploading">
                <span>Submit</span>
            </template>
            <template x-if="isUploading">
                <svg class="animate-spin h-5 w-5 text-white ml-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                </svg>
            </template>
        </button>
</form>

