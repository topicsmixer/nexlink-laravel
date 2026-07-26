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

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    // dashboard routes
    Route::get('/default-dashboard', [HomeController::class, 'defaultDashIndex'])->name('default-dashboard');
    Route::get('/sales-dashboard', [HomeController::class, 'salesDashIndex'])->name('sales-dashboard');
    Route::get('/finance-dashboard', [HomeController::class, 'financeDashIndex'])->name('finance-dashboard');
    Route::get('/team-management-dashboard', [HomeController::class, 'teamManagementDashIndex'])->name('team-management-dashboard');
    Route::get('/employee-dashboard', [HomeController::class, 'employeeDashIndex'])->name('employee-dashboard');
    Route::get('/customer-dashboard', [HomeController::class, 'customerDashIndex'])->name('customer-dashboard');
    Route::get('/review-dashboard', [HomeController::class, 'reviewDashIndex'])->name('review-dashboard');
    Route::get('/task-management-dashboard', [HomeController::class, 'taskManagementDashIndex'])->name('task-management-dashboard');
    Route::get('/user-management-dashboard', [HomeController::class, 'userManagementDashIndex'])->name('user-management-dashboard');
    Route::get('/activities-dashboard', [HomeController::class, 'activitiesDashIndex'])->name('activities-dashboard');
    Route::get('/deals-dashboard', [HomeController::class, 'dealsDashIndex'])->name('deals-dashboard');

    // Profile routes
    Route::get('/profile', [HomeController::class, 'profileIndex'])->name('profile');

    // Calendar routes
    Route::get('/calendar', [HomeController::class, 'calendarIndex'])->name('calendar');

    // Ai Chat route
    Route::get('/ai-chat', [HomeController::class, 'aiChatIndex'])->name('ai-chat');
    Route::get('/ai-search-chat', [HomeController::class, 'aiSearchChatIndex'])->name('ai-search-chat');
    Route::get('/ai-search-image', [HomeController::class, 'aiSearchImageIndex'])->name('ai-search-image');
    Route::get('/ai-search-app', [HomeController::class, 'aiSearchAppIndex'])->name('ai-search-app');
    Route::get('/ai-new-project', [HomeController::class, 'aiNewProjectIndex'])->name('ai-new-project');
    Route::get('/ai-investment', [HomeController::class, 'aiInvestmentIndex'])->name('ai-investment');
    Route::get('/ai-your-chat', [HomeController::class, 'aiYourChatIndex'])->name('ai-your-chat');
});
