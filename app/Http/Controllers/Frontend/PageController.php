<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\SiteSetting;


class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $siteSettings = SiteSetting::first();

        if ($page->template) {
            return view("livewire.templates.$page->template", compact('page', 'siteSettings'));
        }

        return view('404', compact('page', 'siteSettings'));
    }
}
