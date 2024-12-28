<?php

namespace App\Filament\Resources\TanggalResource\Pages;

use App\Filament\Resources\TanggalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTanggal extends EditRecord
{
    protected static string $resource = TanggalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
