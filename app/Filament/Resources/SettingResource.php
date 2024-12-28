<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $slug = 'settings';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Couple Information')
                    ->schema([
                        TextInput::make('groom_name')
                            ->required(),

                        TextInput::make('bride_name')
                            ->required(),
                    ]),

                Fieldset::make('Wedding Details')
                    ->schema([

                        DatePicker::make('date')
                            ->required()
                            ->columnSpanFull(),

                        Repeater::make('locations')
                            ->schema([
                                TextInput::make('event name'),
                                TextInput::make('address'),
                                DateTimePicker::make('date'),
                                TextInput::make('coordinates'),
                            ])->columnSpanFull()
                    ])->columnSpan('sm'),


                Fieldset::make('Connect Details')
                    ->schema([
                        TextInput::make('phone')
                            ->columnSpanFull(),

                        TextInput::make('email')
                            ->columnSpanFull(),
                    ])
                    ->columnSpan('sm'),

                Fieldset::make('Colors')
                    ->schema([
                        ColorPicker::make('main_color'),

                        ColorPicker::make('secondary_color')
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('groom_name'),

                TextColumn::make('bride_name'),

                TextColumn::make('locations'),

                TextColumn::make('date')
                    ->date(),

                TextColumn::make('phone'),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('colors'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit'   => Pages\EditSetting::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['email'];
    }
}
