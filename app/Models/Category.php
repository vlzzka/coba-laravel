<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['$id'];
    protected $fillable = ['name', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    protected static function booted()
    {
        static::deleting(function ($category) {
            // Hapus semua postingan yang berhubungan dengan kategori ini
            $category->posts()->delete();
        });
    }
}
