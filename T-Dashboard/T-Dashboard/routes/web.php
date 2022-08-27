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
Route::get('/basic-table', function () {
    return view('basic-table');
});
Route::get('/map-google', function () {
    return view('map-google');
});
Route::get('edit-student/{id}', [StudentController::class, 'edit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/basic-table', [UseCon::class, 'index']);

