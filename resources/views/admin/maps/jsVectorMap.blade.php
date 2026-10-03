@extends('admin.layouts.app')

@section('title', 'Maps JSVectorMap')

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
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/jsvectormap/jsvectormap.min.css') }}">
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
              <li class="breadcrumb-item active" aria-current="page">JS Vector Map</li>
            </ol>
          </nav>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">World Map</h6>
              </div>
              <div class="card-body">
                <div id="jsVectorMap_World" class="jsvectormap"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Lines</h6>
              </div>
              <div class="card-body">
                <div id="jsVectorMap_Lines" class="jsvectormap"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Marker</h6>
              </div>
              <div class="card-body">
                <div id="jsVectorMap_Marker" class="jsvectormap"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Region</h6>
              </div>
              <div class="card-body">
                <div id="jsVectorMap_Region" class="jsvectormap"></div>
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
    <script src="{{ asset('assets/admin/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/jsvectormap/maps/world.js') }}"></script>
    <script src="{{ asset('assets/admin/js/plugins/jsvectormap.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
