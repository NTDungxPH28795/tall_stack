<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Post\CreatePost;
use App\Livewire\Post\Posts;
use App\Livewire\Post\UpdatePost;
use App\Livewire\Product;
use App\Livewire\Todo\Todos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', HomePage::class);
Route::get('/product', Product::class);
Route::get('/posts', Posts::class);
Route::get('/posts/create', CreatePost::class);
Route::get('/posts/edit/{id}', UpdatePost::class);
Route::get('/todos', Todos::class);