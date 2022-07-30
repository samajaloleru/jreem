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
// Route::group(['middleware'=>"web"],function(){
    // Route::get('auth/login', [AuthController::class, 'login'])->name('auth.login');
    // Route::get('auth/register', [AuthController::class, 'register'])->name('auth.register');
    
    
    Route::get('/', 'App\Http\Controllers\PagesController@index')->name('home');
    Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
    Route::get('/shop', 'App\Http\Controllers\PagesController@shop')->name('shop');
    Route::get('/category/shop/{id}', 'App\Http\Controllers\PagesController@product_by_category')->name('product_by_category');
    Route::get('/product/{id}', 'App\Http\Controllers\PagesController@view_product')->name('view_product');
    Route::get('/blogs', 'App\Http\Controllers\PagesController@blog')->name('blog');
    Route::get('/blog/{id}', 'App\Http\Controllers\PagesController@fetch_blog')->name('fetch.blog');
    Route::get('/service', 'App\Http\Controllers\PagesController@service')->name('service');
    Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');
    
    Route::get('/checkout', 'App\Http\Controllers\PagesController@checkout')->name('checkout');
    // Route::get('/show_cart', 'App\Http\Controllers\PagesController@show_cart')->name('show.cart');

    Route::get('/cart', 'App\Http\Controllers\CartController@cartList')->name('cart.list');
    Route::get('/cart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('cart.store');
    Route::post('/cart', 'App\Http\Controllers\CartController@updateCartItem')->name('cart.update');
    Route::post('/remove', 'App\Http\Controllers\CartController@removeCart')->name('cart.remove');
    Route::post('/clear', 'App\Http\Controllers\CartController@clearAllCart')->name('cart.clear');
    
    Route::group(['middleware'=>['AuthCheck']],function(){
        Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('auth.login');
        Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('auth.register');
        Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('auth.logout');
        
        Route::post('/login', 'App\Http\Controllers\AuthController@form_login');
        Route::post('/register', 'App\Http\Controllers\AuthController@form_register');
        
        Route::get('/dashboard', 'App\Http\Controllers\UserController@index')->name('dashboard');
        
        // Start Admin Blog Routes
        Route::get('/dashboard/blogs', 'App\Http\Controllers\BlogController@index')->name('dashboard.blogs')->middleware('is_admin');
        Route::get('/dashboard/blog/create', 'App\Http\Controllers\BlogController@create_blog')->name('dashboard.blog.create')->middleware('is_admin');
        Route::post('/dashboard/blog/create', 'App\Http\Controllers\BlogController@save_blog')->middleware('is_admin');
        Route::get('/dashboard/blog/{id}','App\Http\Controllers\BlogController@show_blog')->name('dashboard.blog.edit')->middleware('is_admin');
        Route::post('/dashboard/blog/{id}','App\Http\Controllers\BlogController@edit_blog')->middleware('is_admin');
        Route::get('/dashboard/blog/activate-blog/{id}','App\Http\Controllers\BlogController@activate_blog')->name('blog.activate')->middleware('is_admin');
        Route::get('/dashboard/blog/deactivate-blog/{id}','App\Http\Controllers\BlogController@deactivate_blog')->name('blog.deactivate')->middleware('is_admin');
        // End Admin Blog Routes
        
        // Start Admin Category Routes
        Route::get('/dashboard/categories', 'App\Http\Controllers\CategoryController@index')->name('dashboard.categories')->middleware('is_admin');
        Route::get('/dashboard/category/create', 'App\Http\Controllers\CategoryController@create_category')->name('dashboard.category.create')->middleware('is_admin');
        Route::post('/dashboard/category/create', 'App\Http\Controllers\CategoryController@save_category')->middleware('is_admin');
        Route::get('/dashboard/category/{id}','App\Http\Controllers\CategoryController@show_category')->name('dashboard.category.edit')->middleware('is_admin');
        Route::post('/dashboard/category/{id}','App\Http\Controllers\CategoryController@edit_category')->middleware('is_admin');
        Route::get('/dashboard/category/activate-category/{id}','App\Http\Controllers\CategoryController@activate_category')->name('category.activate')->middleware('is_admin');
        Route::get('/dashboard/category/deactivate-category/{id}','App\Http\Controllers\CategoryController@deactivate_category')->name('category.deactivate')->middleware('is_admin');
        // End Admin Category Routes
        
        // Start Admin Product Routes
        Route::get('/dashboard/products', 'App\Http\Controllers\ProductController@index')->name('dashboard.products')->middleware('is_admin');
        Route::get('/dashboard/product/create', 'App\Http\Controllers\ProductController@create_product')->name('dashboard.product.create')->middleware('is_admin');
        Route::post('/dashboard/product/create', 'App\Http\Controllers\ProductController@save_product')->middleware('is_admin');
        Route::get('/dashboard/product/{id}','App\Http\Controllers\ProductController@show_product')->name('dashboard.product.edit')->middleware('is_admin');
        Route::post('/dashboard/product/{id}','App\Http\Controllers\ProductController@edit_product')->middleware('is_admin');
        Route::get('/dashboard/product/activate-product/{id}','App\Http\Controllers\ProductController@activate_product')->name('product.activate')->middleware('is_admin');
        Route::get('/dashboard/product/deactivate-product/{id}','App\Http\Controllers\ProductController@deactivate_product')->name('product.deactivate')->middleware('is_admin');

        Route::get('/dashboard/product/activate-product_color/{id}','App\Http\Controllers\ProductController@activate_product_color')->name('product_color.activate')->middleware('is_admin');
        Route::get('/dashboard/product/deactivate-product_color/{id}','App\Http\Controllers\ProductController@deactivate_product_color')->name('product_color.deactivate')->middleware('is_admin');
        
        Route::get('/dashboard/product/activate-product_size/{id}','App\Http\Controllers\ProductController@activate_product_size')->name('product_size.activate')->middleware('is_admin');
        Route::get('/dashboard/product/deactivate-product_size/{id}','App\Http\Controllers\ProductController@deactivate_product_size')->name('product_size.deactivate')->middleware('is_admin');
       
        Route::get('/dashboard/product/activate-product_image/{id}','App\Http\Controllers\ProductController@activate_product_image')->name('product_image.activate')->middleware('is_admin');
        Route::get('/dashboard/product/deactivate-product_image/{id}','App\Http\Controllers\ProductController@deactivate_product_image')->name('product_image.deactivate')->middleware('is_admin');
        // End Admin Product Routes
    });