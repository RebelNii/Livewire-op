<?php

use App\Http\Controllers\LessonsController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('setup.setup');
})->name('/');

Route::get('/cal', [LessonsController::class, 'cal'])->name('cal');
Route::get('/todo', [LessonsController::class, 'todo'])->name('todo');
Route::get('/drop', [LessonsController::class, 'drop'])->name('drop');
Route::get('/search', [LessonsController::class, 'search'])->name('search');
Route::get('/upload', [LessonsController::class, 'upload'])->name('upload');
Route::get('/register', [LessonsController::class, 'register'])->name('register');
