<?php

namespace App\Filament\Resources\Classrooms\RelationManagers;

use App\Filament\Resources\Presences\PresenceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class PresencesRelationManager extends RelationManager
{
    protected static string $relationship = 'presences';

    protected static ?string $relatedResource = PresenceResource::class;

    protected static ?string $title = 'Presensi';

    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->headerActions([
                CreateAction::make(),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
