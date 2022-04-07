<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
    protected $fillable = [
        'user_id', 'image_id', 'content'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
