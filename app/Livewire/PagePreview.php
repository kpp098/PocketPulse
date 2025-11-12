<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class PagePreview extends Component
{
    public $slug;
    public $page;

    public function mount(string $slug): void
    {
        $this->page = Page::where('slug', $slug)
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.page-view', [
            'page' => $this->page,
        ])->layout('livewire.layout.app');
    }
}
