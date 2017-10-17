
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
        <link href="{{asset("public/assets/global/plugins/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("public/assets/global/plugins/select2/css/select2-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        @yield("page_content")
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
        <script src="{{ asset('public/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('public/assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        @yield("scripts")
    </body>
</html>