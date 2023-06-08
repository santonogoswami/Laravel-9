<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
   //return str("hello Devloper")->append("enjoy laravel 9")->upper();
   throw new \Exception('exceptions');
    return view('welcome');
})->name('home');
Route::get('/test-redirect',function(){
    return to_route('home');
}); 

Route::controller(PostController::class)->group(function(){
    Route::get('save','save');
    Route::get('data','data');
});
