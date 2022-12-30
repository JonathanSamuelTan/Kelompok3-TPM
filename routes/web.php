<?php

use App\Http\Controllers\GroupController;
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


Route::get('/home', [GroupController::class, 'index']);
Route::get('create-group', [GroupController::class, 'create']);
Route::post('store-group', [GroupController::class, 'store']);
Route::get('create-member', [MemberController::class, 'create']);
Route::post('store-member', [MemberController::class, 'store']);
Route::get('create-Leader', [LeaderController::class, 'create']);
Route::post('store-Leader', [LeaderController::class, 'store']);