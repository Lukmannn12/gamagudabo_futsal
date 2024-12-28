<?php

namespace App\Filament\Resources\TanggalResource\Pages;

use App\Filament\Resources\TanggalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTanggal extends CreateRecord
{
    protected static string $resource = TanggalResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
