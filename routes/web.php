<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;

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

Route::view('/user', 'user', ['id' => 20]);

Route::get('/product/{slug}/{id}', function ($slug, $id) {
    return $id . '----' . $slug;
});

Route::get('/post/{id}', [PostController::class, 'detail']);
Route::resource('user', UserController::class);

Route::get('user/add', [UserController::class, 'create']);
