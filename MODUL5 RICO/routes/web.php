<?php

use App\Http\Controllers\Crudcontroller;
use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\UserController;
use App\Models\showroom;
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
Route::get('/itemdetail/{id}', function ($id) {
    $data = showroom::find($id);
    return view('itemdetail', ['data' => $data]);
});
Route::get('/myitem', function () {
    $data = showroom::all();
    $count = $data->count();
    return view('myitem', ['data' => $data, 'count' => $count]);
});
Route::get('/profile', function () {
    return view('profile');
});

Route::post('additem', [ShowroomController::class, 'store']);
Route::put('itemdetail/{id}', [ShowroomController::class, 'update']);
Route::get('deletedetail/{id}', [ShowroomController::class, 'destroy']);

Route::put('profile/{id}', [UserController::class, 'update']);

Route::post('register', [UserController::class, 'store']);
Route::post('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);
