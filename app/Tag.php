<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function posts()
  {
    // Any tag belongs to and has many posts
    return $this->belongsToMany(Post::class);
  }
}
