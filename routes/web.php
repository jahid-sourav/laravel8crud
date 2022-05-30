<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    'uses' => '\App\Http\Controllers\ViewController@index',
    'as' => '/',
]);



Route::group(['middleware' => ['auth:sanctum', 'verified']], function (){
    Route::get('/dashboard', [
        'uses' => '\App\Http\Controllers\admin\AdminController@index',
        'as' => 'dashboard',
    ]);
    Route::get('/add-brand', [
        'uses' => '\App\Http\Controllers\admin\AdminController@addBrand',
        'as' => 'add-brand',
    ]);
    Route::post('/create-brand', [
        'uses' => '\App\Http\Controllers\admin\AdminController@createBrand',
        'as' => 'create',
    ]);
    Route::get('/manage-brand', [
        'uses' => '\App\Http\Controllers\admin\AdminController@manageBrand',
        'as' => 'manage-brand',
    ]);
    Route::get('/edit-brand/{id}', [
        'uses' => '\App\Http\Controllers\admin\AdminController@editBrand',
        'as' => 'edit-brand',
    ]);
    Route::post('/update-brand', [
        'uses' => '\App\Http\Controllers\admin\AdminController@updateBrand',
        'as' => 'update-brand',
    ]);
    Route::get('/delete-brand/{id}', [
        'uses' => '\App\Http\Controllers\admin\AdminController@deleteBrand',
        'as' => 'delete-brand',
    ]);
});