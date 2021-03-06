<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Blogger | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/uniform.default.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/bootstrap-switch-rtl.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('css/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/fullcalendar.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="{{asset('css/tasks-rtl.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{asset('css/components-md-rtl.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/plugins-md-rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/layout-rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/darkblue-rtl.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{asset('css/custom-rtl.css')}}" rel="stylesheet" type="text/css"/>


    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>

    @yield('styles')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <span style="color: #fff;font-size: 27px;">Blogger</span>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->

        @if(auth::check())
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-default">
					7 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">12 pending</span> notifications</h3>
                            <a href="extra_profile.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
									New user registered. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 mins</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Server #12 overloaded. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 mins</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Server #2 not responding. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">14 hrs</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									Application error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">2 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Database overloaded 68%. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									A user IP blocked. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">4 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Storage Server #4 not responding dfdfdfd. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">5 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									System Error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">9 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Storage server failed. </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->

                <!-- END INBOX DROPDOWN -->


                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="{{asset(Auth::user()->profile->avatar )}}"/>
                        <span class="username username-hide-on-mobile">
					{{ Auth::user()->name }} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="/admin/profile">
                                <i class="icon-user"></i> My Profile </a>
                        </li>



                        <li class="divider">
                        </li>

                        <li>

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">

                    <a href="{{ route('logout') }} "

                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-toggle">

                        <i class="icon-logout"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </li>


                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>

        @endif
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->

    @if(auth::check())

    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <br>


                <li class="start {{ Request::is('admin') ? 'start active open' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="icon-home"></i>
                        <span class="title">Home</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>

                </li>


                <li class="{{ Request::is('admin/category') ? 'active open' : '' }}">
                    <a href="/admin/category">
                        <i class="icon-basket"></i>
                        <span class="title">Categories</span>
                        <span class="arrow "></span>
                    </a>
                </li>


                <li class="{{ Request::is('admin/tag') ? 'active open' : '' }}">
                    <a href="/admin/tag">
                        <i class="icon-rocket"></i>
                        <span class="title">Tags</span>
                        <span class="arrow "></span>
                    </a>

                </li>

                @if(Auth::user()->admin == 1)

                <li class="{{ Request::is('admin/user') ? 'active open' : '' }}">
                    <a href="/admin/user">
                        <i class="icon-rocket"></i>
                        <span class="title">Users</span>
                        <span class="arrow "></span>
                    </a>

                </li>

                @endif


                <li class="{{ Request::is('admin/profile') ? 'active open' : '' }}">
                    <a href="/admin/profile">
                        <i class="icon-rocket"></i>
                        <span class="title">My Profile</span>
                        <span class="arrow "></span>
                    </a>

                </li>


                <li class="{{ Request::is('admin/post') ? 'active open' : '' }}">
                    <a href="/admin/post">
                        <i class="icon-rocket"></i>
                        <span class="title">All Posts</span>
                        <span class="arrow "></span>
                    </a>

                </li>


                <li class="{{ Request::is('admin/post/trash') ? 'active open' : '' }}">
                    <a href="/admin/post/trash">
                        <i class="icon-rocket"></i>
                        <span class="title"> All Trashed Posts </span>
                        <span class="arrow "></span>
                    </a>

                </li>

                <li class="{{ Request::is('admin/post/create') ? 'active open' : '' }}">
                    <a href="/admin/post/create">
                        <i class="icon-rocket"></i>
                        <span class="title"> Create new Post </span>
                        <span class="arrow "></span>
                    </a>

                </li>

                @if(Auth::user())

                <li class="{{ Request::is('admin/setting') ? 'active open' : '' }}">
                    <a href="/admin/setting">
                        <i class="icon-rocket"></i>
                        <span class="title"> Settings </span>
                        <span class="arrow "></span>
                    </a>

                </li>
                @endif


            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>

    @endif
    <!-- END SIDEBAR -->



    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">


            @yield('content')


        </div>
    </div>
    <!-- END CONTENT -->


</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner text-ceneter">
        2017 &copy; Blogger
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{asset('js/respond.min.js')}}"></script>
<script src="{{asset('js/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-migrate.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.uniform.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('js/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.vmap.russia.j')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.vmap.world.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.vmap.europe.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.vmap.germany.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.vmap.usa.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/daterangepicker.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{asset('js/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('js/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('js/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('js/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/demo.js')}}" type="text/javascript"></script>
<script src="{{asset('js/index.js')}}" type="text/javascript"></script>
<script src="{{asset('js/tasks.js')}}" type="text/javascript"></script>


@yield('scripts')


<script src="{{ asset('js/toastr.min.js') }}"></script>


<script>

    @if(Session::has('success'))
    toastr.success('{{ Session::get('success') }}')

    @endif

    @if(Session::has('info'))
    toastr.info('{{ Session::get('info') }}')
    @endif


</script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        Index.init();
        Index.initDashboardDaterange();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Tasks.initDashboardWidget();
    });
</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>