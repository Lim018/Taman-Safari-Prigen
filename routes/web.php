<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CuacaController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserActivityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GempaController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\ContentController                          ;

Route::get('/', function () {
    return view('guest');
});

Route::get('/landing-page', [AuthController::class, 'landing'])->name('landing-page');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard2', [AuthController::class, 'dashboard2'])->name('dashboard2');

    Route::get('/users', [ManagementController::class, 'indexUser'])->name('management.users.index');
    Route::get('/users/create', [ManagementController::class, 'createUser'])->name('management.users.create');
    Route::post('/users/store', [ManagementController::class, 'storeUser'])->name('management.users.store');
    Route::get('/users/edit/{id}', [ManagementController::class, 'editUser'])->name('management.users.edit');
    Route::post('/users/update/{id}', [ManagementController::class, 'updateUser'])->name('management.users.update');
    Route::delete('/users/delete/{id}', [ManagementController::class, 'deleteUser'])->name('management.users.delete');

    Route::get('/userdatatables', [testcontroller::class, 'index'])->name('users.index');
    Route::get('/userdatatables/data', [testcontroller::class, 'getUsersData'])->name('users.data');

    // Roles routes
    Route::get('/roles', [ManagementController::class, 'indexRole'])->name('management.roles.index');
    Route::get('/roles/create', [ManagementController::class, 'createRole'])->name('management.roles.create');
    Route::post('/roles/store', [ManagementController::class, 'storeRole'])->name('management.roles.store');
    Route::get('/roles/{id}/edit', [ManagementController::class, 'editRole'])->name('management.roles.edit');
    Route::post('/roles/{id}/update', [ManagementController::class, 'updateRole'])->name('management.roles.update');
    Route::delete('/roles/{id}', [ManagementController::class, 'deleteRole'])->name('management.roles.delete');

    // Menus routes
    Route::get('/menus', [ManagementController::class, 'indexMenu'])->name('management.menus.index');
    Route::get('/menus/create', [ManagementController::class, 'createMenu'])->name('management.menus.create');
    Route::post('/menus/store', [ManagementController::class, 'storeMenu'])->name('management.menus.store');
    Route::get('/menus/edit/{id}', [ManagementController::class, 'editmenu'])->name('management.menus.edit');
    Route::post('/menus/{id}/update', [ManagementController::class, 'updatemenu'])->name('management.menus.update');
    Route::delete('/menus/{id}', [ManagementController::class, 'deletemenu'])->name('management.menus.delete');

    // Submenu route
    Route::get('/submenus', [ManagementController::class, 'indexsubMenu'])->name('management.submenus.index');
    Route::get('/submenus/create', [ManagementController::class, 'createsubMenu'])->name('management.submenus.create');
    Route::post('/submenus/store', [ManagementController::class, 'storesubMenu'])->name('management.submenus.store');
    Route::get('/submenus/edit/{id}', [ManagementController::class, 'editsubmenu'])->name('management.submenus.edit');
    Route::post('/submenus/{id}/update', [ManagementController::class, 'updatesubmenu'])->name('management.submenus.update');
    Route::delete('/submenus/{id}', [ManagementController::class, 'deletesubmenu'])->name('management.submenus.delete');

    //setting
    Route::get('/settings', [ManagementController::class, 'indexsetting'])->name('management.settings.index');
    Route::get('/settings/create', [ManagementController::class, 'createsetting'])->name('management.settings.create');
    Route::post('/settings/store', [ManagementController::class, 'storesetting'])->name('management.settings.store');
    Route::delete('/settings/{id}', [ManagementController::class, 'deletesetting'])->name('management.settings.delete');

    //posts
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::post('/posts/{post}/like', [LikeController::class, 'toggle'])->name('posts.like');
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    // routes/web.php
    Route::post('/download-stock', [AuthController::class, 'downloadStock'])->name('download.stock');

    Route::resource('content', ContentController::class);

});
