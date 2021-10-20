<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
*/

// ROUTE:  home
// DESC:   returns the main page of the application
Route::get('/', function () {
    return view('welcome.blade.php', ['name' => 'Rob']);
})->name('home.index');

// ROUTE:  category
// METHOD: get, post
// PARAMS: id (optional)
Route::match(['get', 'post'], '/category/{id?}', function ($id=null) {
    return 'get, post 1 category... ' + $id;
})->name('single.category');

// ROUTE:  categories
// METHOD: get
Route::get('/categories', function () {
    return 'get all categories... ';
})->name('multiple.categories');

// ROUTE:  month
// METHOD: get, post
// PARAMS: id (optional)
Route::match(['get', 'post'], '/month/{id?}', function ($id=null) {
    return 'get, post 1 month... ' + $id;
})->name('single.month');

// ROUTE:  months
// METHOD: get
Route::get('/months', function () {
    return 'get all months... ';
})->name('multiple.months');

// ROUTE:  transaction
// METHOD: get, post
// PARAMS: id (optional)
Route::match(['get', 'post'], '/transaction/{id?}', function ($id=null) {
    return 'get, post 1 transaction... ' + $id;
})->name('single.transaction');

// ROUTE:  transactions
// METHOD: get
// PARAMS: monthid (optional)
//         categoryid (optional)
Route::get('/transactions', function() {
    return 'get all transactions... ';
})->name('multiple.transactions');
