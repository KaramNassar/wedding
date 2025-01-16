<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Story extends Component
{
	public function render(): View
	{
        $videoUrl = optional(\App\Models\Story::latest()->first())->video;
		return view('components.story', [
            'videoUrl' => $videoUrl,
        ]);
	}
}
