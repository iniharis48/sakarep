<?php

use App\Http\Controllers\contact;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [contact::class, 'index']);

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/detail2', function () {
    return view('detail2');
});

Route::get('/detail3', function () {
    return view('detail3');
});

Route::post('/contact', [contact::class, 'store']);
