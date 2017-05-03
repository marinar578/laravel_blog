<?php

namespace App;

use App\Model;

class Post extends Model
{
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }
}
