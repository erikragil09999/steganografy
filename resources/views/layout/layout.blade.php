<!DOCTYPE html>
<html>
<head>
	<title>ManteninAja | Temukan Wedding Organizer/Planner Favoritmu</title>
	<meta name="description" content="ManteninAja | Temukan Wedding Planner/Organizer Favoritmu | Portal Website WO/WP Pertama di Indonesia">
	<meta name="keywords" content="wedding, wedding site, manteninaja,ManteninAja,MANTENINAJA,ManteninAja.com,manteninaja.com,MANTENINAJA.COM, mantenin aja,Mantenin Aja" />
	<meta charset="utf-8">
	<meta name="author" content="Andre Hardika">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}">
	<link rel="apple-touch-icon" href="{{ URL::asset('images/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/apple-touch-icon-114x114.png') }}">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style-responsive.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/vertical-rhythm.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">  
	@yield('header')
</head>
<body class="appear-animate">
	@yield('content')

	<!-- JS -->
	<script type="text/javascript" src="{{URL::asset('js/jquery-1.11.2.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>        
	<script type="text/javascript" src="{{URL::asset('js/SmoothScroll.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.scrollTo.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.localScroll.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.viewport.mini.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.countTo.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.appear.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.sticky.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.parallax-1.1.3.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.fitvids.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/isotope.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/imagesloaded.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/gmap3.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/wow.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/masonry.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.simple-text-rotator.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/all.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/contact-form.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.ajaxchimp.min.js')}}"></script>        
	<!--[if lt IE 10]><script type="text/javascript" src="{{URL::asset('js/placeholder.js')}}"></script><![endif]-->
	@yield('footer')
</body>
</html>