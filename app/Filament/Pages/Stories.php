<?php

namespace App\Filament\Pages;

use App\Models\Story;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Stories extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';
    protected static ?string $title = 'Stories';
    protected static string $view = 'filament.pages.stories';

    public array $data = [];

    public function mount(): void
    {
        $story = Story::firstOrNew();

        $this->form->fill([
            'video' => $story->video,
        ]);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $settings = Story::firstOrNew();
        $settings->fill($data);
        $settings->save();

        $this->successNotification('success', 'Updated successfully!');
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
            FileUpload::make('video')
                ->label('Upload Video')
                ->directory('story-videos')
                ->maxSize(100000),

        ])->statePath('data');
    }
}
