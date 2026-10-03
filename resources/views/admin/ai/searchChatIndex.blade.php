@extends('admin.layouts.chat')

@section('title', 'AI Search Chat')

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
                            <div class="card overflow-hidden">
                                <div class="card-header border-0">
                                    <form class="d-flex align-items-center h-100 position-relative" action="#">
                                        <button type="button"
                                            class="btn btn-sm border-0 position-absolute start-0 ms-3 p-0">
                                            <i class="fi fi-rr-search"></i>
                                        </button>
                                        <input type="text" class="form-control form-control-fill ps-5 bg-light"
                                            placeholder="Search anything…" data-bs-toggle="modal"
                                            data-bs-target="#searchResultsModal">
                                    </form>
                                </div>
                                <div class="card-body gradient-layer" style="height: 400px;" data-simplebar>
                                    <a href="javascript:void(0);"
                                        class="btn btn-light d-flex align-items-center rounded px-3 mb-3">
                                        <i class="fi fi-rr-edit me-2"></i>
                                        <span>New Chat</span>
                                    </a>
                                    <div class="mb-3">
                                        <p class="mb-3">Today</p>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light d-flex align-items-center rounded px-3">
                                            <i class="fi fi-rr-comment-alt me-2"></i>
                                            <span>AI dashboard color palette</span>
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <p class="mb-3">Yesterday</p>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                                            <i class="fi fi-rr-comment-alt me-2"></i>
                                            <span>Pricing table UX improvement</span>
                                        </a>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                                            <i class="fi fi-rr-comment-alt me-2"></i>
                                            <span>Dark mode UI guidelines</span>
                                        </a>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                                            <i class="fi fi-rr-comment-alt me-2"></i>
                                            <span>Landing page copywriting</span>
                                        </a>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                                            <i class="fi fi-rr-comment-alt me-2"></i>
                                            <span>Pricing table UX improvement</span>
                                        </a>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                                            <i class="fi fi-rr-comment-alt me-2"></i>
                                            <span>Dark mode UI guidelines</span>
                                        </a>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                                            <i class="fi fi-rr-comment-alt me-2"></i>
                                            <span>Landing page copywriting</span>
                                        </a>
                                    </div>
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
                                    <a class="search-item" href="{{ route('admin.default-dashboard') }}">
                                        <i class="fi fi-rr-apps"></i> Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="{{ route('admin.chat') }}">
                                        <i class="fi fi-rr-comment"></i> Chat
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="{{ route('admin.calendar') }}">
                                        <i class="fi fi-rr-calendar"></i> Calendar
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="{{ route('admin.chart.apexChart') }}">
                                        <i class="fi fi-rr-chart-pie-alt"></i> Apexchart
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="{{ route('admin.pages.pricing') }}">
                                        <i class="fi fi-rr-file"></i> Pricing
                                    </a>
                                </li>
                                <li>
                                    <a class="search-item" href="{{ route('admin.email.inbox') }}">
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
