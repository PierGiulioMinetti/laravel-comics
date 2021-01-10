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

// METODO A

// Route::get('/', function () {

//     $comics = config('comics');
//     // dd($comics);
//     // compact è l'equivalente di  'comics'=> $comics
    

//     return view('home', compact('comics'));
// })->name('home');

// *****************
// METODO B

// HOMEPAGE
Route::get('/', 'HomeController@index')->name('home');

// COMIC DETAIL
Route::get('/comic/{slug}', 'ComicController@show')->name('comic-detail');
