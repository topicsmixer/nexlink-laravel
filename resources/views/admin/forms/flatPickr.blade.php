@extends('admin.layouts.app')

@section('title', 'Flatpickr')

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
              <li class="breadcrumb-item active" aria-current="page">Flatpickr</li>
            </ol>
          </nav>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Flatpickr</h6>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-6 mb-4">
                    <label class="form-label" for="flatpickr_basic">Date Picker</label>
                    <input type="datetime-local" id="flatpickr_basic" class="form-control" required>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <label class="form-label" for="flatpickr_datetime">Datetime Picker</label>
                    <input type="datetime-local" id="flatpickr_datetime" class="form-control" required>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <label class="form-label" for="flatpickr_time">Time Picker</label>
                    <input type="datetime-local" id="flatpickr_time" class="form-control" required>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <label class="form-label" for="flatpickr_range">Range Picker</label>
                    <input type="datetime-local" id="flatpickr_range" class="form-control" required>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <label class="form-label" for="flatpickr_multiple_dates">Multiple Dates Picker</label>
                    <input type="datetime-local" id="flatpickr_multiple_dates" class="form-control" required>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <label class="form-label" for="flatpickr_localization">Localization Picker</label>
                    <input type="datetime-local" id="flatpickr_localization" class="form-control" required>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <label class="form-label" for="flatpickr_weeknumbers">Week Numbers Picker</label>
                    <input type="datetime-local" id="flatpickr_weeknumbers" class="form-control" required>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <label class="form-label" for="flatpickr_inline">Inline Picker</label>
                    <input type="datetime-local" id="flatpickr_inline" class="form-control" required>
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
    <script src="{{ asset('assets/admin/libs/flatpickr/l10n/fr.js') }}"></script>
    <script src="{{ asset('assets/admin/js/plugins/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
