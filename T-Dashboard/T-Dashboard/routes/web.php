<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseCon;
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
Route::get('/fontawesome', function () {
    return view('fontawesome');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/map-google', function () {
    return view('map-google');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/map-google', function () {
    return view('map-google');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// get users data 
Route::get('/user', [UseCon::class, 'index']);

// Edit Uesr 
// Route::get('students', [StudentController::class, 'index']);
Route::get('edit-user/{id}', [UseCon::class, 'edit']);
Route::put('update-user/{id}', [UseCon::class, 'update']);

// Delete Uesr 
Route::get('delete-user/{id}', [UseCon::class, 'destroy']);


Route::post('User', [App\Http\Controllers\UseCon::class, 'store']);