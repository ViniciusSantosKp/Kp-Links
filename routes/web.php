<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/",[HomeController::class, 'index']);

Route::prefix('/admin')->group(function()
{
    Route::get("/login",[AdminController::class, 'login'])->name('login');
    Route::post("/login",[AdminController::class, 'loginAction'])->name('loginAction');

    Route::get("/register",[AdminController::class, 'register'])->name('register');
    Route::post("/register",[AdminController::class, 'registerAction'])->name('registerAction');

    Route::get('/logout', [AdminController::class, 'logout']);

    Route::get("/",[AdminController::class, 'index']);

    Route::get('/{slug}/links', [AdminController::class, 'pageLinks']);
    Route::get('/{slug}/design', [AdminController::class, 'pageDesign']);

    Route::get('/linkorder/{linkid}/{pos}', [AdminController::class, 'linkOrderUpdate']);

    Route::get('/{slug}/newlink', [AdminController::class, 'newlink']);
    Route::post('/{slug}/newlink', [AdminController::class, 'newlinkAction']);

    Route::get('/{slug}/editLink/{linkid}', [AdminController::class, 'editLink']);
    Route::post('/{slug}/editLink/{linkid}', [AdminController::class, 'editLinkAction']);

    Route::get('/{slug}/deleteLink/{linkid}', [AdminController::class, 'delLink']);
});

Route::get("/{slug}",[PageController::class, 'index']);
