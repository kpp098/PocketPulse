<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Livewire\PageView;
use App\Livewire\PagePreview;
use App\Models\Page;

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

Route::middleware(['auth', 'verified', IsAdmin::class])->group(function () {
    Route::get('/admin/preview/{slug}', PagePreview::class)
        ->name('page.preview');
});


Route::get('/{slug}', PageView::class)
    ->where('slug', '^(?!admin).*')
    ->name('page.show');
