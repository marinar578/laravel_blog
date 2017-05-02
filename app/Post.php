<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['title', 'body'];
    protected $guarded = []; // specify fields you don't want to allow and it filters them out
}
