<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentForm extends Component
{
  public $text = '';
  public Comment|Post $commentable;

  public function create()
  {
    $this->commentable->comments()->create([
      'text' => $this->text,
      'user_id' => Auth::user()->id
    ]);

    $this->dispatch('comment:created');
    $this->reset('text');
  }

  public function render()
  {
    return view('livewire.comment-form');
  }
}
