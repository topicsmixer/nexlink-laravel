@extends('admin.layouts.app')

@section('title', 'Activities Dashboard')

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
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.css') }}">
    <!--  CSS Stylesheet -->
@endpush

@section('content')
<main class="app-wrapper">
    <div class="container-fluid">

        <div class="app-page-head d-flex align-items-center justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.default-dashboard') }}">
                            <i class="fi fi-rr-home"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Activities</li>
                </ol>
            </nav>
        </div>

        <div class="row">

            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-0 pb-0">
                        <div class="clearfix">
                            <h6 class="card-title mb-1">New User Signups</h6>
                            <small>Track daily user acquisition</small>
                        </div>
                        <div class="ms-auto">
                            <div class="avatar bg-primary-subtle text-primary rounded-3">
                                <i class="fi fi-rr-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span>Today</span>
                                <h4 class="mb-0">128</h4>
                            </div>
                            <div class="col-6 text-end">
                                <span>This Week</span>
                                <h4 class="mb-0">840</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center px-0 mx-3">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-success-subtle text-success me-2">+12%</span>
                            <span>from last week</span>
                        </div>
                        <small>Updated today</small>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-0 pb-0">
                        <div class="clearfix">
                            <h6 class="card-title mb-1">New Orders</h6>
                            <small>Track daily purchase activity</small>
                        </div>
                        <div class="ms-auto">
                            <div class="avatar bg-primary-subtle text-primary rounded-3">
                                <i class="fi fi-rr-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span>Today</span>
                                <h4 class="mb-0">212</h4>
                            </div>
                            <div class="col-6 text-end">
                                <span>This Week</span>
                                <h4 class="mb-0">1,540</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center px-0 mx-3">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-success-subtle text-success me-2">+18%</span>
                            <span>from last week</span>
                        </div>
                        <small>Updated today</small>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-0 pb-0">
                        <div class="clearfix">
                            <h6 class="card-title mb-1">Support Tickets</h6>
                            <small>Track customer issues</small>
                        </div>
                        <div class="ms-auto">
                            <div class="avatar bg-primary-subtle text-primary rounded-3">
                                <i class="fi fi-rr-headset"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span>Today</span>
                                <h4 class="mb-0">48</h4>
                            </div>
                            <div class="col-6 text-end">
                                <span>This Week</span>
                                <h4 class="mb-0">310</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center px-0 mx-3">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-danger-subtle text-danger me-2">+7%</span>
                            <span>increase</span>
                        </div>
                        <small>Updated today</small>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-0 pb-0">
                        <div class="clearfix">
                            <h6 class="card-title mb-1">Total Interactions</h6>
                            <small>User activities across platform</small>
                        </div>
                        <div class="ms-auto">
                            <div class="avatar bg-primary-subtle text-primary rounded-3">
                                <i class="fi fi-rr-bolt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span>Today</span>
                                <h4 class="mb-0">1,520</h4>
                            </div>
                            <div class="col-6 text-end">
                                <span>This Week</span>
                                <h4 class="mb-0">9,430</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center px-0 mx-3">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-success-subtle text-success me-2">+22%</span>
                            <span>growth</span>
                        </div>
                        <small>Updated today</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-12">
                <div class="card">
                    <div
                        class="card-header d-flex flex-wrap gap-3 align-items-center justify-content-between border-0 pb-0">
                        <h6 class="card-title mb-0">Calls Performance</h6>
                        <div class="btn-group ms-2">
                            <button class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fi fi-bs-menu-dots"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <div id="callsChart" class="mb-n4"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div
                        class="card-header d-flex flex-wrap gap-3 align-items-center justify-content-between border-0 pb-0">
                        <h6 class="card-title mb-0">Tasks Completed</h6>
                        <div class="btn-group ms-2">
                            <button class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fi fi-bs-menu-dots"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <div id="tasksChart" class="mb-n4"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div
                        class="card-header d-flex flex-wrap gap-3 align-items-center justify-content-between border-0 pb-0">
                        <h6 class="card-title mb-0">Leads Closed</h6>
                        <div class="btn-group ms-2">
                            <button class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fi fi-bs-menu-dots"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="leadsChart"></div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-12">
                <div class="card overflow-hidden">
                    <div
                        class="card-header d-flex flex-wrap gap-3 align-items-center justify-content-between border-0 pb-0">
                        <h6 class="card-title mb-0">Recent Activities</h6>
                        <div id="dt_Activities_Search"></div>
                    </div>
                    <div class="card-body px-1 pt-2 pb-2">
                        <table id="dt_Activities" class="table table-sm display table-row-rounded data-row-checkbox">
                            <thead class="table-light">
                                <tr>
                                    <th class="pe-0 minw-75px">
                                        <div class="form-check">
                                            <input class="form-check-input" data-row-checkbox type="checkbox">
                                        </div>
                                    </th>
                                    <th class="minw-150px">Agent Name</th>
                                    <th class="minw-100px">Type</th>
                                    <th class="minw-175px">Description</th>
                                    <th class="minw-150px">Outcome</th>
                                    <th class="minw-125px">Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar1.webp') }}" alt="">
                                            </div>
                                            Emily Watson
                                        </div>
                                    </td>
                                    <td>Call</td>
                                    <td>Followed up on lead #8431</td>
                                    <td>
                                        <span class="badge badge-lg bg-primary-subtle text-primary">Successful</span>
                                    </td>
                                    <td>2 hours ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar2.webp') }}" alt="">
                                            </div>
                                            John Carter
                                        </div>
                                    </td>
                                    <td>Email</td>
                                    <td>Sent pricing proposal</td>
                                    <td>
                                        <span class="badge badge-lg bg-info-subtle text-info">Opened</span>
                                    </td>
                                    <td>3 hours ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar3.webp') }}" alt="">
                                            </div>
                                            Sarah Evans
                                        </div>
                                    </td>
                                    <td>Meeting</td>
                                    <td>Demo with client #1293</td>
                                    <td>
                                        <span class="badge badge-lg bg-primary-subtle text-primary">Completed</span>
                                    </td>
                                    <td>5 hours ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar4.webp') }}" alt="">
                                            </div>
                                            David Hill
                                        </div>
                                    </td>
                                    <td>Task</td>
                                    <td>Prepared contract draft</td>
                                    <td>
                                        <span class="badge badge-lg bg-warning-subtle text-warning">Pending Review</span>
                                    </td>
                                    <td>1 day ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar5.webp') }}" alt="">
                                            </div>
                                            Lucas Brown
                                        </div>
                                    </td>
                                    <td>Call</td>
                                    <td>Contact attempt (no answer)</td>
                                    <td>
                                        <span class="badge badge-lg bg-danger-subtle text-danger">Unsuccessful</span>
                                    </td>
                                    <td>1 day ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar6.webp') }}" alt="">
                                            </div>
                                            Olivia Park
                                        </div>
                                    </td>
                                    <td>Email</td>
                                    <td>Follow-up sent on quote #5512</td>
                                    <td>
                                        <span class="badge badge-lg bg-info-subtle text-info">Opened</span>
                                    </td>
                                    <td>2 days ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar7.webp') }}" alt="">
                                            </div>
                                            Michael Gray
                                        </div>
                                    </td>
                                    <td>Meeting</td>
                                    <td>Discovery call with team #4421</td>
                                    <td>
                                        <span class="badge badge-lg bg-primary-subtle text-primary">Completed</span>
                                    </td>
                                    <td>2 days ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar8.webp') }}" alt="">
                                            </div>
                                            Sophia Miller
                                        </div>
                                    </td>
                                    <td>Task</td>
                                    <td>Updated onboarding documents</td>
                                    <td>
                                        <span class="badge badge-lg bg-warning-subtle text-warning">Pending Review</span>
                                    </td>
                                    <td>3 days ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar9.webp') }}" alt="">
                                            </div>
                                            Daniel Cooper
                                        </div>
                                    </td>
                                    <td>Call</td>
                                    <td>Responded to service request #9922</td>
                                    <td>
                                        <span class="badge badge-lg bg-primary-subtle text-primary">Successful</span>
                                    </td>
                                    <td>4 days ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check p-0 w-auto d-inline-block">
                                            <input class="form-check-input m-0" data-checkbox type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xxs rounded-circle me-2">
                                                <img src="{{ asset('assets/admin/images/avatar/avatar10.webp') }}" alt="">
                                            </div>
                                            Grace Turner
                                        </div>
                                    </td>
                                    <td>Email</td>
                                    <td>Sent follow-up on onboarding query</td>
                                    <td>
                                        <span class="badge badge-lg bg-info-subtle text-info">Opened</span>
                                    </td>
                                    <td>5 days ago</td>
                                    <td>
                                        <div class="btn-group float-end">
                                            <button
                                                class="btn btn-subtle-primary btn-sm btn-shadow btn-icon dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fi fi-rr-menu-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>
@endsection

@push('scripts')
    <!--  Page Scripts -->
    <script src="{{ asset('assets/admin/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dashboard/activities.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
