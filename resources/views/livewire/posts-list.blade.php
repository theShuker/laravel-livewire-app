<div class="flex flex-col gap-4">
  {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
  @if(!$posts)
    <h2>Nothing posted yet...!</h2>
  @endif
  @foreach($posts as $post)
    <div wire:key="{{ $post->id }}" class="p-3 border rounded">
      <a wire:navigate href="{{ route('post', $post->id) }}">
        <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
      </a>
      <p>{{ $post->content }}</p>

      <p class="mt-4">
        <livewire:like-button wire:key="{{ $post->id }}" :likeable="$post" />
        <a wire:navigate href="{{ route('post', $post) }}#comments"><button>💬 ({{ $post->comments->count() }})</button></a>
      </p>
      <p><small>posted at: {{ $post->created_at }} by {{ $post->user->username }}</small></p>
    </div>
  @endforeach

  {{ $posts->links() }}
</div>
