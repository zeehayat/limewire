<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form wire:submit="save" class="">
        <div class="bg-amber-400">


    <div class="grid grid-cols-2 gap-2 m-44 p-10 bg-blue-300">
        <div>
            <label class="bg-amber-100 text-white font-bold p-3">
                Category Name
            </label>

        </div>
        <div>
            <input type="text" name="category_name" wire:model="category_name" class="border ring-2 w-auto m-5 rounded">
        </div>

    </div>
        <div class="grid grid-cols-2 gap-2 m-44 p-10 bg-blue-300">
            <div>
                <label class="bg-amber-100 text-white font-bold p-3">
                    Description
                </label>

            </div>
            <div>
                <textarea class="w-96 h-36 rounded-full border shadow-2xl" name="description" id="description" wire:model="description"></textarea>
            </div>

        </div>
        <div class="grid grid-cols-2 gap-2">
            <div>


            </div>
            <div>
                <button wire:confirm="Are you sure you want to Add?" class="bg-amber-300 p-3 rounded shadow-2xl hover:bg-amber-500">Save</button>
            </div>

        </div>
        </div>
    </form>

</div>
