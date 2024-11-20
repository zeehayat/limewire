<?php

namespace App\Livewire\Category;


use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class Addcategory extends Component
{
    public $category_name;
    public $description;
    public function save(Request $request){

        Category::create([
           'CategoryName'=>$this->category_name,
            'Description'=>$this->description
        ]);
        return redirect()->route('categories');
    }
    public function render()
    {
        return view('livewire.category.addcategory')->extends('home')->section('content');;
    }
}
