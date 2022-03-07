<?php
use App\Http\Controllers\ProjectController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

use App\Models\Project;
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
/* home route */
Route::get('/', function () {
    
        return view('projects',['projects'=> Project::all()]);
});




/* register a user */

    Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');

    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

    Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');

    Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

    Route::any('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

    Route::get('/forgot-password',[ForgotPasswordController::class, 'getPassword'])->middleware('guest')->name('password.request');
  
    Route::post('/forgot-password',[ForgotPasswordController::class, 'store'])->middleware('guest')->name('password.email');

    Route::get('/reset-password/{token}',[ResetPasswordController::class, 'resetPassword'])->middleware('guest')->name('password.reset');
  
    Route::post('/reset-password',[ResetPasswordController::class, 'store'])->middleware('guest');

    /* CRUD routes */

        Route::get('/create', function () {
            return view('createProject');
        })->middleware('auth');

        Route::get('/edit/{id?}', [ProjectController::class, 'show'])->middleware('auth');

        Route::post('/update/{id}', [ProjectController::class, 'update'])->middleware('auth');

        Route::any('store', [ProjectController::class, 'store'])->middleware('auth');

        //Route::any('/delete/{id}', [ProjectController::class, 'delete'])->name('delete');


// Nav routes */
    Route::get('/skills', function () {
        return view('skills');
    });
    Route::get('/resume', function () {
        return view('resume');
    });
    Route::get('/bannerAds', function () {
        return view('bannerAds');
    });
    Route::get('/animations', function () {
        return view('animations');
    });
    Route::get('/blog', function () {
        return view('blog');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/tech', function () {
        return view('tech');
    });
    Route::get('/codeEx', function () {
        return view('codeEx');
    });
