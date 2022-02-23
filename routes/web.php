<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\RegisterController;
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

    Route::get('/reister', [RegisterController::class, 'create']);
    Route::get('/reister', [RegisterController::class, 'store']);


/* CRUD routes */

    Route::get('/create', function () {
        return view('createProject');
    });

    Route::get('/edit/{id?}', [ProjectController::class, 'show']);

    Route::post('/update/{id}', [ProjectController::class, 'update']);

    Route::any('store', [ProjectController::class, 'store']);

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
