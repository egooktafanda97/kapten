<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "category";

    protected $fillable = [
        'name',
        'slug',
    ];

    public static $rules = [
        'name' => 'required|max:255',
        'slug' => 'required|unique:categories,slug|max:255',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
