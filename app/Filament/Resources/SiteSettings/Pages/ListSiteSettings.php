<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Filament\Resources\SiteSettings\SiteSettingResource;
use App\Models\SiteSetting;
use Filament\Resources\Pages\ListRecords;

class ListSiteSettings extends ListRecords
{
    protected static string $resource = SiteSettingResource::class;

    public function mount(): void
    {
        $record = SiteSetting::first();
        if ($record) {
            redirect(static::getResource()::getUrl('edit', ['record' => $record]));
            return;
        }

        redirect(static::getResource()::getUrl('create'));
    }
    protected function getHeaderActions(): array
    {
        return [];
    }
}
