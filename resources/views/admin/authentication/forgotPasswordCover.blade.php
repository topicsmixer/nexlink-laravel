@extends('admin.layouts.cover')

@section('title', 'Forgot Password Cover')

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
    <div class="auth-cover-wrapper">
      <div class="row g-0">
        <div class="col-md-6 order-md-1">
          <div class="auth-cover">
            <div class="clearfix">
              <img src="{{ asset('assets/admin/images/auth/vector1.svg') }}" alt="" class="img-fluid cover-img">
              <div class="auth-content">
                <h1 class="display-6 fw-bold">Welcome Back!</h1>
                <p>Welcome to NexLink, your all-in-one solution for smart business management. Streamline workflows, boost productivity, and grow your business with confidence.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="px-3 py-5 p-sm-5 maxw-450px m-auto">
            <div class="mb-4 text-center">
              <a href="{{ route('admin.default-dashboard') }}" aria-label="NexLink logo">
                <img class="visible-light" src="{{ asset('assets/admin/images/logo.svg') }}" alt="NexLink logo">
              </a>
            </div>
            <div class="text-center mb-5">
              <h5 class="mb-1">Welcome to NexLink</h5>
              <p>Enter your email to reset your password.</p>
            </div>
            <form action="http://../authentication/new-password-cover.html">
              <div class="mb-4">
                <label class="form-label" for="resetEmail">Email address</label>
                <input type="email" class="form-control" id="resetEmail" placeholder="info@example.com">
              </div>
              <div class="clearfix">
                <button type="submit" value="Submit" class="btn btn-primary waves-effect waves-light w-100 mb-3">Forgot Password</button>
                <a href="{{ route('admin.authentication.login-cover') }}" class="btn btn-light waves-effect waves-light w-100"> Cancel </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('scripts')
    <!--  Page Scripts -->
    <script src="{{ asset('assets/admin/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
