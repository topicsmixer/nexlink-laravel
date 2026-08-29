@extends('admin.layouts.app')

@section('title', 'Under Construction')

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
    <main class="app-wrapper d-flex align-items-center justify-content-center">

      <div class="container">
        <div class="maintenance-wrapper text-center">
          <div class="maintenance-status">Under
            <br>Construction
          </div>
          <h2 class="maintenance-heading text-primary mb-3">This Page is Under Construction. We'll Be Live Soon.</h2>
          <p class="maintenance-text mb-4 maxw-md-500px mx-auto">Our website is under construction, but we are ready to go! Special surprise for our subscribers only.</p>
          <form class="d-flex align-items-center maxw-md-450px position-relative m-auto" action="#">
            <i class="fi fi-rr-envelope position-absolute start-0 ms-4"></i>
            <input type="text" class="form-control form-control-lg ps-7" placeholder="Email Address">
            <button type="button" class="btn btn-primary position-absolute end-0 waves-effect waves-light me-1">
              Subscribe
            </button>
          </form>
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
