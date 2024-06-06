<?php

namespace App\Filament\Resources\BowlingResource\Pages;

use App\Filament\Resources\BowlingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBowlings extends ListRecords
{
    protected static string $resource = BowlingResource::class;

    protected static ?string $title = 'Bowling';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
