

<div>
  <div id="post-body">
    <h1>{{ $post->title }}</h1>
    <div>{{ $post->content }}</div>
    <div>
      <p><small>Created at: {{ $post->created_at }}</small></p>
    </div>
    <div>
      <livewire:like-button :likeable="$post">
    </div>
  </div>
  <div id="comments" class="mt-6">
    <livewire:comments-list :post="$post"/>
  </div>
  <div id="create-comment" class="mt-6">
    <h2>Create new comment</h2>
    <livewire:comment-form :commentable="$post"/>
  </div>
</div>
