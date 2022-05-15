<?php


use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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

Route::get('/', [
    'uses'      => 'App\Http\Controllers\LimupaController@index',
    'as'        => '/'
]);


Route::get('/dashboard', [
    'uses'      => 'App\Http\Controllers\DashboardController@index',
    'as'        => 'dashboard',
    'middleware'=>['auth:sanctum', 'verified']
]);



Route::get('/brand-product/{id}', [
    'uses'      => 'App\Http\Controllers\LimupaController@brandProduct',
    'as'        => 'brand-product'
    
]);



Route::get('/brand-name/{id}', [
    'uses'      => 'App\Http\Controllers\LimupaController@brandName',
    'as'        => 'brand-name'
    
]);


Route::get('/product-detail/{id}', [
    'uses'      => 'App\Http\Controllers\LimupaController@productDetail',
    'as'        => 'product-detail',
   
]);



Route::get('/customer-detail', [
    'uses'      => 'App\Http\Controllers\LimupaController@customerDetail',
    'as'        => 'customer-detail',
   
]);


Route::post('/add-to-cart/{id}', [
    'uses'      => 'App\Http\Controllers\CartController@add',
    'as'        => 'cart.add'
]);



Route::get('/show-cart', [
    'uses'      => 'App\Http\Controllers\CartController@show',
    'as'        => 'cart.show'
]);


Route::post('/update-cart/{id}', [
    'uses'      => 'App\Http\Controllers\CartController@update',
    'as'        => 'cart.update'
]);


Route::get('/delete-cart/{id}', [
    'uses'      => 'App\Http\Controllers\CartController@delete',
    'as'        => 'cart.delete'
]);




Route::get('/checkout', [
    'uses'      => 'App\Http\Controllers\CheckoutController@index',
    'as'        => 'checkout'
    
]);


Route::post('/customer/register', [
    'uses'      => 'App\Http\Controllers\CheckoutController@register',
    'as'        => 'customer.register'
    
]);


Route::post('/customer/login', [
    'uses'      => 'App\Http\Controllers\CheckoutController@login',
    'as'        => 'customer.login'
    
]);


Route::get('/login/info', [
    'uses'      => 'App\Http\Controllers\CheckoutController@loginInfo',
    'as'        => 'login.info'    
]);


Route::get('/logout', [
    'uses'      => 'App\Http\Controllers\CheckoutController@logout',
    'as'        => 'logout'
    
]);



Route::get('/checkout/shipping', [
    'uses'      => 'App\Http\Controllers\CheckoutController@shipping',
    'as'        => 'checkout-shipping'
    
]);


Route::post('/new-order', [
    'uses'      => 'App\Http\Controllers\CheckoutController@newOrder',
    'as'        => 'order.new'
]);



Route::get('/complete-order', [
    'uses'      => 'App\Http\Controllers\CheckoutController@index',
    'as'        => 'complete.order'
]);


Route::get('/add-category',[

    'uses' =>'App\Http\Controllers\CategoryController@index',
    'as'  =>'category.add',
    'middleware'=>['auth:sanctum', 'verified']

]);


Route:: get('/manage-category',[
   
    'uses'=>'App\Http\Controllers\CategoryController@manage',
    'as' =>'category.manage',
    'middleware'=>['auth:sanctum', 'verified']

]);


Route::post('/new-category', [

    'uses'      => 'App\Http\Controllers\CategoryController@create',
    'as'        => 'category.new',
    'middleware'=>['auth:sanctum', 'verified']
   
]);

Route::get('edit-category/{id}', [
  'uses' =>'App\Http\Controllers\CategoryController@edit',
  'as' =>'category.edit',
  'middleware'=>['auth:sanctum', 'verified']

]);


Route::post('/update-category/{id}', [
    'uses'      => 'App\Http\Controllers\CategoryController@update',
    'as'        => 'category.update',
    
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::post('/delete-category/{id}', [
    'uses'      => 'App\Http\Controllers\CategoryController@delete',
    'as'        => 'category.delete',
    'middleware'=> ['auth:sanctum', 'verified']
]);




Route::get('/add-sub-category', [
    'uses'      => 'App\Http\Controllers\SubCategoryController@index',
    'as'        => 'subcategory.add',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::get('/manage-sub-category', [
    'uses'      => 'App\Http\Controllers\SubCategoryController@manage',
    'as'        => 'subcategory.manage',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::post('/new-sub-category', [
    'uses'      => 'App\Http\Controllers\SubCategoryController@create',
    'as'        => 'subcategory.new',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::get('/edit-sub-category/{id}', [
    'uses'      => 'App\Http\Controllers\SubCategoryController@edit',
    'as'        => 'subcategory.edit',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::post('/update-sub-category/{id}', [
    'uses'      => 'App\Http\Controllers\SubCategoryController@update',
    'as'        => 'subcategory.update',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::post('/delete-sub-category/{id}', [
    'uses'      => 'App\Http\Controllers\SubCategoryController@delete',
    'as'        => 'subcategory.delete',
    'middleware'=> ['auth:sanctum', 'verified']
]);



Route::get('/add-brand-category', [
    'uses'      => 'App\Http\Controllers\BrandController@index',
    'as'        => 'brand.add',
    'middleware'=>['auth:sanctum', 'verified']
]);


Route::get('/manage-brand-category', [
    'uses'      => 'App\Http\Controllers\BrandController@manage',
    'as'        => 'brand.manage',
    'middleware'=>['auth:sanctum', 'verified']
]);


Route::post('/new-brand-category', [
    'uses'      => 'App\Http\Controllers\BrandController@create',
    'as'        => 'brand.new',
    'middleware'=>['auth:sanctum', 'verified']
]);



Route::get('/edit-brand-category/{id}', [
    'uses'      => 'App\Http\Controllers\BrandController@edit',
    'as'        => 'brand.edit',
    'middleware'=>['auth:sanctum', 'verified']
]);


Route::post('/update-brand-category/{id}', [
    'uses'      => 'App\Http\Controllers\BrandController@update',
    'as'        => 'brand.update',
    'middleware'=>['auth:sanctum', 'verified']
]);


Route::post('/delete-brand-category/{id}', [
    'uses'      => 'App\Http\Controllers\BrandController@delete',
    'as'        => 'brand.delete',
    'middleware'=>['auth:sanctum', 'verified']
]);





Route::get('/add-unit', [
    'uses'      => 'App\Http\Controllers\UnitController@index',
    'as'        => 'unit.add',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::get('/manage-unit', [
    'uses'      => 'App\Http\Controllers\UnitController@manage',
    'as'        => 'unit.manage',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::post('/new-unit', [
    'uses'      => 'App\Http\Controllers\UnitController@create',
    'as'        => 'unit.new',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::get('/edit-unit/{id}', [
    'uses'      => 'App\Http\Controllers\UnitController@edit',
    'as'        => 'unit.edit',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::post('/update-unit/{id}', [
    'uses'      => 'App\Http\Controllers\UnitController@update',
    'as'        => 'unit.update',
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::post('/delete-unit/{id}', [
    'uses'      => 'App\Http\Controllers\UnitController@delete',
    'as'        => 'unit.delete',
    'middleware'=> ['auth:sanctum', 'verified']
]);



Route::get('/add-product', [
    'uses'      => 'App\Http\Controllers\ProductController@index',
    'as'        => 'product.add',
    'middleware'=>['auth:sanctum', 'verified']
]);




Route::post('/new-product', [
    'uses'      => 'App\Http\Controllers\ProductController@create',
    'as'        => 'product.new',
    'middleware'=>['auth:sanctum', 'verified']
]);


Route::get('/get-sub-category-by-id',[


    'uses' => 'App\Http\Controllers\ProductController@getSubcategory',
    'as' => 'product.get-sub-category',
    'middleware' => ['auth:sanctum', 'verified']

]);




Route::get('/manage-product', [
    'uses'      => 'App\Http\Controllers\ProductController@manage',
    'as'        => 'product.manage',
    'middleware'=>['auth:sanctum', 'verified']
]);

Route::get('/edit-product/{id}', [
    'uses'      => 'App\Http\Controllers\ProductController@edit',
    'as'        => 'product.edit',
    'middleware'=>['auth:sanctum', 'verified']
]);


Route::post('/update-product/{id}', [
    'uses'      => 'App\Http\Controllers\ProductController@update',
    'as'        => 'product.update',
    'middleware'=>['auth:sanctum', 'verified']
]);



Route::post('/delete-product/{id}', [
    'uses'      => 'App\Http\Controllers\ProductController@delete',
    'as'        => 'product.delete',
    'middleware'=>['auth:sanctum', 'verified']
]);


Route::get('/manage-order', [
    'uses'      => 'App\Http\Controllers\OrderController@manage',
    'as'        => 'order.manage',
    'middleware'=>['auth:sanctum', 'verified']
]);


Route::get('/order-info/{id}', [
    'uses'      => 'App\Http\Controllers\OrderController@info',
    'as'        => 'order.info',
    'middleware'=>['auth:sanctum', 'verified']
]);
