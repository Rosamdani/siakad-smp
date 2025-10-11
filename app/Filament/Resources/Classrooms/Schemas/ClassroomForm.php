<?php

namespace App\Filament\Resources\Classrooms\Schemas;

use App\Enums\Roles;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassroomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('academic_year_id')
                    ->relationship('academicYear', 'name')
                    ->searchable()
                    ->required(),
                Select::make('teacher_id')
                    ->label('Wali Kelas')
                    ->relationship('teacher', 'name', fn ($query) => $query->whereHas('roles', fn ($q) => $q->where('name', Roles::TEACHER)))
                    ->searchable()
                    ->required(),
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
