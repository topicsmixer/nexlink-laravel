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

    // Chat routes
    Route::get('/chat', [HomeController::class, 'chatIndex'])->name('chat');

    // Email routes
    Route::get('/email/inbox', [HomeController::class, 'emailInbox'])->name('email.inbox');
    Route::get('/email/compose', [HomeController::class, 'emailCompose'])->name('email.compose');
    Route::get('/email/read-email', [HomeController::class, 'readEmail'])->name('email.read-email');

    // Pages routes
    Route::get('/pages/pricing', [HomeController::class, 'pricing'])->name('pages.pricing');
    // Pages blog rotues 
    Route::get('/pages/blog', [HomeController::class, 'blog'])->name('pages.blog');
    Route::get('/pages/blog-list', [HomeController::class, 'blogList'])->name('pages.blog-list');
    Route::get('/pages/blog-details', [HomeController::class, 'blogDetails'])->name('pages.blog-details');
    // Pages Error 
    Route::get('/pages/error-404', [HomeController::class, 'error404'])->name('pages.error404');
    Route::get('/pages/error-404-cover', [HomeController::class, 'error404Cover'])->name('pages.error404-cover');
    Route::get('/pages/error-404-full', [HomeController::class, 'error404Full'])->name('pages.error404-full');
    // Under Construction 
    Route::get('/pages/under-construction', [HomeController::class, 'underConstruction'])->name('pages.under-construction');
    Route::get('/pages/under-construction-cover', [HomeController::class, 'underConstructionCover'])->name('pages.under-construction-cover');
    Route::get('/pages/under-construction-full', [HomeController::class, 'underConstructionFull'])->name('pages.under-construction-full');
    // Authentication
    Route::get('/authentication/login-basic', [HomeController::class, 'loginBasic'])->name('authentication.login-basic');
    Route::get('/authentication/login-cover', [HomeController::class, 'loginCover'])->name('authentication.login-cover');
    Route::get('/authentication/login-frame', [HomeController::class, 'loginFrame'])->name('authentication.login-frame');
    Route::get('/authentication/register-basic', [HomeController::class, 'registerBasic'])->name('authentication.register-basic');
    Route::get('/authentication/register-cover', [HomeController::class, 'registerCover'])->name('authentication.register-cover');
    Route::get('/authentication/register-frame', [HomeController::class, 'registerFrame'])->name('authentication.register-frame');
    Route::get('/authentication/forgot-password-basic', [HomeController::class, 'forgotPasswordBasic'])->name('authentication.forgot-password-basic');
    Route::get('/authentication/forgot-password-cover', [HomeController::class, 'forgotPasswordCover'])->name('authentication.forgot-password-cover');
    Route::get('/authentication/forgot-password-frame', [HomeController::class, 'forgotPasswordFrame'])->name('authentication.forgot-password-frame');
    Route::get('/authentication/new-password-basic', [HomeController::class, 'newPasswordBasic'])->name('authentication.new-password-basic');
    Route::get('/authentication/new-password-cover', [HomeController::class, 'newPasswordCover'])->name('authentication.new-password-cover');
    Route::get('/authentication/new-password-frame', [HomeController::class, 'newPasswordFrame'])->name('authentication.new-password-frame');
    // Components 
    Route::get('/components/accordion', [HomeController::class, 'accordion'])->name('ui-components.accordion');
    Route::get('/components/alerts', [HomeController::class, 'alerts'])->name('ui-components.alerts');
    Route::get('/components/badge', [HomeController::class, 'badge'])->name('ui-components.badge');
    Route::get('/components/breadcrumb', [HomeController::class, 'breadcrumb'])->name('ui-components.breadcrumb');
    Route::get('/components/buttons', [HomeController::class, 'buttons'])->name('ui-components.buttons');
    Route::get('/components/typography', [HomeController::class, 'typography'])->name('ui-components.typography');
    Route::get('/components/button-group', [HomeController::class, 'buttonGroup'])->name('ui-components.button-group');
    Route::get('/components/card', [HomeController::class, 'card'])->name('ui-components.card');
    Route::get('/components/collapse', [HomeController::class, 'collapse'])->name('ui-components.collapse');
    Route::get('/components/carousel', [HomeController::class, 'carousel'])->name('ui-components.carousel');
    Route::get('/components/dropdowns', [HomeController::class, 'dropdowns'])->name('ui-components.dropdowns');
    Route::get('/components/modal', [HomeController::class, 'modal'])->name('ui-components.modal');
    Route::get('/components/navbar', [HomeController::class, 'navbar'])->name('ui-components.navbar');
    Route::get('/components/list-group', [HomeController::class, 'listGroup'])->name('ui-components.list-group');
    Route::get('/components/tabs', [HomeController::class, 'tabs'])->name('ui-components.tabs');
    Route::get('/components/offcanvas', [HomeController::class, 'offcanvas'])->name('ui-components.offcanvas');
    Route::get('/components/pagination', [HomeController::class, 'pagination'])->name('ui-components.pagination');
    Route::get('/components/popovers', [HomeController::class, 'popovers'])->name('ui-components.popovers');
    Route::get('/components/progress', [HomeController::class, 'progress'])->name('ui-components.progress');
    Route::get('/components/scrollspy', [HomeController::class, 'scrollspy'])->name('ui-components.scrollspy');
    Route::get('/components/spinners', [HomeController::class, 'spinners'])->name('ui-components.spinners');
    Route::get('/components/toasts', [HomeController::class, 'toasts'])->name('ui-components.toasts');
    Route::get('/components/tooltips', [HomeController::class, 'tooltips'])->name('ui-components.tooltips');


    // Ai Chat route
    Route::get('/ai-chat', [HomeController::class, 'aiChatIndex'])->name('ai-chat');
    Route::get('/ai-search-chat', [HomeController::class, 'aiSearchChatIndex'])->name('ai-search-chat');
    Route::get('/ai-search-image', [HomeController::class, 'aiSearchImageIndex'])->name('ai-search-image');
    Route::get('/ai-search-app', [HomeController::class, 'aiSearchAppIndex'])->name('ai-search-app');
    Route::get('/ai-new-project', [HomeController::class, 'aiNewProjectIndex'])->name('ai-new-project');
    Route::get('/ai-investment', [HomeController::class, 'aiInvestmentIndex'])->name('ai-investment');
    Route::get('/ai-your-chat', [HomeController::class, 'aiYourChatIndex'])->name('ai-your-chat');
});
