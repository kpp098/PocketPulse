<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        if ($page->template) {
            return view("livewire.templates.$page->template", compact('page'));
        }

        return view('404', compact('page'));
    }
}
