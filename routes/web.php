<?php

use App\Http\Controllers\WishController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::view('/', 'home')->name('home');
        Route::view('/our-story', 'our-story')->name('our-story');
        Route::view('/gallery', 'gallery.index')->name('gallery.index');
        Route::view('/album/1', 'gallery.show')->name('gallery.show');
        Route::view('/faqs', 'faqs')->name('faqs');

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });
    }
);
