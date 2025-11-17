<?php

namespace App\Filament\Resources\StudentClassrooms\Schemas;

use App\Enums\Roles;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentClassroomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->columns(1)
                    ->columnSpanFull()
                    ->schema([
                        Select::make('student_id')
                            ->label('Siswa')
                            ->relationship('student', 'name', fn ($query) => $query->whereHas('roles', fn ($q) => $q->where('name', Roles::STUDENT)))
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('classroom_id')
                            ->label('Kelas')
                            ->relationship('classroom', 'name')
                            ->preload()
                            ->searchable()
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->required(),
                    ]),
            ]);
    }
}
