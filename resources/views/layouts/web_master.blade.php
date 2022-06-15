
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}">
<!-- Font Awesome CSS -->
<link href="{{ asset('website/assets/css/font-awesome.css') }}" rel="stylesheet">
<!-- Settings CSS -->
<link rel="stylesheet" href="{{ asset('website/assets/rs-plugin/css/settings.css') }}">
<!-- Jquery Fancybox CSS -->
<link rel="stylesheet" href="{{ asset('website/assets/css/jquery.fancybox-1.3.4.css') }}" type="text/css" media="screen" />
<!-- <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" /> -->
<!-- Owl Carousel CSS -->
<link href="{{ asset('website/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('website/assets/css/owl.theme.default.min.css') }}">
<!-- Switcher css -->
<link rel="stylesheet" href="{{ asset('website/assets/css/switcher.css') }}">
<!-- Style CSS -->
<link href="{{ asset('website/assets/css/style.css') }}" rel="stylesheet" id="colors">
<!-- Open Sans Family -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<!-- Roboto Family -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
<title>Fitness Center</title>
</head>
<body>

<!--Header Start-->
@include('layouts.partials.web_header')
<!--Header End--> 

{{-- main --}}
@yield('main_content')
<!-- End Main -->

<!--Footer Start-->
@include('layouts.partials.web_footer')
<!--Footer End--> 


<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="{{ asset('website/assets/js/jquery-3.2.1.slim.min.js') }}"></script> 
<!-- Popper min -->
<script src="{{ asset('website/assets/js/popper.min.js') }}"></script> 
<!-- Bootstrap min file -->
<script src="{{ asset('website/assets/js/bootstrap.min.js') }}"></script> 
<!-- Switcher --> 
<script src="{{ asset('website/assets/js/switcher.js') }}"></script> 
<!-- Revolution Slider file --> 
<script type="text/javascript" src="{{ asset('website/assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
<!-- Isotope -->
<script src="{{ asset('website/assets/js/isotope.js') }}"></script>
<!-- Owl Carousel --> 
<script src="{{ asset('website/assets/js/owl.carousel.min.js') }}"></script>
<!-- Jquery Fancybox -->
<!-- <script src="js/jquery.fancybox.min.js"></script>  -->
<script type="text/javascript" src="{{ asset('website/assets/js/jquery.fancybox-1.3.4.pack.js') }}"></script>
<script>
  $(document).ready(function() {
    $("a.fancybox").fancybox();
  });
</script>
<!-- Counter --> 
<script src="{{ asset('website/assets/js/counter.js') }}"></script> 
<!-- general script file --> 
<script type="text/javascript" src="{{ asset('website/assets/js/script.js') }}"></script>
</body>
</html>