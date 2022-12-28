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
    return view('home',[
        'name' => 'Ardiansyah',
    'turn' => 'pertama',
    'hobi' => ['Gacha','Game','Membaca','Ngaji']
]);
});

Route::get('/profil', function () {
    return view('profil');
});


// jika membuat route memungkinkan banyak fungsi <<--
/* Route::get('/kontak', function () {
    return view('kontak');
}); */

// jika sekedar menampilkan view saja
 // Route::view('/kontak', 'kontak');

 Route::view('/kontak', 'kontak');

 Route::redirect('/profil','/profil-us');
