<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function(){
    echo 'Web Shop - Rest API';
});

//AUTH ROUTES
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', 'API\AuthController@register');
    Route::post('login', 'API\AuthController@login');

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    
    //IF USER LOGGED IN
    Route::group(['middleware' => ['jwt.auth']], function() {
        Route::put('update', 'API\ProfileController@update');
        Route::put('password/change', 'API\ProfileController@changePassword');
        Route::get('logout', 'API\AuthController@logout');
        Route::get('me', 'API\AuthController@me');
        Route::post('refresh', 'API\AuthController@refresh');
    });
});

//PRODUCT WITH MIDDLEWARE
Route::group(['middleware' => ['jwt.auth']], function() {
    Route::resource('product', 'API\ProductController', ['except' => ['index', 'show']]);
    Route::resource('product/image', 'API\ProductImageController', ['except' => ['index', 'show']]);
});
//PRODUCT WITHOUT MIDDLEWARE
Route::get('product', 'API\ProductController@index');
Route::get('product/{product}', 'API\ProductController@show');

Route::get('product/image/{image}', 'API\ProductImageController@show');

//CATEGORY
Route::resource('category', 'API\CategoryController');

//SUBCATEGORY
Route::resource('subcategory', 'API\SubCategoryController');

//SUBCATEGORY ATTRIBUTESS
Route::resource('attribute', 'API\AttributeController');
