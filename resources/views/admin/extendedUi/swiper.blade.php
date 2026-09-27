@extends('admin.layouts.app')

@section('title', 'Swiper')

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
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/swiper/swiper-bundle.min.css') }}">
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
              <li class="breadcrumb-item active" aria-current="page">Swiper</li>
            </ol>
          </nav>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Basic Slider</h6>
              </div>
              <div class="card-body">
                <div class="swiper swiperInit">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel1.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel2.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel3.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Navigation</h6>
              </div>
              <div class="card-body">
                <div class="swiper swiperNav">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel2.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel3.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel4.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Pagination</h6>
              </div>
              <div class="card-body">
                <div class="swiper swiperPagination">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel4.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel5.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel1.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                  </div>
                  <div class="pagination-wrapper">
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Pagination dynamic</h6>
              </div>
              <div class="card-body">
                <div class="swiper swiperDynamicBullets">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel5.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel1.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel2.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                  </div>
                  <div class="pagination-wrapper">
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Pagination progress</h6>
              </div>
              <div class="card-body">
                <div class="swiper swiperProgressbar">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel3.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel4.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel1.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Pagination fraction</h6>
              </div>
              <div class="card-body">
                <div class="swiper swiperFraction">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel3.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel4.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('assets/admin/images/carousel/carousel1.webp') }}" alt="" class="img-fluid rounded">
                    </div>
                  </div>
                  <div class="pagination-wrapper">
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-4 mb-3">
          <a href="https://swiperjs.com/demos" target="_blank" class="btn btn-primary waves-effect waves-light">View All demos</a>
        </div>
      </div>

    </main>
@endsection

@push('scripts')
    <!--  Page Scripts -->
    <script src="{{ asset('assets/admin/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
