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


Auth::routes(['verify'=> false, 'forgot' => false, 'register' => true]);
Route::get('/', 'GalleryController@index');


Route::get('500', function()
{
    abort(500);
});

        
Route::middleware(['auth'])->group(function () {
    Route::resource('gallery', 'GalleryController')->except(['index', 'show']);
    Route::resource('photo', 'PhotoController')->except(['index', 'show']);
});

Route::resource('gallery', 'GalleryController')->only([
    'index', 'show'
]);
Route::resource('photo', 'PhotoController')->only([
    'index', 'show'
]);

Route::get('/{slug}', 'GalleryController@show');