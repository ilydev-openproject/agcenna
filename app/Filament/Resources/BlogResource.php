<?php

namespace App\Filament\Resources;

use App\Models\Tag;
use Filament\Forms;
use App\Models\Blog;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\BlogResource\Pages;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationGroup = 'Blog';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Content')
                    ->schema([
                        TextInput::make('judul')
                            ->label('Judul')
                            ->live(onBlur: true)
                            ->maxLength(255)
                            ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                            ->required(),
                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(Blog::class, 'slug', ignoreRecord: true),
                        TextInput::make('ringkasan')
                            ->label('Ringkasan')
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('meta_keyword')
                            ->label('Keyword')
                            ->required(),
                        RichEditor::make('konten')
                            ->columnSpan(2),
                        TextInput::make('meta_description')
                            ->label('Description')
                            ->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Select::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                                'scheduled' => 'Scheduled',
                            ])
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function (callable $set, $state) {
                                // Set scheduled_at to null if status is not 'scheduled'
                                if ($state !== 'scheduled') {
                                    $set('scheduled_at', null);
                                }
                            }),

                        DatePicker::make('scheduled_at')
                            ->label('Scheduled At')
                            ->hidden(fn(callable $get) => $get('status') !== 'scheduled')
                            ->required(fn(callable $get) => $get('status') === 'scheduled'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Image')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->maxSize(1024) // Max size in KB
                            ->required()
                            ->appendFiles()
                            ->deletable()
                            ->hiddenLabel(),
                    ])
                    ->schema([
                        // Fields lainnya...
                        Select::make('tags')
                            ->label('Tags')
                            ->options(Tag::all()->pluck('name', 'id')) // Mengambil semua tag
                            ->multiple() // Mengizinkan memilih beberapa tag
                            ->relationship('tags', 'name'), // Menghubungkan dengan relasi tags
                    ])

            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_blog') // Kolom ID Blog
                    ->label('ID') // Label kolom
                    ->sortable(), // Menambahkan fungsionalitas pengurutan
                TextColumn::make('slug')
                    ->searchable()
                    ->limit(10)
                    ->sortable(),
                TextColumn::make('status')
                    ->searchable()
                    ->badge()
                    ->getStateUsing(function (Blog $record): string {
                        if ($record->status === 'scheduled') {
                            // Format tanggal penjadwalan
                            $scheduledAt = $record->scheduled_at ? Carbon::parse($record->scheduled_at)->format('d M Y H:i') : 'Not Scheduled';
                            return "Scheduled ($scheduledAt)";
                        }

                        return $record->status === 'published' ? 'Published' : 'Draft';
                    })
                    ->colors([
                        'success' => 'Published',
                        'danger' => 'Draft',
                        'warning' => 'Scheduled',
                    ])
                    ->label('Status'),
                TextColumn::make('category.nama_category')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Published Date')
                    ->date(),
                ImageColumn::make('image')
                    ->label('Image'),
                TextColumn::make('created_at')
                    ->since(),
                TextColumn::make('updated_at')
                    ->since(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
