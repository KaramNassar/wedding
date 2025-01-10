<?php

namespace App\Livewire;

use App\Models\Wish;
use Illuminate\View\View;
use Livewire\Component;

class WishForm extends Component
{
    public $name;

    public $message;

    protected array $rules = [
        'name'    => 'required|string|max:30',
        'message' => 'required|string|max:500',
    ];

    public function render(): View
    {
        return view('livewire.wish-form');
    }

    public function save(): void
    {
        $this->validate();

        Wish::create([
            'name'    => $this->name,
            'message' => $this->message,
        ]);

        $this->name = null;
        $this->message = null;

        session()->flash('success', 'Thank you, your message will be shown soon');
    }
}
