<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use App\Models\SiteSetting;
use App\Models\Page;

class Header extends Component
{
    public $pages;

    public function mount()
    {
        $this->pages = Page::where('is_visible', true)->orderBy('title')->get();
    }

    public function render()
    {
        $settings = SiteSetting::first();
        return view('livewire.layout.header', compact('settings'));
    }
}
