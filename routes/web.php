<?php

use App\Livewire\Book;
use App\Livewire\Hire;
use App\Livewire\Home;
use App\Livewire\Join;
use App\Livewire\Appoint;
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

Route::get('/', Home::class);

Route::get('/appointment', Appoint::class);

Route::get('/hire', Hire::class);

Route::get('/book', Book::class);

Route::get('/join', Join::class);

