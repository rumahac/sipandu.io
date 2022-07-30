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
    <body class="app sidebar-mini ltr light-mode">
    <div id="global-loader">
        <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <div class="page">
        <div class="page-main">
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{asset('assets/images/'.$gs->logo)}}" class="header-brand-img desktop-logo" alt="logo" height="36" width="107">
                            <img src="{{asset('assets/images/'.$gs->logo)}}" class="header-brand-img light-logo1" alt="logo" height="36" width="107">
                        </a>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                                data-bs-toggle="modal">
                                                <i class="flag flag-mc"></i>
                                            </a>
                                        </div>
                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        
                                        <div class="dropdown  d-flex message">
                                            <a class="nav-link icon text-center"  href="{{ route('admin-logout') }}">
                                                <i class="zmdi zmdi-power"></i><span class="pulse-danger"></span>
                                            </a>
                                        </div>
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{ Auth::guard('admin')->user()->photo ? asset('assets/images/'.Auth::guard('admin')->user()->photo):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ Auth::guard('admin')->user()->name}}</h5>
                                                        <small class="text-muted">{{ Auth::guard('admin')->user()->role}}</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="{{ route('admin-profile') }}">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="{{ route('admin-password-reset') }}">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <a class="dropdown-item" href="{{ route('admin-logout') }}">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="{{asset('assets/images/'.$gs->logo)}}" class="header-brand-img desktop-logo" alt="logo" height="36" width="107">
                            <img src="{{asset('assets/images/'.$gs->logo)}}" class="header-brand-img toggle-logo"alt="logo" height="36" width="107">
                            <img src="{{asset('assets/images/'.$gs->logo)}}" class="header-brand-img light-logo" alt="logo" height="36" width="107"> 
                            <img src="{{asset('assets/images/'.$gs->logo)}}" class="header-brand-img light-logo1"alt="logo" height="36" width="107">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('front.index')}}"><i
                                class="side-menu__icon fa fa-send-o"></i><span
                                class="side-menu__label">View</span></a>
                            </li>
                            <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin-dashboard')}}"><i
                                class="side-menu__icon fe fe-home"></i><span
                                class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin-info')}}"><i
                                class="side-menu__icon fa fa-firefox"></i><span
                                class="side-menu__label">Informasi Website</span></a>
                            </li>
                            <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin-video')}}"><i
                                class="side-menu__icon fa fa-youtube-play"></i><span
                                class="side-menu__label">Video</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label">Fitur</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Fitur</a></li>
                                    <li><a href="{{route('admin-profile1')}}" class="slide-item"> Judul</a></li>
                                    <li><a href="{{route('admin-sp-index')}}" class="slide-item"> Konten</a></li> 
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-package"></i><span
                                        class="side-menu__label">Pricing</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                        <ul class="slide-menu mega-slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Pricing</a></li>
                                    <ul>
                                         <li><a href="{{route('admin-proimg')}}" class="slide-item"> Judul Pricing</a></li>
                                        <li><a href="{{route('admin-rs-index')}}" class="slide-item"> Konten Pricing</a></li>
                                    </ul>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin-special')}}"><i
                                    class="side-menu__icon fe fe-home"></i><span
                                    class="side-menu__label">Tampilan</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-layers"></i><span
                                        class="side-menu__label">Testimonial</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)"></a></li>
                                    <li><a href="{{route('admin-back')}}" class="slide-item"> Judul Testimonial</a></li>
                                    <li><a href="{{route('admin-ad-index')}}" class="slide-item"> Konten Testimonial</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-sheqel"></i><span
                                        class="side-menu__label">SEO Tools</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">SEO Tools</a></li>
                                    <li><a href="{{route('admin-seotool-analytics')}}" class="slide-item">Google analytics</a></li>
                                    <li><a href="{{route('admin-seotool-keywords')}}" class="slide-item">Meta Keys</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin-img-index')}}"><i
                                    class="side-menu__icon fa fa-camera-retro"></i><span
                                    class="side-menu__label">Gambar</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin-sl-index')}}"><i
                                    class="side-menu__icon fe fe-zap"></i><span
                                    class="side-menu__label">Experts</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin-ps-contact')}}"><i
                                    class="side-menu__icon fa fa-address-card-o"></i><span
                                    class="side-menu__label">Contact</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-cogs"></i><span
                                        class="side-menu__label">General Settings</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">General Settings</a></li>
                                    <li><a href="{{route('admin-gs-logo')}}" class="slide-item">Logo</a></li>
                                    <li><a href="{{route('admin-gs-fav')}}" class="slide-item">Favicon</a></li>
                                    <li><a href="{{route('admin-gs-contents')}}" class="slide-item">Konten Website</a></li>
                                    <li><a href="{{route('admin-gs-address')}}" class="slide-item">Office Address</a></li>
                                </ul>
                            </li>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    @yield('content')
    </div>
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <span class="fa fa-heart text-danger"></span><a href="javascript:void(0)">Bahasa Awan</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>>
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/sticky.js')}}"></script>
    <script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
    <script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>
    <script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
    <script src="{{asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/rounded-barchart.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>
    <script src="{{asset('assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('assets/plugins/formwizard/fromwizard.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/form-wizard.js')}}">
    <script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/js/apexcharts.js')}}"></script>
    <script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
    <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
    <script src="{{asset('assets/plugins/apexchart/irregular-data-series.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/chart.flot.sampledata.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/dashboard.sampledata.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
    <script src="{{asset('assets/js/typehead.js')}}"></script>
    <script src="{{asset('assets/js/index1.js')}}"></script>
    <script src="{{asset('assets/js/themeColors.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/charts.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

    @yield('scripts')


</body>

</html>


        
   