@extends('admin.layouts.cover')

@section('title', 'Under Construction Full')

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
    <div class="maintenance-full-wrapper">
      <div class="row g-xl-7 g-5 align-items-center">
        <div class="col-md-5">
          <div id="under-construction002" class="maintenance-img"></div>
        </div>
        <div class="col-md-7">
          <div class="maintenance-wrapper">
            <div class="maintenance-status">Under
              <br>Construction
            </div>
            <h2 class="maintenance-heading text-primary mb-3">This Page is Under Construction. We'll Be Live Soon.</h2>
            <p class="maintenance-text mb-4 maxw-md-500px">Our website is under construction, but we are ready to go! Special surprise for our subscribers only.</p>
            <form class="d-flex align-items-center maxw-md-450px position-relative" action="#">
              <i class="fi fi-rr-envelope position-absolute start-0 ms-4"></i>
              <input type="text" class="form-control form-control-lg ps-7" placeholder="Email Address">
              <button type="button" class="btn btn-primary position-absolute end-0 waves-effect waves-light me-1">
                Subscribe
              </button>
            </form>
          </div>
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
