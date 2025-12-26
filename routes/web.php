<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\UserTaskController;


/*
|--------------------------------------------------------------------------
| Public Routes (NO LOGIN)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/dashboard');
});

/**
 * Dashboard WITHOUT login
 */

// Route::get('/dashboard', function () {
//     return view('dashboard'); // ✅ dashboard.blade.php
// })->name('dashboard');





Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/roi-income', [IncomeController::class, 'roiIncome'])->name('roi.income');
Route::get('/daily-referral-income', [IncomeController::class, 'dailyReferralIncome'])->name('daily.referral.income');
    
Route::get('/level-income', [IncomeController::class, 'levelIncome']) ->name('level.income');

Route::get('/active-user', function () {
    return view('active_user'); // ✅ active_user.blade.php
})->name('active.user');


Route::get('/pending-user', function () {
    return view('pending_user'); // ✅ pending_user.blade.php
})->name('pending.user');



Route::get('/pending-deposite', [IncomeController::class, 'pendingDeposit']) ->name('pending.deposite');

Route::get('/reject-deposite', [IncomeController::class, 'rejectDeposit']) ->name('reject.deposite');

Route::get('/approval-deposite', [IncomeController::class, 'approveDeposit']) ->name('approval.deposite');



Route::get('/pending-withdrawal', [IncomeController::class, 'pendingWithdrawal']) ->name('pending.withdrawal');

Route::get('/reject-withdrawal', [IncomeController::class, 'rejectWithdrawal']) ->name('reject.withdrawal');

Route::get('/approval-withdrawal', [IncomeController::class, 'approvalWithdrawal']) ->name('approval.withdrawal');


Route::get('/change-password', [UserTaskController::class, 'changePassword']) ->name('change.password');





/*
|--------------------------------------------------------------------------
| Protected Routes (LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/tasks', [AdminController::class, 'tasks'])->name('tasks');
    Route::get('/tasks/create', [AdminController::class, 'createTask'])->name('create_task');
    Route::post('/tasks', [AdminController::class, 'storeTask'])->name('store_task');
 
    Route::get('/daily-tasks', [AdminController::class, 'dailyTasks'])->name('daily_tasks');
    Route::get('/daily-tasks/create', [AdminController::class, 'createDailyTask'])->name('create_daily_task');
    Route::post('/daily-tasks', [AdminController::class, 'storeDailyTask'])->name('store_daily_task');



    // Income
    
});

require __DIR__.'/auth.php';
