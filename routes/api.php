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

////////////// Emad Routes /////////////
Route::group(['prefix' => 'v1/parents', 'namespace' => 'API'], function () {

    Route::post('login', 'ParentLoginController@index');

});

Route::group(['prefix' => 'v1/students', 'namespace' => 'API'], function () {

    // Route::get('/{id}/location', function () {
    //     return response()->json(['lng' => '31.2001', 'lat' => '29.9187']);
    // });

    Route::group(['middleware' => 'auth:parent_api'], function () {

    	Route::get('{id}/location','BusTrackingController@index');
	
	});
});

Route::group(['prefix' => 'v1/buses', 'namespace' => 'API'], function () {

    Route::post('login', 'BusLoginController@index');

    Route::group(['middleware' => 'auth:bus_api'], function () {
    	
    	Route::post('post-location', 'BusTrackingController@store');

	});

});

////////////// End Emad Routes /////////////


Route::post('login', 'API\PassportController@login');
Route::post('register', 'API\PassportController@register');

Route::middleware('auth:api')->group(function () {
    Route::get('user', 'API\PassportController@details');


});
