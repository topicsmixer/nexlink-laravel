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
});
