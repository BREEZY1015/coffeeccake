<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
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

Route::get('/', [Pagescontroller::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', [UserController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('users');


Route::get('/announcement', [AnnouncementController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('announcement');

Route::get('/announcement/add', [AnnouncementController::class, 'create'])
        ->middleware(['auth', 'verified'])
        ->name('announcement.add.view');
Route::post('/announcement/add', [AnnouncementController::class, 'store'])
        ->middleware(['auth', 'verified']);
Route::get('/announcement/update/{id}', [AnnouncementController::class, 'show'])
        ->middleware(['auth', 'verified']);
Route::post('/announcement/update/{id}', [AnnouncementController::class, 'update'])
        ->middleware(['auth', 'verified']);
 Route::get('/announcement/delete/{id}', [AnnouncementController::class, 'destroy'])
        ->middleware(['auth', 'verified']);
// Route::delete('/announcement/delete/{id}', [AnnouncementController::class, 'destroy'])
//         ->middleware(['auth', 'verified']);









Route::get('/users/add', [UserController::class, 'form'])
        ->middleware(['auth', 'verified']);
Route::post('/users/add', [UserController::class, 'store'])
        ->middleware(['auth', 'verified']);

Route::get('/users/update/{id}', [UserController::class, 'show'])
        ->middleware(['auth', 'verified']);
Route::post('/users/update/{id}', [UserController::class, 'update'])
        ->middleware(['auth', 'verified']);

Route::get('/users/delete/{id}', [UserController::class, 'delete'])
        ->middleware(['auth', 'verified']);
// Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])
//         ->middleware(['auth', 'verified']);

Route::get('/notify',[\App\Http\Controllers\UserController::class, 'notify']);    
//Route::get('/markasred/{id}',[\App\Http\Controllers\UserController::class, 'markasread'])->name('markasred');     

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';