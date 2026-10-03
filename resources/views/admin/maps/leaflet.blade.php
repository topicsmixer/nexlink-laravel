@extends('admin.layouts.app')

@section('title', 'Leaflet')

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
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/leaflet/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.css') }}">
    <!--  CSS Stylesheet -->
@endpush

@section('content')
    <main class="app-wrapper">

      <div class="container-fluid">

        <div class="app-page-head d-flex justify-content-between">
          <div class="clearfix">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('admin.default-dashboard') }}">
                    <i class="fi fi-rr-home"></i> Home
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Leaflet Map</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 mb-3">
            <h6 class="card-title mb-3">Basic World Map</h6>
            <div class="clearfix">
              <div class="card card-body p-1">
                <div id="mapBasicWorld" class="rounded-2" style="height: 400px;"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-3">
            <h6 class="card-title mb-3">Map Overlays</h6>
            <div class="clearfix">
              <div class="card card-body p-1">
                <div id="mapOverlays" class="rounded-2" style="height: 400px;"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-3">
            <h6 class="card-title mb-3">Layers Control</h6>
            <div class="clearfix">
              <div class="card card-body p-1">
                <div id="mapLayersControl" class="rounded-2" style="height: 400px;"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-3">
            <h6 class="card-title mb-3">Markers With Custom Icons</h6>
            <div class="clearfix">
              <div class="card card-body p-1">
                <div id="mapMarkersCustom" class="rounded-2" style="height: 400px;"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mb-3">
            <h6 class="card-title mb-3">Interactive Choropleth Map</h6>
            <div class="clearfix">
              <div class="card card-body p-1">
                <div id="mapInteractiveChoropleth" class="rounded-2" style="height: 400px;"></div>
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
    <script src="{{ asset('assets/admin/libs/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/leaflet/us-states.js') }}"></script>
    <script src="{{ asset('assets/admin/js/plugins/leaflet.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
