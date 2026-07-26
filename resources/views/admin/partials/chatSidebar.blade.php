<aside class="ai-menubar-tabs" id="appMenubar">
    <div class="ai-navbar-brand">
        <a class="navbar-brand-logo" href="{{ route('admin.ai-chat') }}">
            <img src="{{ asset('assets/admin/images/logo.svg') }}" alt="Chat Admin Dashboard Logo">
        </a>
    </div>
    <nav class="ai-navbar" data-simplebar>
        <ul class="ai-menubar">
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-chat') }}">
                    <i class="fi fi-rr-edit"></i>
                    <span class="menu-label">New Chat</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-search-chat') }}">
                    <i class="fi fi-rr-search"></i>
                    <span class="menu-label">Search Chat</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-search-image') }}">
                    <i class="fi fi-rr-picture"></i>
                    <span class="menu-label">Search Images</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-search-app') }}">
                    <i class="fi fi-rr-apps"></i>
                    <span class="menu-label">Search Apps</span>
                </a>
            </li>
            <li>
                <div class="menu-divider"></div>
            </li>
            <li class="menu-heading">
                <span class="menu-label">Projects</span>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-new-project') }}">
                    <i class="fi fi-rr-add-folder"></i>
                    <span class="menu-label">New Project</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-investment') }}">
                    <i class="fi fi-rr-usd-circle"></i>
                    <span class="menu-label">Investment</span>
                </a>
            </li>
            <li>
                <div class="menu-divider"></div>
            </li>
            <li class="menu-heading">
                <span class="menu-label">Your Chats</span>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Chat</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Gallery Image Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Ai Video Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Gallery Image Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Ai Video Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Gallery Image Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Ai Video Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Ai Video Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Gallery Image Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Ai Video Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Ai Video Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Gallery Image Genrate</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.ai-your-chat') }}">
                    <span class="menu-label">Ai Video Genrate</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="app-footer">
        <div class="d-flex align-items-center position-relative">
            <div class="d-flex gap-2 align-items-center me-auto">
                <div class="avatar rounded-circle avatar-xs">
                    <img src="{{ asset('assets/admin/images/avatar/avatar1.webp') }}" alt="" class="img-fluid">
                </div>
                <div class="cleafix">
                    <h6 class="mb-0 text-1xs">Robin Deo</h6>
                    <span class="text-2xs d-block">Free</span>
                </div>
            </div>
            <a href="{{ route('admin.profile') }}" class="btn-link stretched-link text-body">
                <i class="fi fi-rr-angle-right"></i>
            </a>
        </div>
    </div>
</aside>

<header class="app-header ai-app-header">
    <div class="app-header-inner">
        <div class="app-header-start">
            <button class="app-toggler" type="button" aria-label="app toggler">
                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.66699 12.6668L3.66699 8.00016L7.66699 3.3335" stroke="#1C274C" stroke-width="1.75"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.5" d="M12.667 12.6668L8.66699 8.00016L12.667 3.3335" stroke="#1C274C"
                        stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-white waves-effect waves-light dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Chat 1.0
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">Chat 3.0</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">Chat 3.1 (Current)</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">Chat 4.0</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">AI Pro Model</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">Fast Response Mode</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">Creative Mode</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-header-end">
            <button type="button" class="btn btn-sm btn-white waves-effect waves-light">Help Center<i
                    class="fi fi-rr-interrogation ms-1"></i>
            </button>
        </div>
    </div>
</header>
