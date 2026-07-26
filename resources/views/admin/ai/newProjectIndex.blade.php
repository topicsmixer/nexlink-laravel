@extends('admin.layouts.chat')

@section('title', 'AI New Project')

@push('styles')
    <!--  Required Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/flaticon/css/all/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/lucide/lucide.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/simplebar/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/bootstrap-select/css/bootstrap-select.min.css') }}">
    <!--  Required Stylesheet -->

    <!--  CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.css') }}">
    <!--  CSS Stylesheet -->
@endpush

@section('content')
    <main class="app-wrapper ai-wrapper">
        <div class="container-fluid">
            <div class="ai-frame-wrapper">
                <div class="inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-lg-8 align-self-center">
                            <div class="card">
                                <div class="card-header border-0 d-flex align-items-center justify-content-between pb-0">
                                    <h5 class="card-title mb-0">Create Projects</h5>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-light border-0">
                                            <i class="fi fi-rr-settings"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-light border-0">
                                            <i class="icon-x"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="d-flex align-items-center h-100 position-relative mb-3" action="#">
                                        <button type="button"
                                            class="btn btn-sm border-0 position-absolute start-0 ms-3 p-0">
                                            <i class="fi fi-rr-search"></i>
                                        </button>
                                        <input type="text" class="form-control form-control-fill ps-5 bg-light"
                                            placeholder="e.g. Copenhagen Trip" data-bs-toggle="modal"
                                            data-bs-target="#searchResultsModal">
                                    </form>
                                    <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
                                        <span class="badge rounded-pill text-bg-light">Investing</span>
                                        <span class="badge rounded-pill text-bg-light">Homework</span>
                                        <span class="badge rounded-pill text-bg-light">Writing</span>
                                        <span class="badge rounded-pill text-bg-light">Health</span>
                                        <span class="badge rounded-pill text-bg-light">Research</span>
                                        <span class="badge rounded-pill text-bg-light">Business</span>
                                        <span class="badge rounded-pill text-bg-light">Design</span>
                                        <span class="badge rounded-pill text-bg-light">Marketing</span>
                                    </div>
                                    <div class="alert alert-primary" role="alert">
                                        <i class="fi fi-sr-star me-1"></i>
                                        Projects keep chats, files, and custom instructions in one place. Use projects to
                                        stay organized and focused on long-term work.
                                    </div>
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Create
                                        Projects</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal fade" id="searchResultsModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header py-1 px-3">
                        <form class="d-flex align-items-center position-relative w-100" action="#">
                            <button type="button" class="btn btn-sm border-0 position-absolute start-0 p-0 text-sm ">
                                <i class="fi fi-rr-search"></i>
                            </button>
                            <input type="text" class="form-control form-control-lg ps-4 border-0 shadow-none"
                                id="searchInput" placeholder="Search anything's">
                        </form>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-2" style="height: 300px;" data-simplebar>
                        <div id="recentlyResults">
                            <span class="text-uppercase text-2xs fw-semibold text-muted d-block mb-2">Recently
                                Searched:</span>
                            <ul class="list-inline search-list">
                                <li>
                                    <a class="search-item" href="index.html">
                                        <i class="fi fi-rr-apps"></i> Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="chat.html">
                                        <i class="fi fi-rr-comment"></i> Chat
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="calendar.html">
                                        <i class="fi fi-rr-calendar"></i> Calendar
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="chart/apexchart.html">
                                        <i class="fi fi-rr-chart-pie-alt"></i> Apexchart
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="pages/pricing.html">
                                        <i class="fi fi-rr-file"></i> Pricing
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="email/inbox.html">
                                        <i class="fi fi-rr-envelope"></i> Email
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="searchContainer"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@push('scripts')
    <!--  Page Scripts -->
    <script src="{{ asset('assets/admin/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
