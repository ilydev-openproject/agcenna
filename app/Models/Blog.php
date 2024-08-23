<?php

namespace App\Models;

use Illuminate\Support\Str;
use Intervention\Image\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'slug', 'id_category', 'image', 'konten', 'ringkasan', 'meta_keyword', 'meta_description', 'created_at', 'updated_at', 'status', 'scheduled_at'];

    // Menyebutkan primary key jika berbeda dari default
    protected $primaryKey = 'id_blog';

    public $timestamps = true;

    protected static function booted()
    {
        static::saving(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->judul);
            }
        });
        static::deleting(function ($blog) {
            // Hapus gambar dari storage jika ada
            if ($blog->image) {
                Storage::disk('public')->delete('storage/' . $blog->image);
            }
        });
    }

    protected $table = 'blogs';


    // Relasi dengan Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag', 'id_blog', 'tag_id');
    }
}
