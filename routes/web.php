<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Livewire\PageView;
use App\Models\Page;
use App\Http\Controllers\Frontend\PageController;


require __DIR__.'/auth.php';


Route::view('/', 'livewire.homepage')
    ->name('homepage');

Route::view('dashboard', 'livewire.homepage')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('/pages/{slug}', function ($slug) {

    $page = Page::where('slug', $slug)->firstOrFail();
    return view('pages.show', compact('page'));
});


Route::get('/{slug}', PageView::class)
    ->where('slug', '^(?!admin).*')
    ->name('page.show');

Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
