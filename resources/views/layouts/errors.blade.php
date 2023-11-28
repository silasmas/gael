<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">

		<!-- MDB -->
		<link rel="stylesheet" href="{{ asset('addons/custom/mdb/css/mdb.min.css') }}">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{ asset('addons/zegen/css/bootstrap.min.css') }}">
		<!-- Bootstrap icons -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('addons/zegen/css/font-awesome.min.css') }}">
		<!-- Simple Line Icons -->
		<link rel="stylesheet" href="{{ asset('addons/zegen/css/simple-line-icons.min.css') }}">
		<!-- Themify Icons -->
		<link rel="stylesheet" href="{{ asset('addons/zegen/css/themify-icons.css') }}">
		<!-- Owl Slider -->
		<link rel="stylesheet" href="{{ asset('addons/zegen/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('addons/zegen/css/owl.theme.default.min.css') }}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ asset('addons/zegen/css/magnific-popup.css') }}">
		<!-- Revolution Slider -->
		<link rel="stylesheet" type="text/css" href="{{ asset('addons/zegen/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('addons/zegen/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('addons/zegen/rs-plugin/css/main-slider/rs6.css') }}">
		<!-- Main Style -->
		<link rel="stylesheet" href="{{ asset('addons/zegen/css/color-schemes/orange.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('addons/zegen/css/style.css') }}" class="main-style" />

        <style>
            #rev_slider_6_1_wrapper .tp-loader.spinner1 { background-color: #FFFFFF !important; }
		</style>
        <style>
			pre { font-family: inherit!important; font-size: inherit!important; white-space: pre-wrap!important; white-space: -moz-pre-wrap!important; white-space: -pre-wrap!important; white-space: -o-pre-wrap!important; word-wrap: break-word!important; }
			.ellip { display: block; height: 100%; transition: .3s; }
			.ellip-line { display: inline-block; text-overflow: ellipsis; white-space: nowrap; word-wrap: normal; max-width: 100%; }
			.ellip, .ellip-line { position: relative; overflow: hidden; }

            .rs-layer.Concept-Content a, .rs-layer.Concept-Content a:visited { color:#fff !important; border-bottom:1px solid #fff !important; font-weight:700 !important }
            .rs-layer.Concept-Content a:hover { border-bottom:1px solid transparent !important }
            .rs-layer.Concept-Content-Dark a, .rs-layer.Concept-Content-Dark a:visited { color:#000 !important; border-bottom:1px solid #000 !important; font-weight:700 !important }
            .rs-layer.Concept-Content-Dark a:hover { border-bottom:1px solid transparent !important }

            @media only screen and (max-width:575px) { rs-layer.res-slide-btn { padding:7px 16px !important;  font-size:13px !important } }

            #rev_slider_1_1_wrapper .zeus.tparrows { cursor:pointer; min-width:60px; min-height:60px; position:absolute; display:block; z-index:1000; border-radius:50%; overflow:hidden; background:rgba(0,0,0,0.38) }
            #rev_slider_1_1_wrapper .zeus.tparrows:before { font-family:'revicons'; font-size:17px; color:#ffffff; display:block; line-height:60px; text-align:center;  z-index:2; position:relative }
            #rev_slider_1_1_wrapper .zeus.tparrows.tp-leftarrow:before { content:'\e824' }
            #rev_slider_1_1_wrapper .zeus.tparrows.tp-rightarrow:before { content:'\e825' }
            #rev_slider_1_1_wrapper .zeus .tp-title-wrap { background:rgba(0,0,0,0.5); width:100%; height:100%; top:0px; left:0px; position:absolute; opacity:0; transform:scale(0); -webkit-transform:scale(0); transition:all 0.3s; -webkit-transition:all 0.3s; -moz-transition:all 0.3s; border-radius:50% }
            #rev_slider_1_1_wrapper .zeus .tp-arr-imgholder { width:100%; height:100%; position:absolute; top:0px; left:0px; background-position:center center; background-size:cover; border-radius:50%; transform:translatex(-100%); -webkit-transform:translatex(-100%); transition:all 0.3s; -webkit-transition:all 0.3s; -moz-transition:all 0.3s }
            #rev_slider_1_1_wrapper .zeus.tp-rightarrow .tp-arr-imgholder { transform:translatex(100%); -webkit-transform:translatex(100%) }
            #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-arr-imgholder { transform:translatex(0); -webkit-transform:translatex(0); opacity:1 }
            #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-title-wrap { transform:scale(1); -webkit-transform:scale(1); opacity:1 }
            #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows { min-width:60px !important;min-height:60px !important;background:rgba(0,0,0,0.38) !important }
            #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows:before { line-height:60px !important;font-size:17px !important }
            #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows { min-width:60px !important;min-height:60px !important;background:rgba(0,0,0,0.38) !important }
            #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows:before { line-height:60px !important;color:#ffffff !important;font-size:17px !important }
            #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows { min-width:60px !important;min-height:60px !important;background:rgba(0,0,0,0.38) !important }
            #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows:before{line-height:60px !important;font-size:17px !important}
        </style>

        <title>Erreur : {{ $exception->getStatusCode() }}</title>
    </head>

    <body data-res-from="1025">
		<!--Page Loader-->
		<div class="page-loader"></div>

        <!--Zmm Wrapper-->
		<div class="zmm-wrapper">
			<a href="#" class="zmm-close close"></a>
			<div class="zmm-inner bg-white typo-dark">
				<div class="text-center mobile-logo-part margin-bottom-30">
					<a href="{{ route('home') }}" class="img-before"><img src="{{ asset('img/logo.png') }}" class="img-fluid" width="70" alt="Logo"></a>
				</div>
				<div class="zmm-main-nav"></div>
				<div class="search-form-wrapper margin-top-30">
					<form class="search-form" role="search">
						<div class="input-group add-on">
							<input class="form-control" placeholder="Rechercher ..." name="srch-term" type="text">
							<div class="input-group-btn">
								<button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

        <!-- Overlay Search -->
		<div class="overlay-search text-center hide">
			<a href="#" class="close close-light overlay-search-close"></a>
			<div class="search-form-wrapper">
				<form class="navbar-form search-form sliding-search-form" role="search">
					<div class="input-group add-on">
						<input class="form-control" placeholder="Rechercher ..." name="srch-term" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>

        <!-- Main wrapper-->
		<div class="page-wrapper">
			<div class="page-wrapper-inner">
				<header>
					<!--Mobile Header-->
					<div class="mobile-header bg-white typo-dark">
						<div class="mobile-header-inner">
							<div class="sticky-outer">
								<div class="sticky-head">
									<div class="basic-container clearfix">
										<ul class="nav mobile-header-items pull-left">
											<li class="nav-item"><a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a></li>
										</ul>
										<ul class="nav mobile-header-items pull-center">
											<li>
												<a href="{{ route('home') }}" class="img-before"><img src="{{ asset('img/logo.png') }}" class="img-fluid" width="70" alt="Logo"></a>
											</li>
										</ul>
										<ul class="nav mobile-header-items pull-right">
											<li class="nav-item"><a href="#" class="img-before overlay-search-switch"><i class="icon-magnifier icons"></i></a></li>
										</ul>
									</div>
									<!-- .basic-container -->
								</div>
								<!-- .sticky-head -->
							</div>
							<!-- .sticky-outer -->
						</div>
						<!-- .mobile-header-inner -->
					</div>
					<!-- .mobile-header -->

                    <!--Header-->
					<div class="header-inner header-1{{ Route::is('home') ? ' header-absolute' : '' }}">
                        <!--Sticky part-->
						<div class="sticky-outer">
							<div class="sticky-head">
								<!--Navbar-->
								<nav class="navbar nav-shadow">
									<div class="basic-container clearfix">
										<div class="navbar-inner">
											<!--Overlay Menu Switch-->
											<ul class="nav navbar-items pull-left">
												<li class="list-item">
													<a href="{{ route('home') }}" class="logo-general">
                                                        <img src="{{ Route::is('home') ? asset('img/logo-reverse.png') : asset('img/logo.png') }}" class="img-fluid" width="70" alt="Logo" />
                                                    </a>
													<a href="{{ route('home') }}" class="logo-sticky">
                                                        <img src="{{ asset('img/logo.png') }}" class="img-fluid" width="70" alt="Logo" />
                                                    </a>
												</li>
											</ul>

                                            <!-- Menu -->
											<ul class="nav navbar-items pull-right">
												<!--List Item-->
												<li class="list-item">
													<ul class="nav navbar-main {{ Route::is('home') ? 'menu-white' : 'menu-dark' }}">
														<li class="{{ Route::is('home') ? 'active' : '' }}">
                                                            <a href="{{ route('home') }}">Accueil</a>
														</li>
														<li class="{{ Route::is('about.home') ? 'active' : '' }}">
                                                            <a href="{{ route('about.home') }}">A propos</a>
                                                        </li>
														<li class="{{ Route::is('ministry.home') ? 'active' : '' }}">
                                                            <a href="{{ route('ministry.home') }}">Ministère</a>
                                                        </li>
														<li class="{{ Route::is('discography.home') ? 'active' : '' }}">
                                                            <a href="{{ route('discography.home') }}">Discographie</a>
                                                        </li>
													</ul>
												</li>
												<!--List Item End-->

                                                <!--List Item-->
												<li class="list-item">
													<div class="header-navbar-text-1">
                                                        <a href="{{ route('donate') }}" class="h-donate-btn">Donation</a>
                                                    </div>
												</li>
												<!--List Item End-->
											</ul>
											<!-- Menu -->
										</div>
									</div>
								</nav>
							</div>
							<!--sticky-head-->
						</div>
						<!--sticky-outer-->
					</div>
				</header>
				<!-- header -->

				<!-- page-header -->
				<div class="page-title-wrap typo-white">
					<div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('img/headers/header0.png') }}">
						<span class="theme-overlay"></span>
						<div class="container">
							<div class="row text-center">
								<div class="col-md-12">
									<div class="page-title-inner">
										<div id="breadcrumb" class="breadcrumb margin-bottom-10">
											<a href="index.html" class="theme-color">Accueil</a>
											<span class="current">{{ $exception->getStatusCode() }}</span>
										</div>
										<h1 class="page-title mb-0">{{ $exception->getStatusCode() }}</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- page-header -->

                <!-- Page Content -->
				<div class="content-wrapper pad-none">
					<div class="content-inner">
						<!-- About Section -->
						<section id="section-about" class="section-about">
							<div class="container">
@yield('error-content')
							</div>
							<!-- Container -->
						</section>
						<!-- About Section End -->
                    </div>
				</div>
			</div>
			<!-- .page-wrapper-inner -->
		</div>
		<!--page-wrapper-->

		<!-- Footer -->
		<footer id="footer" class="footer footer-1 footer-bg-img" data-bg="{{ asset('img/footer.png') }}">
			<!--Footer Widgets Columns Posibilities 4-->
			<div class="footer-widgets">
				<div class="footer-middle-wrap footer-overlay-dark">
					<div class="color-overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-6 widget text-widget">
								<div class="widget-title">
									<!-- Title -->
									<h3 class="title typo-white">Groupe Adorons l'Éternel</h3>
								</div>

                                <!-- Text -->
								<div class="widget-text margin-bottom-30">
									<p></p>
								</div>
								<div class="social-icons">
									<a href="#" class="social-fb"><span class="ti-facebook"></span></a>
									<a href="#" class="social-twitter"><span class="ti-twitter"></span></a>
									<a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
								</div>
							</div>

                            <!-- Col -->
							<div class="col-lg-3 col-sm-6 widget text-widget">
								<div class="widget-title">
									<!-- Title -->
									<h3 class="title typo-white">Liens rapides</h3>
								</div>
								<!-- Text -->
								<div class="menu-quick-links">
									<ul class="menu">
										<li class="menu-item"><a href="#">A propos</a></li>
										<li class="menu-item"><a href="#">Ministères</a></li>
										<li class="menu-item"><a href="#">Discographie</a></li>
										<li class="menu-item"><a href="#">Donation</a></li>
									</ul>
								</div>
							</div>
							<!-- Col -->

                            <div class="col-lg-3 col-sm-6 widget recent-posts">
								<div class="widget-title">
									<!-- Title -->
									<h3 class="title typo-white">Actualité</h3>
								</div>
								<nav>
									<ul class="footer-list-posts">
										<!-- List Items -->
										<li>
											<div class="side-image">
												<a href="#">
                                                    <img width="80" height="80" src="{{ asset('img/blank.png') }}" class="img-responsive wp-post-image" alt="Blog">
                                                </a>
                                            </div>
											<div class="side-item-text">
                                                <a href="#">
                                                    Lorem ipsum dolor sit amet
                                                </a>
                                                <span class="post-date d-block">23 novembre 2023</span>
                                            </div>
                                        </li>
										<li>
											<div class="side-image">
												<a href="#">
                                                    <img width="80" height="80" src="{{ asset('img/blank.png') }}" class="img-responsive wp-post-image" alt="Blog">
                                                </a>
                                            </div>
											<div class="side-item-text">
                                                <a href="#">
                                                    Excepteur sint occaecat cupidatat
                                                </a>
                                                <span class="post-date d-block">23 novembre 2023</span>
                                            </div>
                                        </li>
									</ul>
								</nav>
							</div>

                            <!-- Col -->
							<div class="col-lg-3 col-sm-6 widget contact-info-widget">
								<div class="widget-title">
									<!-- Title -->
									<h3 class="title typo-white">Newsletter</h3>
								</div>
								<p>Enregistrez-vous pour recevoir nos dernières mises à jour et informations.</p>
								<div class="mailchimp-widget-wrap">
									<!-- subscribe form -->
									<form id="subscribe-form-1" class="subscribe-form" action="#">
                                        <div class="input-group add-on">
                                            <input type="text" class="form-control" name="mcemail" autocomplete="off" id="mcemail-1" placeholder="Adresse e-mail">
											<div class="input-group-btn">
												<button class="btn btn-default subscribe-btn" type="submit">Enregistrer</button>
											</div>
										</div>
										<p class="subscribe-status-msg hide"></p>
									</form>
								</div>
							</div>
							<!-- Col -->
						</div>
					</div>
				</div>
			</div>
			<!--Footer Copyright Columns Posibilities 4-->
			<div class="footer-copyright">
				<div class="footer-bottom-wrap pad-tb-20 typo-white">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="footer-bottom-items pull-left">
									<li class="nav-item">
										<div class="nav-item-inner">
											Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}">GAEL</a>. 
                                            Designed by <a href="http://silasmas.com/">SDEV</a><span class="heart-color"><i class="bi bi-heart ms-1 align-middle"></i></span>
										</div>
									</li>
								</ul>
								<ul class="footer-bottom-items footer-menu pull-right">
									<li class="nav-item">
										<a href="#">Confidentialité</a>
									</li>
									<li class="nav-item">
										<a href="#">Conditions</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer -->

        <!-- MISCELLANEOUS -->
        <script src="{{ asset('addons/zegen/js/jquery.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('addons/custom/mdb/js/mdb.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/jquery.paroller.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/validator.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/smartresize.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/js/custom.js') }}"></script>

        <!-- REVOLUTION JS FILES -->
        <script src="{{ asset('addons/zegen/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="{{ asset('addons/zegen/rs-plugin/js/main-slider/rbtools.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/rs-plugin/js/main-slider/rs6.min.js') }}"></script>
        <script src="{{ asset('addons/zegen/rs-plugin/js/main-slider/home-1.js') }}"></script>
    </body>
</html>
