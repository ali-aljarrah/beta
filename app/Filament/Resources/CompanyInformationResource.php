<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyInformationResource\Pages;
use App\Models\CompanyInformation;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CompanyInformationResource extends Resource
{
    protected static ?string $model = CompanyInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?int $navigationSort = 6;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make()->schema([
                        TextInput::make('key')
                            ->label('Name')
                            ->required(),
                    ])->columns(2),

                    Section::make()->schema([
                        MarkdownEditor::make('value')
                            ->required()
                            ->label('')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'heading',
                                'italic',
                                'link',
                                'orderedList',
                                'undo',
                            ]),
                    ]),

                ])->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                ->label('Name')
                ->searchable(),

                TextColumn::make('value')
                    ->label('English value')
                    ->limit(40)
                    ->searchable(),
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
            'index' => Pages\ListCompanyInformation::route('/'),
            'create' => Pages\CreateCompanyInformation::route('/create'),
            'edit' => Pages\EditCompanyInformation::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return true;
    }
}
