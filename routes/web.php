<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\KampusController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('landing');
});

Route::get('/profil', [BlogController::class, 'index']);
Route::get('/kampus', [KampusController::class, 'index']);