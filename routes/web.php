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
Route::get('/events', 'App\Http\Controllers\Web\HomeController@events')->name('events.home');
Route::get('/events/{id}', 'App\Http\Controllers\Web\HomeController@eventDatas')->whereNumber('id')->name('events.datas');
Route::get('/resources', 'App\Http\Controllers\Web\HomeController@resources')->name('resources.home');
Route::get('/resources/{entity}', 'App\Http\Controllers\Web\HomeController@resourceEntity')->name('resources.entity.home');
Route::get('/resources/{entity}/{id}', 'App\Http\Controllers\Web\HomeController@resourceEntityDatas')->whereNumber('id')->name('resources.entity.datas');
Route::get('/donate', 'App\Http\Controllers\Web\HomeController@donate')->name('donate');

require __DIR__.'/auth.php';
