<?php

namespace App\Filament\Resources\Assesments\Pages;

use App\Filament\Resources\Assesments\AssesmentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAssesment extends ViewRecord
{
    protected static string $resource = AssesmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
