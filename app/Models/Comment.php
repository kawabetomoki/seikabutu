<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'posts_id'
    ];
    
    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
    
    public function getBycomment(int $limit_count = 100)
    {
         return $this->post()->with('comment')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
