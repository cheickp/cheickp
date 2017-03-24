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

Route::get('/', function () {
    return view('welcome');
});

/**
 *
 */
Route::get('maPage','\App\Http\Controllers\MapageController@index');
/**
 *
 */
Route::get('polymeres/add', function (){
    return view('polymeres.add');
})->name('addPolymers');
/**
 *
 */
Route::get('polymeres/edit', function (){
    return view('polymeres.add');
})->name('editPolymers');
/**
 *
 */
Route::get('polymeres/list', function (){
    return view('polymeres.list');
})->name('listPolymers');

Auth::routes();

Route::get('/home', 'HomeController@index');
