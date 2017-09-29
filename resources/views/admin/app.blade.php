<link rel="stylesheet" type="text/css" href="{{ asset("public/css/bootstrap.css") }}"/>
<!-- begin react js  -->
 <script src="{{ asset('public/vendor/react-laravel/react.js') }}"></script>
  <script src="{{ asset('public/vendor/react-laravel/react-dom.js') }}"></script>
  <script src="{{ asset('public/vendor/react-laravel/browser.min.js') }}"></script>
<script type="text/babel" src="{{ asset('public/js/components.js') }}"></script>
<!-- end react js -->
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #3 | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset("public/assets/global/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset("public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }}" rel="stylesheet" type="text/css" />

        <!--  <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset("public/assets/global/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
       <!--  <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset("public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset("public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css") }}" rel="stylesheet" type="text/css" />
<!-- 
         <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" /> -->
        
        <link href="{{ asset("public/assets/global/plugins/morris/morris.css") }}"  rel="stylesheet" type="text/css" />

       <!--  <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" /> -->





        <link href="{{ asset("public/assets/global/plugins/fullcalendar/fullcalendar.min.css") }}" rel="stylesheet" type="text/css" />

         <!-- <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset("public/assets/global/plugins/jqvmap/jqvmap/jqvmap.css") }}" rel="stylesheet" type="text/css" />
         <!-- <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" /> -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset("public/assets/global/css/components.min.css") }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset("public/assets/global/plugins/datatables/datatables.min.css") }}" rel="stylesheet" id="style_components" type="text/css" />

        <!-- <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" /> -->
        <link href="{{ asset("public/assets/global/css/plugins.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset("public/assets/layouts/layout3/css/layout.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset("public/assets/layouts/layout3/css/themes/default.min.css") }}" rel="stylesheet" type="text/css" id="style_color" />
       <!--  <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" /> -->
        <link href="{{ asset("public/assets/layouts/layout3/css/custom.min.css") }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="{{ asset("public/css/bootstrap.css") }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset("public/fancybox/jquery.fancybox.css") }}"/>
        <!-- <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="index.html">
                                        <img src="{{ asset("public/assets/layouts/layout3/img/logo-default.jpg") }}"  alt="logo" class="logo-default">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="{{ asset("public/assets/layouts/layout3/img/avatar9.jpg") }}" >
                                                <span class="username username-hide-mobile">Nick</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="page_user_profile_1.html">
                                                        <i class="icon-user"></i> My Profile </a>
                                                </li>
                                                <li>
                                                    <a href="app_calendar.html">
                                                        <i class="icon-calendar"></i> My Calendar </a>
                                                </li>
                                                <li>
                                                    <a href="app_inbox.html">
                                                        <i class="icon-envelope-open"></i> My Inbox
                                                        <span class="badge badge-danger"> 3 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="app_todo_2.html">
                                                        <i class="icon-rocket"></i> My Tasks
                                                        <span class="badge badge-success"> 7 </span>
                                                    </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="page_user_lock_1.html">
                                                        <i class="icon-lock"></i> Lock Screen </a>
                                                </li>
                                                <li>
                                                    <a  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                     >
                                                        <i class="icon-key"></i> Log Out </a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                            <span class="sr-only">Toggle Quick Sidebar</span>
                                            <i class="icon-logout"></i>
                                        </li>
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
                                            <a href="javascript:;"> Dashboard
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="index.html" class="nav-link  active">
                                                        <i class="icon-bar-chart"></i> Default Dashboard
                                                        <span class="badge badge-success">1</span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="dashboard_2.html" class="nav-link  ">
                                                        <i class="icon-bulb"></i> Dashboard 2 </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="dashboard_3.html" class="nav-link  ">
                                                        <i class="icon-graph"></i> Dashboard 3
                                                        <span class="badge badge-danger">3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                       
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> Manager User
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="{{asset('admin/manager_user/user')}}" class="nav-link  "> User </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="{{asset('admin/manager_user/role')}}" class="nav-link  "> Role </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="{{asset('admin/manager_user/role-user')}}" class="nav-link  "> RoleUser </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> Manager Courses
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="{{asset('admin/manager_courses/courses')}}" class="nav-link  "> Courses </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="{{asset('admin/manager_courses/class_courses')}}" class="nav-link  "> Class Courses  </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="{{asset('admin/manager_courses/class_course_detail')}}" class="nav-link  "> Class Courses Detail </a>
                                                </li>
                                               
                                            </ul>
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> Manager schedules
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>
                                       
                               
                          
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                           
                           
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Dashboard</span>
                                        </li>
                                    </ul>
                                    @yield("page_content")
                                    <!-- END PAGE BREADCRUMBS -->
                                 <!--     -->
                                 </div>

                            </div>   
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                            <i class="icon-login"></i>
                        </a>
                        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                            <div class="page-quick-sidebar">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                            <span class="badge badge-danger">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                            <span class="badge badge-success">7</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-bell"></i> Alerts </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-info"></i> Notifications </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-speech"></i> Activities </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-settings"></i> Settings </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                       
                                        <div class="page-quick-sidebar-item">
                                            <div class="page-quick-sidebar-chat-user">
                                                <div class="page-quick-sidebar-nav">
                                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                                        <i class="icon-arrow-left"></i>Back</a>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-messages">
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> When could you send me the report ? </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Alright. Thanks! :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:16</span>
                                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> No probs. Just take your time :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Alright. I just emailed it to you. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Please let me know if you have any comment. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-form">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn green">
                                                                <i class="icon-paper-clip"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                        <div class="page-quick-sidebar-settings-list">
                                            <h3 class="list-heading">General Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Enable Notifications
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Allow Tracking
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Log Errors
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Auto Sumbit Issues
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Enable SMS Alerts
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <h3 class="list-heading">System Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Security Level
                                                    <select class="form-control input-inline input-sm input-small">
                                                        <option value="1">Normal</option>
                                                        <option value="2" selected>Medium</option>
                                                        <option value="e">High</option>
                                                    </select>
                                                </li>
                                                <li> Failed Email Attempts
                                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                                <li> Secondary SMTP Port
                                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                                <li> Notify On System Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Notify On SMTP Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <div class="inner-content">
                                                <button class="btn btn-success">
                                                    <i class="icon-settings"></i> Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END QUICK SIDEBAR -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>About</h2>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <h2>Subscribe Email</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts</h2>
                                    <address class="margin-bottom-40"> Phone: 800 123 3456
                                        <br> Email:
                                        <a href="mailto:info@metronic.com">info@metronic.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2016 &copy; Metronic Theme By
                            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        <!-- BEGIN QUICK NAV -->
        
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       

        <script src="{{ asset('public/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/js.cookie.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"  type="text/javascript"></script>

        <script src="{{ asset('public/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/moment.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"  type="text/javascript"></script>

         <script src="{{ asset('public/assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/morris/raphael-min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/counterup/jquery.waypoints.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/counterup/jquery.counterup.min.js') }}"  type="text/javascript"></script>

        <script src="{{ asset('public/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.resize.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.categories.min.js') }}"  type="text/javascript"></script>
        

        <script src="{{ asset('public/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/jquery.sparkline.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}"  type="text/javascript"></script>

        <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/plugins/datatables/datatables.all.min.js') }}"  type="text/javascript"></script>
   

         <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/global/scripts/app.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/pages/scripts/dashboard.min.js') }}"  type="text/javascript"></script>

        <script src="{{ asset('public/assets/layouts/layout3/scripts/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/layouts/layout3/scripts/demo.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/layouts/global/scripts/quick-sidebar.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/assets/layouts/global/scripts/quick-nav.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('public/fancybox/jquery.fancybox.js') }}"  type="text/javascript"></script>
    
        @yield("scripts")
       
      
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
  <script type="text/javascript">
        $('.resfile-btn').fancybox({ 
    'width'         : 900,
    'height'        : 450,
    'type'          : 'iframe',
    'autoScale'     : false,
    'autoSize'      : false
});

$('.remove-image').click(function () {
    var field_id = $(this).attr('kr-dest');
    $('#'+field_id).val('');
    $('.'+field_id+'_preview').attr('src', '').show();
});

function responsive_filemanager_callback(field_id){ 
    var url = $('#'+field_id).val();
    console.log(url);
    $('.'+field_id+'_preview').attr('src', url).show();
    parent.$.fancybox.close();
}

    </script>
</html>