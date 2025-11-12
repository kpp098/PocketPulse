<?php

namespace App\Filament\Resources\Pages;

use App\Filament\Resources\Pages\Pages;
use App\Models\Page;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use BackedEnum;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationLabel = 'Pages';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;
    protected static bool $shouldRegisterNavigation = true;


    public static function getTemplateList(): array
    {
        $templatePath = resource_path('views/livewire/templates');

        if (!is_dir($templatePath)) {
            return [];
        }

        return collect(scandir($templatePath))
            ->filter(fn ($file) => str_ends_with($file, '.blade.php'))
            ->mapWithKeys(function ($file) {
                $name = str_replace('.blade.php', '', $file);
                return [$name => Str::title(str_replace('-', ' ', $name))];
            })
            ->toArray();
    }

    public static function form(Schema $form): Schema
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->reactive()
                ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),
            Forms\Components\TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),
            Forms\Components\Toggle::make('is_visible')
                ->label('Show in menu')
                ->default(true),

            Forms\Components\Select::make('template')
                ->label('Template')
                ->placeholder('Select Page Template')
                ->options(self::getTemplateList())
                ->searchable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('template')->label('Template'),
                Tables\Columns\IconColumn::make('is_visible')->boolean(),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
