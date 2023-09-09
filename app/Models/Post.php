<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function likes(): MorphMany
  {
    return $this->morphMany(Like::class, 'likeable');
  }

  public function comments(): MorphMany
  {
    return $this->morphMany(Comment::class, 'commentable');
  }

  public function getUserLike()
  {
    return $this->likes()->where('user_id', Auth::user()?->id)->first();
  }

  public function toggleLike()
  {
    $like = $this->getUserLike();

    if ($like) {
      $like->delete();
    } else {
      $this->likes()->create(['user_id' => Auth::user()?->id]);
    }
  }
}
