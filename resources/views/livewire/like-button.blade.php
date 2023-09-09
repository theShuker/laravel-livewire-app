<button class="@if($likeable->getUserLike()) bg-green-500 hover:bg-green-500 @endif" wire:click="toggleLike">🧡 ({{ $likeable->likes->count() }})</button>
