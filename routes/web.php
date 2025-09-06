<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.login');
});


Route::post('/admin/save', [AdminsController::class, 'save'])->name('admin.save');
Route::post('/admin/check', [AdminsController::class, 'check'])->name('admin.check');
Route::get('/admin/logout', [AdminsController::class, 'logout'])->name('admin.logout');
Route::get('/admin/profileview', [AdminsController::class, 'profile'])->name('admin.profileview');
Route::get('/admin/profileedit', [AdminsController::class, 'edit'])->name('admin.profileedit');
Route::get('/admin/login', [AdminsController::class, 'login'])->name('admin.login');
Route::get('/admin/profile', [AdminsController::class, 'profile'])->name('admin.profile');
Route::get('/admin/register', [AdminsController::class, 'register'])->name('admin.register');
Route::get('/admin/chats', [AdminsController::class, 'chats'])->name('admin.chats');
Route::get('/admin/dashboard', [AdminsController::class, 'dashboard'])->name('admin.dashboard');
Route::put('/admin/updateProfile', [AdminsController::class, 'updateProfile'])->name('admin.updateProfile');


// Users Controller
Route::post('/user/save', [UsersController::class, 'save'])->name('user.save');
Route::post('/user/check', [UsersController::class, 'check'])->name('user.check');
Route::get('/user/logout', [UsersController::class, 'logout'])->name('user.logout');
Route::get('/user/profile', [UsersController::class, 'profile'])->name('user.profile');
Route::get('/user/login', [UsersController::class, 'login'])->name('user.login');
Route::get('/user/profile', [UsersController::class, 'profile'])->name('user.profile');
Route::get('/user/register', [UsersController::class, 'register'])->name('user.register');
Route::get('/user/profileview', [UsersController::class, 'profile'])->name('user.profileview');
Route::get('/user/profileedit', [UsersController::class, 'edit'])->name('user.profileedit');
Route::get('/user/chats', [UsersController::class, 'chats'])->name('user.chats');
Route::put('/user/updateProfile', [UsersController::class, 'updateProfile'])->name('user.updateProfile');
Route::get('/user/dashboard', [UsersController::class, 'dashboard'])->name('user.dashboard');



// Chats Controller
Route::get('/admin/fetch-messages', [ChatsController::class, 'fetchMessages'])->name('admin.fetchMessages');
Route::post('/admin/send-message', [ChatsController::class, 'sendMessage'])->name('admin.sendMessage');

Route::get('/fetch-messages', [ChatsController::class, 'fetchMessagesFromUserToAdmin'])->name('fetch.messagesFromSellerToAdmin');
Route::post('/send-message', [ChatsController::class, 'sendMessageFromUserToAdmin'])->name('send.Messageofsellertoadmin');


// Fallback Route
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
