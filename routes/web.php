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


// NOTES:
// ->name('example.example'); ---> This gives the Route a specific name
// you can list these names out from the terminal with ```php artisan route:list```
// It is "best practice" according to Piotr to always give your routes names
// You can write Regex constraints... 
// which are basically just validations on the route prior to hitting the controller... good security feature
// These are done with the ->where() if you want them to be Route specific... you can also do this in:
// RouteServiceProvider.php

// TODO:
// Go through and write routes for all the basic functionality that I will want to do.
// Be sure to include defaults if you want to make optional paramters
// practice Regex writing
// Add as many validations as make sense
// Be sure to define a naming convention for your routes and be sure to name all Routes.
// Pages to view...
//      
//      
// API Routes to define
//      
//      