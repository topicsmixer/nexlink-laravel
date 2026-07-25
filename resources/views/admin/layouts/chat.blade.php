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
  <link rel="icon" type="image/png" href="{{ asset('assets/admin/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin/images/apple-touch-icon.png') }}">
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
    @include('admin.partials.chatSidebar')
    <!--  Page Header -->

    @yield('content')


  </div>

  @stack('scripts')
  
</body>

</html>