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
Route::post('register', 'JWTAuthController@register')->name('api.jwt.register');
Route::post('login', 'JWTAuthController@login')->name('api.jwt.login');

Route::get('unauthorized', function() {
    return response()->json([
        'status' => 'error',
        'message' => 'Unauthorized'
    ], 401);
})->name('api.jwt.unauthorized');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('user', 'JWTAuthController@user')->name('api.jwt.user');
    Route::get('refresh', 'JWTAuthController@refresh')->name('api.jwt.refresh');
    Route::get('logout', 'JWTAuthController@logout')->name('api.jwt.logout');
});