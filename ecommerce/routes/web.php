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

Route::get('/', [
    'uses' => 'BigStoreController@index',
    'as' => '/',
]);
Route::get('/', [
    'uses' => 'BigStoreController@home',
    'as' => 'home',
]);

Route::get('/code', [
    'uses' => 'BigStoreController@code',
    'as' => 'code',
]);

Route::get('/contact', [
    'uses' => 'BigStoreController@contactUs',
    'as' => 'contact',
]);

Route::get('/Elements-of-kitchen', [
    'uses' => 'BigStoreController@kitchen',
    'as' => 'kitchen',
]);

Route::get('/personal-care', [
    'uses' => 'BigStoreController@care',
    'as' => 'care',
]);

Route::get('/House-hold', [
    'uses' => 'BigStoreController@houseHold',
    'as' => 'hold',
]);

Route::get('/About', [
    'uses' => 'BigStoreController@single',
    'as' => 'single',
]);

Route::get('/Wishlist', [
    'uses' => 'BigStoreController@wishlist',
    'as' => 'wishlist',
]);
Route::get('/login page', [
    'uses' => 'BigStoreController@logIn',
    'as' => 'login',
]);

Route::get('/Register', [
    'uses' => 'BigStoreController@register',
    'as' => 'register',
]);

Route::get('/Order-history', [
    'uses' => 'BigStoreController@orderHistory',
    'as' => 'order',
]);
Route::get('/Shipping', [
    'uses' => 'BigStoreController@shipping',
    'as' => 'shipping',
]);
Route::get('/faqs', [
    'uses' => 'BigStoreController@faqs',
    'as' => 'faqs',
]);
Route::get('/terms', [
    'uses' => 'BigStoreController@termCondition',
    'as' => 'terms',
]);
Route::get('/offer', [
    'uses' => 'BigStoreController@offer',
    'as' => 'offer',
]);