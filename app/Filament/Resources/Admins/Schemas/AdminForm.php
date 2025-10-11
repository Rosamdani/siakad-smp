<?php

namespace App\Filament\Resources\Admins\Schemas;

use App\Enums\Gender;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('nisn'),
                DatePicker::make('date_of_birth'),
                Select::make('gender')
                    ->options(Gender::class),
                TextInput::make('address'),
                TextInput::make('password')
                    ->password()
                    ->required(),
            ]);
    }
}
