<?php

namespace App\Filament\Resources\CompanyInformationResource\Pages;

use App\Filament\Resources\CompanyInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyInformation extends CreateRecord
{
    protected static string $resource = CompanyInformationResource::class;

    protected static bool $canCreateAnother = false;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Info created';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
