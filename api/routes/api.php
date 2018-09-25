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
use App\tourpackage;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('demo_api','ApiController@api_demo');

//Route::get('demo_api',['middleware'=>'auth:api','uses'=>'ApiController@api_demo']);


/*Tourist Table*/ 
Route::get('tourist', 'TouristController@index');       //list
Route::get('tourist/{id}', 'TouristController@show');    

Route::post('tourist', 'TouristController@store');
Route::put('tourist', 'TouristController@store');
Route::delete('tourist/{id}', 'TouristController@destroy');

/*TourPackage Table*/

Route::get('tourpackage', 'TourpackageController@index');
Route::get('tourpackage/{id}', function($id) { return Tourpackage::find($id);});

Route::post('tourpackage', 'TourpackageController@store');
Route::put('tourpackage', 'TourpackageController@store');
Route::delete('tourpackage/{id}', 'TourpackageController@destroy');

/*Tourist Enquiry table */


Route::get('tourenquiry', 'TouristenquiryController@index');
Route::get('tourenquiry/{id}', 'TouristenquiryController@show');

Route::post('tourenquiry', 'TouristenquiryController@store');
Route::put('tourenquiry', 'TouristenquiryController@store');
Route::delete('tourenquiry/{id}', 'TouristenquiryController@destroy');


/*Tour Booking Table*/ 


Route::get('tourbooking', 'TourbookingController@index');
Route::get('tourbooking/{id}','TourbookingController@show');

Route::post('tourbooking', 'TourbookingController@store');
Route::put('tourbooking', 'TourbookingController@store');
Route::delete('tourbooking/{id}', 'TourbookingController@destroy');



/* users table*/ 
Route::group([
    'prefix' => 'auth'

], function () {
    Route::get('index', 'AuthController@index');
    Route::post('push', 'AuthController@store');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

/* admin*/

// Route::group([
//     'prefix' => 'auth'

// ], function () {

//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });