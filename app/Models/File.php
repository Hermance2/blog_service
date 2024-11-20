<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'file_name',
        'path'
    ];

    public function BlogFile(){//appartenai 1 blog
        return $this->belongsTo(Blog::class,'blog_id','id');
    }
}
