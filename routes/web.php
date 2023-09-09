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


Route::get('/', 'webController@homepage')->name('homepage');

Route::get('/overview', 'webController@overview')->name('overview');

Route::get('/history', 'webController@viewAbout')->name('about');

Route::get('/trivias', 'webController@viewTrivia')->name('trivia');

Route::get('/population', 'webController@viewPopulation')->name('population');

Route::get('/tourist-information', 'webController@viewTouristInfo')->name('touristInfo');

Route::get('/delicacies', 'webController@viewDelicacies')->name('delicacies');

Route::get('/products', 'webController@viewProducts')->name('products');

Route::get('/contacts', 'webController@viewComments')->name('contacts');

Route::post('/contacts', 'webController@store')->name('comment');

Route::delete('/contacts/{id}', 'webController@destroy')->name('destroy');

