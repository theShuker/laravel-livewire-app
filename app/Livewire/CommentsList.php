<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class CommentsList extends Component
{
  public Post $post;
  public $comments;

  public function mount()
  {
    $this->comments = $this->post->comments;
  }

  public function render()
  {
    return view('livewire.comments-list');
  }

  #[On('comment:created')]
  public function refreshComments()
  {
    $this->post->fresh();
    $this->comments = $this->post->comments;
  }
}
