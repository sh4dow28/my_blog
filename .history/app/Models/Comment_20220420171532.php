<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'comment_content'];
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
