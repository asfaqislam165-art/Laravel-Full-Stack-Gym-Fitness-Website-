<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, AdminController, TrainerController, ServiceController, ProfileController, FacilityController};

/* Public Routes */
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/trainers', [UserController::class, 'trainers'])->name('trainers');
Route::get('/facilities', [UserController::class, 'facilities'])->name('facilities');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

/* Membership Public Routes */
Route::get('/membership', [UserController::class, 'membershipForm'])->name('membership');
Route::post('/membership', [UserController::class, 'storeMembership'])->name('membership.store');

/* User Dashboard */
Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

/* Profile Routes */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Restricted Admin Panel Routes */
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Trainer CRUD Routes
    Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers.index');
    Route::get('/trainers/add', [TrainerController::class, 'create'])->name('trainers.create');
    Route::post('/trainers/add', [TrainerController::class, 'store'])->name('trainers.store');
    Route::get('/trainers/edit/{id}', [TrainerController::class, 'edit'])->name('trainers.edit');
    Route::post('/trainers/update/{id}', [TrainerController::class, 'update'])->name('trainers.update');
    Route::get('/trainers/delete/{id}', [TrainerController::class, 'destroy'])->name('trainers.destroy');

    // Admin Memberships Management
    Route::get('/memberships', [AdminController::class, 'memberships'])->name('memberships.index');
    Route::post('/memberships/status/{id}', [AdminController::class, 'updateMembershipStatus'])->name('memberships.status');
    Route::get('/memberships/delete/{id}', [AdminController::class, 'destroyMembership'])->name('memberships.destroy');

    // Services Management CRUD
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/add', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services/add', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('/services/update/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('/services/delete/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Facilities Management CRUD
    Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities.index');
    Route::get('/facilities/add', [FacilityController::class, 'create'])->name('facilities.create');
    Route::post('/facilities/add', [FacilityController::class, 'store'])->name('facilities.store');
    Route::get('/facilities/edit/{id}', [FacilityController::class, 'edit'])->name('facilities.edit');
    Route::post('/facilities/update/{id}', [FacilityController::class, 'update'])->name('facilities.update');
    Route::get('/facilities/delete/{id}', [FacilityController::class, 'destroy'])->name('facilities.destroy');
});

require __DIR__.'/auth.php';