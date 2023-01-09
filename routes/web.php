<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers;
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




Route::get('/', 'MainController@main');

Route::get('/project_birds', 'MainController@project_birds');
Route::get('/project_winter', 'MainController@project_winter');
Route::get('/project_squirrel', 'MainController@project_squirrel');
Route::get('/reviews', 'MainController@reviews')->name('reviews');

Route::post('/reviews/check', 'MainController@reviews_check');



