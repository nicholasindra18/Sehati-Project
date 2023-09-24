<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::post('/', [LoginController::class, 'logout']);

// GUEST
Route::middleware(['guest'])->group(function() {
   Route::get('/', [GuestController::class, 'showGuestPage']);
   Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login');
   Route::post('/login', [LoginController::class, 'login']);
   Route::get('/login/forgot-password', [LoginController::class, 'showForgotPassword']);
   Route::post('/login/forgot-password', [LoginController::class, 'forgotPassword']);
   Route::get('/reset-password/{id}', [LoginController::class, 'showResetPassword'])->name('resetPassword');
   Route::put('/reset-password/{id}', [LoginController::class, 'resetPassword']);
   Route::get('/reset-password-success', [LoginController::class, 'resetPasswordSuccess'])->name('resetPasswordSuccess');
   Route::get('/register', [RegisterController::class, 'showRegisterPage']);
   Route::post('/register', [RegisterController::class, 'register']);
});

// USER
Route::middleware(['role:0'])->prefix('/user')->group(function() {
   Route::get('/', [UserController::class, 'showUserPage']);
   Route::get('/product-detail/{id}', [UserController::class, 'showProductDetail'])->name('productDetail');
   Route::post('/product-detail/{id}', [UserController::class, 'handleUserAction']);
   Route::get('/payment-confirmation/{id}', [UserController::class, 'paymentConfirmation'])->name('paymentConfirmation');
   Route::delete('/payment-confirmation/{transactionDetail}', [UserController::class, 'cancelTransaction']);
   Route::get('/payment-success', [UserController::class, 'paymentSuccess']);
   Route::get('/favorite', [UserController::class, 'showFavorite']);
   Route::delete('/product-detail/{id}', [UserController::class, 'removeFavoriteFromProductDetail']);
   Route::delete('/favorite', [UserController::class, 'removeFavoriteFromFavoritePage']);
   Route::get('/transaction', [UserController::class, 'showTransaction'])->name('userTransaction');
   Route::put('/transaction', [UserController::class, 'updateTransactionStatus']);
   Route::get('/transaction/transaction-detail/{id}', [UserController::class, 'showTransactionDetail']);
   Route::get('/profile', [UserController::class, 'showUserProfile']);
   Route::get('/profile/update-profile', [UserController::class, 'editProfile']);
   Route::put('/profile/update-profile', [UserController::class, 'updateProfile']);
   Route::get('/profile/update-profile-success', [UserController::class, 'updateProfileSuccess'])->name('updateProfileSuccess');
   Route::get('/profile/change-password', [UserController::class, 'showchangePasswordPage']);
   Route::put('/profile/change-password', [UserController::class, 'changePassword']);
   Route::get('/profile/change-password-success', [UserController::class, 'changePasswordSuccess'])->name('changePasswordSuccess');
});

// ADMIN
Route::middleware(['role:1'])->prefix('admin')->group(function() {
   Route::get('/', [AdminController::class, 'showAdminPage'])->name('admin');
   Route::put('/', [AdminController::class, 'updateTransactionStatus']);
   Route::get('/add-obat', [AdminController::class, 'showAddobatForm']);
   Route::post('/add-obat', [AdminController::class, 'createobat']);
   Route::get('/add-obat/add-obat-success', [AdminController::class, 'addobatSuccess'])->name('addobatSuccess');
   Route::get('/edit-obat/{id}', [AdminController::class, 'showobatDetail']);
   Route::get('/update-obat/{id}', [AdminController::class, 'showEditobatForm']);
   Route::put('/update-obat/{obat}', [AdminController::class, 'updateobat']);
   Route::get('/update-obat-success', [AdminController::class, 'updateobatSuccess'])->name('updateobatSuccess');
   Route::get('/delete-obat/{id}', [AdminController::class, 'showDeleteobatConfirmation']);
   Route::delete('/delete-obat/{obat}', [AdminController::class, 'deleteobat']);
   Route::get('/delete-obat-success', [AdminController::class, 'deleteobatSuccess'])->name('deleteobatSuccess');
});

