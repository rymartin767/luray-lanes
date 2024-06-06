<?php

namespace App\Filament\Resources\BowlingResource\Pages;

use App\Filament\Resources\BowlingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBowling extends EditRecord
{
    protected static string $resource = BowlingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
