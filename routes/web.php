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
        Route::post('/wishes', [WishController::class, 'store'])->name('wishes.store');
        Route::post('/upload', [WishController::class, 'upload']);

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });
    }
);
