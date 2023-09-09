<div>
  <h1>Create new post</h1>
  <form class="form mt-5" wire:submit.prevent="store">
    <div class="form-control">
      <label for="title">Title</label>
      <input type="text" id="title" wire:model="title">
    </div>
    <div class="form-control">
      <label for="content">Content</label>
      <textarea id="content" wire:model="content"></textarea>
    </div>
    <button type="submit">Create</button>
  </form>
</div>
