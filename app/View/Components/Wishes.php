<?php

namespace App\View\Components;

use App\Models\Wish;
use Illuminate\View\Component;

class Wishes extends Component
{
    public function render()
    {
        $wishes = Wish::latest()->whereConfirmed(1)->get();

        return view('components.wishes', [
            'wishes' => $wishes
        ]);
    }
}
