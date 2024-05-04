<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="light" data-topbar="dark"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/interactive/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 20:19:30 GMT -->

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ url('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ url('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ url('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ url('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper landing">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ url('assets/images/nutricare-logo.png') }}" width="170"
                                        alt="" height="65">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('assets/images/nutricare-logo.png') }}" width="170"
                                        alt="" height="65">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ url('assets/images/nutricare-logo.png') }}" width="170"
                                        alt="" height="65">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('assets/images/nutricare-logo.png') }}" width="170"
                                        alt="" height="65">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">

                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar style="max-height: 320px;">
                                    <!-- item-->
                                    <div class="dropdown-header">
                                        <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                    </div>

                                    <div class="dropdown-item bg-transparent text-wrap">
                                        <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">how to
                                            setup <i class="mdi mdi-magnify ms-1"></i></a>
                                        <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">buttons
                                            <i class="mdi mdi-magnify ms-1"></i></a>
                                    </div>
                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Analytics Dashboard</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Help Center</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                        <span>My account settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="{{ url('assets/images/users/avatar-2.jpg') }}"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Angela Bernier</h6>
                                                    <span class="fs-11 mb-0 text-muted">Manager</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="{{ url('assets/images/users/avatar-3.jpg') }}"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">David Grasso</h6>
                                                    <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="{{ url('assets/images/users/avatar-5.jpg') }}"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Mike Bunch</h6>
                                                    <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center pt-3 pb-1">
                                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All
                                        Results <i class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">

                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                        <button type="button" class="btn" id="page-header-user-dropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="d-flex align-items-center">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ url('assets/images/users/user.jpg') }}" alt="Header Avatar">
                                                <span class="text-start ms-xl-2">
                                                    <span
                                                        class="d-none d-xl-inline-block ms-1 fw-semibold user-name-text">{{ Auth::user()->name }}</span>
                                                    <span
                                                        class="d-none d-xl-block ms-1 fs-13 user-name-sub-text">{{ Auth::user()->role[0]->name }}</span>
                                                </span>
                                            </span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <h6 class="dropdown-header">Welcome Anna!</h6>
                                            <a class="dropdown-item" href="pages-profile.html"><i
                                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                                                <span class="align-middle">Profile</span></a>
                                            <a class="dropdown-item" href="apps-chat.html"><i
                                                    class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                                                <span class="align-middle">Messages</span></a>
                                            <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                                                    class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                                                <span class="align-middle">Taskboard</span></a>
                                            <a class="dropdown-item" href="pages-faqs.html"><i
                                                    class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                                    class="align-middle">Help</span></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="pages-profile.html"><i
                                                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                                    class="align-middle">Balance : <b>$5971.67</b></span></a>
                                            <a class="dropdown-item" href="pages-profile-settings.html"><span
                                                    class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                                                    class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i>
                                                <span class="align-middle">Settings</span></a>
                                            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                                    class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                                    class="align-middle">LockKKK screen</span></a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                                    <span class="align-middle" data-key="t-logout">Logout</span>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="ms-1 header-item d-none d-sm-flex">
                                            <a href="{{ route('login') }}" type="button"
                                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle">
                                                <i class=" ri-login-box-line fs-22"></i>
                                            </a>
                                        </div>
                                    @endauth
                                </nav>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- ========== App Menu ========== -->
        @yield('left-side-menu')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="layout-wrapper landing">

            @yield('content-secretaria')


            <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top"
                style="display: block;">
                <i class="ri-arrow-up-line"></i>
            </button>

            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>
            @can('chat_view')
                <a href="{{ route('dashboard.chat') }}">
                    <div class="customizer-setting d-none d-md-block">
                        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2">
                            <i class=" ri-question-answer-line"></i>
                        </div>
                    </div>
                </a>
            @endcan

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Nutricare.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Emagrecimento, Saúde e Bem Estar
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ url('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ url('assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ url('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ url('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ url('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ url('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ url('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/interactive/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 20:22:25 GMT -->

</html>
