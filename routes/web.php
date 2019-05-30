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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localizationRedirect', 'localeSessionRedirect']], function () {
    Route::get('/', 'HomeController@index');

});

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/about', 'Dashboard\AboutController@index');
Route::get('/dashboard/works', 'Dashboard\WorksController@index');
Route::get('/dashboard/achievements', 'Dashboard\AchievementsController@index');
Route::get('/dashboard/softwares', 'Dashboard\SoftwaresController@index');
Route::get('/dashboard/calculators', 'Dashboard\CalculatorsController@index');
Route::get('/dashboard/publications', 'Dashboard\PublicationsController@index');
Route::get('/dashboard/contacts', 'Dashboard\ContactsController@index');
Route::put('/dashboard/contacts', 'Dashboard\ContactsController@store')->name('contacts.store');

Route::get('/dashboard/privacy', 'Dashboard\PrivacyController@index');
Route::get('/dashboard/cookiepolicy', 'Dashboard\CookiepolicyController@index');
Route::get('/dashboard/legal', 'Dashboard\LegalController@index');
Route::get('/dashboard/social', 'Dashboard\SocialController@index');

Auth::routes();

Route::post('/dashboard/main', 'DashboardController@update');

Route::resource('dashboard/works', 'Dashboard\WorksController');
Route::resource('dashboard/softwares', 'Dashboard\SoftwaresController');
Route::resource('dashboard/calculators', 'Dashboard\CalculatorsController');
Route::resource('dashboard/publications', 'Dashboard\PublicationsController');
Route::resource('dashboard/achievements', 'Dashboard\AchievementsController');

Route::resource('/dashboard/services', 'Dashboard\ServiceController');

Route::put('/dashboard/service', 'Dashboard\ServiceController@header')->name('serviceheader.update');
Route::put('/dashboard/about', 'Dashboard\AboutController@header')->name('aboutheader.update');
Route::post('/contacts/send', 'HomeController@email')->name('email.send');
Route::resource('/dashboard/about', 'Dashboard\AboutController');

Route::put('/dashboard/privacy', 'Dashboard\PrivacyController@store')->name('privacy.store');
Route::put('/dashboard/cookiepolicy', 'Dashboard\CookiepolicyController@store')->name('cookiepolicy.store');
Route::put('/dashboard/legal', 'Dashboard\LegalController@store')->name('legal.store');
Route::put('/dashboard/social', 'Dashboard\SocialController@store')->name('social.store');