<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/language/{locale}', 'App\Http\Controllers\Web\HomeController@changeLanguage')->name('change_language');
Route::get('/', 'App\Http\Controllers\Web\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\Web\HomeController@about')->name('about.home');
Route::get('/about/team', 'App\Http\Controllers\Web\HomeController@team')->name('about.team.home');
Route::get('/about/team/{id}', 'App\Http\Controllers\Web\HomeController@teamDatas')->whereNumber('id')->name('about.team.datas');
Route::get('/ministries', 'App\Http\Controllers\Web\HomeController@ministries')->name('ministry.home');
Route::get('/ministries/{id}', 'App\Http\Controllers\Web\HomeController@ministryDatas')->whereNumber('id')->name('ministry.datas');
Route::get('/discography', 'App\Http\Controllers\Web\HomeController@discography')->name('discography.home');
Route::get('/discography/{entity}', 'App\Http\Controllers\Web\HomeController@discographyEntity')->name('discography.entity.home');
Route::get('/discography/{entity}/{id}', 'App\Http\Controllers\Web\HomeController@discographyEntityDatas')->whereNumber('id')->name('discography.entity.datas');
Route::get('/donate', 'App\Http\Controllers\Web\HomeController@donate')->name('donate');

require __DIR__.'/auth.php';
