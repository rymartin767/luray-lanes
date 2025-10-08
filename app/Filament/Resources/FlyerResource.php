<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlyerResource\Pages;
use App\Models\Flyer;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FlyerResource extends Resource
{
    protected static ?string $model = Flyer::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                FileUpload::make('image_url')
                    ->disk('s3')
                    ->directory('images/flyers')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->label('Images')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '9:16',
                    ]),
                CheckboxList::make('pages')
                    ->options([
                        'home' => 'Homepage',
                        'birthdays' => 'Birthdays',
                        'specials' => 'Specials',
                        'food' => 'Food & Bar',
                    ]),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('pages'),
                Tables\Columns\ImageColumn::make('image_url')
                    ->disk('s3'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFlyers::route('/'),
        ];
    }
}
