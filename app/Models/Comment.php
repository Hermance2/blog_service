<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =[
        "comment"
    ];

    public function blogComment(){//appartenai 1 blog
        return $this->belongsTo(Blog::class,'blog_id','id');
    }
}
