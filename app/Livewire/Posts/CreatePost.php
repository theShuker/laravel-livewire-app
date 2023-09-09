<?php

namespace App\Livewire\Posts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{

  public $title = '';
  public $content = '';

  public function store()
  {
    $post = Auth::user()?->posts()->create([
      'title' => $this->title,
      'content' => $this->content
    ]);

    $this->redirect(route('post', $post), true);
  }

  public function render()
  {
    return view('livewire.posts.create-post');
  }
}
