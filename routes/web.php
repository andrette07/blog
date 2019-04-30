<?php

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

Route::get('/', 'pagesController@index');

Route::get('photos', 'pagesController@photos')->name('Photos');

Route::get('blog', 'pagesController@blog')->name('Blog');

Route::get('nosotros/{name?}', 'pagesController@nosotros')->name('Nosotros');
