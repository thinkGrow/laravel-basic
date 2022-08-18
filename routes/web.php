<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuitarsController;

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


Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/about',[HomeController::class, 'about'])->name('home.about');
Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');

// this means all of the routes will be based on /guitars/cre,edit etc. 
Route::resource('guitars', GuitarsController::class);


// Route::get('/', function () {
//     return '<h1> hello laravel </h1>'; //view('welcome');
// });

// Route::get('/about', function () {
//     return '<h1> find out about me </h1>'; //view('welcome');
// });

// strip_tags are used so that malicious people cannot manipulate using information from the URL
// Route::get('/store', function() {
//     $category= request('category');

//     if (isset($category)) {
//         return 'you are viewing the store for ' . strip_tags($category);
//     }
//     return 'you are viewing all instruments';
    
// });

Route::get('/store/{category?}/{item?}', function($category = null, $item = null) { 
    //question marks in the line above are there so that empty values can be given access to
    //curly braces above is for dynamic URL
    
    if (isset($category)) {

        if (isset($item)) {
            return "you are viewing the store for {$category} for {$item}";
        }

        return 'you are viewing the store for ' . strip_tags($category);
    }

    return 'you are viewing all instruments';
    
});

Route::get('/dbconn', function()
{
    return view('dbconn');
});
