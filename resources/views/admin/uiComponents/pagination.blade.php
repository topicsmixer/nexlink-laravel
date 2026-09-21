@extends('admin.layouts.app')

@section('title', 'Pagination')

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
              <li class="breadcrumb-item active" aria-current="page">Pagination</li>
            </ol>
          </nav>
        </div>

        <div class="row">

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Sizing</h6>
              </div>
              <div class="card-body">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-lg">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Rounded circle</h6>
              </div>
              <div class="card-body">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-lg pagination-rounded">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-sm pagination-rounded">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Pagination Color</h6>
              </div>
              <div class="card-body">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-primary">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-secondary">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-danger">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-success">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-warning">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-info">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-dark">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Pagination Outline Color</h6>
              </div>
              <div class="card-body">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-outline-primary">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-outline-secondary">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-outline-danger">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-outline-success">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-outline-warning">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-outline-info">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-rounded pagination-outline-dark">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                        <i class="fi fi-rr-angle-double-left"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" aria-label="Next">
                        <i class="fi fi-rr-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
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
