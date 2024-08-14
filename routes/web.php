<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TouristAttractionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLogged;
use App\Models\TouristAttraction;
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

Route::GET('/', [UserController::class, 'indexing_welcome_page'])->name('display_welcome_page');

Route::GET('/login', [UserController::class, 'display_login_form'])->name('login');
Route::GET('/register', [UserController::class, 'display_regist_form'])->name('register');
Route::GET('/tentang', [UserController::class, 'display_tentang'])->name('tentang');

//
Route::POST('/login', [AuthController::class, 'login'])->name('login_backend');
Route::GET('/logout', [AuthController::class, 'logout'])->name('logout_backend');
//register
Route::POST('/register', [UserController::class, 'register_account'])->name('register_backend');



//testing
Route::GET('/profile', [UserController::class, 'display_profile'])->name('profile')
->middleware([CheckLogged::class]);

Route::GET('/update/profile', [UserController::class, 'display_update_profile_form'])->name('update_profile')
->middleware([CheckLogged::class]);

Route::PATCH('/update/profile', [UserController::class, 'update_account'])->name('update_backend')
->middleware([CheckLogged::class]);

Route::get('/liburan', [UserController::class, 'indexing_liburan_page'])->name('liburan')
->middleware([CheckLogged::class]);


// Route::get('/detail/{id}', [])
Route::get('/detail/{id}', [UserController::class, 'display_detail_page'])->name('detail')
->middleware([CheckLogged::class]);


//review
Route::get('/liburan/review/{tourist_attraction_id}', [TouristAttractionController::class, 'display_review'])->name('review')
->middleware([CheckLogged::class]);

Route::POST('/liburan/review/masukkan', [PostController::class, 'insert_review'])->name('insert_review')
->middleware([CheckLogged::class]);

Route::PATCH('/liburan/review/edit', [PostController::class, 'postEdit'])->name('post_edit_logic');

Route::delete('/liburan/review/delete/{id}', [PostController::class, 'postDelete'])->name('post_delete_logic');
