<header class="flex justify-between py-5">
  <a wire:navigate href="{{ route('posts') }}"><b>BlogTitle</b></a>

  <ul>
    <li><a href="{{ route('create-post') }}" wire:navigate>Create new post</a></li>
  </ul>

  <div>
    @if($user)
      <div x-data="{ open: false }" class="relative">
        <button @click="open = !open"><b>🙋‍♂ {{ $user->username }}</b></button>
        <div x-show="open" x-transition class="absolute top-full rounded flex flex-col gap-1 mt-2">
          <a href="{{ route('logout') }}"><button>🚪 Logout</button></a>
        </div>
      </div>

    @else
      <a href="{{ route('login') }}"><button>🙋‍♂️ Login</button></a>
    @endif
  </div>
</header>
