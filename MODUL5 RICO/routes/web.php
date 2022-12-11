<?php

use App\Http\Controllers\Crudcontroller;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/additem', function () {
    return view('additem');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/edititem', function () {
    return view('edititem');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/itemdetail', function () {
    return view('itemdetail');
});
Route::get('/myitem', function () {
    return view('myitem');
});
Route::get('/profile', function () {
    return view('profile');
});
    Route::get('myitem',[Crudcontroller::class, 'myitem']);
    Route::get('itemdetail/{id}',[Crudcontroller::class, 'itemdetail']);
    Route::get('itemdetail',[Crudcontroller::class, 'itemdetail']);
    Route::get('additem',[Crudcontroller::class, 'add']);
    Route::get('edititem',[Crudcontroller::class, 'edititem']);
    Route::resource('item',Crudcontroller::class);

