<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/biodata', function (){
    return view ('biodata', [
        'nama' => 'Saya',
        'alamat' => 'Cimahi',
        'hobi' => 'Basket'
    ]);
});
    Route::get('/jumlah', function (){
    return 4*4;
});

//menampilkan tampilan login
Route::get('/login', [LoginController::class, 'index']);
