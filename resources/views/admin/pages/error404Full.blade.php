@extends('admin.layouts.cover')

@section('title', 'Error 404 Cover')

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
    <div class="error-full-wrapper">
      <div class="row g-xl-7 g-5 justify-content-center">
        <div class="col-md-5">
          <div class="pe-lg-5">
            <div id="error001"></div>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <h2 class="error-heading mb-3">Something
            <br> Went Wrong
          </h2>
          <p class="error-text mb-5">Sorry we were unable to find that page</p>
          <a href="{{ route('admin.default-dashboard') }}" class="btn btn-primary waves-effect waves-light">
            <i class="fi fi-rr-arrow-small-left scale-4x me-1"></i> Back To Dashboard
          </a>
        </div>
      </div>
    </div>
@endsection

@push('scripts')
    <!--  Page Scripts -->
    <script src="{{ asset('assets/admin/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/lottiefiles/lottie.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lottie.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
