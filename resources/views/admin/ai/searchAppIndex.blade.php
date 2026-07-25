@extends('admin.layouts.chat')

@section('title', 'AI Search App Chat')

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
                        <div class="col-lg-6">
                            <div class="apps-card card card-body pb-0"
                                style="background-image: url(./assets/images/ai/apps/bg1.png);">
                                <div class="row">
                                    <div class="col-lg-7 col-sm-7 p-3 align-self-center">
                                        <img src="assets/images/ai/icon/photoshop.svg" alt="" class="mb-3">
                                        <div class="clearfix mb-3">
                                            <h3 class="text-white mb-2">Adobe Photoshop</h3>
                                            <p class="mb-0 text-white">Edit, enhance, and refine images</p>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-dark rounded-pill">View More</a>
                                    </div>
                                    <div class="col-lg-5 col-sm-5 pt-3 align-self-end">
                                        <img src="assets/images/ai/apps/pic1.png" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="apps-card card card-body pb-0"
                                style="background-image: url(./assets/images/ai/apps/bg2.png);">
                                <div class="row">
                                    <div class="col-lg-7 col-sm-7 p-3 align-self-center">
                                        <img src="assets/images/ai/icon/photoshop.svg" alt="" class="mb-3">
                                        <div class="clearfix mb-3">
                                            <h3 class="text-white mb-2">Adobe Photoshop</h3>
                                            <p class="mb-0 text-white">Edit, enhance, and refine images</p>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-dark rounded-pill">View More</a>
                                    </div>
                                    <div class="col-lg-5 col-sm-5 pt-3 align-self-end">
                                        <img src="assets/images/ai/apps/pic1.png" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <ul class="nav nav-pills card-header-pills" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="featured-tab" data-bs-toggle="tab"
                                data-bs-target="#featured" type="button" role="tab">
                                Featured
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="lifestyle-tab" data-bs-toggle="tab" data-bs-target="#lifestyle"
                                type="button" role="tab">
                                Lifestyle
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="productivity-tab" data-bs-toggle="tab"
                                data-bs-target="#productivity" type="button" role="tab">
                                Productivity
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing"
                                type="button" role="tab">
                                Marketing
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content pt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="featured" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/photoshop.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Adobe Photoshop</h5>
                                                    <p class="mb-0">Edit, enhance, and refine images</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/music.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Apple Music</h5>
                                                    <p class="mb-0">Discover music and create playlists</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/canva.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Canva</h5>
                                                    <p class="mb-0">Design posts, stories, and banners</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/figma.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Figma</h5>
                                                    <p class="mb-0">Create diagrams, slides, and assets</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/photoshop.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">OpenTable</h5>
                                                    <p class="mb-0">Book tables at top restaurants</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/spotify.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Spotify</h5>
                                                    <p class="mb-0">Music and podcasts, personalized for you</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="lifestyle" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/figma.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Figma</h5>
                                                    <p class="mb-0">Create diagrams, slides, and assets</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/photoshop.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">OpenTable</h5>
                                                    <p class="mb-0">Book tables at top restaurants</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/spotify.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Spotify</h5>
                                                    <p class="mb-0">Music and podcasts, personalized for you</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/photoshop.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Adobe Photoshop</h5>
                                                    <p class="mb-0">Edit, enhance, and refine images</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/music.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Apple Music</h5>
                                                    <p class="mb-0">Discover music and create playlists</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/canva.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Canva</h5>
                                                    <p class="mb-0">Design posts, stories, and banners</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="productivity" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/photoshop.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Adobe Photoshop</h5>
                                                    <p class="mb-0">Edit, enhance, and refine images</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/music.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Apple Music</h5>
                                                    <p class="mb-0">Discover music and create playlists</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/canva.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Canva</h5>
                                                    <p class="mb-0">Design posts, stories, and banners</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/figma.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Figma</h5>
                                                    <p class="mb-0">Create diagrams, slides, and assets</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/photoshop.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">OpenTable</h5>
                                                    <p class="mb-0">Book tables at top restaurants</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/spotify.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Spotify</h5>
                                                    <p class="mb-0">Music and podcasts, personalized for you</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="marketing" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/photoshop.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Adobe Photoshop</h5>
                                                    <p class="mb-0">Edit, enhance, and refine images</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/music.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Apple Music</h5>
                                                    <p class="mb-0">Discover music and create playlists</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/canva.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Canva</h5>
                                                    <p class="mb-0">Design posts, stories, and banners</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/figma.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Figma</h5>
                                                    <p class="mb-0">Create diagrams, slides, and assets</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/photoshop.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">OpenTable</h5>
                                                    <p class="mb-0">Book tables at top restaurants</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center p-2 pe-3">
                                            <div class="d-flex align-items-center me-auto ">
                                                <div class="avatar avatar-xl rounded-3 me-3 border border-1 p-2">
                                                    <img src="assets/images/ai/icon/spotify.svg" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="clearfix pe-5">
                                                    <h5 class="mb-1">Spotify</h5>
                                                    <p class="mb-0">Music and podcasts, personalized for you</p>
                                                </div>
                                            </div>
                                            <a href="ai/search-apps-details.html"
                                                class="btn-link stretched-link text-body">
                                                <i class="fi fi-rr-angle-right text-xl"></i>
                                            </a>
                                        </div>
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
