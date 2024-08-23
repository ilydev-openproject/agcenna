<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id_category';
    public $timestamps = false; // Menonaktifkan timestamps
    protected $fillable = ['slug', 'nama_category'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'id_category');
    }
}
