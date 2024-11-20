<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Showcategory extends Component
{
    public Category $category;
    public function mount($id){
        $this->category=Category::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.category.showcategory')->extends('home')->section('content');
    }
}
