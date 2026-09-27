@extends('admin.layouts.app')

@section('title', 'Apexchart')

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

        <div class="app-page-head">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.default-dashboard') }}">
                  <i class="fi fi-rr-home"></i> Home
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Apexchart</li>
            </ol>
          </nav>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <h6 class="card-title">Employee Structure</h6>
              </div>
              <div class="card-body p-2">
                <div id="chartEmployee"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <h6 class="card-title">Attendance Rate</h6>
              </div>
              <div class="card-body p-2">
                <div id="chartAttendanceRate"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <h6 class="card-title">Payroll Summary</h6>
              </div>
              <div class="card-body p-2">
                <div id="chartPayrollSummary"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <h6 class="card-title">Average Team KPI</h6>
              </div>
              <div class="card-body p-2">
                <div id="averageTeamKPI"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <h6 class="card-title">Daily Sales States</h6>
              </div>
              <div class="card-body p-2 pb-0">
                <div id="chartDailySalesStates"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <h6 class="card-title">Stocks Prices</h6>
              </div>
              <div class="card-body p-2 pb-0">
                <div id="chartStocksPrices"></div>
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
    <script src="{{ asset('assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
