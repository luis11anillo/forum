<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowThreads;
use App\Http\Livewire\ShowThread;

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

Route::get('/', ShowThreads::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/thread/{thread}', ShowThread::class)
    ->middleware(['auth', 'verified'])
    ->name('thread');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('threads', ThreadController::class)->except([
        'show', 'index', 'destroy'
    ]);
});

require __DIR__.'/auth.php';
