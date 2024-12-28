<?php

namespace App\Livewire;

use App\Models\Wish;
use Illuminate\View\View;
use Livewire\Component;
use Spatie\LivewireFilepond\WithFilePond;

class WishForm extends Component
{
    use WithFilePond;

    public $name;

    public $message;

    public $file;

    public bool $isUploading = false;

    protected array $rules = [
        'name'    => 'required|string|max:30',
        'message' => 'required|string|max:500',
        'file'    => 'nullable|image|max:1024',
    ];

    public function getListeners()
    {
        return [
            'filepondUploadStarted'  => 'startUpload',
            'filepondUploadFinished' => 'finishUpload',
        ];
    }

    public function startUpload()
    {
        $this->isUploading = true;
    }

    public function finishUpload()
    {
        $this->isUploading = false;
    }

    public function render(): View
    {
        return view('livewire.wish-form');
    }

    public function save(): void
    {
        $this->validate();

        if ($this->file) {
            $photo_path = $this->file->store('wishes_photos', 'public');
            unlink($this->file->path());
        } else {
            $photo_path = '/storage/avatar.svg';
        }

        Wish::create([
            'name'      => $this->name,
            'message'   => $this->message,
            'photo_url' => $photo_path
        ]);

        $this->name = null;
        $this->message = null;
        $this->resetFilePond('file');

        session()->flash('success', 'Thank you, your message will be shown soon');
    }
}
