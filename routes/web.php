<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ViewprojectController;

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
    return view('home');
});

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/contactme', function () {
    return view('contactme');
});

Route::get('/signup', function () {
    return view('user.signup');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/project', function () {
    return view('user.project');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


// USER
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/postLogin', [UserController::class, 'postLogin']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/regis', [UserController::class, 'regis']);
Route::post('/regis', [UserController::class, 'postRegis']);

// PROJECT
Route::group(['middleware' => ['auth']], function () {
    Route::get('/project', [ProjectController::class, 'index']);
    Route::get('/project/create', [ProjectController::class, 'create']);
    Route::post('/project/create', [ProjectController::class, 'store']);
    Route::get('/project/edit/{id}', [ProjectController::class, 'edit']);
    Route::post('/project/edit/{id}', [ProjectController::class, 'update']);
    Route::get('/project/delete/{id}', [ProjectController::class, 'destroy']);
    
    Route::get('/dashboard', [DashboardController::class, 'index']);
});


Route::get('/', [ProjectController::class, 'show'])->name('home');
Route::get('/viewproject', [ViewprojectController::class, 'index'])->name('project.index');
Route::get('/{project:title}', [ViewprojectController::class, 'show'])->name('project.show');
