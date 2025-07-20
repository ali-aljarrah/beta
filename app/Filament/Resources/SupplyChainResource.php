<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplyChainResource\Pages;
use App\Models\SupplyChain;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Support\Str;

class SupplyChainResource extends Resource
{
    protected static ?string $model = SupplyChain::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Grid::make(12)->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) =>
                                $operation === 'create'
                                    ? $set('slug', Str::slug($state))
                                    : null
                            )
                            ->columnSpan(6),

                        TextInput::make('slug')
                            ->required()
                            ->disabled()
                            ->dehydrated()
                            ->unique(SupplyChain::class, 'slug', ignoreRecord: true)
                            ->maxLength(255)
                            ->columnSpan(6),
                    ]),

                    Textarea::make('description')
                        ->required()
                        ->rows(4),

                    MarkdownEditor::make('content')
                        ->required()
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('services'),

                    Toggle::make('is_active')
                        ->label('Is Active')
                        ->default(true),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),

                TextColumn::make('description')
                    ->limit(50)
                    ->wrap(),

                BooleanColumn::make('is_active')
                    ->label('Active'),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                 ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
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
            'index' => Pages\ListSupplyChains::route('/'),
            'create' => Pages\CreateSupplyChain::route('/create'),
            'edit' => Pages\EditSupplyChain::route('/{record}/edit'),
        ];
    }
}
