@extends('admin.layouts.app')

@section('title', 'Read Email')

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

        <div class="app-page-head d-flex flex-wrap gap-3 align-items-center justify-content-between">
          <div class="clearfix">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="{{ route('admin.default-dashboard') }}">
                    <i class="fi fi-rr-home"></i> Home
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Read email</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">

          <div class="col-12">
            <div class="card card-body overflow-hidden mail-wrapper p-0">
              <div class="sidebar-mobile-overlay"></div>
              <div class="mail-sidebar bg-light">
                <div class="px-3 pt-3 mb-2">
                  <a href="{{ route('admin.email.compose') }}" class="btn btn-primary waves-effect waves-light w-100">
                    Compose
                  </a>
                </div>
                <div class="d-grid gap-2 p-2 mail-nav" id="myTab" role="tablist" data-simplebar>
                  <a href="{{ route('admin.email.inbox') }}" class="mail-nav-item active">
                    <i class="fi fi-rr-inbox-in me-2"></i> Inbox
                    <span class="badge badge-sm bg-primary-subtle text-primary ms-auto">247</span>
                  </a>
                  <a href="{{ route('admin.email.inbox') }}" class="mail-nav-item">
                    <i class="fi fi-rr-paper-plane-top me-2"></i> Sent
                  </a>
                  <a href="{{ route('admin.email.inbox') }}" class="mail-nav-item">
                    <i class="fi fi-rr-blueprint me-2"></i> Drafts
                  </a>
                  <a href="{{ route('admin.email.inbox') }}" class="mail-nav-item">
                    <i class="fi fi-rr-trash me-2"></i> Trash
                  </a>
                  <a href="{{ route('admin.email.inbox') }}" class="mail-nav-item">
                    <i class="fi fi-rr-star me-2"></i> Starred
                  </a>
                  <a href="{{ route('admin.email.inbox') }}" class="mail-nav-item">
                    <i class="fi fi-rr-box me-2"></i> Archive
                  </a>
                  <a href="{{ route('admin.calendar') }}" class="mail-nav-item">
                    <i class="fi fi-rr-calendar me-2"></i> Scheduled
                  </a>
                </div>
              </div>
              <div class="mail-body">
                <div class="mail-header">
                  <div class="d-flex gap-3">
                    <button class="btn btn-white btn-shadow btn-icon waves-effect mail-sidebar-toggler d-lg-none">
                      <i class="fi fi-rs-list"></i>
                    </button>
                    <div class="me-2">
                      <a href="http://../email/inbox.html" class="btn btn-white btn-shadow btn-icon waves-effect me-2">
                        <i class="fi fi-rr-arrow-left"></i>
                      </a>
                      <button type="button" class="btn btn-action-gray btn-icon waves-effect waves-light">
                        <i class="fi fi-rr-square-info"></i>
                      </button>
                      <button type="button" class="btn btn-action-gray btn-icon waves-effect waves-light">
                        <i class="fi fi-rr-box"></i>
                      </button>
                      <button type="button" class="btn btn-action-gray btn-icon waves-effect waves-light">
                        <i class="fi fi-rr-trash"></i>
                      </button>
                    </div>
                  </div>
                  <form class="d-flex align-items-center h-100 w-200px w-md-250px position-relative me-auto" action="#">
                    <button type="button" class="btn btn-sm border-0 position-absolute start-0 ms-3 p-0">
                      <i class="fi fi-rr-search"></i>
                    </button>
                    <input type="text" class="form-control ps-5" placeholder="Search">
                  </form>
                  <div class="d-flex align-items-center gap-3">
                    <span>1 - 50 of 570</span>
                    <div class="d-flex gap-2">
                      <button class="btn btn-white btn-shadow btn-icon waves-effect">
                        <i class="fi fi-rr-angle-left text-2xs"></i>
                      </button>
                      <button class="btn btn-white btn-shadow btn-icon waves-effect">
                        <i class="fi fi-rr-angle-right text-2xs"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="border-bottom p-sm-4 p-3">
                  <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">💰 You Made a Sale!</h4>
                    <small>Jul 22, 2025, 1:02 AM (23 hours ago)</small>
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="avatar avatar-sm bg-danger text-danger bg-opacity-10 rounded-circle fw-bold">D</div>
                    <div class="clearfix">
                      <div class="d-flex flex-wrap align-items-center text-sm">
                        <h6 class="mb-0 me-2">LayoutDrop</h6>
                        <a href="javascript:void(0);" class="text-1xs">LayoutDrop sales@layoutdrop.com</a>
                      </div>
                      <div class="d-flex flex-wrap text-1xs">
                        <span class="me-1 text-dark text-opacity-75">To: LayoutDrop</span>
                        <span class="me-3">sales@layoutdrop.com</span>
                        <span class="me-1 text-dark text-opacity-75">CC: Wave</span>
                        <span class="me-1">info@yourmail.com</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mail-read-wrapper" data-simplebar>
                  <div class="text-dark p-sm-4 p-3 pb-0">
                    <p class="mb-4">Hello <strong>LayoutDrop,</strong>
                    </p>
                    <p class="mb-4">🎉 Congratulations! You’ve just made a sale on LayoutDrop.</p>
                    <p class="mb-0">Order Summary:</p>
                    <ul class="mb-4">
                      <li>Item Name: LayoutGrid – Figma Portfolio Layout</li>
                      <li>License Type: Single License</li>
                      <li>Transaction ID: DW21987654</li>
                    </ul>
                    <p class="mb-4">
                      <strong>What’s Next?</strong>
                    </p>
                    <p class="mb-4">The buyer now has access to your product. You can keep track of your sales and ratings by visiting your Dashboard.</p>
                    <p class="mb-4">Thank you for being a valued creator at LayoutDrop. Keep designing and sharing your amazing work with the world!</p>
                  </div>
                  <div class="p-sm-4 p-3 pt-sm-0">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="mb-0 fw-semibold">Attachment</h5>
                      <a href="javascript:void(0);" class="btn btn-sm btn-outline-light waves-effect btn-shadow">Download All</a>
                    </div>
                    <div class="p-3 bg-light rounded-2">
                      <div class="row g-2">
                        <div class="col-xxl-4 col-md-6">
                          <div class="d-flex gap-3 p-3 rounded-2 align-items-center bg-body">
                            <div class="avatar bg-body rounded-3">
                              <img src="{{ asset('assets/admin/images/media/svg/media3.svg') }}" alt="">
                            </div>
                            <div class="clearfix">
                              <h6 class="mb-1 text-sm">layoutgrid.fig</h6>
                              <span class="text-1xs">950KB</span>
                            </div>
                            <button class="btn btn-light text-primary btn-icon waves-effect ms-auto">
                              <i class="fi fi-rr-download"></i>
                            </button>
                          </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                          <div class="d-flex gap-3 p-3 rounded-2 align-items-center bg-body">
                            <div class="avatar bg-body rounded-3 border">
                              <img src="{{ asset('assets/admin/images/media/svg/media4.svg') }}" alt="">
                            </div>
                            <div class="clearfix">
                              <h6 class="mb-1 text-sm">license.pdf</h6>
                              <span class="text-1xs">120KB</span>
                            </div>
                            <button class="btn btn-light text-primary btn-icon waves-effect ms-auto">
                              <i class="fi fi-rr-download"></i>
                            </button>
                          </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                          <div class="d-flex gap-3 p-3 rounded-2 align-items-center bg-body">
                            <div class="avatar bg-body rounded-3">
                              <img src="{{ asset('assets/admin/images/media/svg/media5.svg') }}" alt="">
                            </div>
                            <div class="clearfix">
                              <h6 class="mb-1 text-sm">preview.jpg</h6>
                              <span class="text-1xs">950KB</span>
                            </div>
                            <button class="btn btn-light text-primary btn-icon waves-effect ms-auto">
                              <i class="fi fi-rr-download"></i>
                            </button>
                          </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                          <div class="d-flex gap-3 p-3 rounded-2 align-items-center bg-body">
                            <div class="avatar bg-body rounded-3">
                              <img src="{{ asset('assets/admin/images/media/svg/media6.svg') }}" alt="">
                            </div>
                            <div class="clearfix">
                              <h6 class="mb-1 text-sm">project.txt</h6>
                              <span class="text-1xs">950KB</span>
                            </div>
                            <button class="btn btn-light text-primary btn-icon waves-effect ms-auto">
                              <i class="fi fi-rr-download"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
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
