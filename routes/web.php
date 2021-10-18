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

// NOTES:
// ->name('example.example'); ---> This gives the Route a specific name
// you can list these names out from the terminal with ```php artisan route:list```
// It is "best practice" according to Piotr to always give your routes names