<div class="">
    {{-- Care about people's approval and you will be their prisoner. --}}
    @foreach ($categories as $cat)
        <div wire:key="{{ $cat->categoryID }}" class="grid grid-cols-2 gap-2">
           <span class="bg-gray-400 m-5 p-5 rounded shadow-2xl "> {{$cat->CategoryName}}</span>
            <span class="bg-orange-400 m-5 p-5 rounded shadow-2xl">{{$cat->Description}}</span>
        </div>
    @endforeach
    {{$categories}}
</div>
