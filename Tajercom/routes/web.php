<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UseCon;
use App\Http\Controllers\UesrProfileEdit;
use App\Http\Controllers\shop;
use App\Http\Controllers\ProductAdminCcontroller;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\navController;

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

// Route::get('/redire', function () {/*===========>>Home */
//     return view('./index');
// });
Route::get('/', function () {/*===========>>Home */
    return view('/index');
});


Route::get('/redirect',[HomeController::class, 'index']);








Route::get('/shop', [shop::class, 'shop']);

Route::get('/detail/{id}', [shop::class, 'item']);

Route::get('/contact.html', function () {/*===========>>contact */
    return view('./contact');
});

Route::get('/checkout.html', function () {/*===========>>checkout */
    return view('./checkout');
});

// Route::get('/cart.html', function () {/*===========>>cart */
//     return view('./cart');
// });
// Route::get('/Home', function () {/*===========>>cart */
//     return view('./home');
// });

Route::get('/product', function () {/*===========>>product */
    return view('./product');
})->middleware('auth');


Route::get('/userProfiles', function () {/*===========>>userProfiles */
    return view('./userProfiles');
});
Route::get('/userProfileEidt', function () {/*===========>>userProfileEidt */
    return view('./userProfileEidt');});

// ===============>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



// Route::resource('userProfileEidt', [UesrProfileEdit::class, 'update']);
// Route::resource('userProfileEidt', UesrProfileEdit::class, 'index');
Route::post('update-user/{id}', [UesrProfileEdit::class, 'update']);
// update image and market name
Route::post('update-user-img/{id}', [UesrProfileEdit::class, 'update_image']);





// ===============>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// ========================================================>
//Add Product 

Route::get('product', [ProductController::class, 'index']);
Route::get('add-product', [ProductController::class, 'create']);
Route::post('add-product', [ProductController::class, 'store']);



// ========================================================>
// Route::get('/redirect', [App\Http\Controllers\CategoryController::class, 'category_Show']);
Route::get('/', [App\Http\Controllers\CategoryController::class, 'category_Show']);
Route::get('/index', [App\Http\Controllers\CategoryController::class, 'category_Show']);
// Fetch-Category-TO-Home-Page
Auth::routes();





















// ===================================================================================================================================================
// Admin-Dash-Borad-Rout's

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/user', function () {
    return view('admin.user');
});

Route::get('/category', function () {
    return view('admin.category');
});

Route::get('/add category', function () {
    return view('admin.addCategory');
});

Route::get('/sliders', function () {
    return view('admin.sliders');
});

Route::get('/addSliders', function () {
    return view('admin.addSliders');
});
Route::get('/item', function () {
    return view('admin.item');
});


// ================================================================

// Add Category

Route::get('add-category', [CategoryController::class, 'create']);//=========Add category

Route::post('add-category', [CategoryController::class, 'store']);//=========insert category

Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);//=========delete category

Route::get('category', [CategoryController::class, 'index']); //=========Fetch category

Route::get('edit-category/{id}', [CategoryController::class, 'edit']);//=========edit category

Route::put('update-category/{id}', [CategoryController::class, 'update']);//=========update category


// ================================================================

//Users

Route::get('/user', [UseCon::class, 'index']); //=========Fetch User's

Route::get('edit-user/{id}', [UseCon::class, 'edit']);
Route::put('update-user/{id}', [UseCon::class, 'update']);
// Delete Uesr 
Route::get('delete-user/{id}', [UseCon::class, 'destroy']);

Route::post('User', [App\Http\Controllers\UseCon::class, 'store']);


// ================================================================
// Product Admin

Route::get('/item', [ProductAdminCcontroller::class, 'index']);

Route::get('delete-product/{id}', [ProductAdminCcontroller::class, 'destroy']);

// ====================================================================
// ADD Sliders 
Route::get('/sliders', [SlidersController::class, 'index']);
Route::get('add-sliders', [SlidersController::class, 'create']);
Route::post('add-sliders', [SlidersController::class, 'store']);

Route::get('delete-sliders/{id}', [SlidersController::class, 'destroy']);
// ====================================================================


// Route::get('nav', [SlidersController::class, 'category_Show']);