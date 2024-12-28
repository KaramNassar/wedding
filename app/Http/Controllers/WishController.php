<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust based on your needs
        ]);

        // Store file
        $path = $request->file('photo')->store('wishes_photos', 'public');

        // Return the file URL for FilePond
        return $path;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        $validated['photo_url'] = $request->photo ? '/storage/'.$request->photo : '/storage/avatar.svg';

        Wish::create($validated);

        return redirect()->back()->with('success', 'Thank you for your message!');
    }

}
