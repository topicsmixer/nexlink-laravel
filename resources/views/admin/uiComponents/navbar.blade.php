@extends('admin.layouts.app')

@section('title', 'Navbar')

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
              <li class="breadcrumb-item active" aria-current="page">Navbar</li>
            </ol>
          </nav>
        </div>

        <div class="row">

          <div class="col-lg-12 mb-5">
            <h6 class="card-title mb-3">Basic navbar</h6>
            <nav class="navbar navbar-expand-lg bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <div class="clearfix">
                      <button class="btn btn-primary waves-effect waves-light" type="submit">Search</button>
                    </div>
                  </form>
                </div>
              </div>
            </nav>
          </div>

          <div class="col-lg-12 mb-5">
            <h6 class="card-title mb-3">Color schemes</h6>
            <nav class="navbar navbar-expand-lg bg-primary mb-3">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">
                  <img src="{{ asset('assets/admin/images/logo-full-white.svg') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Settings
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <nav class="navbar navbar-expand-lg bg-secondary mb-3">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">
                  <img src="{{ asset('assets/admin/images/logo-full-white.svg') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Settings
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <nav class="navbar navbar-expand-lg bg-success mb-3">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">
                  <img src="{{ asset('assets/admin/images/logo-full-white.svg') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent4">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Settings
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <nav class="navbar navbar-expand-lg bg-danger mb-3">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">
                  <img src="{{ asset('assets/admin/images/logo-full-white.svg') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent5" aria-controls="navbarSupportedContent5" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent5">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Settings
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <nav class="navbar navbar-expand-lg bg-warning mb-3">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">
                  <img src="{{ asset('assets/admin/images/logo-full-white.svg') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent6">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Settings
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <nav class="navbar navbar-expand-lg bg-info mb-3">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">
                  <img src="{{ asset('assets/admin/images/logo-full-white.svg') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent7" aria-controls="navbarSupportedContent7" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent7">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Settings
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>

          <div class="col-lg-12 mb-5">
            <h6 class="card-title mb-3">Text</h6>
            <nav class="navbar navbar-expand-lg bg-light mb-3">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent8" aria-controls="navbarSupportedContent8" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent8">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    Navbar text with an inline element
                  </span>
                </div>
              </div>
            </nav>
            <nav class="navbar navbar-expand-lg bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent9" aria-controls="navbarSupportedContent9" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent9">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    Navbar text with an inline element
                  </span>
                </div>
              </div>
            </nav>
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
