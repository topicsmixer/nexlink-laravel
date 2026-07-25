@extends('admin.layouts.chat')

@section('title', 'AI Search Image Chat')

@push('styles')
    <!--  Required Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/flaticon/css/all/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/lucide/lucide.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/simplebar/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/bootstrap-select/css/bootstrap-select.min.css') }}">
    <!--  Required Stylesheet -->

    <!--  CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.css') }}">
    <!--  CSS Stylesheet -->
@endpush

@section('content')
    <main class="app-wrapper ai-wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 mb-4">
                    <form class="search-bx maxw-400px" action="#">
                        <input type="text" class="form-control form-control-fill bg-light rounded-5"
                            placeholder="Describe the image you want to create…" data-bs-toggle="modal"
                            data-bs-target="#searchResultsModal">
                    </form>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h5 class="mb-0">Try a style on an image</h5>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="p-2 pb-0">
                                    <img src="{{ asset('assets/admin/images/ai/pic1.png') }}" alt=""
                                        class="img-fluid rounded-3">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">AI Headshot</h5>
                                    <p class="mb-0">Clean, professional studio portrait</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="p-2 pb-0">
                                    <img src="{{ asset('assets/admin/images/ai/pic2.png') }}" alt=""
                                        class="img-fluid rounded-3">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">Vintage 90s</h5>
                                    <p class="mb-0">Classic film camera aesthetics</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="p-2 pb-0">
                                    <img src="{{ asset('assets/admin/images/ai/pic3.png') }}" alt=""
                                        class="img-fluid rounded-3">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">Anime Portrait</h5>
                                    <p class="mb-0">Realistic anime-inspired character</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="p-2 pb-0">
                                    <img src="{{ asset('assets/admin/images/ai/pic4.png') }}" alt=""
                                        class="img-fluid rounded-3">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">Cyberpunk Neon</h5>
                                    <p class="mb-0">Futuristic lights and bold colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h5 class="mb-0">Discover something new</h5>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center p-2">
                                    <div class="avatar avatar-xxl me-3">
                                        <img src="{{ asset('assets/admin/images/ai/image1.png') }}" alt=""
                                            class="img-fluid rounded-3">
                                    </div>
                                    <div class="clearfix pe-5">
                                        <h5 class="mb-1">Create a cartoon</h5>
                                        <p class="mb-0">Turn your photo into a fun character</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center p-2">
                                    <div class="avatar avatar-xxl me-3">
                                        <img src="{{ asset('assets/admin/images/ai/image2.png') }}" alt=""
                                            class="img-fluid rounded-3">
                                    </div>
                                    <div class="clearfix pe-5">
                                        <h5 class="mb-1">Create an album cover</h5>
                                        <p class="mb-0">Music-ready artwork powered by AI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center p-2">
                                    <div class="avatar avatar-xxl me-3">
                                        <img src="{{ asset('assets/admin/images/ai/image3.png') }}" alt=""
                                            class="img-fluid rounded-3">
                                    </div>
                                    <div class="clearfix pe-5">
                                        <h5 class="mb-1">Business Graphics</h5>
                                        <p class="mb-0">Premium professional visuals for brands</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center p-2">
                                    <div class="avatar avatar-xxl me-3">
                                        <img src="{{ asset('assets/admin/images/ai/image4.png') }}" alt=""
                                            class="img-fluid rounded-3">
                                    </div>
                                    <div class="clearfix pe-5">
                                        <h5 class="mb-1">Social Media Post</h5>
                                        <p class="mb-0">Scroll-stopping visuals for creators</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h5 class="mb-0">AI Smart Tools</h5>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center p-2">
                                    <div
                                        class="avatar avatar-xl rounded-3 me-3 border border-2 bg-light bg-opacity-50 p-2">
                                        <img src="{{ asset('assets/admin/images/ai/icon/icon1.svg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="clearfix pe-5">
                                        <h5 class="mb-1">Remove Background</h5>
                                        <p class="mb-0">Clean cutouts with one click</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center p-2">
                                    <div
                                        class="avatar avatar-xl rounded-3 me-3 border border-2 bg-light bg-opacity-50 p-2">
                                        <img src="{{ asset('assets/admin/images/ai/icon/icon2.svg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="clearfix pe-5">
                                        <h5 class="mb-1">Enhance Image</h5>
                                        <p class="mb-0">harper, clearer, high-resolution</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center p-2">
                                    <div
                                        class="avatar avatar-xl rounded-3 me-3 border border-2 bg-light bg-opacity-50 p-2">
                                        <img src="{{ asset('assets/admin/images/ai/icon/icon3.svg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="clearfix pe-5">
                                        <h5 class="mb-1">Change Outfit</h5>
                                        <p class="mb-0">Try new looks instantly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center p-2">
                                    <div
                                        class="avatar avatar-xl rounded-3 me-3 border border-2 bg-light bg-opacity-50 p-2">
                                        <img src="{{ asset('assets/admin/images/ai/icon/icon4.svg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="clearfix pe-5">
                                        <h5 class="mb-1">Replace Background</h5>
                                        <p class="mb-0">Any place, any scene</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h5 class="mb-0">My Images</h5>
                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card card-action overflow-hidden position-relative">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('assets/admin/images/ai/pic5.png') }}"
                                        class="img-fluid product-img" alt="">
                                    <div
                                        class="position-absolute action-visible top-0 start-0 h-100 w-100 rounded-0 d-flex align-items-end p-3 img-gradient">
                                        <a href="javascript:void(0);"
                                            class="btn btn-icon btn-sm btn-white border-0 me-auto">
                                            <i class="fi fi-rr-download"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-white border-0">
                                            <i class="fi fi-rr-share"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card card-action overflow-hidden position-relative">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('assets/admin/images/ai/pic6.png') }}"
                                        class="img-fluid product-img" alt="">
                                    <div
                                        class="position-absolute action-visible top-0 start-0 h-100 w-100 rounded-0 d-flex align-items-end p-3 img-gradient">
                                        <a href="javascript:void(0);"
                                            class="btn btn-icon btn-sm btn-white border-0 me-auto">
                                            <i class="fi fi-rr-download"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-white border-0">
                                            <i class="fi fi-rr-share"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card card-action overflow-hidden position-relative">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('assets/admin/images/ai/pic7.png') }}"
                                        class="img-fluid product-img" alt="">
                                    <div
                                        class="position-absolute action-visible top-0 start-0 h-100 w-100 rounded-0 d-flex align-items-end p-3 img-gradient">
                                        <a href="javascript:void(0);"
                                            class="btn btn-icon btn-sm btn-white border-0 me-auto">
                                            <i class="fi fi-rr-download"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-white border-0">
                                            <i class="fi fi-rr-share"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card card-action overflow-hidden position-relative">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('assets/admin/images/ai/pic8.png') }}"
                                        class="img-fluid product-img" alt="">
                                    <div
                                        class="position-absolute action-visible top-0 start-0 h-100 w-100 rounded-0 d-flex align-items-end p-3 img-gradient">
                                        <a href="javascript:void(0);"
                                            class="btn btn-icon btn-sm btn-white border-0 me-auto">
                                            <i class="fi fi-rr-download"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-white border-0">
                                            <i class="fi fi-rr-share"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="searchResultsModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header py-1 px-3">
                        <form class="d-flex align-items-center position-relative w-100" action="#">
                            <button type="button" class="btn btn-sm border-0 position-absolute start-0 p-0 text-sm ">
                                <i class="fi fi-rr-search"></i>
                            </button>
                            <input type="text" class="form-control form-control-lg ps-4 border-0 shadow-none"
                                id="searchInput" placeholder="Search anything's">
                        </form>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-2" style="height: 300px;" data-simplebar>
                        <div id="recentlyResults">
                            <span class="text-uppercase text-2xs fw-semibold text-muted d-block mb-2">Recently
                                Searched:</span>
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
    </main>
@endsection

@push('scripts')
    <!--  Page Scripts -->
    <script src="{{ asset('assets/admin/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!--  Page Scripts -->
@endpush
