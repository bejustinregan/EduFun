<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [
        'id',
    ];

    public function writer(){
        return $this->belongsTo(Writer::class, 'writers_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
