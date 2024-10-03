<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/theta/html/light-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2024 15:23:18 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a bootstrap & laravel admin dashboard template">
    <meta name="keywords"
        content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Campus Opinion Poll</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Datepicker css -->
    <link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>

<body class="vertical-layout">
    <!-- Start Infobar Notifications Sidebar -->
    <livewire:user.notification />
    <div class="infobar-notifications-sidebar-overlay"></div>
    <!-- End Infobar Notifications Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <h6 class="logo logo-large">CAMPUS OPINION POLL</h6>
                    <a href="index.html" class="logo logo-small"><img src="{{ asset('assets/images/small_logo.svg') }}"
                            class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Profilebar -->
                <div class="profilebar text-center">
                    <img src="{{ asset('assets/images/users/profile.svg') }}" class="img-fluid" alt="profile">
                    <div class="profilename">
                        <h5>{{ Auth::user()->name }}</h5>
                        <p>{{ Auth::user()->role }}</p>
                    </div>
                    <div class="userbox">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="{{ route('profile') }}" class="profile-icon"><img
                                        src="{{ asset('assets/images/svg-icon/user.svg') }}" class="img-fluid"
                                        alt="user"></a></li>
                            <livewire:auth.logout />
                        </ul>
                    </div>
                </div>
                <!-- End Profilebar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li class="vertical-header">Main</li>
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="mdi mdi-view-dashboard-outline"></i><span>Dashboard</span>
                            </a>
                        </li>

                        <li class="vertical-header">User</li>

                        <li>
                            <a href="{{ route('polls') }}">
                                <i class="mdi mdi-poll"></i><span>My Polls</span>
                            </a>
                        </li>

                        @if(Auth::user()->role == 'admin')
                        <li class="vertical-header">Administration</li>

                        <li>
                            <a href="{{ route('admin.polls') }}">
                                <i class="mdi mdi-poll"></i><span>All Polls</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users') }}"> <!-- Assuming you have a route for users -->
                                <i class="mdi mdi-account"></i><span>All Users</span>
                            </a>
                        </li>
                        @endif


                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <h6 class="mobile-logo">CAMPUS OPINION POLL</h6>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/images/svg-icon/horizontal.svg') }}"
                                                class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{ asset('assets/images/svg-icon/verticle.svg') }}"
                                                class="img-fluid menu-hamburger-vertical" alt="verticle">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}"
                                                class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                                class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}"
                                                class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                                class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">

                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <a href="javascript:void(0)" id="infobar-notifications-open"
                                            class="infobar-icon">
                                            <img src="{{ asset('assets/images/svg-icon/notifications.svg') }}"
                                                class="img-fluid" alt="notifications">
                                            <span class="live-icon"></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->
            {{ $slot }}
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 NIEL - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/vertical-menu.js') }}"></script>
    <!-- Switchery js -->
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <!-- Chart js -->
    <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
    <!-- Piety Chart js -->
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <!-- Vector Maps js -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Custom Dashboard Social js -->
    <script src="{{ asset('assets/js/custom/custom-dashboard-social.js') }}"></script>
    <!-- Core js -->
    <script src="{{ asset('assets/js/core.js') }}"></script>
    @stack('script')
    <!-- End js -->
</body>

</html>
