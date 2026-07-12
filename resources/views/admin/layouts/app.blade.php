<!DOCTYPE html>
<html lang="en">

<head>

  <!--  Meta Basic -->
  <meta charset="utf-8">
  <meta name="theme-color" content="#5955D1">
  <meta name="robots" content="index, follow">
  <meta name="author" content="LayoutDrop">
  <meta name="format-detection" content="telephone=no">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!--  Meta Basic -->

  <!--  Meta Social -->
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:site_name" content="">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="preview.png">
  <!--  Meta Social -->

  <!--  Meta Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:creator" content=""> {{-- smart skills studio twiter handler --}}
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <!--  Meta Twitter -->

  <!--  Website Page Title -->
  <title>@yield('title', 'Admin Panel')</title>
  <!--  Website Page Title -->

  <!--  Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  Mobile Specific -->

  <!--  Favicon Tags -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  <!--  Favicon Tags -->

  <!--  Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&amp;display=swap" rel="stylesheet">
  <!--  Google Fonts -->

  @stack('styles')

</head>

<body>
  <div class="page-layout">

    <!--  Page Header -->
    @include('admin.partials.header')
    <!--  Page Header -->

    <div class="modal fade" id="searchResultsModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header py-1 px-3">
            <form class="d-flex align-items-center position-relative w-100" action="#">
              <button type="button" class="btn btn-sm border-0 position-absolute start-0 p-0 text-sm ">
                <i class="fi fi-rr-search"></i>
              </button>
              <input type="text" class="form-control form-control-lg ps-4 border-0 shadow-none" id="searchInput" placeholder="Search anything's">
            </form>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-2" style="height: 300px;" data-simplebar>
            <div id="recentlyResults">
              <span class="text-uppercase text-2xs fw-semibold text-muted d-block mb-2">Recently Searched:</span>
              <ul class="list-inline search-list">
                <li>
                  <a class="search-item" href="index.html">
                    <i class="fi fi-rr-apps"></i> Dashboard
                  </a>
                </li>
                <li>
                  <a class="search-item" href="chat.html">
                    <i class="fi fi-rr-comment"></i> Chat
                  </a>
                </li>
                <li>
                  <a class="search-item" href="calendar.html">
                    <i class="fi fi-rr-calendar"></i> Calendar
                  </a>
                </li>
                <li>
                  <a class="search-item" href="chart/apexchart.html">
                    <i class="fi fi-rr-chart-pie-alt"></i> Apexchart
                  </a>
                </li>
                <li>
                  <a class="search-item" href="pages/pricing.html">
                    <i class="fi fi-rr-file"></i> Pricing
                  </a>
                </li>
                <li>
                  <a class="search-item" href="email/inbox.html">
                    <i class="fi fi-rr-envelope"></i> Email
                  </a>
                </li>
              </ul>
            </div>
            <div id="searchContainer"></div>
          </div>
        </div>
      </div>
    </div>

    <!--  Sidebar Menu -->
    @include('admin.partials.sidebar')
    <!--  Sidebar Menu -->

    <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row">
              <div class="col-lg-6 mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" placeholder="Enter full name">
              </div>
              <div class="col-lg-6 mb-3">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control" placeholder="Enter email">
              </div>
              <div class="col-lg-6 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" placeholder="e.g. +1 234 567 8900">
              </div>
              <div class="col-lg-6 mb-3">
                <label class="form-label">Company</label>
                <input type="text" class="form-control" placeholder="Company name">
              </div>
              <div class="col-lg-6 mb-3">
                <label class="form-label">Country</label>
                <select class="form-select">
                  <option value="">Select country</option>
                  <option value="US">United States</option>
                  <option value="UK">United Kingdom</option>
                  <option value="IN">India</option>
                  <option value="CA">Canada</option>
                  <option value="DE">Germany</option>
                  <option value="FR">France</option>
                  <option value="JP">Japan</option>
                  <option value="BR">Brazil</option>
                  <option value="EG">Egypt</option>
                </select>
              </div>
              <div class="col-lg-6 mb-3">
                <label class="form-label">Customer Type</label>
                <select class="form-select">
                  <option value="">Select type</option>
                  <option value="Lead">Lead</option>
                  <option value="Prospect">Prospect</option>
                  <option value="Client">Client</option>
                </select>
              </div>
              <div class="col-lg-6 mb-3">
                <label class="form-label">Account Status</label>
                <select class="form-select">
                  <option value="">Select status</option>
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                  <option value="Blocked">Blocked</option>
                </select>
              </div>
              <div class="col-lg-6 mb-3">
                <label class="form-label">Joined Date</label>
                <input type="text" class="form-control flatpickr-date" readonly="readonly">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary ms-2">Add Customer</button>
          </div>
        </div>
      </div>
    </div>

    <main class="app-wrapper">

      @yield('content')

    </main>

    <!--  Footer -->
    @include('admin.partials.footer')
    <!--  Footer -->

  </div>

  @stack('scripts')
  
</body>

</html>