<?php

namespace App\View\Composers;

use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view): void
    {
        $sidebar = [
            'dashboard' => request()->routeIs([
                'admin.default-dashboard',
                'admin.sales-dashboard',
                'admin.finance-dashboard',
                'admin.team-management-dashboard',
                'admin.employee-dashboard',
                'admin.customer-dashboard',
                'admin.review-dashboard',
                'admin.task-management-dashboard',
                'admin.user-management-dashboard',
                'admin.activities-dashboard',
                'admin.deals-dashboard',
            ]),

            'apps' => request()->routeIs([
                'admin.chat',
                'admin.calendar',
                'admin.email.inbox',
                'admin.email.compose',
                'admin.email.read-email'
            ]),

            'pages' => request()->routeIs([
                'admin.pages.pricing',
                'admin.pages.blog',
                'admin.pages.blog-list',
                'admin.pages.blog-details',
                'admin.pages.Error404'
            ]),
        ];

        $view->with('sidebar', $sidebar);
    }
}