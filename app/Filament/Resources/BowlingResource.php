<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Bowling;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BowlingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BowlingResource\RelationManagers;

class BowlingResource extends Resource
{
    protected static ?string $model = Bowling::class;

    protected static ?string $navigationLabel = 'Bowling';

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                TagsInput::make('prices'),
                Forms\Components\TextInput::make('description'),
                TagsInput::make('hours')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->description(fn (Bowling $record): string => $record->description ?? '')
                    ->searchable()
                    ->label('Name: Day'),
                TextColumn::make('hours')
                    ->badge()
                    ->separator(','),
                TextColumn::make('prices')
                    ->separator(',')
                    ->badge()
                    ->color('success'),
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
            'index' => Pages\ListBowlings::route('/'),
            'create' => Pages\CreateBowling::route('/create'),
            'edit' => Pages\EditBowling::route('/{record}/edit'),
        ];
    }
}
