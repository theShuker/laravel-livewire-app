<div class="border rounded border-gray-200 p-4">
  <p><b>{{ $comment->user->username }}</b></p>
  <p>{{ $comment->text }}</p>

  <div class="flex gap-2">
    <livewire:like-button :likeable="$comment" />
    <button wire:click="$set('showReplyForm', true)">Reply</button>
  </div>
  @if($showReplyForm)
    <livewire:comment-form :commentable="$comment"/>
  @endif
  @if($comment->comments->count())
    <div id="replies" class="pl-2 mt-5 border-l-4 border-gray-200">
      <div class="font-semibold">Replies:</div>
      @foreach($comment->comments as $commentReply)
        <livewire:comment :comment="$commentReply"/>
      @endforeach
    </div>
  @endif

</div>
