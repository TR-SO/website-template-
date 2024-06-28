<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Products\ProductResource\Pages;

use App\Filament\Admin\Resources\Products\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
