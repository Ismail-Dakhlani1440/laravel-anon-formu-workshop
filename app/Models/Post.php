<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description'
    ];

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
