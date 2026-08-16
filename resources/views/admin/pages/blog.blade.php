@extends('admin.layouts.app')

@section('title', 'Blog')

@push('styles')
    <!--  Required Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/flaticon/css/all/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/lucide/lucide.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/simplebar/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/flatpickr/flatpickr.min.css') }}">
    <!--  Required Stylesheet -->

    <!--  CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.css') }}">
    <!--  CSS Stylesheet -->
@endpush

@section('content')
    <main class="app-wrapper">

        <div class="container-fluid">

            <div class="app-page-head d-flex align-items-center justify-content-between">
                <div class="clearfix">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.default-dashboard') }}">
                                    <i class="fi fi-rr-home"></i> Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-xxl-3 col-lg-4 col-md-6 m-b30">
                    <div class="card card-action action-elevate">
                        <img src="{{ asset('assets/admin/images/blog/blog1.webp') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="d-flex list-inline mb-2 gap-3 flex-wrap">
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-calendar text-primary"></i>
                                    <a class="text-body" href="javascript:void(0);">17 March 2025</a>
                                </li>
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-circle-user text-primary"></i> BY
                                    <a class="text-body" href="javascript:void(0);"> Roberts</a>
                                </li>
                            </ul>
                            <h5>
                                <a href="http://../pages/blog-details.html" class="text-dark">CRM Analytics Made Simple:
                                    Visualize Growth with Real-Time Dashboards</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <a href="http://../pages/blog-details.html" class="btn-link stretched-link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-4 col-md-6 m-b30">
                    <div class="card card-action action-elevate">
                        <img src="{{ asset('assets/admin/images/blog/blog2.webp') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="d-flex list-inline mb-2 gap-3 flex-wrap">
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-calendar text-primary"></i>
                                    <a class="text-body" href="javascript:void(0);">17 March 2025</a>
                                </li>
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-circle-user text-primary"></i> BY
                                    <a class="text-body" href="javascript:void(0);"> Roberts</a>
                                </li>
                            </ul>
                            <h5>
                                <a href="http://../pages/blog-details.html" class="text-dark">How to Build a Scalable CRM
                                    Dashboard for Teams and Enterprises</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <a href="http://../pages/blog-details.html" class="btn-link stretched-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 m-b30">
                    <div class="card card-action action-elevate">
                        <img src="{{ asset('assets/admin/images/blog/blog3.webp') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="d-flex list-inline mb-2 gap-3 flex-wrap">
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-calendar text-primary"></i>
                                    <a class="text-body" href="javascript:void(0);">17 March 2025</a>
                                </li>
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-circle-user text-primary"></i> BY
                                    <a class="text-body" href="javascript:void(0);"> Roberts</a>
                                </li>
                            </ul>
                            <h5>
                                <a href="http://../pages/blog-details.html" class="text-dark">Designing the Perfect CRM
                                    Admin Dashboard: A Step-by-Step Guide</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <a href="http://../pages/blog-details.html" class="btn-link stretched-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 m-b30">
                    <div class="card card-action action-elevate">
                        <img src="{{ asset('assets/admin/images/blog/blog4.webp') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="d-flex list-inline mb-2 gap-3 flex-wrap">
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-calendar text-primary"></i>
                                    <a class="text-body" href="javascript:void(0);">17 March 2025</a>
                                </li>
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-circle-user text-primary"></i> BY
                                    <a class="text-body" href="javascript:void(0);"> Roberts</a>
                                </li>
                            </ul>
                            <h5>
                                <a href="http://../pages/blog-details.html" class="text-dark">Dashboard Insights That
                                    Transform Customer Relationship Management</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <a href="http://../pages/blog-details.html" class="btn-link stretched-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 m-b30">
                    <div class="card card-action action-elevate">
                        <img src="{{ asset('assets/admin/images/blog/blog5.webp') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="d-flex list-inline mb-2 gap-3 flex-wrap">
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-calendar text-primary"></i>
                                    <a class="text-body" href="javascript:void(0);">17 March 2025</a>
                                </li>
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-circle-user text-primary"></i> BY
                                    <a class="text-body" href="javascript:void(0);"> Roberts</a>
                                </li>
                            </ul>
                            <h5>
                                <a href="http://../pages/blog-details.html" class="text-dark">From Data Chaos to Clarity:
                                    How CRM Admin Tools Simplify Management</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <a href="http://../pages/blog-details.html" class="btn-link stretched-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 m-b30">
                    <div class="card card-action action-elevate">
                        <img src="{{ asset('assets/admin/images/blog/blog6.webp') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="d-flex list-inline mb-2 gap-3 flex-wrap">
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-calendar text-primary"></i>
                                    <a class="text-body" href="javascript:void(0);">17 March 2025</a>
                                </li>
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-circle-user text-primary"></i> BY
                                    <a class="text-body" href="javascript:void(0);"> Roberts</a>
                                </li>
                            </ul>
                            <h5>
                                <a href="http://../pages/blog-details.html" class="text-dark">Top UI/UX Trends Shaping the
                                    Next Generation of CRM Dashboards</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <a href="http://../pages/blog-details.html" class="btn-link stretched-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 m-b30">
                    <div class="card card-action action-elevate">
                        <img src="{{ asset('assets/admin/images/blog/blog5.webp') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="d-flex list-inline mb-2 gap-3 flex-wrap">
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-calendar text-primary"></i>
                                    <a class="text-body" href="javascript:void(0);">17 March 2025</a>
                                </li>
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-circle-user text-primary"></i> BY
                                    <a class="text-body" href="javascript:void(0);"> Roberts</a>
                                </li>
                            </ul>
                            <h5>
                                <a href="http://../pages/blog-details.html" class="text-dark">Why Your Business Needs a
                                    Customizable CRM Admin</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <a href="http://../pages/blog-details.html" class="btn-link stretched-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 m-b30">
                    <div class="card card-action action-elevate">
                        <img src="{{ asset('assets/admin/images/blog/blog6.webp') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="d-flex list-inline mb-2 gap-3 flex-wrap">
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-calendar text-primary"></i>
                                    <a class="text-body" href="javascript:void(0);">17 March 2025</a>
                                </li>
                                <li class="d-flex gap-1 align-items-center">
                                    <i class="icon-circle-user text-primary"></i> BY
                                    <a class="text-body" href="javascript:void(0);"> Roberts</a>
                                </li>
                            </ul>
                            <h5>
                                <a href="http://../pages/blog-details.html" class="text-dark">The Future of CRM:
                                    AI-Powered Admin Dashboards for Smarter</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            <a href="http://../pages/blog-details.html" class="btn-link stretched-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </main>
@endsection

@push('scripts')
    <!--  Page Scripts -->
    <script src="{{ asset('assets/admin/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
