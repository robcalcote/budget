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
    return 'Home Page';
})->name('home.index');

// example route that we added as part of the tutorial
Route::get('/contact', function() {
    return 'Contact';
})->name('home.contact');

// example route to show the power of parameters (optional as well with ? + default)
Route::get('/month/{id?}', function($id = '5') {
    return 'Your month id is: ' . $id;
})
// ->where([
//     'id' => '[0-9]+'
// ])
->name('home.month.monthId');
