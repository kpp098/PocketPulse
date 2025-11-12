<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            // 🏠 General Settings
            Section::make('General Settings')
                ->description('Manage your site name, tagline, and key branding assets.')
                ->schema([
                    Components\TextInput::make('site_name')
                        ->label('Site Name')
                        ->required()
                        ->maxLength(100)
                        ->placeholder('Enter your website name'),

                    Components\TextInput::make('tagline')
                        ->label('Tagline')
                        ->placeholder('Enter a short tagline or slogan'),
                    Components\Toggle::make('maintenance_mode')
                        ->label('Maintenance Mode'),
                ])
                ->collapsible()
                ->columns(2),
            // ⚓ Footer
            Section::make('Footer Settings')
                ->description('Customize the footer content displayed site-wide.')
                ->schema([
                    Components\Textarea::make('footer_text')
                        ->label('Footer Text')
                        ->rows(3)
                        ->placeholder('© ' . date('Y') . ' Your Company. All rights reserved.'),
                ])
                ->collapsible(),

            // 🖼️ Logos & Icons
            Section::make('Logos & Icons')
                ->description('Upload your site logo and favicon.')
                ->schema([
                    Components\FileUpload::make('main_logo_path')
                        ->label('Main Logo')
                        ->image()
                        ->directory('logos')
                        ->disk('public')
                        ->imagePreviewHeight('200px')
                        ->required(),

                    Components\FileUpload::make('favicon_path')
                        ->label('Favicon')
                        ->image()
                        ->directory('logos')
                        ->disk('public')
                        ->imagePreviewHeight('200px')
                        ->required(),
                ])
                ->collapsible()
                ->columns(2),

            // 📞 Contact Info
            Section::make('Contact Information')
                ->description('Provide contact details to display on your site or emails.')
                ->schema([
                    Components\TextInput::make('contact_email')
                        ->label('Contact Email')
                        ->email()
                        ->placeholder('contact@example.com'),

                    Components\TextInput::make('contact_phone')
                        ->label('Contact Phone')
                        ->placeholder('+91 99999 99999'),

                    Components\Textarea::make('address')
                        ->label('Address')
                        ->rows(3)
                        ->placeholder('Enter your full address'),
                ])
                ->collapsible()
                ->columns(2),


        ]);
    }
}
