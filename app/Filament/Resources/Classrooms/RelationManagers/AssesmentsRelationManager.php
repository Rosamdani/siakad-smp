<?php

namespace App\Filament\Resources\Classrooms\RelationManagers;

use App\Filament\Resources\Assesments\AssesmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class AssesmentsRelationManager extends RelationManager
{
    protected static string $relationship = 'assesments';

    protected static ?string $relatedResource = AssesmentResource::class;

    protected static ?string $title = 'Penilaian';

    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->headerActions([
                CreateAction::make()->label('Tambah Penilaian'),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
