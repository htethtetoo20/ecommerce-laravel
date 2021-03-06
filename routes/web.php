<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', function () {
    Session::forget("user");
    return redirect('/');
});
Route::post("/login",[UserController::class,"login"]);
Route::post("/register",[UserController::class,"register"]);
Route::get("/",[ProductController::class,"index"]);
Route::get("/detail/{id}",[ProductController::class,"detail"]);
Route::get("/search",[ProductController::class,"search"]);
Route::post("/cart",[ProductController::class,"add_to_cart"]);
Route::get("/cart-list",[ProductController::class,"cartList"]);
Route::get("/remove/{id}",[ProductController::class,"remove"]);
Route::get("/orderNow",[ProductController::class,"orderNow"]);
Route::post("/orderPlace",[ProductController::class,"orderPlace"]);
Route::get("/order",[ProductController::class,"order"]);
