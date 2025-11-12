<?php

namespace App\Filament\Pages;

use Filament\Auth\Pages\EditProfile as BaseEditProfile;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Support\Icons\Heroicon;
use BackedEnum;

class EditAdminProfile extends BaseEditProfile
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;
    protected static ?string $navigationLabel = 'Profile';

    public function form(Schema $form): Schema
    {
        // First, get the parent's form definition
        $form = parent::form($form);

        // Then, add your own extra components
        $form->schema(array_merge(
            $form->getComponents(),
            [
                FileUpload::make('avatar')
                    ->label('Profile Picture')
                    ->directory('avatars')
                    ->disk('public')
                    ->image()
                    ->imageEditor()
                    ->imageCropAspectRatio('1:1'),
            ]
        ));

        return $form;
    }
}
