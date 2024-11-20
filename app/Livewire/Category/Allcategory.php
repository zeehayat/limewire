<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Allcategory extends Component
{
    public $categories=[];
    public function mount(){
        $this->categories=Category::all();
    }
    public function render()
    {
        return view('livewire.category.allcategory')->extends('home')->section('content');
    }
}
