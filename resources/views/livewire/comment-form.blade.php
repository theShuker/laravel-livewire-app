<div>
  <form wire:submit.prevent="create">
    <textarea wire:model="text" class="w-100 block mb-2"></textarea>
    <button wire:loading.attr="disabled" type="submit">Submit comment</button>
  </form>
</div>
