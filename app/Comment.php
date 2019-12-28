<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];
    
    public function post()
    {
        return $this->belongTo(Post::class);
    }
}
