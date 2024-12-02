<?php

namespace App\View\Components;

use App\Models\Wish;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Wishes extends Component
{
    public function render(): View
    {
        $wishes = Wish::latest()->get();
        return view('components.wishes', [
            'wishes' => $wishes
        ]);
    }
}
