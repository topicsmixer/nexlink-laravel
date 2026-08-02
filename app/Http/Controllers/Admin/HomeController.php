<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function defaultDashIndex()
    {
        return view('admin.dashboard.index');
    }
    public function salesDashIndex()
    {
        return view('admin.dashboard.salesIndex');
    }
    public function financeDashIndex()
    {
        return view('admin.dashboard.financeIndex');
    }
    public function teamManagementDashIndex()
    {
        return view('admin.dashboard.teamManagementIndex');
    }
    public function employeeDashIndex()
    {
        return view('admin.dashboard.employeeIndex');
    }
    public function customerDashIndex()
    {
        return view('admin.dashboard.customerIndex');
    }
    public function reviewDashIndex()
    {
        return view('admin.dashboard.reviewIndex');
    }
    public function taskManagementDashIndex()
    {
        return view('admin.dashboard.taskManagementIndex');
    }
    public function userManagementDashIndex()
    {
        return view('admin.dashboard.userManagementIndex');
    }
    public function activitiesDashIndex()
    {
        return view('admin.dashboard.activitiesIndex');
    }
    public function dealsDashIndex()
    {
        return view('admin.dashboard.dealsIndex');
    }
    public function aiChatIndex()
    {
        return view('admin.ai.chatIndex');
    }
    public function aiSearchChatIndex()
    {
        return view('admin.ai.searchChatIndex');
    }
    public function aiSearchImageIndex()
    {
        return view('admin.ai.searchImageIndex');
    }
    public function aiSearchAppIndex()
    {
        return view('admin.ai.searchAppIndex');
    }
    public function aiNewProjectIndex()
    {
        return view('admin.ai.newProjectIndex');
    }
    public function aiInvestmentIndex()
    {
        return view('admin.ai.investmentIndex');
    }
    public function aiYourChatIndex()
    {
        return view('admin.ai.yourChatIndex');
    }
    public function profileIndex()
    {
        return view('admin.profile.index');
    }
    public function calendarIndex()
    {
        return view('admin.calendar.index');
    }
    public function chatIndex()
    {
        return view('admin.chat.index');
    }
    public function emailInbox()
    {
        return view('admin.email.inbox');
    }
}
