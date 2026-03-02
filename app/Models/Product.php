<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function tags()
  {
    return $this->belongsToMany(Tag::class);
  }

  public function reviews()
  {
    return $this->hasMany(Review::class);
  }
}
