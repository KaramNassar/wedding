<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $title = 'Settings';
    protected static string $view = 'filament.pages.settings';

    public array $data = [];

    public function mount(): void
    {
        $settings = Setting::firstOrNew();

        $this->form->fill([
            'groom_name'      => $settings->groom_name,
            'bride_name'      => $settings->bride_name,
            'date'            => $settings->date,
            'events'          => $settings->events,
            'phone'           => $settings->phone,
            'email'           => $settings->email,
            'main_color'      => $settings->main_color,
            'secondary_color' => $settings->secondary_color,
        ]);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $settings = Setting::firstOrNew();
        $settings->fill($data);
        $settings->save();

        $this->successNotification('success', 'Wedding settings updated successfully!');
    }

    private function successNotification(string $title): void
    {
        Notification::make()
            ->title($title)
            ->success()
            ->send();
    }

    public function form(Form $form): Form
    {
        return $form->schema([
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

                    Repeater::make('events')
                        ->schema([
                            TextInput::make('name'),
                            TextInput::make('address'),
                            DateTimePicker::make('date'),
                            Fieldset::make('location')
                                ->schema([
                                    TextInput::make('location.lat'),
                                    TextInput::make('location.lng'),
                                ])
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

        ])->statePath('data');
    }
}
