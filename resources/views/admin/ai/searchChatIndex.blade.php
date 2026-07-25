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
                      <button type="button" class="btn btn-sm border-0 position-absolute start-0 ms-3 p-0">
                        <i class="fi fi-rr-search"></i>
                      </button>
                      <input type="text" class="form-control form-control-fill ps-5 bg-light" placeholder="Search anything…" data-bs-toggle="modal" data-bs-target="#searchResultsModal">
                    </form>
                  </div>
                  <div class="card-body gradient-layer" style="height: 400px;" data-simplebar>
                    <a href="javascript:void(0);" class="btn btn-light d-flex align-items-center rounded px-3 mb-3">
                      <i class="fi fi-rr-edit me-2"></i>
                      <span>New Chat</span>
                    </a>
                    <div class="mb-3">
                      <p class="mb-3">Today</p>
                      <a href="javascript:void(0);" class="btn btn-light d-flex align-items-center rounded px-3">
                        <i class="fi fi-rr-comment-alt me-2"></i>
                        <span>AI dashboard color palette</span>
                      </a>
                    </div>
                    <div class="mb-3">
                      <p class="mb-3">Yesterday</p>
                      <a href="javascript:void(0);" class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                        <i class="fi fi-rr-comment-alt me-2"></i>
                        <span>Pricing table UX improvement</span>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                        <i class="fi fi-rr-comment-alt me-2"></i>
                        <span>Dark mode UI guidelines</span>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                        <i class="fi fi-rr-comment-alt me-2"></i>
                        <span>Landing page copywriting</span>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                        <i class="fi fi-rr-comment-alt me-2"></i>
                        <span>Pricing table UX improvement</span>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
                        <i class="fi fi-rr-comment-alt me-2"></i>
                        <span>Dark mode UI guidelines</span>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-light d-flex align-items-center rounded px-3 mb-2">
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

    </main>
@endsection

@push('scripts')
    <!--  Page Scripts -->
    <script src="{{ asset('assets/admin/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
