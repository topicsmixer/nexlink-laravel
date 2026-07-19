<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
    Route::get('/default-dashboard', [HomeController::class, 'defaultDashIndex'])->name('admin.default-dashboard');
    Route::get('/sales-dashboard', [HomeController::class, 'salesDashIndex'])->name('admin.sales-dashboard');
    Route::get('/finance-dashboard', [HomeController::class, 'financeDashIndex'])->name('admin.finance-dashboard');
    Route::get('/team-management-dashboard', [HomeController::class, 'teamManagementDashIndex'])->name('admin.team-management-dashboard');
    Route::get('/employee-dashboard', [HomeController::class, 'employeeDashIndex'])->name('admin.employee-dashboard');
    Route::get('/customer-dashboard', [HomeController::class, 'customerDashIndex'])->name('admin.customer-dashboard');
    Route::get('/review-dashboard', [HomeController::class, 'reviewDashIndex'])->name('admin.review-dashboard');
    Route::get('/task-management-dashboard', [HomeController::class, 'taskManagementDashIndex'])->name('admin.task-management-dashboard');
});
