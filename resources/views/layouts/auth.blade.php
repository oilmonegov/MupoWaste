<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ app()->getLocale() }}" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'MupoWaste') }} | @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="MupoWaste, Waste, Management, Reuse, Recycle, Clean, Environment, Login Page" name="keywords" />
    <meta content="MupoWaste Dev Team" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ asset('mupo/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('mupo/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('mupo/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('mupo/css/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('mupo/css/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('mupo/css/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('mupo/css/theme/default.css') }}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

    @yield('custom_styles')

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('mupo/plugins/pace/pace.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader">
	    <div class="material-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
            </svg>
            <div class="message">Loading...</div>
        </div>
	</div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">
        @yield('auth-news-feed')
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="{{ asset('mupo/img/login-bg/bg-1.jpg') }}" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><strong>{{ config('app.name', 'MupoWaste') }} - Waste Management Classified Platform</strong></h4>
                    <p style="color:#ffffff">
                       {{ config('app.name', 'MupoWaste') }} is the Nigeria’s No. 1 Waste Managenent Classified Platform. We are on a mission to build a more open, accessible, and reliable waste management platform, one piece of software at a time.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">

                @yield('content')

            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('mupo/plugins/jquery/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('mupo/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
	<script src="{{ asset('mupo/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('mupo/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--[if lt IE 9]>
		<script src="{{ asset('mupo/crossbrowserjs/html5shiv.js') }}"></script>
		<script src="{{ asset('mupo/crossbrowserjs/respond.min.js') }}"></script>
		<script src="{{ asset('mupo/crossbrowserjs/excanvas.min.js') }}"></script>
	<![endif]-->
	<script src="{{ asset('mupo/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('mupo/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('mupo/js/apps.min.js') }}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

    @yield('custom_js')

	<script>
		$(document).ready(function() {
			MupoWasteApp.init();
		});
	</script>
</body>
</html>
