
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	    @if ($setting->first()->title != null)
            <title>{{ $setting->first()->title }}</title>
        @endif
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
    @if ($setting->first()->favicon != null)
            <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
        @endif

	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animated-text.css" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/all.min.css" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/flaticon.css" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/theme-default.css" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/meanmenu.min.css" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.transitions.css" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/venobox/venobox.css" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap-icons.css" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/responsive.css" type="text/css" media="all">
	<!-- ScrollCue CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/scrollCue.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/dark.css" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="{{asset('frontend')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

	<!-- loder -->
	<div class="loader-wrapper">
		<span class="loader"></span>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>


<div class="dark">
	<div class="dark-button">
		<input type="checkbox" class="toggle-switch">
	</div>
</div>




@include('frontend.layout.header')


@yield('content')

@include('frontend.layout.footer')


<!--==================================================-->
	<!-- Start Curser Section Here -->
	<!--==================================================-->
	<div class="curser"></div>
	<div class="curser2"></div>
	<!--==================================================-->
	<!-- Ends Curser Section Here -->
	<!--==================================================-->



<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->
   <div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;"></path>
        </svg>
    </div>
<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->

@yield('footer_script')

	<!-- jquery js -->
	<script src="{{asset('frontend')}}/assets/js/vendor/jquery-3.6.2.min.js"></script>
	<script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script src="{{asset('frontend')}}/assets/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script src="{{asset('frontend')}}/assets/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script src="{{asset('frontend')}}/assets/js/waypoints.min.js"></script>
	<!-- wow js -->
	<script src="{{asset('frontend')}}/assets/js/wow.js"></script>
	<!-- imagesloaded js -->
	<script src="{{asset('frontend')}}/assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script src="{{asset('frontend')}}/venobox/venobox.js"></script>

	<!--  animated-text js -->
	<script src="{{asset('frontend')}}/assets/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script src="{{asset('frontend')}}/venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script src="{{asset('frontend')}}/assets/js/isotope.pkgd.min.js"></script>
	<!-- jquery meanmenu js -->
	<script src="{{asset('frontend')}}/assets/js/jquery.meanmenu.js"></script>

	<!-- jquery scrollup js -->
	<script src="{{asset('frontend')}}/assets/js/jquery.scrollUp.js"></script>
	<!-- theme js -->
	<script src="{{asset('frontend')}}/assets/js/theme.js"></script>
    <!-- coustom js -->
	<script src="{{asset('frontend')}}/assets/js/coustom.js"></script>
	<!-- barfiller -->
	<script src="{{asset('frontend')}}/assets/js/jquery.barfiller.js"></script>
	<!-- barfiller -->
	<script src="{{asset('frontend')}}/assets/js/scrollCue.min.js"></script>
</body>
</html>
