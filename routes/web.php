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
Route::get('/',  function() {
    return view('home', []);
})->name('template.home');

// ROUTE:  expenses
// DESC:   returns information about an expense when id is given
Route::get('/expenses/{id?}',  function($id) {
    // obviously you would make this data driven... rather than just creating the data in the Route here...
    // this is literally just practice to show how you can get data from the Route -> Template
    $expenses = [
        1 => [
            'date' => '10/30/2021',
            'location' => 'Target',
            'amount' => '10.71'
        ],
        2 => [
            'date' => '10/31/2021',
            'location' => 'Costco Optical',
            'amount' => '25.80'
        ],
        3 => [
            'date' => '10/31/2021',
            'location' => 'Costco',
            'amount' => '63.26'
        ],
        4 => [
            'date' => '10/31/2021',
            'location' => 'Costco Foodcourt',
            'amount' => '4.31'
        ]
    ];

    // abort validation if the ID doesn't exist
    abort_if(!isset($expenses[$id]), 404);
    return view('expenses.show', ['expense' => $expenses[$id]]);
})->name('template.expenses.show');

// ROUTE:  category
// METHOD: get, post
// PARAMS: id (optional)
Route::match(['get', 'post'], '/category/{id?}', function ($id=null) {
    return 'get, post 1 category... ' . $id;
})->name('api.category');

// ROUTE:  categories
// METHOD: get
Route::get('/categories', function () {
    return 'get all categories... ';
})->name('api.categories');

// ROUTE:  month
// METHOD: get, post
// PARAMS: id (optional)
Route::match(['get', 'post'], '/month/{id?}', function ($id=null) {
    return 'get, post 1 month... ' . $id;
})->name('api.month');

// ROUTE:  months
// METHOD: get
Route::get('/months', function () {
    return 'get all months... ';
})->name('api.months');

// ROUTE:  transaction
// METHOD: get, post
// PARAMS: id (optional)
Route::match(['get', 'post'], '/transaction/{id?}', function ($id=null) {
    return 'get, post 1 transaction... ' . $id;
})->name('api.transaction');

// ROUTE:  transactions
// METHOD: get
// PARAMS: monthid (optional)
//         categoryid (optional)
Route::get('/transactions', function() {
    return 'get all transactions... ';
})->name('api.transactions');

// ROUTE:  Demo Blade Template
Route::get('/demo', function() {
    return view('demo', []);
})->name('template.demo');