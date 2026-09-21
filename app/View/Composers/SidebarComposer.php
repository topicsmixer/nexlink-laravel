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
                'admin.pages.error404',
                'admin.pages.error404-cover',
                'admin.pages.error404-full',
                'admin.pages.under-construction',
                'admin.pages.under-construction-cover',
                'admin.pages.under-construction-full'
            ]),
            'authentication' => request()->routeIs([
                'admin.authentication.login-basic',
                'admin.authentication.login-cover',
                'admin.authentication.login-frame',
                'admin.authentication.register-basic',
                'admin.authentication.register-cover',
                'admin.authentication.register-frame',
                'admin.authentication.forgot-password-basic',
                'admin.authentication.forgot-password-cover',
                'admin.authentication.forgot-password-frame',
                'admin.authentication.new-password-basic',
                'admin.authentication.new-password-cover',
                'admin.authentication.new-password-frame'
            ]),
            'components' => request()->routeIs([
                'admin.ui-components.accordion',
                'admin.ui-components.alerts',
                'admin.ui-components.badge',
                'admin.ui-components.breadcrumb',
                'admin.ui-components.buttons',
                'admin.ui-components.typography',
                'admin.ui-components.button-group',
                'admin.ui-components.card',
                'admin.ui-components.collapse',
                'admin.ui-components.carousel',
                'admin.ui-components.dropdowns',
                'admin.ui-components.modal',
                'admin.ui-components.navbar',
                'admin.ui-components.list-group',
                'admin.ui-components.tabs',
                'admin.ui-components.offcanvas',
                'admin.ui-components.pagination',
                'admin.ui-components.popovers',
                'admin.ui-components.progress',
                'admin.ui-components.scrollspy',
                'admin.ui-components.spinners',
                'admin.ui-components.toasts',
                'admin.ui-components.tooltips',
            ]),
        ];

        $view->with('sidebar', $sidebar);
    }
}