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

Route::get('/', 'HomeController@index')->name('homepage');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');

Route::get('/index/two/', 'HomeController@indexTwo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::post('/admin/add/gallery', 'AdminController@storeGallery')->name('admin.add.gallery');
Route::delete('/gallery/{gallery}', 'GalleryController@destroy')->name('admin.delete.gallery');

Route::get('/admin/company/create', 'CompanyController@create')->name('admin.add.company');
Route::post('/admin/company', 'CompanyController@store')->name('admin.store.company');