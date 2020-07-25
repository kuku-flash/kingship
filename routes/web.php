<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/', function () {
    return view('welcome');
});



Route::get('/index', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');
Route::get('/cars', 'PagesController@cars')->name('cars');
Route::get('/carlist', 'PagesController@carlist')->name('carlist');
Route::get('/car_detail', 'PagesController@car_detail')->name('car_detail');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/blog', 'PagesController@blog')->name('blog');


Route::get('/insights', 'ClientsPagesController@insights')->name('insights');
Route::get('/profile_settings', 'ClientsPagesController@profile_settings')->name('profile_settings');
Route::get('/my_ads', 'ClientsPagesController@my_ads')->name('my_ads');
Route::get('/messages', 'ClientsPagesController@messages')->name('messages');
Route::get('/payments', 'ClientsPagesController@payments')->name('payments');
Route::get('/favourites', 'ClientsPagesController@favourites')->name('favourites');
Route::get('/privacy_settings', 'ClientsPagesController@privacy_settings')->name('privacy_settings');

