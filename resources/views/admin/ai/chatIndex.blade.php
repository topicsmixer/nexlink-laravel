@extends('admin.layouts.chat')

@section('title', 'AI Chat')

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
                        <div class="col-xxl-6 col-xl-8 col-lg-10 align-self-center">
                            <div class="new-chat-box">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('assets/admin/images/logo.svg') }}" alt="" class="mb-3">
                                    <h4>What’s on the agenda today?</h4>
                                </div>
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Textarea -->
                                        <div class="textarea-bx">
                                            <textarea class="form-control border-0 shadow-none resize-none" rows="6" maxlength="3000"
                                                placeholder="Plan a 6-day adventure trip to Barcelona for 3 friends in October. Budget friendly options preferred."></textarea>
                                            <img class="textarea-icon" src="{{ asset('assets/admin/images/icons/star.svg') }}"
                                                alt="">
                                        </div>

                                        <!-- Footer Buttons -->
                                        <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mt-3">
                                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                                <div class="position-relative d-inline-block">
                                                    <button class="btn btn-light rounded-circle btn-icon" type="button"
                                                        id="addDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fi fi-rr-plus"></i>
                                                    </button>
                                                    <ul class="dropdown-menu p-2 border-0 rounded-4"
                                                        aria-labelledby="addDropdown">
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
                                                <button class="btn btn-light btn-icon-text left rounded-pill">
                                                    <i class="fi fi-rr-clip icon"></i> Attach
                                                </button>
                                                <button class="btn btn-light btn-icon-text left rounded-pill">
                                                    <i class="fi fi-rr-globe icon"></i> Browser Prompt
                                                </button>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <button class="btn btn-light btn-icon rounded-circle">
                                                    <i class="fi fi-rr-microphone"></i>
                                                </button>
                                                <button class="btn btn-light btn-icon rounded-circle">
                                                    <i class="fi fi-rr-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
