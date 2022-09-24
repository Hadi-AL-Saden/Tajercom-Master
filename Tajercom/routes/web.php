<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UseCon;
use App\Http\Controllers\UesrProfileEdit;
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


Route::get('/redirects',[HomeController::class, 'index']);


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

// Fetch-Category-TO-Home-Page
Auth::routes();
Route::get('/redirects', [App\Http\Controllers\HomeController::class, 'category_Show']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'category_Show']);




















// ===================================================================================================================================================
// Admin-Dash-Borad-Rout's

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