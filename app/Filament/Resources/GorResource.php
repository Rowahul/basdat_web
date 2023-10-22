<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GorResource\Pages;
use App\Filament\Resources\GorResource\RelationManagers;
use App\Models\Gor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Auth;
use Closure;

class GorResource extends Resource
{
    protected static ?string $model = Gor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama') -> required() ,
                RichEditor::make('description') ->required() -> label("Alamat Lengkap"),
                TextInput::make('price') ->required() -> numeric(),
                Grid::make(3)
                    ->schema([
                        TimePicker::make("senin_open") -> required(),
                        TimePicker::make("senin_close") -> required(),
                        Toggle::make("senin_is_closed") -> required()
                    ]),
                Grid::make(3)
                    ->schema([
                        TimePicker::make("selasa_open") -> required(),
                        TimePicker::make("selasa_close") -> required(),
                        Toggle::make("selasa_is_closed") -> required()
                    ]),
                
                Grid::make(3)
                    ->schema([
                        TimePicker::make("rabu_open") -> required(),
                        TimePicker::make("rabu_close") -> required(),
                        Toggle::make("rabu_is_closed") -> required()
                    ]),
                Grid::make(3)
                    ->schema([
                        TimePicker::make("kamis_open") -> required(),
                        TimePicker::make("kamis_close") -> required(),
                        Toggle::make("kamis_is_closed")-> required()
                    ]),

                Grid::make(3)
                    ->schema([
                        TimePicker::make("jumat_open") -> required(),
                        TimePicker::make("jumat_close") -> required(),
                        Toggle::make("jumat_is_closed") -> required()
                    ]),
                Grid::make(3)
                    ->schema([
                        TimePicker::make("sabtu_open") -> required(),
                        TimePicker::make("sabtu_close") -> required(),
                        Toggle::make("sabtu_is_closed") -> required()
                    ]),
                Grid::make(3)
                    ->schema([
                        TimePicker::make("minggu_open") -> required(),
                        TimePicker::make("minggu_close") -> required(),
                        Toggle::make("minggu_is_closed") -> required()
                    ]),
            
                FileUpload::make('image_gor')->image() ->required(),
                TextInput::make("user_id") -> default(Auth::id()) -> label("owner") -> readOnly()

            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('user_id', Auth::id());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("id") -> sortable(),
                TextColumn::make("nama") -> sortable(),
                TextColumn::make("price") -> sortable(),
                ImageColumn::make("image_gor")

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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListGors::route('/'),
            'create' => Pages\CreateGor::route('/create'),
            'edit' => Pages\EditGor::route('/{record}/edit'),
        ];
    }    
}
