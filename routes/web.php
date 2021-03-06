<?php

use Illuminate\Support\Facades\Route;

Route::get('/','siteController@index')->name('index');
Route::get('/product','siteController@product')->name('product');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/brand/add-brand','BrandController@add_brand')->name('add-brand');
Route::post('/brand/save-brand','BrandController@save_brand')->name('save_brand');
Route::get('/brand/manage-brand','BrandController@managebrand')->name('manage-brand');
Route::get('/brand/inactive-brand/{id}', 'BrandController@inactive_brand')->name('inactive-brand');
Route::get('/brand/active-brand/{id}','BrandController@active_brand')->name('active-brand');
Route::get('/brand/delete-brand/{id}','BrandController@delete_brand')->name('delete-brand');
Route::get('/brand/edit-brand/{id}','BrandController@edit_brand')->name('edit-brand');
Route::post('/brand/update-brand','BrandController@update_brand')->name('update_brand');
