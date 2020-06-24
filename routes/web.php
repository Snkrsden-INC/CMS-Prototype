<?php

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Http;
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
    return view('landing');
})->name('landing');


Route::resource('products', 'ProductsController');
Route::resource('categories', 'CategoriesController');


//    Route::get('/test', function() {
//       return view('test');
//    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Trashed Products Route
Route::get('trashed-products', 'ProductsController@trashed')->name('trashed-products.index');
