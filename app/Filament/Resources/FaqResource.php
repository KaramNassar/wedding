<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function getNavigationBadge(): ?string
    {
        return Faq::query()->whereAnswer(0)->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Question')
                    ->schema([
                        TextInput::make('question.en')
                            ->label('Question (English)')
                            ->required(),
                        TextInput::make('question.ar')
                            ->label('Question (Arabic)')
                            ->required(),
                        TextInput::make('question.de')
                            ->label('Question (German)')
                            ->required(),
                    ])
                    ->columns(1), // Stacks the input fields vertically
                Fieldset::make('Answer')
                    ->schema([
                        Textarea::make('answer.en')
                            ->label('Answer (English)')
                            ->required(),
                        Textarea::make('answer.ar')
                            ->label('Answer (Arabic)')
                            ->required(),
                        Textarea::make('answer.de')
                            ->label('Answer (German)')
                            ->required(),
                    ])
                    ->columns(1),

                Toggle::make('is_answered')->label('Answered'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')
                    ->label('Question (English)')
                    ->limit(50),
                Tables\Columns\IconColumn::make('is_answered')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit'   => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
