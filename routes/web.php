<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

// Route group for authenticated users
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource(
       'product-category',
        \App\Http\Controllers\ProductCategoryController::class
     );

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class
    );
});
Route::GET('/properties', 'App\Http\Controllers\ProductController@index');

// Route for properties (accessible to all users)


use App\Http\Controllers\PropertyController;

// Route::get('/properties', [PropertyController::class, 'index'])->name('properties');

Route::get('/', function () {
    return view('home');
});

//admin


Route::get('/admin', function () {
    return view('admin.home');
});

Route::GET('/store', 'App\Http\Controllers\ProductController@store');
Route::POST('/store', 'App\Http\Controllers\ProductController@store');

Route::get('/creste', function () {
    return view('admin.product.create');
});


Route::GET('/showallproduct', 'App\Http\Controllers\ProductController@show');

Route::get('/creste', function () {
    return view('admin.product.create');
});

Route::get('/properties/search', [PropertyController::class, 'search'])->name('properties.search');


//edit , delete
Route::get('/properties/{id}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');

Route::GET('edit/{id}', 'App\Http\Controllers\ProductController@edit');

Route::post('update/{id}', [ProductController::class, 'update'])->name('update');


//user
Route::GET('/users', 'App\Http\Controllers\UserController@index');

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

//admin



Route::get('/admin', 'App\Http\Controllers\DashboardController@view');


Route::GET('/store', 'App\Http\Controllers\UserController@store');
Route::GET('/users', 'App\Http\Controllers\UserController@show');

Route::get('contact', function () {
    return view('/contact');
});

Route::get('searchproduct', 'App\Http\Controllers\ProductController@searchproduct');
Route::get('product-list', 'App\Http\Controllers\ProductController@productAjax');


//user
Route::get('users', 'App\Http\Controllers\UserController@users');
Route::get('view-user/{id}', 'App\Http\Controllers\UserController@viewUser');
Route::get('edit-user/{id}', 'App\Http\Controllers\UserController@editUser');
Route::get('edituser/{id}', 'App\Http\Controllers\UserController@updateUser');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/deleteuser/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::GET('/createuser', 'App\Http\Controllers\UserController@create');

Route::post('/userstore', [UserController::class, 'store']);


//orders
Route::get('orders', 'App\Http\Controllers\OrderController@index');
    Route::get('view-orderadmion/{id}', 'App\Http\Controllers\OrderController@viewOrder');
    Route::get('orderadmion/{id}', 'App\Http\Controllers\OrderController@viewOrder');
    Route::put('order-update/{id}', 'App\Http\Controllers\OrderController@update');
    Route::get('orderhistory', 'App\Http\Controllers\OrderController@orderhistory');



