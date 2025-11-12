<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'is_visible',
        'title',
        'slug',
        'content',
        'template',
        // add more fields as needed
    ];
}
