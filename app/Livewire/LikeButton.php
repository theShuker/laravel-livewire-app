<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeButton extends Component
{
  public Post|Comment $likeable;

  public function toggleLike()
  {
    if(!Auth::user()) return;

    $this->likeable->toggleLike();
    $this->dispatch('like-toggled');
  }

  public function render()
  {
    return view('livewire.like-button');
  }
}
