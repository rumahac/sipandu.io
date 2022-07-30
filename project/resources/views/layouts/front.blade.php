<!doctype html>
<html lang="en" dir="ltr">

<head>

<meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/'.$gs->favicon)}}" />
    <title>{{$gs->title}}</title>
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/colors/color1.css')}}" />
    @yield('styles')
</head>
    @yield('content')
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
    <script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/plugins/counters/counters-1.js')}}"></script>
    <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/plugins/company-slider/slider.js')}}"></script>
    <script src="{{asset('assets/plugins/rating/jquery-rate-picker.js')}}"></script>
    <script src="{{asset('assets/plugins/rating/rating-picker.js')}}"></script>
    <script src="{{asset('assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
    <script src="{{asset('assets/plugins/ratings-2/star-rating.js')}}"></script>
    <script src="{{asset('assets/js/sticky.js')}}"></script>
    <script src="{{asset('assets/js/landing.js')}}"></script>
     @yield('scripts')
</body>
</html>