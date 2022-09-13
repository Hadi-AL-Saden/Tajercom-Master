<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;




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
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {/*===========>>Home */
    return view('./index');
});

Route::get('/shop', function () {/*===========>>Shop */
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
// Route::get('/Home', function () {/*===========>>cart */
//     return view('./home');
// });

Route::get('/product', function () {/*===========>>product */
    return view('./product');
})->middleware('auth');


Route::get('/user', function () {/*===========>>product */
    return view('./userProfiles');
});
// ========================================================>



Route::get('product', [ProductController::class, 'index']);
Route::get('add-product', [ProductController::class, 'create']);
Route::post('add-product', [ProductController::class, 'store']);



// ========================================================>
Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomeController::class, ' __construct']);



// ===========================================================
// Route::get('/contact', [ContactController::class, 'contact']);
// Route::get('M_status', [ContactController::class, 'senEmail'])->name('contact.send');

