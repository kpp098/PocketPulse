<?php

namespace App\Filament\Resources\Pages\Pages;

use App\Filament\Resources\Pages\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('preview')
                ->label('Preview Page')
                ->icon('heroicon-o-eye')
                ->url(fn ($record) => url('/admin/preview/' . $record->slug))
                ->openUrlInNewTab(),

            Actions\DeleteAction::make(),
        ];
    }
}
