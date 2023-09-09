<div class="flex flex-col gap-3">
  <h2>Comments</h2>
  @if(!$comments->count())
    <b>No comments yet...</b>
  @else
    @foreach($comments as $comment)
      <livewire:comment :key="$comment->id" :$comment />
    @endforeach
  @endif
</div>
