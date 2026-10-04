<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book2 extends Model
{
    protected $fillable = [
        'title',
        'author',
        'year'
    ];
}
