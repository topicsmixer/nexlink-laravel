<aside class="app-menubar-tabs" id="appMenubar">
    <div class="app-navbar-brand">
        <a class="navbar-brand-logo" href="{{ route('admin.default-dashboard') }}">
            <img src="{{ asset('assets/admin/images/logo.svg') }}" alt="Admin Dashboard Logo">
        </a>
    </div>
    <div class="app-navbar-tabs" data-simplebar>
        <ul class="nav" id="appMenubarTabs" role="tablist" aria-orientation="vertical">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard">
                <a class="menu-link {{ $sidebar['dashboard'] ? 'active' : '' }}" href="#dashboardTab" role="tab" aria-controls="dashboardTab"
                    aria-selected="true" data-bs-toggle="tab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path d="M12 15V18" stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Apps">
                <a class="menu-link {{ $sidebar['apps'] ? 'active' : '' }}" href="#appsTab" role="tab" aria-controls="appsTab" aria-selected="false"
                    data-bs-toggle="tab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.609 13.5616L21.8382 11.1263C22.0182 9.2137 22.1082 8.25739 21.781 7.86207C21.604 7.64823 21.3633 7.5172 21.106 7.4946C20.6303 7.45282 20.0329 8.1329 18.8381 9.49307C18.2202 10.1965 17.9113 10.5482 17.5666 10.6027C17.3757 10.6328 17.1811 10.6018 17.0047 10.5131C16.6865 10.3529 16.4743 9.91812 16.0499 9.04851L13.8131 4.46485C13.0112 2.82162 12.6102 2 12 2C11.3898 2 10.9888 2.82162 10.1869 4.46486L7.95007 9.04852C7.5257 9.91812 7.31351 10.3529 6.99526 10.5131C6.81892 10.6018 6.62434 10.6328 6.43337 10.6027C6.08872 10.5482 5.77977 10.1965 5.16187 9.49307C3.96708 8.1329 3.36968 7.45282 2.89399 7.4946C2.63666 7.5172 2.39598 7.64823 2.21899 7.86207C1.8918 8.25739 1.9818 9.2137 2.16181 11.1263L2.391 13.5616C2.76865 17.5742 2.95748 19.5805 4.14009 20.7902C5.32271 22 7.09517 22 10.6401 22H13.3599C16.9048 22 18.6773 22 19.8599 20.7902C21.0425 19.5805 21.2313 17.5742 21.609 13.5616Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path opacity="0.5" d="M9 18H15" stroke="var(--bs-heading-color)" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Pages">
                <a class="menu-link {{ $sidebar['pages'] ? 'active' : '' }}" href="#pagesTab" role="tab" aria-controls="pagesTab" aria-selected="false"
                    data-bs-toggle="tab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.97883 9.68508C2.99294 8.89073 2 8.49355 2 8C2 7.50645 2.99294 7.10927 4.97883 6.31492L7.7873 5.19153C9.77318 4.39718 10.7661 4 12 4C13.2339 4 14.2268 4.39718 16.2127 5.19153L19.0212 6.31492C21.0071 7.10927 22 7.50645 22 8C22 8.49355 21.0071 8.89073 19.0212 9.68508L16.2127 10.8085C14.2268 11.6028 13.2339 12 12 12C10.7661 12 9.77318 11.6028 7.7873 10.8085L4.97883 9.68508Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path opacity="0.5"
                            d="M22 12C22 12 21.0071 12.8907 19.0212 13.6851L16.2127 14.8085C14.2268 15.6028 13.2339 16 12 16C10.7661 16 9.77318 15.6028 7.7873 14.8085L4.97883 13.6851C2.99294 12.8907 2 12 2 12"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                        <path opacity="0.5"
                            d="M22 16C22 16 21.0071 16.8907 19.0212 17.6851L16.2127 18.8085C14.2268 19.6028 13.2339 20 12 20C10.7661 20 9.77318 19.6028 7.7873 18.8085L4.97883 17.6851C2.99294 16.8907 2 16 2 16"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="nav-item-hr"></li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Authentication">
                <a class="menu-link" href="#authenticationTab" role="tab" aria-controls="authenticationTab"
                    aria-selected="false" data-bs-toggle="tab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 8C18 11.3137 15.3137 14 12 14C8.68629 14 6 11.3137 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path
                            d="M6.5 10.189C3.91216 10.855 2 13.2042 2 15.9999C2 19.3136 4.68629 21.9999 8 21.9999C11.3137 21.9999 14 19.3136 14 15.9999C14 15.2452 13.8607 14.5231 13.6063 13.8578"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path opacity="0.5"
                            d="M12 20.4722C13.0615 21.4222 14.4633 21.9999 16 21.9999C19.3137 21.9999 22 19.3136 22 15.9999C22 13.2042 20.0878 10.855 17.5 10.189"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                    </svg>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Components">
                <a class="menu-link" href="#componentsTab" role="tab" aria-controls="componentsTab"
                    aria-selected="false" data-bs-toggle="tab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.5 15.5C5.5 14.5572 5.5 14.0858 5.79289 13.7929C6.08579 13.5 6.55719 13.5 7.5 13.5H8.5C9.44281 13.5 9.91421 13.5 10.2071 13.7929C10.5 14.0858 10.5 14.5572 10.5 15.5V16.5C10.5 17.4428 10.5 17.9142 10.2071 18.2071C9.91421 18.5 9.44281 18.5 8.5 18.5C7.08579 18.5 6.37868 18.5 5.93934 18.0607C5.5 17.6213 5.5 16.9142 5.5 15.5Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path
                            d="M5.5 8.5C5.5 7.08579 5.5 6.37868 5.93934 5.93934C6.37868 5.5 7.08579 5.5 8.5 5.5C9.44281 5.5 9.91421 5.5 10.2071 5.79289C10.5 6.08579 10.5 6.55719 10.5 7.5V8.5C10.5 9.44281 10.5 9.91421 10.2071 10.2071C9.91421 10.5 9.44281 10.5 8.5 10.5H7.5C6.55719 10.5 6.08579 10.5 5.79289 10.2071C5.5 9.91421 5.5 9.44281 5.5 8.5Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path
                            d="M13.5 15.5C13.5 14.5572 13.5 14.0858 13.7929 13.7929C14.0858 13.5 14.5572 13.5 15.5 13.5H16.5C17.4428 13.5 17.9142 13.5 18.2071 13.7929C18.5 14.0858 18.5 14.5572 18.5 15.5C18.5 16.9142 18.5 17.6213 18.0607 18.0607C17.6213 18.5 16.9142 18.5 15.5 18.5C14.5572 18.5 14.0858 18.5 13.7929 18.2071C13.5 17.9142 13.5 17.4428 13.5 16.5V15.5Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path
                            d="M13.5 7.5C13.5 6.55719 13.5 6.08579 13.7929 5.79289C14.0858 5.5 14.5572 5.5 15.5 5.5C16.9142 5.5 17.6213 5.5 18.0607 5.93934C18.5 6.37868 18.5 7.08579 18.5 8.5C18.5 9.44281 18.5 9.91421 18.2071 10.2071C17.9142 10.5 17.4428 10.5 16.5 10.5H15.5C14.5572 10.5 14.0858 10.5 13.7929 10.2071C13.5 9.91421 13.5 9.44281 13.5 8.5V7.5Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path opacity="0.5"
                            d="M22 14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                        <path opacity="0.5" d="M10 22C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                        <path opacity="0.5" d="M10 2C6.22876 2 4.34315 2 3.17157 3.17157C2 4.34315 2 6.22876 2 10"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                        <path opacity="0.5" d="M14 2C17.7712 2 19.6569 2 20.8284 3.17157C22 4.34315 22 6.22876 22 10"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="nav-item-hr"></li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Extended UI">
                <a class="menu-link" href="#extendedTab" role="tab" aria-controls="extendedTab"
                    aria-selected="false" data-bs-toggle="tab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.5 9L15.6716 9.17157C17.0049 10.5049 17.6716 11.1716 17.6716 12C17.6716 12.8284 17.0049 13.4951 15.6716 14.8284L15.5 15"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                        <path d="M13.2943 7.17041L12.0002 12L10.7061 16.8297" stroke="var(--bs-heading-color)"
                            stroke-width="2" stroke-linecap="round" />
                        <path
                            d="M8.49969 9L8.32812 9.17157C6.99479 10.5049 6.32812 11.1716 6.32812 12C6.32812 12.8284 6.99479 13.4951 8.32812 14.8284L8.49969 15"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                        <path opacity="0.5"
                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                    </svg>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Forms & Tables">
                <a class="menu-link" href="#formElementsTab" role="tab" aria-controls="formElementsTab"
                    aria-selected="false" data-bs-toggle="tab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V10.0002C3 7.17179 3 5.75757 3.87868 4.87889C4.64706 4.11051 5.82497 4.01406 8 4.00195"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path d="M7 14.5H15" stroke="var(--bs-heading-color)" stroke-width="2"
                            stroke-linecap="round" />
                        <path opacity="0.5" d="M7 18H12.5" stroke="var(--bs-heading-color)" stroke-width="2"
                            stroke-linecap="round" />
                        <path
                            d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                    </svg>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Charts & Maps">
                <a class="menu-link" href="#chartsTab" role="tab" aria-controls="chartsTab"
                    aria-selected="false" data-bs-toggle="tab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M3 22H21" stroke="var(--bs-heading-color)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M3 11C3 10.0572 3 9.58579 3.29289 9.29289C3.58579 9 4.05719 9 5 9C5.94281 9 6.41421 9 6.70711 9.29289C7 9.58579 7 10.0572 7 11V17C7 17.9428 7 18.4142 6.70711 18.7071C6.41421 19 5.94281 19 5 19C4.05719 19 3.58579 19 3.29289 18.7071C3 18.4142 3 17.9428 3 17V11Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path
                            d="M10 7C10 6.05719 10 5.58579 10.2929 5.29289C10.5858 5 11.0572 5 12 5C12.9428 5 13.4142 5 13.7071 5.29289C14 5.58579 14 6.05719 14 7V17C14 17.9428 14 18.4142 13.7071 18.7071C13.4142 19 12.9428 19 12 19C11.0572 19 10.5858 19 10.2929 18.7071C10 18.4142 10 17.9428 10 17V7Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                        <path
                            d="M17 4C17 3.05719 17 2.58579 17.2929 2.29289C17.5858 2 18.0572 2 19 2C19.9428 2 20.4142 2 20.7071 2.29289C21 2.58579 21 3.05719 21 4V17C21 17.9428 21 18.4142 20.7071 18.7071C20.4142 19 19.9428 19 19 19C18.0572 19 17.5858 19 17.2929 18.7071C17 18.4142 17 17.9428 17 17V4Z"
                            stroke="var(--bs-heading-color)" stroke-width="2" />
                    </svg>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Ai ChatBot">
                <a class="menu-link position-relative" href="{{ route('admin.ai-chat') }}" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        fill="none">
                        <path
                            d="m21,23c0,.553-.448,1-1,1s-1-.447-1-1c0-2.206-1.794-4-4-4h-6c-2.206,0-4,1.794-4,4,0,.553-.448,1-1,1s-1-.447-1-1c0-3.309,2.691-6,6-6h6c3.309,0,6,2.691,6,6Zm1-15.5v2c0,.827-.673,1.5-1.5,1.5h-.5c0,2.206-1.794,4-4,4h-8c-2.206,0-4-1.794-4-4h-.5c-.827,0-1.5-.673-1.5-1.5v-2c0-.827.673-1.5,1.5-1.5h.5c0-2.206,1.794-4,4-4h3v-1c0-.553.448-1,1-1s1,.447,1,1v1h3c2.206,0,4,1.794,4,4h.5c.827,0,1.5.673,1.5,1.5Zm-4-1.5c0-1.103-.897-2-2-2h-8c-1.103,0-2,.897-2,2v5c0,1.103.897,2,2,2h8c1.103,0,2-.897,2-2v-5Zm-8.5,1c-.828,0-1.5.672-1.5,1.5s.672,1.5,1.5,1.5,1.5-.672,1.5-1.5-.672-1.5-1.5-1.5Zm5,0c-.828,0-1.5.672-1.5,1.5s.672,1.5,1.5,1.5,1.5-.672,1.5-1.5-.672-1.5-1.5-1.5Z"
                            fill="var(--bs-heading-color)" />
                    </svg>
                    <span
                        class="position-absolute top-0 end-0 p-1 mt-1 me-1 bg-primary border border-3 border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </a>
            </li>
            <li class="nav-item-hr"></li>
            <li class="nav-item mb-auto" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-title="Add Customer">
                <a href="javascript:void(0);" class="btn btn-icon btn-lg btn-white waves-effect waves-light"
                    data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                            stroke="var(--bs-primary)" stroke-width="2" />
                        <path d="M15 12H12M12 12H9M12 12V9M12 12V15" stroke="var(--bs-primary)" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="nav-item mt-5" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Login">
                <a class="menu-link" href="authentication/login-frame.html">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2H16.0002C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8V16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17"
                            stroke="var(--bs-heading-color)" stroke-width="2" stroke-linecap="round" />
                        <path d="M15 12H2M2 12L5.5 9M2 12L5.5 15" stroke="var(--bs-heading-color)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <div class="app-tab-content">
        <div class="app-side-brands">
            <a class="navbar-brand-text" href="{{ route('admin.default-dashboard') }}">{{ config('app.name') }}</a>
        </div>
        <div class="app-content-inner">
            <div class="tab-content" id="appMenubarTabsContent">
                <div class="tab-pane fade {{ $sidebar['dashboard'] ? 'show active' : '' }}" id="dashboardTab" role="tabpanel" tabindex="0">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">
                                <span class="menu-label">Dashboard</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.default-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.default-dashboard') }}" role="button">
                                    <i class="fi fi-rr-house-blank"></i>
                                    <span class="menu-label">Default Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.sales-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.sales-dashboard') }}" role="button">
                                    <i class="fi fi-rr-percent-100"></i>
                                    <span class="menu-label">Sales Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.finance-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.finance-dashboard') }}" role="button">
                                    <i class="fi fi-rr-growth-chart-invest"></i>
                                    <span class="menu-label">Finance Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.team-management-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.team-management-dashboard') }}" role="button">
                                    <i class="fi fi-rr-circle-user"></i>
                                    <span class="menu-label">Team Management</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.employee-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.employee-dashboard') }}" role="button">
                                    <i class="fi fi-rr-employee-man"></i>
                                    <span class="menu-label">Employees</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.customer-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.customer-dashboard') }}" role="button">
                                    <i class="fi fi-rr-review"></i>
                                    <span class="menu-label">Customers</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.review-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.review-dashboard') }}" role="button">
                                    <i class="fi fi-rr-star"></i>
                                    <span class="menu-label">Review</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.task-management-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.task-management-dashboard') }}" role="button">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="6"
                                            fill="var(--bs-danger)" />
                                    </svg>
                                    <span class="menu-label">Tasks & Projects</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.user-management-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.user-management-dashboard') }}" role="button">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="6" fill="var(--bs-info)" />
                                    </svg>
                                    <span class="menu-label">User Management</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.activities-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.activities-dashboard') }}" role="button">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="6"
                                            fill="var(--bs-warning)" />
                                    </svg>
                                    <span class="menu-label">Activities</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.deals-dashboard') ? 'open active' : '' }}" 
                                    href="{{ route('admin.deals-dashboard') }}" role="button">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="6"
                                            fill="var(--bs-primary)" />
                                    </svg>
                                    <span class="menu-label">Deals</span>
                                    <span class="badge badge-sm text-bg-success">+12%</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade {{ $sidebar['apps'] ? 'show active' : '' }}" id="appsTab" role="tabpanel" tabindex="0">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">
                                <span class="menu-label">Apps</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.chat') ? 'open active' : '' }}" 
                                    href="{{ route('admin.chat') }}">
                                    <i class="fi fi-rr-comment"></i>
                                    <span class="menu-label">Chat</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.calendar') ? 'open active' : '' }}" 
                                    href="{{ route('admin.calendar') }}">
                                    <i class="fi fi-rr-calendar"></i>
                                    <span class="menu-label">Calendar</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Email</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.email.inbox') ? 'open active' : '' }}"
                                     href="{{ route('admin.email.inbox') }}">
                                    <i class="fi fi-rr-inbox-in"></i>
                                    <span class="menu-label">Inbox</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.email.compose') ? 'open active' : '' }}" 
                                    href="{{ route('admin.email.compose') }}">
                                    <i class="fi fi-rr-pen-field"></i>
                                    <span class="menu-label">Compose</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.email.read-email') ? 'open active' : '' }}" 
                                    href="{{ route('admin.email.read-email') }}">
                                    <i class="fi fi-rr-envelope"></i>
                                    <span class="menu-label">Read email</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade {{ $sidebar['pages'] ? 'show active' : '' }}" id="pagesTab" role="tabpanel" tabindex="0">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">
                                <span class="menu-label">Pages</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.pages.pricing') ? 'open active' : '' }}" 
                                    href="{{ route('admin.pages.pricing') }}">
                                    <i class="fi fi-rs-usd-circle"></i>
                                    <span class="menu-label">Pricing</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Blog</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.pages.blog') ? 'open active' : '' }}" 
                                    href="{{ route('admin.pages.blog') }}">
                                    <i class="fi fi-rr-blog-text"></i>
                                    <span class="menu-label">Blog Grid</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.pages.blog-list') ? 'open active' : '' }}"
                                     href="{{ route('admin.pages.blog-list') }}">
                                    <i class="fi fi-rr-blog-text"></i>
                                    <span class="menu-label">Blog List</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.pages.blog-details') ? 'open active' : '' }}"
                                     href="{{ route('admin.pages.blog-details') }}">
                                    <i class="fi fi-rr-blog-text"></i>
                                    <span class="menu-label">Blog Details</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Error</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.pages.Error404') ? 'open active' : '' }}" 
                                    href="{{ route('admin.pages.Error404') }}">
                                    <i class="fi fi-rs-404"></i>
                                    <span class="menu-label">Basic</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="pages/error-404-cover.html">
                                    <i class="fi fi-rs-404"></i>
                                    <span class="menu-label">Cover</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="pages/error-404-full.html">
                                    <i class="fi fi-rs-404"></i>
                                    <span class="menu-label">Full</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Under Construction</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="pages/under-construction.html">
                                    <i class="fi fi-rr-under-construction"></i>
                                    <span class="menu-label">Basic</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="pages/under-construction-cover.html">
                                    <i class="fi fi-rr-under-construction"></i>
                                    <span class="menu-label">Cover</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="pages/under-construction-full.html">
                                    <i class="fi fi-rr-under-construction"></i>
                                    <span class="menu-label">Full</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="authenticationTab" role="tabpanel" tabindex="0">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">
                                <span class="menu-label">Login</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/login-basic.html">
                                    <i class="fi fi-rr-unlock"></i>
                                    <span class="menu-label">Basic</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/login-cover.html">
                                    <i class="fi fi-rr-unlock"></i>
                                    <span class="menu-label">Cover</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/login-frame.html">
                                    <i class="fi fi-rr-unlock"></i>
                                    <span class="menu-label">Frame</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Register</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/register-basic.html">
                                    <i class="fi fi-rr-enter"></i>
                                    <span class="menu-label">Basic</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/register-cover.html">
                                    <i class="fi fi-rr-enter"></i>
                                    <span class="menu-label">Cover</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/register-frame.html">
                                    <i class="fi fi-rr-enter"></i>
                                    <span class="menu-label">Frame</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Forgot Password</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/forgot-password-basic.html">
                                    <i class="fi fi-rs-otp"></i>
                                    <span class="menu-label">Basic</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/forgot-password-cover.html">
                                    <i class="fi fi-rs-otp"></i>
                                    <span class="menu-label">Cover</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/forgot-password-frame.html">
                                    <i class="fi fi-rs-otp"></i>
                                    <span class="menu-label">Frame</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">New Password</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/new-password-basic.html">
                                    <i class="fi fi-rr-password-alt"></i>
                                    <span class="menu-label">Basic</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/new-password-cover.html">
                                    <i class="fi fi-rr-password-alt"></i>
                                    <span class="menu-label">Cover</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="authentication/new-password-frame.html">
                                    <i class="fi fi-rr-password-alt"></i>
                                    <span class="menu-label">Frame</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="componentsTab" role="tabpanel" tabindex="0">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">
                                <span class="menu-label">UI Components</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/accordion.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Accordion</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/alerts.html">
                                    <i class="fi fi-rs-bell"></i>
                                    <span class="menu-label">Alerts</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/badge.html">
                                    <i class="fi fi-rr-tags"></i>
                                    <span class="menu-label">Badge</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/breadcrumb.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/buttons.html">
                                    <i class="fi fi-rr-toggle-on"></i>
                                    <span class="menu-label">Buttons</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/typography.html">
                                    <i class="fi fi-rr-text"></i>
                                    <span class="menu-label">Typography</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/button-group.html">
                                    <i class="fi fi-rr-toggle-on"></i>
                                    <span class="menu-label">Button Group</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/card.html">
                                    <i class="fi fi-rr-credit-card"></i>
                                    <span class="menu-label">Card</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/collapse.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Collapse</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/carousel.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Carousel</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/dropdowns.html">
                                    <i class="fi fi-rs-settings-sliders"></i>
                                    <span class="menu-label">Dropdowns</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/modal.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Modal</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/navbar.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Navbar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/list-group.html">
                                    <i class="fi fi-rr-list"></i>
                                    <span class="menu-label">List Group</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/tabs.html">
                                    <i class="fi fi-rr-tab-folder"></i>
                                    <span class="menu-label">Tabs</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/offcanvas.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Offcanvas</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/pagination.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Pagination</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/popovers.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Popovers</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/progress.html">
                                    <i class="fi fi-sr-bars-progress"></i>
                                    <span class="menu-label">Progress</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/scrollspy.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Scrollspy</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/spinners.html">
                                    <i class="fi fi-br-loading"></i>
                                    <span class="menu-label">Spinners</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/toasts.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Toasts</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="components/tooltips.html">
                                    <i class="fi fi-rr-flux-capacitor"></i>
                                    <span class="menu-label">Tooltips</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="extendedTab" role="tabpanel" tabindex="0">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">
                                <span class="menu-label">Extended UI</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="extended-ui/avatar.html">
                                    <i class="fi fi-rr-circle-user"></i>
                                    <span class="menu-label">Avatar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="extended-ui/card-action.html">
                                    <i class="fi fi-rr-credit-card"></i>
                                    <span class="menu-label">Card action</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="extended-ui/drag-and-drop.html">
                                    <i class="fi fi-rr-arrows"></i>
                                    <span class="menu-label">Drag & drop</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="extended-ui/simplebar.html">
                                    <i class="fi fi-rr-star"></i>
                                    <span class="menu-label">Simplebar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="extended-ui/swiper.html">
                                    <i class="fi fi-rr-sliders-h-square"></i>
                                    <span class="menu-label">Swiper</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Icons</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="icons/flaticon.html">
                                    <i class="fi fi-rr-star"></i>
                                    <span class="menu-label">Flaticon</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="icons/lucide.html">
                                    <i class="fi fi-rr-star"></i>
                                    <span class="menu-label">Lucide</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="icons/fontawesome.html">
                                    <i class="fi fi-rr-star"></i>
                                    <span class="menu-label">Font Awesome</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="formElementsTab" role="tabpanel" tabindex="0">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">
                                <span class="menu-label">Forms</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="forms/form-elements.html">
                                    <i class="fi fi-rr-form"></i>
                                    <span class="menu-label">Form Elements</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="forms/form-floating.html">
                                    <i class="fi fi-rr-form"></i>
                                    <span class="menu-label">Form Floating</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="forms/form-input-group.html">
                                    <i class="fi fi-rr-form"></i>
                                    <span class="menu-label">Form Input Group</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="forms/form-layout.html">
                                    <i class="fi fi-rr-form"></i>
                                    <span class="menu-label">Form Layout</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="forms/form-validation.html">
                                    <i class="fi fi-rr-form"></i>
                                    <span class="menu-label">Form Validation</span>
                                </a>
                            </li>

                            <li class="menu-heading">
                                <span class="menu-label">Forms Plugins</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="forms/flatpickr.html">
                                    <i class="fi fi-rr-calendar-lines"></i>
                                    <span class="menu-label">Flatpickr</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="forms/tagify.html">
                                    <i class="fi fi-rr-tags"></i>
                                    <span class="menu-label">Tagify</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Table</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="table/tables-basic.html">
                                    <i class="fi fi-rr-table-list"></i>
                                    <span class="menu-label">Table</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="table/tables-datatable.html">
                                    <i class="fi fi-rr-table"></i>
                                    <span class="menu-label">Datatable</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="chartsTab" role="tabpanel" tabindex="0">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">
                                <span class="menu-label">Charts</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="chart/apexchart.html">
                                    <i class="fi fi-br-chart-histogram"></i>
                                    <span class="menu-label">Apex Chart</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="chart/chartjs.html">
                                    <i class="fi fi-rr-chart-pie-alt"></i>
                                    <span class="menu-label">Chart JS</span>
                                </a>
                            </li>
                            <li>
                                <div class="menu-divider"></div>
                            </li>
                            <li class="menu-heading">
                                <span class="menu-label">Maps</span>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="maps/jsvectormap.html">
                                    <i class="fi fi-rr-marker"></i>
                                    <span class="menu-label">JS Vector Map</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="maps/leaflet.html">
                                    <i class="fi fi-rr-map-marker"></i>
                                    <span class="menu-label">Leaflet</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</aside>
