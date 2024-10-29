<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  use HasFactory;
  protected $fillable = ['post_author_id', 'post_title', 'post_url', 'post_description', 'post_content', 'post_status'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
