<?php

use App\Livewire\Category\Addcategory;
use App\Livewire\Category\Allcategory;
use App\Livewire\Category\Showcategory;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/counter', Counter::class);
Route::get('/category/{id}', Showcategory::class);
Route::get('/categories', Allcategory::class)->name('categories');
Route::get('/add-category', Addcategory::class)->name('add-category');
Route::get('/category', function () {
    return view('home');
});
//Route::resource('/category',\App\Http\Controllers\CategoryController::class);
