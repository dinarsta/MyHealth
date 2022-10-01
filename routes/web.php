<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatatanPerjalananController;
use App\Models\CatatanPerjalanan;
use Illuminate\Auth\Events\Login;

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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/catper', [CatatanPerjalananController::class, 'index'])->name('catper')->middleware('auth');
Route::get('/new', [CatatanPerjalananController::class, 'getCatatanPerjalanan'])->name('catper.new')->middleware('auth');
Route::post('/post', [CatatanPerjalananController::class, 'postCatatanPerjalanan'])->name('catper.post');
Route::get('/user', [CatatanPerjalananController::class, 'getUserInfo'])->name('user')->middleware('auth');
Route::get('/edit', [CatatanPerjalananController::class, 'getUserEdit'])->name('user.edit')->middleware('auth');
Route::put('/update/{id}', [CatatanPerjalananController::class, 'postUpdateUser'])->name('user.update');

Route::group(['middleware' => ['auth', 'hakakses:admin']], function(){
    Route::get('/tableuser', [CatatanPerjalananController::class, 'getDataUser'])->name('tableuser')->middleware('auth');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'postLogin'])->name('loginuser');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'postRegister'])->name('registeruser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



