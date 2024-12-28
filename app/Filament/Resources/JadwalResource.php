<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Filament\Resources\JadwalResource\RelationManagers;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-date-range';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('pertandingan')
                                ->required()
                                ->maxlength(100),
                TextInput::make('waktu')
                                ->required()
                                ->maxlength(20),
                Select::make('tanggal_id')
                            ->relationship('tanggal', 'tanggal')
                            ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pertandingan')
                ->searchable(),
                Tables\Columns\TextColumn::make('waktu')
                ->searchable(),
                Tables\Columns\TextColumn::make('tanggal.tanggal'),
                Tables\Columns\TextColumn::make('tanggal.name'),
                Tables\Columns\TextColumn::make('tanggal.hari'),
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
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
