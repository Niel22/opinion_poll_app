<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a bootstrap & laravel admin dashboard template">
    <meta name="keywords"
        content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Opinion Poll</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
    <!-- Datepicker css -->
    <link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    @livewireStyles
    <!-- End css -->
</head>

<body class="horizontal-layout">
    <!-- Start Infobar Notifications Sidebar -->
    <div id="infobar-notifications-sidebar" class="infobar-notifications-sidebar">
        <div class="infobar-notifications-sidebar-head d-flex w-100 justify-content-between">
            <h4>Notifications</h4><a href="javascript:void(0)" id="infobar-notifications-close"
                class="infobar-notifications-close"><img src="assets/images/svg-icon/close.svg"
                    class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-notifications-sidebar-body">
            <ul class="nav nav-pills nav-justified" id="infobar-pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-messages-tab" data-toggle="pill" href="#pills-messages"
                        role="tab" aria-controls="pills-messages" aria-selected="true">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-emails-tab" data-toggle="pill" href="#pills-emails" role="tab"
                        aria-controls="pills-emails" aria-selected="false">Emails</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-actions-tab" data-toggle="pill" href="#pills-actions" role="tab"
                        aria-controls="pills-actions" aria-selected="false">Actions</a>
                </li>
            </ul>
            <div class="tab-content" id="infobar-pills-tabContent">
                <div class="tab-pane fade show active" id="pills-messages" role="tabpanel"
                    aria-labelledby="pills-messages-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/girl.svg"
                                alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Amy Adams<span class="badge badge-success">1</span><span class="timing">Jan
                                        22</span></h5>
                                <p>Hey!! What are you doing tonight ?</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/boy.svg"
                                alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>James Simpsons<span class="badge badge-success">2</span><span class="timing">Feb
                                        15</span></h5>
                                <p>What's up ???</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/men.svg"
                                alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Mark Witherspoon<span class="badge badge-success">3</span><span class="timing">Mar
                                        03</span></h5>
                                <p>I will be late today in office.</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/women.svg"
                                alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Jenniffer Wills<span class="badge badge-success">4</span><span class="timing">Apr
                                        05</span></h5>
                                <p>Venture presentation is ready.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-emails" role="tabpanel" aria-labelledby="pills-emails-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">N</span>
                            <div class="media-body">
                                <h5>Nelson Smith<span class="timing">Jan 22</span></h5>
                                <p><span class="badge badge-danger-inverse">WORK</span>Salary has been processed.</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">C</span>
                            <div class="media-body">
                                <h5>Courtney Cox<i class="feather icon-star text-warning ml-2"></i><span
                                        class="timing">Feb 15</span></h5>
                                <p><span class="badge badge-success-inverse">URGENT</span>New product launching...</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">R</span>
                            <div class="media-body">
                                <h5>Rachel White<span class="timing">Mar 03</span></h5>
                                <p><span class="badge badge-secondary-inverse">ORDER</span><span
                                        class="badge badge-info-inverse">SHOPPING</span>Your order has been...</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">F</span>
                            <div class="media-body">
                                <h5>Freepik<span class="timing">Mar 03</span></h5>
                                <p><a href="#" class="badge badge-primary mr-2">VERIFY NOW</a>New Sign
                                    verification req...</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-actions" role="tabpanel" aria-labelledby="pills-actions-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-success-inverse"><i
                                    class="feather icon-check"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Payment Success !!!</h5>
                                <p class="my-3">We have received your payment toward ad Account : 9876543210. Your Ad
                                    is Running.</p>
                                <p><span class="badge badge-danger-inverse">INFO</span><span
                                        class="badge badge-info-inverse">STATUS</span><span class="timing">Today,
                                        09:39 PM</span></p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-primary-inverse"><i
                                    class="feather icon-calendar"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Nobita Applied for Leave.</h5>
                                <p class="my-3">Nobita applied for leave due to personal reasons on 22nd Feb.</p>
                                <p><span class="badge badge-success">APPROVE</span><span
                                        class="badge badge-danger">REJECT</span><span class="timing">Yesterday, 05:25
                                        PM</span></p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-danger-inverse"><i
                                    class="feather icon-alert-triangle"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Alert</h5>
                                <p class="my-3">There has been new Log in fron your account at Melbourne. Mark it
                                    safe or report.</p>
                                <p><i class="feather icon-check text-success mr-3"></i><a href="#"
                                        class="text-muted">Report Now</a><span class="timing">5 Jan 2019, 02:13
                                        PM</span></p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-warning-inverse"><i
                                    class="feather icon-award"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Congratulations !!!</h5>
                                <p class="my-3">Your role in the organization has been changed from Editor to Chief
                                    Strategist.</p>
                                <p><span class="badge badge-danger-inverse">ACTIVITY</span><span class="timing">10 Jan
                                        2019, 08:49 PM</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-notifications-sidebar-overlay"></div>
    <!-- End Infobar Notifications Sidebar -->

    <!-- Start Containerbar -->
    <div id="containerbar" class="container-fluid">
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="{{ route('home') }}" class="mobile-logo"><a href="{{ route('home') }}">CAMPUS
                                    OPINION POLL</a></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="assets/images/svg-icon/horizontal.svg"
                                                class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="assets/images/svg-icon/verticle.svg"
                                                class="img-fluid menu-hamburger-vertical" alt="verticle">
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
                <!-- Start container-fluid -->
                <div class="container-fluid">
                    <!-- Start row -->
                    <div class="row align-items-center">
                        <!-- Start col -->
                        <div class="col-md-12 align-self-center">
                            <div class="togglebar">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <div class="logobar" style="font-weight: bold;">
                                            <a href="{{ route('home') }}">CAMPUS OPINION POLL</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="infobar">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <div class="notifybar">
                                            <a href="{{ route('poll.create') }}" class="btn btn-primary btn-sm">
                                                CREATE POLL
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="notifybar">
                                            <a href="javascript:void(0)" class="btn btn-dark btn-sm">
                                                LOGIN
                                            </a>
                                        </div>
                                    </li>
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
                                    <li class="list-inline-item">
                                        <div class="profilebar">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    id="profilelink" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><img
                                                        src="{{ asset('assets/images/users/profile.svg') }}"
                                                        class="img-fluid" alt="profile"><span
                                                        class="feather icon-chevron-down live-icon"></span></a>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="profilelink">
                                                    <div class="dropdown-item">
                                                        <div class="profilename">
                                                            <h5>Shourya Kumar</h5>
                                                            <p>Social Media Strategist</p>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="userbox">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item"><a href="#"
                                                                        class="profile-icon"><img
                                                                            src="{{ asset('assets/images/svg-icon/user.svg') }}"
                                                                            class="img-fluid" alt="user"></a></li>
                                                                <li class="list-inline-item"><a href="#"
                                                                        class="profile-icon"><img
                                                                            src="{{ asset('assets/images/svg-icon/email.svg') }}"
                                                                            class="img-fluid" alt="email"></a></li>
                                                                <li class="list-inline-item"><a href="#"
                                                                        class="profile-icon"><img
                                                                            src="{{ asset('assets/images/svg-icon/logout.svg') }}"
                                                                            class="img-fluid" alt="logout"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End col -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container-fluid -->
            </div>
            <!-- End Topbar -->
            
            <!-- Start Contentbar -->
            <div class="contentbar">
                {{ $slot }}
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2024 NIEL - All Rights Reserved.</p>
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
    <script src="{{ asset('assets/js/horizontal-menu.js') }}"></script>
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
    @livewireScripts
    <!-- End js -->
</body>


</html>
