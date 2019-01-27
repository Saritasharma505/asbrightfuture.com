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

Route::get('/', 'logincontroller@index');
Route::get('/dashboard', 'logincontroller@dashboard');
Route::get('/member', 'membercontroller@member');
Route::get('/view_member', 'membercontroller@viewmember');
Route::get('/tree', 'treecontroller@tree');
Route::get('/kyc', 'kyccontroller@kyc');

/*

Route::get('/id/{id}/{name}', function($id,$name){

	return $id.$name;

});*/