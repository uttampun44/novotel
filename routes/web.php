<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\Home;
use App\Http\Controllers\RoomsinfoController;
use App\Http\Controllers\RoomcategoryController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Home::class, 'home'])->name('home');
Route::post('/', [Home::class, 'home'])->name('home');

Route::middleware(['auth:web'])->group( function(){
     Route::get('/dashboard', function(){
        return view('dashboard');
     })->name('dashboard');

    Route::get('/roomsinfo', [RoomsinfoController::class, 'roomInfo'])->name('roomsinfo');
    Route::get('/room', [RoomsController::class, 'Rooms'])->name('rooms');
    Route::get('/roomcategory', [RoomcategoryController::class, 'roomcategoryController'])->name('roomcategory');

})->name('roomsgroup');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
