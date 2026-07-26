@extends('admin.layouts.chat')

@section('title', 'AI Investment')

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

            <div class="row justify-content-center align-items-end">

                <div class="col-xxl-5 col-xl-8 col-lg-8">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="bg-light rounded-pill p-2 d-flex align-items-center">
                                <form class="search-bx w-100 d-flex align-items-center" action="#">
                                    <div class="position-relative d-inline-block">
                                        <!-- Plus Button -->
                                        <button class="btn btn-white rounded-circle btn-icon" type="button"
                                            id="addDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fi fi-rr-plus"></i>
                                        </button>
                                        <!-- Dropdown Menu -->
                                        <ul class="dropdown-menu" aria-labelledby="addDropdown">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                                    href="javascript:void(0);">
                                                    <i class="fi fi-rr-copy-image"></i> Upload Image
                                                </a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                                    href="javascript:void(0);">
                                                    <i class="fi fi-rr-document"></i> Upload Document
                                                </a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                                    href="javascript:void(0);">
                                                    <i class="fi fi-rr-link-alt"></i> Add Link
                                                </a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                                    href="javascript:void(0);">
                                                    <i class="fi fi-rs-microphone"></i> Record Audio
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <input type="text" class="form-control ps-2 bg-light" placeholder="New chat in…"
                                        data-bs-toggle="modal" data-bs-target="#searchResultsModal">
                                </form>
                                <div class="d-flex align-items-center gap-1">
                                    <button class="btn btn-white btn-icon rounded-circle">
                                        <i class="fi fi-rr-microphone"></i>
                                    </button>
                                    <button class="btn btn-white btn-icon rounded-circle">
                                        <i class="fi fi-rr-arrow-small-up text-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="javascript:void(0);"
                                class="d-flex gap-2 align-items-center border p-3 mb-2 rounded text-body">
                                <div class="cleafix me-auto">
                                    <h6 class="mb-0">Modern Web Design Trends</h6>
                                    <p class="mb-0">Exploring minimal UI, bold typography, and interactive layouts in
                                        2026.</p>
                                </div>
                                <span>Mar 03</span>
                            </a>
                            <a href="javascript:void(0);"
                                class="d-flex gap-2 align-items-center border p-3 mb-2 rounded text-body">
                                <div class="cleafix me-auto">
                                    <h6 class="mb-0">Crypto Market Basics</h6>
                                    <p class="mb-0">Understanding blockchain, trading psychology, and risk management.</p>
                                </div>
                                <span>Mar 03</span>
                            </a>
                            <a href="javascript:void(0);"
                                class="d-flex gap-2 align-items-center border p-3 mb-2 rounded text-body">
                                <div class="cleafix me-auto">
                                    <h6 class="mb-0">Digital Marketing Secrets</h6>
                                    <p class="mb-0">Strategies for generating high-quality leads using social media and
                                        ads.</p>
                                </div>
                                <span>Mar 03</span>
                            </a>
                            <a href="javascript:void(0);"
                                class="d-flex gap-2 align-items-center border p-3 mb-2 rounded text-body">
                                <div class="cleafix me-auto">
                                    <h6 class="mb-0">Startup Growth Blueprint</h6>
                                    <p class="mb-0">Scaling a small business with smart automation and branding.</p>
                                </div>
                                <span>Mar 03</span>
                            </a>
                            <a href="javascript:void(0);"
                                class="d-flex gap-2 align-items-center border p-3 mb-2 rounded text-body">
                                <div class="cleafix me-auto">
                                    <h6 class="mb-0">Creative Content Strategy</h6>
                                    <p class="mb-0">Planning short-form videos that engage and convert viewers.</p>
                                </div>
                                <span>Mar 03</span>
                            </a>
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
