<?php

namespace App\Filament\Resources\SettingResource\Pages;

use App\Filament\Resources\SettingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSetting extends CreateRecord
{
	protected static string $resource = SettingResource::class;

	protected function getHeaderActions(): array
	{
		return [

		];
	}
}
