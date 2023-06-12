<?php

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

Route::get('/', function () {
    return view('home', ['title' => "Halaman Home"]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "Halaman About",
        'name' => 'Masdika Ilhan Mansiz',
        'imageUrl' => 'https://avatars.githubusercontent.com/u/93296892?v=4',
        'profesi' => 'Pria Sejati Gagah dan Berani'
    ]);
});
