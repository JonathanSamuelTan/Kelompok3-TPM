<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\MembersController;
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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('create-leader', [LeaderController::class, 'create'])-> name('create-leader')
-> middleware('auth');

Route::post('store-leader', [LeaderController::class, 'store'])-> name('store-leader')
-> middleware('auth');

Route::get('/dashboard', [LeaderController::class, 'show'])->middleware(['auth', 'verified'])
-> name('dashboard')
-> middleware('auth');

Route::get('create-member', [MembersController::class, 'create'])
-> name('create-member')
-> middleware('auth');

Route::post('store-member', [MembersController::class, 'store'])
-> name('store-member')
-> middleware('auth');
require __DIR__.'/auth.php';
