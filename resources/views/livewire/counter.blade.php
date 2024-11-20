<div class="flex place-content-center items-center">
    <h1 class="inline-block text-4xl flex place-content-around">{{ $count }}</h1>

    <button class="m-5 p-3 bg-amber-300 hover:bg-amber-500 rounded shadow-2xl text-2xl" wire:click="increment">+</button>

    <button class="m-5 p-3 bg-blue-300 hover:bg-blue-500 rounded shadow-2xl text-2xl" wire:click="decrement">-</button>
</div>
