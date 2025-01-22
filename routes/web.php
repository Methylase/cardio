<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PhotoController;
use App\Http\Middleware\TestMiddleware;
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
})->name('welcome');

Route::get('/me', function () {
    return 'hey you saw it';
});

/*Route::match(['get', 'post'], '/', function(){
    return 'hey you saw me ';
})->name('home');*/

Route::any('/here/{id}/mill/{name}', function($id, $name){
    return 'hey you saw me '.$id.' '.$name;
});


Route::get('/test',  [TestController::class, 'test'])->name('test');
Route::post('/test',  [TestController::class, 'test'])->name('test');

/*Route::get('/test/{id}',  [TestController::class, 'test'])->where('id', '[0-9]+')->middleware('test:admin')->name('test');*/

Route::resource('/photo', PhotoController::class);
/*Route::apiResource('photo', PhotoController::class);*/