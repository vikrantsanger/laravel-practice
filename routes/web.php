<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\membercontroller;

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
// Route::view('list','list');
Route::get('list',[membercontroller::class, 'list']);
Route::get('delete/{id}',[membercontroller::class, 'delete']);
Route::get('edit/{id}',[membercontroller::class, 'show']);
Route::post('edit',[membercontroller::class, 'update']);
