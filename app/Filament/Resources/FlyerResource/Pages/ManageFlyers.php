<?php

namespace App\Filament\Resources\FlyerResource\Pages;

use App\Filament\Resources\FlyerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFlyers extends ManageRecords
{
    protected static string $resource = FlyerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
