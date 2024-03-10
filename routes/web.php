<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContantController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_page',[MyPlaceController::class, 'index']);

Route::group(['namespace'=>'App\Http\Controllers\Post'], function(){
    Route::get('/posts', 'IndexController' )->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.destroy');
});

Route::get('/news',[NewsController::class, 'index']);

//PRODUCTS  routes
Route::group(['namespace'=>'App\Http\Controllers\Product'], function(){
    Route::get('/products','IndexController')->name('product.index');
    Route::get('/products/create','CreateController')->name('product.create');
    Route::post('/products','StoreController')->name('product.store');
    Route::get('/products/{product}','ShowController')->name('product.show');
    Route::get('/products/{product}/edit','EditController')->name('product.edit');
    Route::patch('/products/{product}','UpdateController')->name('product.update');
    Route::delete('/products/{product}','DestroyController')->name('product.destroy');
});


Route::get('/blogs',[BlogController::class, 'index']);
Route::get('/blogs/first_or_create',[BlogController::class, 'firstOrCreate']);
Route::get('/blogs/update_or_create',[BlogController::class, 'updateOrCreate']);

Route::get('/main',[MainController::class, 'index'])->name('main.index');
Route::get('/contacts',[ContantController::class, 'index'])->name('contact.index');
Route::get('/about',[AboutController::class, 'index'])->name('about.index');



