<?php

namespace App\Livewire;

use App\Models\Faq;
use Livewire\Component;

class FaqSection extends Component
{
    public $locale;
    public $name;
    public $email;
    public $question;

    protected $rules = [
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'question' => 'required|max:255',
    ];

    public function mount(): void
    {
        $this->locale = app()->getLocale();
    }

    public function submitQuestion(): void
    {
        $this->validate();

        Faq::create([
            'name' => $this->name,
            'email' => $this->email,
            'question' => [$this->locale => $this->question],
            'is_answered' => false,
        ]);

        $this->name = '';
        $this->email = '';
        $this->question = '';
        session()->flash('success', trans('common.faqs page.form.success'));
    }

    public function render()
    {
        return view('livewire.faq-section', [
            'faqs' => Faq::where('is_answered', true)->get(),
        ]);
    }
}
