@extends('admin.layouts.app')

@section('title', 'Pricing')

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
                            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12 mb-5">
                    <h3 class="text-center mb-2">Plans that cover your needs</h3>
                    <p class="text-center mb-3">Choose the plan that fits your workflow and team size.</p>
                    <div class="form-check form-switch p-0 my-0 d-flex justify-content-center">
                        <label class="form-check-label d-flex fw-semibold align-items-center" for="priceSwitchCheck">
                            <span>Monthly</span>
                            <input class="form-check-input mx-2" type="checkbox" role="switch" id="priceSwitchCheck">
                            <span>Annually</span>
                        </label>
                    </div>
                </div>
                <div class="col-xl-10">
                    <div class="row mx-xxl-3">
                        <div class="col-lg-4">
                            <div class="card overflow-hidden p-sm-3 card-action action-border-primary">
                                <div class="card-header border-0 p-4">
                                    <h4>Individuals</h4>
                                    <p class="mb-4">Create professional visuals fast with AI-powered tools and premium
                                        assets.</p>
                                    <div class="display-6 text-dark lh-1 price-monthly">$338.75 <span
                                            class="h6">Monthly</span>
                                    </div>
                                    <div class="display-6 text-dark lh-1 price-yearly d-none">$438.75 <span
                                            class="h6">Year</span>
                                    </div>
                                    <div class="mt-2">37% off billed annually</div>
                                </div>
                                <div class="card-body p-4">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-light btn-lg waves-effect waves-light w-100 rounded-pill mb-4">Show
                                        individual plans</a>
                                    <ul class="list-inline text-sm">
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>AI generation & editing of images and videos</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Train custom AI models for visuals</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Upscale images up to 10K resolution</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Access to 250M+ stock assets</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Priority image & video generation</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Commercial AI license for professionals</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card overflow-hidden p-sm-3 card-action action-border-primary action-active">
                                <div class="card-header border-0 p-4">
                                    <h4>Teams</h4>
                                    <p class="mb-4">Collaborate with your team on AI-driven projects and premium content.
                                    </p>
                                    <div class="display-6 text-dark lh-1 price-monthly">$1,687.50 <span
                                            class="h6">Monthly</span>
                                    </div>
                                    <div class="display-6 text-dark lh-1 price-yearly d-none">$2,687.50 <span
                                            class="h6">Year</span>
                                    </div>
                                    <div class="mt-2">37% off billed annually</div>
                                </div>
                                <div class="card-body p-4">
                                    <a href="javascript:void(0);"
                                        class="btn btn-primary btn-lg waves-effect waves-light rounded-pill w-100 mb-4">Get
                                        a plan</a>
                                    <ul class="list-inline text-sm">
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Everything in individual plans</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Unlimited image generation</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Control team credit usage</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Unified admin and billing</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Secured asset storage</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Team collaboration & sharing</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card overflow-hidden p-sm-3 card-action action-border-primary">
                                <div class="card-header border-0 p-4">
                                    <h4>Enterprise</h4>
                                    <p class="mb-4">Get the best with dedicated support and priority features for
                                        organizations.</p>
                                    <div class="display-6 text-dark lh-1">Custom</div>
                                    <div class="mt-2">Tailored pricing based on needs</div>
                                </div>
                                <div class="card-body p-4">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-light btn-lg waves-effect waves-light rounded-pill w-100 mb-4">Learn
                                        more</a>
                                    <ul class="list-inline text-sm">
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Everything in team plans</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Legal indemnification for AI content</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Rights over generated content</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>SSO & enterprise security</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Expert guidance & training</span>
                                        </li>
                                        <li class="d-flex gap-2 align-items-center py-1">
                                            <i class="fa-solid fa-check text-primary"></i>
                                            <span>Unlimited users & flexible credits</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
