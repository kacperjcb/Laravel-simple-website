<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
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
    return view('welcome');
});
Route::get('/omnie', function () {
    return view('omnie');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/ksiegagosci', function () {
    return view('ksiegagosci');

});
Route::get('/edit', function () {
    return view('edit');

});

Route::get('/ksiegagosci',[TodoListController::class, 'index'])->name('index');
Route::post('/ksiegagosci',[TodoListController::class, 'store'])->name('store');
Route::get('{todolist:id}/edit',[TodoListController::class, 'edit'])->name('edit');
Route::put('{todolist:id}/', [TodoListController::class, 'update'])->name('update');;
Route::delete('/ksiegagosci/{todolist:id}',[TodoListController::class, 'destroy'])->name('destroy');
