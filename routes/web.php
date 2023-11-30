<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\kalkulatorController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\UploadController;


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


Route::group(['middleware' => 'auth'], function () {

	Route::get('/', [HomeController::class, 'home'])->name('beranda');
	Route::get('beranda', function () {
		return view('beranda');
	})->name('beranda');

	Route::get('admin', function () {
		return view('admin');	
	})->name('admin');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	//ADMIN - User Management
	Route::get('/user-management', [adminController::class, 'show'])->middleware('role:admin');
	// ADD USER
	Route::get('/user-management/add', [adminController::class, 'addUserForm'])->middleware('role:admin');
	Route::post('/user-management', [adminController::class, 'addUser'])->middleware('role:admin');
	
	//
	Route::get('kalkulator', function () {
		return view('kalkulator/kalkulator');
	})->name('kalkulator');

	Route::get('detail', function () {
		return view('kalkulator/detail');
	})->name('detail');

	Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

	Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

	Route::get('/upload-lahan', [uploadController::class, 'index'])->name('upload-lahan');

	Route::get('upload-drone', function () {
		return view('upload-drone');
	})->name('upload-drone');

	Route::delete('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
	Route::get('/login', function () {
		return view('beranda');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', [RegisterController::class, 'create']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [SessionsController::class, 'create']);
	Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
	return view('session/login-session');
})->name('login');

Route::middleware(['auth'])->group(function () {
	Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
	Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});



Route::resource('kalkulators', kalkulatorController::class);
Route::get('/kalkulators', [KalkulatorController::class, 'index'])->name('kalkulators');

//DetailCOntroller
Route::get('/detail/{id}', [KalkulatorController::class, 'show2']);
Route::get('/sop/{id}', [KalkulatorController::class, 'show3']);



Route::get('hasil', function () {
	return view('kalkulator/hasil');
});

Route::get('/beranda', [HomeController::class, 'home'])->name('beranda');
Route::get('/admin', [adminController::class, 'index'])->name('admin')->middleware('role:admin');
Route::get('/sensor', [SensorController::class, 'LineChart']);

//Upload Gambar lahan
Route::middleware(['auth'])->group(function () {
    Route::get('/uploads/create', [UploadController::class, 'create'])->name('posts.create');
    Route::post('/uploads', [UploadController::class, 'store'])->name('posts.store');
});

Route::resource('uploads', UploadController::class);
Route::get('/uploads', [UploadController::class, 'index'])->name('uploads');


Route::middleware('auth')->group(function () {
    Route::resource('uploads', UploadController::class);
});
