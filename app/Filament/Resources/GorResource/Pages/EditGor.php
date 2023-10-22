<?php

namespace App\Filament\Resources\GorResource\Pages;

use App\Filament\Resources\GorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGor extends EditRecord
{
    protected static string $resource = GorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
