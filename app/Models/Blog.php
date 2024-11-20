<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        "tilte","description","category_id","user_id"
    ];

    public function category(){//appartenai 1 category
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
