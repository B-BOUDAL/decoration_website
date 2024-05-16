<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProducthomeController;



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

Route::get('/',[HomeController::class,'index']);
Route::get('/add-cart',[HomeController::class,'shop']);
Route::get('/shop',[HomeController::class,'shop']);
Route::get('/header', function () {
    return view('partials.header');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/about-us',[HomeController::class,'about']);
Route::get('/contact-us', [HomeController::class,'contact']);
// Route::get('/products', function () {
//     return view('products');
//     Route::get('/products', [ProducthomeController::class,'index'])->name('products.index');
Route::get('/products', [ProducthomeController::class,'index'])->name('products.index');


// });
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/chairs', function () {
    return view('chairs');
});
Route::get('/armchairs', function () {
    return view('armchairs');
});
Route::get('/vases', function () {
    return view('vases');
});
Route::get('/rugs', function () {
    return view('rugs');
});
Route::get('/category/{id}',[HomeController::class,'category']);
Route::get('/mirors', function () {
    return view('mirors');
});
Route::get('/paintings', function () {
    return view('paintings');
});
Route::get('/sofas', function () {
    return view('sofas');
});
Route::get('/lamps', function () {
    return view('lamps');
});

Route::get('/register-form', [RegisterController::class,'index'])->name('register.index');
Route::post('/register-form', [RegisterController::class,'store'])->name('register.store');


Route::get('/login-form', [LoginController::class,'index'])->name('login.index');//affiche le form
Route::post('/login', [LoginController::class,'login'])->name('login.login');//login for testing


// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/shop', function () {
//     return view('shop');
// });
// backoffice

// table category------------------------------------------------
Route::get('/admin/category', [CategoryController::class,'index']);
//form view
Route::get('/admin/category/create', [CategoryController::class,'create']);
// stock dans database
Route::post('/admin/category/store', [CategoryController::class,'store']);


// table annonce--------------------------------------------------------
Route::get('/admin/annonce', [AnoController::class,'index']);
//form view
Route::get('/admin/annonce/create', [AnoController::class,'create']);//create and store are methodes
// stock dans database
Route::post('/admin/annonce/store', [AnoController::class,'store']);



// table product----------------------------------------------------------
Route::get('/admin/products', [ProductController::class,'index'])->name('products.index');
Route::get('/admin/products/destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy');
Route::get('/admin/products/edit/{id}', [ProductController::class,'edit'])->name('products.edit');
//form view
Route::get('/admin/products/create', [ProductController::class,'create']);
// stock dans database
Route::post('/admin/products/store', [ProductController::class,'store']);
Route::post('/admin/products/update', [ProductController::class,'update']);



// table category----------------------------------------------------------
Route::get('/admin/category', [CategoryController::class,'index'])->name('category.index');
Route::get('/admin/category/destroy/{id}', [CategoryController::class,'destroy'])->name('category.destroy');
Route::get('/admin/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
//form view
Route::get('/admin/category/create', [CategoryController::class,'create']);
// stock dans database
Route::post('/admin/category/store', [CategoryController::class,'store']);
Route::post('/admin/category/update', [CategoryController::class,'update']);




// table annonces----------------------------------------------------------
Route::get('/admin/annonce', [AnoController::class,'index'])->name('annonce.index');
Route::get('/admin/annonce/destroy/{id}', [AnoController::class,'destroy'])->name('annonce.destroy');
Route::get('/admin/annonce/edit/{id}', [AnoController::class,'edit'])->name('annonce.edit');
//form view
Route::get('/admin/annonce/create', [AnoController::class,'create']);
// stock dans database
Route::post('/admin/annonce/store', [AnoController::class,'store']);
Route::post('/admin/annonce/update', [AnoController::class,'update']);
// add to cart
Route::post('/cart/add', 'CommandeController@addToCart')->name('cart.add');
