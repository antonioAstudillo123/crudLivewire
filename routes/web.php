<?php

use App\Livewire\Button;
use App\Livewire\Counter;
use App\Livewire\Docentes;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/counter' , Counter::class);
Route::get('/button' , Button::class);
Route::get('/docentes' , Docentes::class);
