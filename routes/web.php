<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatatanPerjalananController;
use App\Models\CatatanPerjalanan;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware("auth");
Route::get('/catper', [CatatanPerjalananController::class, 'index'])->name('catper')->middleware("auth");
Route::get('/new', [CatatanPerjalananController::class, 'getCatatanPerjalanan'])->name('catper.new')->middleware('auth');
Route::post('/post', [CatatanPerjalananController::class, 'postCatatanPerjalanan'])->name('catper.post')->middleware('auth');
Route::get('/user', [CatatanPerjalananController::class, 'getUserInfo'])->name('user')->middleware("auth");
Route::get('/edit', [CatatanPerjalananController::class, 'getUserEdit'])->name('user.edit')->middleware('auth');
Route::put('/update/{id}', [CatatanPerjalananController::class, 'postUpdateUser'])->name('user.update')->middleware('auth');


