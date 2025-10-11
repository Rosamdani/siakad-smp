<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Enums\Gender;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Siswa')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required(),
                        TextInput::make('nisn'),
                        DatePicker::make('date_of_birth')
                            ->label('Tanggal Lahir'),
                        Select::make('gender')
                            ->options(Gender::class),
                        Textarea::make('address')
                            ->label('Alamat')
                            ->columnSpanFull(),
                        TextInput::make('password')
                            ->password()
                            ->required(),
                    ]),
            ]);
    }
}
