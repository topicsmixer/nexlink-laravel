@extends('admin.layouts.app')

@section('title', 'Breadcrumb')

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
              <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
            </ol>
          </nav>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Basic</h6>
              </div>
              <div class="card-body">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                  </ol>
                </nav>

                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
                </nav>

                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Dividers </h6>
              </div>
              <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
                </nav>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Colored Breadcrumb</h6>
              </div>
              <div class="card-body">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-primary-subtle rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-primary" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-primary fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-secondary-subtle rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-secondary" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-secondary fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-info-subtle rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-info" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-info fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-success-subtle rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-success" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-success fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-danger-subtle rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-danger" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-danger fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-warning-subtle rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-warning" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-warning fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-dark-subtle rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-dark" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-dark fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Colored Rounded Breadcrumb</h6>
              </div>
              <div class="card-body">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-primary-subtle rounded-5">
                    <li class="breadcrumb-item">
                      <a class="link-primary" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-primary fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-secondary-subtle rounded-5">
                    <li class="breadcrumb-item">
                      <a class="link-secondary" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-secondary fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-info-subtle rounded-5">
                    <li class="breadcrumb-item">
                      <a class="link-info" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-info fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-success-subtle rounded-5">
                    <li class="breadcrumb-item">
                      <a class="link-success" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-success fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-danger-subtle rounded-5">
                    <li class="breadcrumb-item">
                      <a class="link-danger" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-danger fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-warning-subtle rounded-5">
                    <li class="breadcrumb-item">
                      <a class="link-warning" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-warning fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 bg-dark-subtle rounded-5">
                    <li class="breadcrumb-item">
                      <a class="link-dark" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-dark fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Colored Border Breadcrumb</h6>
              </div>
              <div class="card-body">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 border border-primary rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-primary" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-primary fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 border border-secondary rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-secondary" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-secondary fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 border border-info rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-info" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-info fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 border border-success rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-success" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-success fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 border border-danger rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-danger" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-danger fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 border border-warning rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-warning" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-warning fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb px-3 py-2 border border-dark rounded-3">
                    <li class="breadcrumb-item">
                      <a class="link-dark" href="javascript:void(0);">
                        <i class="fi fi-rr-home"></i>
                        <span class="visually-hidden">Home</span>
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a class="link-dark fw-medium text-decoration-none" href="javascript:void(0);">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data
                    </li>
                  </ol>
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
