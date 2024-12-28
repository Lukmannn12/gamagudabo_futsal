<?php

namespace App\Filament\Resources\TanggalResource\Pages;

use App\Filament\Resources\TanggalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTanggals extends ListRecords
{
    protected static string $resource = TanggalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
