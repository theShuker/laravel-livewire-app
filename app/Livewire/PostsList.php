<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class PostsList extends Component
{
  use WithPagination;

  public $userId = null;
  public $categoryId = null;

  public function mount($userId = null, $categoryId = null)
  {
    $this->userId = $userId;
  }

  #[Computed]
  public function posts()
  {
    if ($this->userId) return User::findOrFail($this->userId)->posts()->orderByDesc('created_at')->simplePaginate(10);
    return Post::query()->orderByDesc('created_at')->simplePaginate(10);
  }

  public function render()
  {
    return view('livewire.posts-list', [
      'posts' => $this->posts
    ]);
  }
}
