<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $guarded = [
        'id',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
