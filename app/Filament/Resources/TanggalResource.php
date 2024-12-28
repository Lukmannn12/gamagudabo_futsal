<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TanggalResource\Pages;
use App\Filament\Resources\TanggalResource\RelationManagers;
use App\Models\Tanggal;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TanggalResource extends Resource
{
    protected static ?string $model = Tanggal::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('tanggal'),
                TextInput::make('harga')
                ->required(),
                TextInput::make('name')
                ->required()
                ->maxlength(100),
                TextInput::make('hari')
                ->required()
                ->maxlength(20)
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('hari')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('harga')
                    ->searchable()
                    ->money('IDR'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),    
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListTanggals::route('/'),
            'create' => Pages\CreateTanggal::route('/create'),
            'edit' => Pages\EditTanggal::route('/{record}/edit'),
        ];
    }
}
