<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\testcontroller;
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


Route::get('/',function (){
    return view('welcome');
});
Route::get('foo', [testController::class, 'foo'])->middleware('auth');
Route::get('bar', [testController::class,'bar'])->middleware('auth');
//Route::resource('posts', PostController::class)->except('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('foo', [PostController::class,'show']);
//Route::get('bar', [PostController::class,'destroy']);

