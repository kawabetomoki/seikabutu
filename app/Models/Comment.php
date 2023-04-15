<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;
    
    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
    
    public function getByCategory(int $limit_count = 100)
    {
         return $this->posts()->with('comment')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
