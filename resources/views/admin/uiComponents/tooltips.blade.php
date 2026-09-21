@extends('admin.layouts.app')

@section('title', 'Tooltips')

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
              <li class="breadcrumb-item active" aria-current="page">Tooltips</li>
            </ol>
          </nav>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Directions</h6>
                <p class="card-text">To use tooltips, you must initialize them. One way is by selecting elements with the <code>data-bs-toggle="tooltip"</code> attribute and using JavaScript to initialize all tooltips on a page.</p>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2 justify-content-between">
                  <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                    Tooltip on top
                  </button>
                  <button type="button" class="btn btn-secondary waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">
                    Tooltip on right
                  </button>
                  <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
                    Tooltip on bottom
                  </button>
                  <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">
                    Tooltip on left
                  </button>
                  <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                    Tooltip with HTML
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Custom tooltips</h6>
                <p class="card-text">You can customize the appearance of tooltips using CSS variables. We set a custom class with <code>data-bs-custom-class="custom-tooltip"</code> to scope our custom appearance and use it to override a local CSS variable.</p>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                  <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Primary Tooltip">
                    Primary
                  </button>
                  <button type="button" class="btn btn-secondary waves-effect waves-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-secondary" data-bs-placement="top" data-bs-title="Secondary Tooltip">
                    Secondary
                  </button>
                  <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-success" data-bs-placement="top" data-bs-title="Success Tooltip">
                    Success
                  </button>
                  <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-info" data-bs-placement="top" data-bs-title="Info Tooltip">
                    Info
                  </button>
                  <button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-warning" data-bs-placement="top" data-bs-title="Warning Tooltip">
                    Warning
                  </button>
                  <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-danger" data-bs-placement="top" data-bs-title="Danger Tooltip">
                    Danger
                  </button>
                  <button type="button" class="btn btn-dark waves-effect waves-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="Dark Tooltip">
                    Dark
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Tooltips on links</h6>
                <p class="card-text">As mentioned above, you must initialize tooltips before they can be used. One way to initialize all tooltips on a page would be to select them by their <code>data-bs-toggle</code> attribute, like so:</p>
              </div>
              <div class="card-body">
                <p class="muted">Placeholder text to demonstrate some <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.</p>
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
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
