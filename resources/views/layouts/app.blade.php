 <!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> Starlane Dispatching </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" sizes="56x56" href="{{ asset('assets/images/logo/fav-icon.png') }}">
<!-- bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- carousel CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<!-- Animate Css -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
<!-- Mobile Menu CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
<!-- theme-default CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/template-default.css') }}">
<!-- Owl Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- Common Style CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
<!-- venobox CSS -->
<link rel="stylesheet" href="{{ asset('assets/venobox/venobox.css') }}">
<!-- responsive CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- modernizr js -->
<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>


</head>
<body>

<!-- pre loader area start -->
<div id="loading">
	<div id="loading-center">
	<div id="loading-center-absolute">
		<!-- loading content here -->
		<div class="preloader__content text-center">
			<div class="preloader__logo">
				<img src="assets/images/logo/ts_logo.png" alt="">
			</div>
			<div id="st-loading-bar" class="preloader__bar">
				<div id="st-loading-line" class="preloader__bar-inner"></div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- pre loader area end -->

<!-- Header Top Area -->
@include('layouts.header')
<!-- Offcanvas area start -->


<!-- Header Area -->
@yield('content')


<!-- ST Footer Area -->
@include('layouts.footer')
<!-- Back to top-->


	<!-- jquery js -->
<script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('assets/js/nice-select.js') }}"></script>
<!-- carousel js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- swiper -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!-- waypoints js -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- Wow Js -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Mobile Menu Js -->
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<!-- venobox js -->
<script src="{{ asset('assets/venobox/venobox.js') }}"></script>
<!-- venobox min js -->
<script src="{{ asset('assets/venobox/venobox.min.js') }}"></script>
<!-- theme js -->
<script src="{{ asset('assets/js/theme.js') }}"></script>


</body>

<!-- Mirrored from html.sthemeit.com/logistcwr-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jul 2025 18:21:20 GMT -->
</html>