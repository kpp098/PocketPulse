<?php

namespace App\Filament\Resources\Users;

use App\Models;
use BackedEnum;
use Filament\Forms;
use Filament\Tables;
use Filament\Actions;
use Filament\Schemas\Schema;
use Filament\Schemas\Components;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Hash;
use App\Filament\Resources\Users\Pages;


class UserResource extends Resource
{
    protected static ?string $model = Models\User::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;
    protected static ?string $navigationLabel = 'Users';
    protected static ?string $pluralModelLabel = 'Users';
    protected static ?string $modelLabel = 'User';
    /**
     * Define form for Create/Edit User
     */
    public static function form(Schema $form): Schema
    {
        return $form->schema([
            Components\Section::make('User Information')
                ->description('Manage user profile details and login credentials.')
                ->schema([
                    Components\Grid::make(1)
                        ->schema([
                            Forms\Components\FileUpload::make('avatar')
                                ->label('Profile Picture')
                                ->directory('avatars')
                                ->disk('public')
                                ->image()
                                ->imageEditor()
                                ->imageCropAspectRatio('1:1'),
                            Forms\Components\TextInput::make('name')
                                ->label('Full Name')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\Toggle::make('is_admin')
                                ->label('Administrator'),
                        ]),
                ]),

            Components\Section::make('Details')
                ->description('Update the user’s password or keep it blank to retain the current one.')
                ->schema([
                    Components\Grid::make(1)
                        ->schema([
                            Forms\Components\TextInput::make('email')
                                ->label('Email')
                                ->email()
                                ->required()
                                ->unique(ignoreRecord: true),
                            Forms\Components\TextInput::make('password')
                                ->label('Password')
                                ->password()
                                ->maxLength(255)
                                ->dehydrateStateUsing(fn($state) => filled($state) ? Hash::make($state) : null)
                                ->required(fn(string $context): bool => $context === 'create')
                                ->dehydrated(fn($state) => filled($state))
                                ->helperText('Leave blank to keep current password.'),

                            Forms\Components\TextInput::make('password_confirmation')
                                ->label('Confirm Password')
                                ->password()
                                ->same('password')
                                ->required(fn(callable $get) => filled($get('password')))
                                ->dehydrated(false),

                            Components\Fieldset::make('Bank Statistics')
                                ->columns([
                                    'default' => 1,
                                    'md' => 2,
                                    'xl' => 2,
                                ])
                                ->schema([
                                    Forms\Components\TextInput::make('total_banks')
                                        ->label('Total Banks Added')
                                        ->disabled()
                                        ->afterStateHydrated(function ( Forms\Components\TextInput $component, $record) {
                                            $component->state(
                                                $record ? Models\BankDetail::where('user_id', $record->id)->count() : 0
                                            );
                                        }),

                                    Forms\Components\TextInput::make('active_banks')
                                        ->label('Active Banks')
                                        ->disabled()
                                        ->afterStateHydrated(function ( Forms\Components\TextInput $component, $record) {
                                            $component->state(
                                                $record ? Models\BankDetail::where('user_id', $record->id)->OrWhere('is_active', true)->count() : 0
                                            );
                                        }),
                                ])


                        ])
                        ->columnSpan(1),
                ]),
        ]);
    }


    /**
     * Define table view
     */
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('avatar')
                    ->label('Profile')
                    ->disk('public')
                    ->circular()
                    ->size(40)
                    ->defaultImageUrl(url('/images/default-avatar.png')),

                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_admin')
                    ->label('Admin')
                    ->boolean(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Joined')
                    ->dateTime('M d, Y h:i A')
                    ->sortable(),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Define resource pages
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
