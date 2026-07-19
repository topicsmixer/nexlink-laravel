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
}
