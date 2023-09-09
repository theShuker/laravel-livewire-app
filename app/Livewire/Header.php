<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
  public $user;
  public string $search = '';

  public function mount()
  {
    $this->user = Auth::user();
  }
  public function render()
  {
    return view('livewire.header');
  }
}
