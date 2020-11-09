<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','comment','img'];

    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id');
    }
}
