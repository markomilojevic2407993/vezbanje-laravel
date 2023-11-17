<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
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
Route::post('/addOcene', [HomeController::class, 'add']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/delete{ocena}', [Admin::class, 'delete']);

Route::get('admin/add', [Admin::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
