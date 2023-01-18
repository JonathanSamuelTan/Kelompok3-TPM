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

// Route::get('/dashboard', function () {
//     //get id from auth
//     $id = auth()->user()->id;
//     //get leader data base on id
//     $leader = Leader::findOrFail($id);
//     return view('dashboard',compact('leader'));
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('create-leader', [LeaderController::class, 'create'])-> name('create-leader');
Route::post('store-leader', [LeaderController::class, 'store'])-> name('store-leader');
Route::get('/dashboard', [LeaderController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('create-member', [MembersController::class, 'create'])-> name('create-member');
Route::post('store-member', [MembersController::class, 'store'])-> name('store-member');
require __DIR__.'/auth.php';
