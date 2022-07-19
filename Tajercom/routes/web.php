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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('./index');
});
Route::get('/index.html', function () {/*===========>>Home */
    return view('./index');
});

Route::get('/shop.html', function () {/*===========>>Shop */
    return view('./shop');
});

Route::get('/detail.html', function () {/*===========>>detail */
    return view('./detail');
});

Route::get('/contact.html', function () {/*===========>>contact */
    return view('./contact');
});

Route::get('/checkout.html', function () {/*===========>>checkout */
    return view('./checkout');
});

Route::get('/cart.html', function () {/*===========>>cart */
    return view('./cart');
}); 
