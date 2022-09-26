<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user',
        'path'
    ];

    // defining relationships for the post model by Eloquent ORM
    public function muser(){
        return $this->belongsTo(User::class, 'user','id');
    }

    // nimeongeza relationship hii ili iwe rahisi kuangalia comments zilizotolewa kwa post
    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
