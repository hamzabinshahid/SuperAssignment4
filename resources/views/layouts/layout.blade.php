<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>@yield('title') | Super Web Assignment 4</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="/assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="/assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="/assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
<div class="page-wrapper">
    <!-- START HEADER-->
    <header class="header">
        <div class="page-brand">
            <a href="/">
                <span class="brand">Super Assignment</span>
                <span class="brand-mini">SA</span>
            </a>
        </div>
        <div class="flexbox flex-1">
            <!-- START TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li>
                    <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </li>
            </ul>
            <!-- END TOP-LEFT TOOLBAR-->
            <!-- START TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">

                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        <span>Super User</span>
                        <img src="/assets/img/users/admin-image.png" alt="image" />
                    </a>
                    <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                        <div class="dropdown-arrow"></div>
                        <div class="dropdown-header">
                            <div class="admin-avatar">
                                <img src="/assets/img/users/admin-image.png" alt="image" />
                            </div>
                            <div>
                                <h5 class="font-strong text-white">Super User</h5>
                                <div>
                                    <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                                    <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                </div>
                            </div>
                        </div>
                        <div class="admin-menu-features">
                            <a class="admin-features-item" href="javascript:;"><i class="ti-user"></i>
                                <span>PROFILE</span>
                            </a>
                            <a class="admin-features-item" href="javascript:;"><i class="ti-support"></i>
                                <span>SUPPORT</span>
                            </a>
                            <a class="admin-features-item" href="javascript:;"><i class="ti-settings"></i>
                                <span>SETTINGS</span>
                            </a>
                        </div>
                        <div class="admin-menu-content">
                            <div class="text-muted mb-2">Your Wallet</div>
                            <div><i class="ti-wallet h1 mr-3 text-light"></i>
                                <span class="h1 text-success"><sup>$</sup>12.7k</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <a class="text-muted" href="javascript:;">Earnings history</a>
                                <a class="d-flex align-items-center" href="javascript:;">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <span class="nav-link">
                        <span class="ti-align-right"></span>
                    </span>
                </li>
            </ul>
            <!-- END TOP-RIGHT TOOLBAR-->
        </div>
    </header>
    <!-- END HEADER-->
    <!-- START SIDEBAR-->
    <nav class="page-sidebar" id="sidebar">
        <div id="sidebar-collapse">
            <ul class="side-menu metismenu">
                <li>
                    <a href="/"><i class="sidebar-item-icon ti-home"></i>
                        <span class="nav-label">Dashboards</span></a>
                </li>
                <li>
                    <a href="/room"><i class="sidebar-item-icon ti-wallet"></i>
                        <span class="nav-label">Rooms</span></a>
                </li>
                <li>
                    <a href="/add-room"><i class="sidebar-item-icon ti-wallet"></i>
                        <span class="nav-label">Add Room</span></a>
                </li>
                <li>
                    <a href="/add-person"><i class="sidebar-item-icon ti-user"></i>
                        <span class="nav-label">Persons</span></a>
                </li>

            </ul>
            <div class="sidebar-footer">
                <a href="javascript:;"><i class="ti-announcement"></i></a>
                <a href="javascript:;"><i class="ti-calendar"></i></a>
                <a href="javascript:;"><i class="ti-comments"></i></a>
                <a href="javascript:;"><i class="ti-power-off"></i></a>
            </div>
        </div>
    </nav>
    <!-- END SIDEBAR-->
    <div class="content-wrapper">

        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">@yield('title')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">@yield('title')</li>
            </ol>
        </div>
@yield('content')

<!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © <b>Adminca</b> - Save your time, choose the best</div>
        <div>
            <a class="px-3 pl-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">Purchase</a>
            <a class="px-3" href="http://admincast.com/adminca/documentation.html" target="_blank">Docs</a>
        </div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
    </div>
</div>

<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->
        <!-- CORE PLUGINS-->
        <script src="/assets/vendors/jquery/dist/jquery.min.js"></script>
        <script src="/assets/vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
        <script src="/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
        <script src="/assets/vendors/toastr/toastr.min.js"></script>
        <script src="/assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="/assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <!-- CORE SCRIPTS-->
        <script src="/assets/js/app.min.js"></script>
        <!-- PAGE LEVEL SCRIPTS-->
</body>
</html>