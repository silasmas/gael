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

        <title>
@if (Route::is('home'))
			Groupe Adorons l'Éternel
@else
			GAEL | 
	@if (Route::is('about.home'))
			A propos
	@endif

	@if (Route::is('ministry.home') || Route::is('ministry.datas'))
			Ministères
	@endif

	@if (Route::is('discography.home') || Route::is('discography.datas') || Route::is('discography.entity.home') || Route::is('discography.entity.datas'))
			Discographie
	@endif

	@if (Route::is('donate'))
			Donation
	@endif
@endif
		</title>
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
@if (Route::is('home'))
						<!--Topbar-->
						<div class="topbar relative">
							<div class="basic-container clearfix">
								<ul class="nav topbar-items pull-left">
									<li class="nav-item">
										<ul class="nav header-info">
											<li>
												<div class="header-address typo-white">
                                                    <span class="ti-location-pin"></span>
													0115, avenue Sadiki, 14<small class="d-inline-block align-top">ème</small> Rue, Industriel, com. de Limete
                                                </div>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="nav topbar-items pull-right">
									<li class="nav-item">
										<div class="social-icons typo-white">
											<a href="#" class="social-fb"><span class="ti-facebook"></span></a>
											<a href="#" class="social-twitter"><span class="ti-twitter"></span></a>
											<a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
										</div>
									</li>
									<li><a href="#" class="full-view-switch text-center"><i class="ti-search typo-white"></i></a></li>
								</ul>
							</div>

                            <!--Search-->
							<div class="full-view-wrapper hide">
								<a href="#" class="close full-view-close"></a>
								<form class="navbar-form search-form" role="search">
									<div class="input-group">
										<input class="form-control" placeholder="Écrire ici pour rechercher ..." name="srch-term" type="text">
									</div>
								</form>
							</div>
						</div>
						<!--Topbar-->
@endif

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
                                                        <a href="#" class="h-donate-btn">Donation</a>
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

@if (Route::is('home'))
                <!-- Revolution Slider Section -->
				<p class="rs-p-wp-fix"></p>
				<rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="zegen-home-1" data-source="gallery" style="visibility:hidden;background:#000000;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
					<rs-module id="rev_slider_1_1" style data-version="6.5.31">
						<rs-slides>
							<rs-slide style="position: absolute;" data-key="rs-1" data-title="Web Show" data-thumb="{{ asset('img/slides/slide_00_thumb.png') }}" data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;">
                                <img src="{{ asset('addons/zegen/rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme" title="zmain-slider-1.jpg" width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('img/slides/slide_00.png') }}" data-parallax="5" data-no-retina>

                                <!--  -->
                                <h1 id="slider-1-slide-1-layer-2" class="rs-layer Concept-Title" data-type="text" data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,-26px,-10px,-33px;" data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,30;l:52,55,50,40;ls:3px;fw:700;a:center;" data-dim="w:754px,699px,auto,400px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;" data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;">
                                    GAEL ministries
                                </h1>

                                <!--  -->
                                <rs-layer id="slider-1-slide-1-layer-4" class="Concept-SubTitle" data-type="text" data-color="#226df8||#2056e9||#2056e9||#2056e9" data-rsp_ch="on" data-xy="x:c;y:m;yo:-42px,-83px,-64px,-71px;" data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,left,left,left;" data-dim="w:408px,auto,auto,auto;" data-padding="b:10;" data-frame_0="o:1;" data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;" data-frame_1="st:640;sp:1200;sR:640;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;" data-frame_999_reverse="x:true;" style="z-index:11;font-family:'Open Sans';text-transform:uppercase;">
                                    Redécouvrir
                                </rs-layer>

                                <!--  -->
                                <rs-layer id="slider-1-slide-1-layer-14" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m,t,t,t;yo:78px,286px,271px,233px;" data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;" data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;" data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4960;" style="z-index:9;font-family:'Open Sans';">
                                    Nous prenons aujourd'hui le temps de tout expliquer avec précision ce qu'est GAEL pour vous tous qui aimez et servez cette œuvre.
                                </rs-layer>

                                <!--  -->
                                <rs-layer id="slider-1-slide-1-layer-16" class="res-slide-btn pop rev-btn" data-type="button" data-color="rgba(255,255,255,1)" data-xy="x:c;y:m;yo:162px,130px,128px,117px;" data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off" data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;" data-border="bor:3px,3px,3px,3px;" data-frame_0="rX:-70deg;oZ:-50;" data-frame_1="oZ:-50;e:power4.inOut;st:3160;sp:1750;" data-frame_999="o:0;st:w;sR:4640;" data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:8;background-color:#2056e9;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;" onclick="window.location.href = '/ministries'">
                                    Voir les détails
								</rs-layer>

                                <!--  -->
                                <rs-layer id="slider-1-slide-1-layer-21" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:228px,95px,91px,90px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;">
                                    <img src="{{ asset('addons/zegen/rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme" class="tp-rs-img rs-lazyload" width="80" height="80" data-lazyload="{{ asset('addons/zegen/rs-plugin/assets/dove.png') }}" data-no-retina>
                                </rs-layer>
                                <!--  -->
                            </rs-slide>

                            <rs-slide style="position: absolute;" data-key="rs-2" data-title="Web Show" data-thumb="{{ asset('img/slides/slide_01_thumb.png') }}" data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;">
                                <img src="{{ asset('addons/zegen/rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme" title="zmain-slider-3.jpg" width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('img/slides/slide_01.png') }}" data-parallax="5" data-no-retina>

                                <!--  -->
                                <h1 id="slider-1-slide-2-layer-2" class="rs-layer Concept-Title" data-type="text" data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,0,-10px,-32px;" data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,28;l:52,55,50,30;ls:3px;fw:700;a:center;" data-dim="w:922px,845px,736px,478px;h:62px,auto,auto,35px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;" data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;">
                                    Suivez-nous en streaming
                                </h1>
                                <!--  -->

                                <rs-layer id="slider-1-slide-2-layer-4" class="Concept-SubTitle" data-type="text" data-color="#bf0a30||#e9204f||#e9204f||#e9204f" data-rsp_ch="on" data-xy="x:c;y:m;yo:-42px,-47px,-55px,-72px;" data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,center,left,left;" data-dim="w:446px,424px,auto,auto;" data-padding="b:10;" data-frame_0="o:1;" data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;" data-frame_1="st:640;sp:1200;sR:640;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;" data-frame_999_reverse="x:true;" style="z-index:11;font-family:'Open Sans';text-transform:uppercase;">
                                    GAEL TV
                                </rs-layer>

                                <!--  -->
                                <rs-layer id="slider-1-slide-2-layer-14" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m,t,t,t;yo:78px,312px,271px,234px;" data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;" data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;" data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4960;" style="z-index:9;font-family:'Open Sans';">
                                    Avec GAEL TV, vous êtes en mesure de suivre en direct les concerts, les formations et bien plus encore.
                                </rs-layer>
                                <!--  -->

                                <a id="slider-1-slide-2-layer-16" class="rs-layer res-slide-btn pop rev-btn" href="https://www.youtube.com/watch?v=3SxK9DPMVMU" target="_blank" data-type="button" data-color="rgba(255,255,255,1)" data-xy="x:c;y:m;yo:177px,156px,128px,118px;" data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off" data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;" data-border="bor:3px,3px,3px,3px;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:3160;sp:1200;sR:3160;" data-frame_999="o:0;st:w;sR:4640;" data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:8;background-color:#bf0a30;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                    Commencer ici
								</a>

                                <!--  -->
                                <rs-layer id="slider-1-slide-2-layer-21" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:228px,133px,102px,89px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;">
                                    <img src="{{ asset('addons/zegen/rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme" class="tp-rs-img rs-lazyload" width="80" height="80" data-lazyload="{{ asset('addons/zegen/rs-plugin/assets/loveus.png') }}" data-no-retina>
                                </rs-layer>
                                <!--  -->
                            </rs-slide>

                            <rs-slide style="position: absolute;" data-key="rs-3" data-title="Web Show" data-thumb="{{ asset('img/slides/slide_02_thumb.png') }}" data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;">
                                <img src="{{ asset('addons/zegen/rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme" title="zmain-slider-2.jpg" width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('img/slides/slide_02.png') }}" data-parallax="5" data-no-retina>

                                <!--  -->
                                <h1 id="slider-1-slide-3-layer-2" class="rs-layer Concept-Title" data-type="text" data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,0,-10px,-38px;" data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,28;l:52,55,50,30;ls:3px;fw:700;a:center;" data-dim="w:922px,845px,736px,478px;h:62px,auto,auto,35px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;" data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;">
                                    GAEL Music
                                </h1>
                                <!--  -->

                                <rs-layer id="slider-1-slide-3-layer-4" class="Concept-SubTitle" data-type="text" data-color="#3ec00b||#37b406||#37b406||#37b406" data-rsp_ch="on" data-xy="x:c;y:m;yo:-42px,-47px,-55px,-76px;" data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,center,left,left;" data-dim="w:446px,424px,auto,auto;" data-padding="b:10;" data-frame_0="o:1;" data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;" data-frame_1="st:640;sp:1200;sR:640;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;" data-frame_999_reverse="x:true;" style="z-index:11;font-family:'Open Sans';text-transform:uppercase;">
                                    Musique
                                </rs-layer>

                                <!--  -->
                                <rs-layer id="slider-1-slide-3-layer-14" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m,t,t,t;yo:78px,312px,271px,228px;" data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;" data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;" data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4960;" style="z-index:9;font-family:'Open Sans';">
                                    Tout savoir sur la branche musicale de GAEL Ministries composée du Grand Chœur, de l'Équipe Mobile et de la Mission Team
                                </rs-layer>
                                <!--  -->

                                <a id="slider-1-slide-3-layer-16" class="rs-layer res-slide-btn pop rev-btn" href="{{ route('ministry.home') }}" target="_self" data-type="button" data-color="rgba(255,255,255,1)" data-xy="x:c;y:m;yo:162px,156px,128px,112px;" data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off" data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;" data-border="bor:3px,3px,3px,3px;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:3160;sp:1200;sR:3160;" data-frame_999="o:0;st:w;sR:4640;" data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:8;background-color:#37b406;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                    Voir les détails
                                </a>

                                <!--  -->
                                <rs-layer id="slider-1-slide-3-layer-21" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:228px,133px,102px,85px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;">
                                    <img src="{{ asset('addons/zegen/rs-plugin/assets/dummy.png') }}" alt="Non Profit Wordpress Theme" class="tp-rs-img rs-lazyload" width="80" height="80" data-lazyload="{{ asset('addons/zegen/rs-plugin/assets/bible.png') }}" data-no-retina>
                                </rs-layer>
                                <!--  -->
                            </rs-slide>
						</rs-slides>
                        <rs-static-layers>
                            <!--  -->
                        </rs-static-layers>
                    </rs-module>

                    <script></script>
                    <script>
                        if (typeof revslider_showDoubleJqueryError === "undefined") {
                            function revslider_showDoubleJqueryError(sliderID) {
                                console.log("Vous disposez d'une bibliothèque jquery.js incluse qui vient après l'inclusion js des fichiers Slider Revolution.");
                                console.log("Pour résoudre ce problème, vous pouvez :");
                                console.log("1. Activez « Options générales du module » -> « Avancé » -> « Filtres jQuery et OutPut » -> « Mettre JS dans le corps »");
                                console.log("2. Recherchez la double inclusion jQuery.js et supprimez-la");

                                return "Bibliothèque jQuery double incluse";
                            }
                        }
                    </script>
				</rs-module-wrap>
				<!-- Revolution Slider Section End -->
@endif

@include('page_header')

                <!-- Page Content -->
				<div class="content-wrapper pad-none">
					<div class="content-inner">
@yield('guest-content')
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
									<p class="d-flex justify-between">
										<span class="ti-location-pin me-1 fs-5 theme-color"></span>
										<span class="d-inline-block">
											0115, avenue Sadiki, 14<small class="d-inline-block align-top">ème</small> Rue, Industriel, com. de Limete
										</span>
									</p>
									<p>
										<span class="ti-headphone me-1 theme-color"></span>
										<span class="d-inline-block">
											+123 456 789
										</span>
									</p>
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
										<li class="menu-item"><a href="{{ route('about.home') }}">A propos</a></li>
										<li class="menu-item"><a href="{{ route('ministry.home') }}">Ministères</a></li>
										<li class="menu-item"><a href="{{ route('discography.home') }}">Discographie</a></li>
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
										{{-- <li>
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
                                        </li> --}}
										<li>
											<p class="m-0 text-center fst-italic"><i class="bi bi-info-circle me-2 text-warning"></i>Il n'y a aucune information</p>
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

		<!-- CUSTOM -->
		<script type="text/javascript">
			function insertAfter(referenceNode, newNode) {
				referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
			}

			function limitChar(text, count) {
				return text.slice(0, count) + (text.length > count ? '...' : '');
			}

			function triggerRoll(btn, text, element, _class, count) {
				if (btn.classList.contains(_class)) {
					element.textContent = text;
					btn.classList.remove(_class);
					btn.innerHTML = 'Réduire <i class="bi bi-chevron-double-up fs-5 align-middle"></i>';

				} else {
					element.textContent = limitChar(element.textContent, count);
					btn.classList.add(_class);
					btn.innerHTML = 'Développer <i class="bi bi-chevron-double-down fs-5 align-middle"></i>';
				}
			}

			const containers = document.querySelectorAll('.paragraph-ellipsis');

			Array.prototype.forEach.call(containers, (container) => {
				// Loop through each container
				var p900 = container.querySelector('.paragraph_900');
				var p500 = container.querySelector('.paragraph_500');

				if (p900 != null) {
					const roll_btn_900 = document.createElement('a');

					roll_btn_900.setAttribute('role', 'button');
					roll_btn_900.setAttribute('class', 'roll-block unrolled btn-link mt-2 float-end');
					roll_btn_900.innerHTML = 'Développer <i class="bi bi-chevron-double-down fs-5 align-middle"></i>';

					var p900_span = p900.lastElementChild;
					var p900_span_text = p900_span.textContent;

					insertAfter(p900_span, roll_btn_900);

					p900_span.textContent = limitChar(p900_span.textContent, 890);

					roll_btn_900.onclick = () => {
						triggerRoll(roll_btn_900, p900_span_text, p900_span, 'unrolled', 890);
					};
				}

				if (p500 != null) {
					const roll_btn_500 = document.createElement('a');

					roll_btn_500.setAttribute('role', 'button');
					roll_btn_500.setAttribute('class', 'roll-block unrolled btn-link mt-2 float-end');
					roll_btn_500.innerHTML = 'Développer <i class="bi bi-chevron-double-down fs-5 align-middle"></i>';

					var p500_span = p500.lastElementChild;
					var p500_span_text = p500_span.textContent;

					insertAfter(p500_span, roll_btn_500);

					p500_span.textContent = limitChar(p500_span.textContent, 500);

					roll_btn_500.onclick = () => {
						triggerRoll(roll_btn_500, p500_span_text, p500_span, 'unrolled', 500);
					};
				}
			});
		</script>
    </body>
</html>
