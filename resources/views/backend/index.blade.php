<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-name" content="quixlab" />

    <title>@lang('Dashboard')</title>

    <link href="{{ asset('assets/backend/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">

</head>

<body>

<div id="main-wrapper">


    <div class="nav-header">
        <div class="brand-logo">
            <a href="{{ route('admin.dashboard') }}">
                <b class="logo-abbr"><img src="{{ asset('assets/backend/images/logo.png') }}" alt=""> </b>
                <span class="logo-compact"><img src="{{ asset('assets/backend/images/logo-compact.png') }}" alt=""></span>
                <span class="brand-title">
                        <img src="{{ asset('assets/backend/images/logo-text.png') }}" alt="">
                    </span>
            </a>
        </div>
    </div>

    <div class="header">
        <div class="header-content clearfix">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-left">
                <div class="input-group icons">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                    </div>
                    <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                    <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="badge badge-pill gradient-1">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu">
                            <div class="dropdown-content-heading d-flex justify-content-between">
                                <span class="">3 New Messages</span>
                                <a href="javascript:void()" class="d-inline-block">
                                    <span class="badge badge-pill gradient-1">3</span>
                                </a>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li class="notification-unread">
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Saiful Islam</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-unread">
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Adam Smith</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Can you do me a favour?</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Barak Obama</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Hilari Clinton</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hello</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="badge badge-pill gradient-2">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                            <div class="dropdown-content-heading d-flex justify-content-between">
                                <span class="">2 New Notifications</span>
                                <a href="javascript:void()" class="d-inline-block">
                                    <span class="badge badge-pill gradient-2">5</span>
                                </a>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Events near you</h6>
                                                <span class="notification-text">Within next 5 days</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Event Started</h6>
                                                <span class="notification-text">One hour ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Event Ended Successfully</h6>
                                                <span class="notification-text">One hour ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Events to Join</h6>
                                                <span class="notification-text">After two days</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown d-none d-md-flex">
                        <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                            <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                        </a>
                        <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="javascript:void()">English</a></li>
                                    <li><a href="javascript:void()">Dutch</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{ asset('assets/backend') }}/images/user/1.png" height="40" width="40" alt="">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>


                                    <li>
                                        <a href="{{ route('admin.password') }}"><i class="icon-lock"></i> <span>Change Password</span></a>
                                    </li>

                                    <li>
                                        <form action="{{ route('admin.logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Logout</button>
                                        </form>

                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Dashboard</li>

                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Category</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('category.index') }}">Category</a></li>
                    </ul>
                </li>


                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Brand</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('brand.index') }}">Brand</a></li>
                    </ul>
                </li>



            </ul>
        </div>
    </div>



    <div class="content-body pt-4">

       @yield('content')

    </div>



</div>



<script src="{{ asset('assets/backend/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/settings.js') }}"></script>
<script src="{{ asset('assets/backend/js/gleek.js') }}"></script>
<script src="{{ asset('assets/backend/js/styleSwitcher.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/d3v3/index.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/topojson/topojson.min.js') }}"></script>
<script src="{{ asset('assets/backend//plugins/datamaps/datamaps.world.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('assets/backend/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/backend//plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/dashboard/dashboard-1.js') }}"></script>


</body>
</html>
