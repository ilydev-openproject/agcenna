<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Models\Blog;
use Filament\Actions;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\BlogResource;
use Filament\Resources\Pages\EditRecord;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus')
        ];
    }
    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman ListBlogs setelah berhasil menyimpan
        return $this->getResource()::getUrl('index');
    }
}
