<?php

use App\Filament\Resources\AcademicYears\Pages\ListAcademicYears;

it('can render page', function () {
    loginAsAdmin();

    $this->get(ListAcademicYears::getUrl())
        ->assertOk();
});
