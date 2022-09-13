<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseCon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SlidersController;

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
    return view('dashboard');
});
// Route::get('/fontawesome', function () {
//     return view('fontawesome');
// });
// Route::get('/blank', function () {
//     return view('blank');
// });
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/map-google', function () {
    return view('map-google');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/add category', function () {
    return view('addCategory');
});
Route::get('/sliders', function () {
    return view('sliders');
});
Route::get('/addSliders', function () {
    return view('addSliders');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// get users data 
Route::get('/user', [UseCon::class, 'index']);

// Edit Uesr 
Route::get('edit-user/{id}', [UseCon::class, 'edit']);
Route::put('update-user/{id}', [UseCon::class, 'update']);

// Delete Uesr 
Route::get('delete-user/{id}', [UseCon::class, 'destroy']);

Route::post('User', [App\Http\Controllers\UseCon::class, 'store']);

// ================================================================

// Add Category

Route::get('add-category', [CategoryController::class, 'create']);
Route::post('add-category', [CategoryController::class, 'store']);


// Route::post('add-category', [App\Http\Controllers\CategoryController::class, 'store']);

Route::get('/category', [CategoryController::class, 'index']);



// ====================================================================
// ADD Sliders 

Route::get('add-sliders', [SlidersController::class, 'create']);
Route::post('add-sliders', [SlidersController::class, 'store']);


Route::get('sliders', [SlidersController::class, 'index']);