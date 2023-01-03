<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
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

Route::get('/home', [RegisterController::class, 'index']);

Route::get('register', [RegisterController::class, 'create']);
Route::post('register-group', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'create']);
Route::post('login-group', [LoginController::class, 'login']);

Route::get('create-member', [MemberController::class, 'create']);
Route::post('store-member', [MemberController::class, 'store']);

Route::get('create-leader', [LeaderController::class, 'create'])-> name('create-leader');
Route::post('store-leader', [LeaderController::class, 'store'])-> name('store-leader');
Route::get('show-leader/{id}', [LeaderController::class, 'show']);
