<?php

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

//use DB;

Route::get('/', function () {
    return view('login.login');
});
Route::post('sotreservices', 'AdminPanel\ServicesAdminController@StoreServices');
Route::put('changeactivaity/{id}', 'AdminPanel\ServicesAdminController@ChangeActivaity');
Route::put('updated_services/{id}', 'AdminPanel\ServicesAdminController@UpdateServices');
Route::put('changeservicezoneprice/{id}', 'AdminPanel\ServicesAdminController@ChangeServiceZonePrice');
Route::post('createservicescity', 'AdminPanel\ServicesAdminController@CreateServicesCity')->middleware('apilang');
Route::post('createserviceszone', 'AdminPanel\ServicesAdminController@CreateServicesZone')->middleware('apilang');
Route::get('services', 'AdminPanel\ServicesAdminController@index');
Route::get('services_prices', 'AdminPanel\ServicesAdminController@services_price_index');
Route::get('services_zone/{id}', 'AdminPanel\ServicesAdminController@services_zone_index');
Route::get('addservices', 'AdminPanel\ServicesAdminController@addservicesindex');
Route::get('updateservice/{id}', 'AdminPanel\ServicesAdminController@updateserviceindex');
Route::get('allservices', 'AdminPanel\ServicesAdminController@GetServices')->middleware('apilang');
Route::get('allserviceswithcityandzones', 'AdminPanel\ServicesAdminController@GetServicesZones')->middleware('apilang');
Route::get('getservicestoupdated/{id}', 'AdminPanel\ServicesAdminController@GetServicesForUpdated')->middleware('apilang');
Route::get('getServicesCity/{id}', 'AdminPanel\ServicesAdminController@GetServicesCity')->middleware('apilang');
Route::get('serviceszone/{id}', 'AdminPanel\ServicesAdminController@ServicesZone')->middleware('apilang');
Route::get('getServicesZone/{id}', 'AdminPanel\ServicesAdminController@getServicesZone')->middleware('apilang');

/* contact us*/


Route::get('contact_us', 'AdminPanel\ContactUsController@index');
Route::get('contactus', 'AdminPanel\ContactUsController@GetContacts')->middleware('apilang');
Route::post('createcontact', 'AdminPanel\ContactUsController@CreateNewContacts')->middleware('apilang');
Route::post('updatecontact/{id}', 'AdminPanel\ContactUsController@UpdateContact')->middleware('apilang');
Route::delete('deleteContact/{id}', 'AdminPanel\ContactUsController@DeleteContact');

/*end*/

/*social media*/
Route::get('social_media', 'AdminPanel\SocialMediaController@SocialMeidaIndex');
Route::get('socialmedia', 'AdminPanel\SocialMediaController@GetSocialMedia');
Route::put('updatesoicamedia/{id}', 'AdminPanel\SocialMediaController@UpdateSocialMedia');
/*end*/

/*services tersm condtions*/
Route::get('services_terms', 'AdminPanel\ServicesTermsCondtionsController@ServicesCondtionsIndex');
Route::get('servicesterms', 'AdminPanel\ServicesTermsCondtionsController@GetServicesTermsConditions')->middleware('apilang');
Route::put('updated_services_terms/{id}', 'AdminPanel\ServicesTermsCondtionsController@UpdateTermsCondtions');
/*end*/