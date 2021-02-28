<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <button class="bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 p-2 text-white" wire:click="decrement">-</button>
    <span> {{ $count }}</span>
    <button class="bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 p-2 text-white" wire:click="increment">+</button>
</div>
