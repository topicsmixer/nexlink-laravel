@extends('admin.layouts.app')

@section('title', 'Tagify')

@push('styles')
    <!--  Required Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/flaticon/css/all/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/lucide/lucide.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/simplebar/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/tagify/tagify.css') }}">
    <!--  Required Stylesheet -->

    <!--  CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.css') }}">
    <!--  CSS Stylesheet -->
@endpush

@section('content')
    <main class="app-wrapper">

      <div class="container-fluid">

        <div class="app-page-head">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.default-dashboard') }}">
                  <i class="fi fi-rr-home"></i> Home
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Tagify</li>
            </ol>
          </nav>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Tagify</h6>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 mb-5">
                    <label class="form-label">Basic tagify</label>
                    <input class="form-control tagify-input" value='sales@example.com, info@example.com, support@example.com'>
                  </div>
                  <div class="col-lg-12 mb-5">
                    <label class="form-label">Users List</label>
                    <input class='form-control tagify-users-list' value='Sophia Hall, Olivia Clark'>
                  </div>
                  <div class="col-lg-12 mb-4">
                    <label class="form-label">Advance Options</label>
                    <input class="form-control tagify-advance-options" value='[{"value":"Michael Davis"}, {"value":"James Anderson"}]' pattern='^[A-Za-z_✲ ]{1,15}$'>
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
    <script src="{{ asset('assets/admin/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/admin/js/plugins/tagify.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
