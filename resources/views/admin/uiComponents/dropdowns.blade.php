@extends('admin.layouts.app')

@section('title', 'Dropdowns')

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
              <li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
            </ol>
          </nav>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Basic dropdowns</h6>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2 mb-3">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Primary
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Secondary
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-success waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Success
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Info
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-warning waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Warning
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Danger
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-dark waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Dark
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="d-flex flex-wrap gap-2 mb-3">
                  <div class="btn-group">
                    <button type="button" class="btn btn-subtle-primary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Primary
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-subtle-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Secondary
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-subtle-success waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Success
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-subtle-info waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Info
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-subtle-warning waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Warning
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-subtle-danger waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Danger
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-subtle-dark waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Dark
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="d-flex flex-wrap gap-2 mb-3">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Primary
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Secondary
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Success
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-info waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Info
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-warning waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Warning
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Danger
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-dark waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Dark
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Split button</h6>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Primary</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                    <button type="button" class="btn btn-warning waves-effect waves-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Warning</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
                    <button type="button" class="btn btn-success waves-effect waves-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Success</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
                    <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Info</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                    <button type="button" class="btn btn-warning waves-effect waves-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Warning</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Danger</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>
                    <button type="button" class="btn btn-dark waves-effect waves-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Dark</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Alignment options</h6>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                  <div class="btn-group">
                    <button class="btn btn-secondary waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Right-aligned menu
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                      Left-aligned, right-aligned lg
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                      Right-aligned, left-aligned lg
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group dropstart">
                    <button type="button" class="btn btn-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropstart
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group dropend">
                    <button type="button" class="btn btn-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropend
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group dropup">
                    <button type="button" class="btn btn-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropup
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Sizing</h6>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2 align-items-center">
                  <div class="btn-group">
                    <button class="btn btn-secondary waves-effect waves-light btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Large button
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button class="btn btn-secondary waves-effect waves-light btn-lg" type="button">
                      Large split button
                    </button>
                    <button type="button" class="btn waves-effect waves-light btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button class="btn btn-secondary waves-effect waves-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Small button
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button class="btn btn-secondary waves-effect waves-light btn-sm" type="button">
                      Small split button
                    </button>
                    <button type="button" class="btn waves-effect waves-light btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                      </li>
                    </ul>
                  </div>

                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Dark dropdowns</h6>
              </div>
              <div class="card-body">
                <div class="dropdown">
                  <button class="btn btn-secondary waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li>
                      <a class="dropdown-item active" href="javascript:void(0);">Action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Auto close behavior</h6>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                  <div class="btn-group">
                    <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                      Default dropdown
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                      Clickable inside
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                      Clickable outside
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                  <div class="btn-group">
                    <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                      Manual close
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Dropdown with icon</h6>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                  <div class="btn-group">
                    <button class="btn btn-primary btn-icon waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                      <i class="fi fi-rr-menu-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-subtle-primary btn-icon waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                      <i class="fi fi-rr-menu-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-white btn-shadow btn-icon waves-effect waves-light dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                      <i class="fi fi-rr-menu-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                      </li>
                    </ul>
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
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
