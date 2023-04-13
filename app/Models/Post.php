<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";

    protected $fillable = [
        'title',
        'content',
        'slug',
        'meta_descriptions',
        'meta_keyword',
        'meta',
        'hit',
        'published_at',
    ];

    public static function rules($id = null)
    {
        return [
            'title' => 'required|max:255',
            'content' => 'required',
            'slug' => [
                'required',
                'max:255',
                Rule::unique('posts')->ignore($id),
            ],
            'user_id' => 'required|exists:users,id',
            'published_at' => 'nullable|date',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }

    // di dalam model Post
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
