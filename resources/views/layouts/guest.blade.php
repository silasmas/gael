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

        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
        <!-- Font Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('addons/custom/mdb/css/mdb.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('addons/webster/css/plugins-css.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('addons/webster/revolution/css/settings.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('addons/webster/css/typography.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('addons/webster/css/shortcodes/shortcodes.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('addons/webster/css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('addons/webster/css/responsive.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('addons/webster/css/skins/skin-orange.css') }}" />

        <title>Groupe Adorons l'Éternel</title>
    </head>
    <body>
        <div class="wrapper">
            <!--================ preloader =================-->
            <div id="pre-loader">
                <img src="{{ asset('img/pre-loader/loader-03.svg') }}" alt="">
            </div>
            <!--================ preloader =================-->

            <!--================ header =================-->
            <header id="header" class="header default">
                <!--=============== mega menu ==================-->
                <div class="menu">
                    <!-- menu start -->
                    <nav id="menu" class="mega-menu">
                        <!-- menu list items container -->
                        <section class="menu-list-items">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 position-relative">
                                        <!-- menu logo -->
                                        <ul class="menu-logo">
                                            <li>
                                                <a href="{{ route('home') }}"><img id="logo_img" src="{{ asset('img/logo-reverse.png') }}" alt="logo" style="width: 120px; height: 60px;"></a>
                                            </li>
                                        </ul>

                                        <!-- menu links -->
                                        <div class="menu-bar">
                                            <ul class="menu-links">
                                                <li><a href="{{ route('home') }}">Accueil</a></li>
                                                <li><a href="{{ route('about.home') }}">A propos</a></li>
                                                <li><a href="{{ route('events.home') }}">Events</a></li>
                                                <li>
                                                    <a href="javascript:void(0)">Ressources <i class="fa fa-angle-down fa-indicator"></i></a>

                                                    <!-- drop down full width -->
                                                    <div class="drop-down">
                                                        <ul>
                                                            <li><a href="{{ route('resources.entity.home', ['entity' => 'meditations']) }}">Méditations</a></li>
                                                            <li><a href="{{ route('resources.entity.home', ['entity' => 'musics']) }}">Musique</a></li>
                                                            <li><a href="{{ route('resources.entity.home', ['entity' => 'books']) }}">Livres</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </nav>
                    <!-- menu end -->
                </div>
            </header>
            <!--================ header =================-->

@if (Route::is('home'))
            <!--================ banner =================-->
            <section class="rev-slider">
                <div id="rev_slider_273_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="webster-slider-7" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
                    <div id="rev_slider_273_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-766" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('img/slides/slide-01.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('img/slides/slide-01.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption   tp-resizeme  rev-color" id="slide-766-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-60" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 350px; line-height: 350px; font-weight: 700; color: #84ba3f; letter-spacing: 0px;font-family:lato;">
                                    25 ans
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme" id="slide-766-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="7" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1360,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                    Êtes-vous prêt à <br /> fêter les 25 ans de GAEL avec nous ?
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  rev-bg" id="slide-766-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="150" data-width="['3']" data-height="['90']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":2830,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(132,186,63);">
                                </div>
                                <!-- LAYER NR. 4 -->
                                <a class="tp-caption rev-btn  tp-resizeme  rev-button" href="#" target="_self" id="slide-766-layer-4" data-x="center" data-hoffset="-1" data-y="center" data-voffset="241" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":4210,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power0.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 300; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                    Voir les détails
                                </a>
                            </li>

                            <!-- SLIDE  -->
                            <li data-index="rs-767" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('img/slides/slide-02.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('img/slides/slide-02.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                                <!-- LAYERS -->
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption tp-resizeme rev-color" id="slide-767-layer-1" data-x="385" data-y="center" data-voffset="-15" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 400px; line-height: 400px; font-weight: 700; color: #84ba3f; letter-spacing: 0px;font-family:Lato;">
                                    Sanjola
                                </div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption tp-resizeme" id="slide-767-layer-2" data-x="708" data-y="center" data-voffset="32" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                    L'événement annuel <br /> est bientôt <br /> de retour
                                </div>
                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  rev-bg" id="slide-767-layer-3" data-x="center" data-hoffset="350" data-y="center" data-voffset="42" data-width="['3']" data-height="['130']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":3260,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(132,186,63);">
                                </div>
                                <!-- LAYER NR. 8 -->
                                <a class="tp-caption rev-btn  tp-resizeme  rev-button" href="#" target="_self" id="slide-767-layer-4" data-x="1348" data-y="465" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":4950,"speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 400; color: rgba(255,255,255,1); font-family:Poppins;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                    Voir les détails
                                </a>
                            </li>

                            <!-- SLIDE  -->
                            <li data-index="rs-768" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('img/slides/slide-03.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('img/slides/slide-03.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme  rev-color" id="slide-766-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-60" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 350px; line-height: 350px; font-weight: 700; color: #84ba3f; letter-spacing: 0px;font-family:lato;">
                                    GAEL Ministries
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme" id="slide-766-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="7" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1360,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                    Lorem ipsum <br /> as never changed!
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  rev-bg" id="slide-766-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="150" data-width="['3']" data-height="['90']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":2830,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(132,186,63);">
                                </div>
                                <!-- LAYER NR. 4 -->
                                <a class="tp-caption rev-btn  tp-resizeme  rev-button" href="#" target="_self" id="slide-766-layer-4" data-x="center" data-hoffset="-1" data-y="center" data-voffset="241" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":4210,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power0.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 300; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                    learn more
                                </a>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>

                    <h6 class="lacks-heading d-none">Lacks Heading</h6> <!-- lacks heading for w3c -->
                </div>
            </section>
            <!--================ banner =================-->
@endif

@yield('guest-content')

        </div>

        <!-- =============== footer ================= -->
        <footer class="footer page-section-pt black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
                        <div class="bg-image mb-4">
                            <img src="{{ asset('img/logo-white.png') }}" alt="logo" class="img-fluid">
                            <div class="mask"></div>
                        </div>

                        <ul class="addresss-info">
                            <li><i class="fa fa-map-marker"></i><p>162, avenue Baraka, commune de Kinshasa</p></li>
                            <li><i class="fa fa-phone"></i> <a href="tel:7042791249"><span>+(243) 819-012-363</span></a></li>
                            <li><i class="fa fa-envelope-o"></i> <a href="mailto:contact@groupegael.com"><span>contact@groupegael.com</span></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-sm-6 mt-sm-5 mb-lg-0 mb-4 ps-sm-5">
                        <div class="footer-useful-link footer-hedding ms-sm-5">
                            <h6 class="text-white mb-30 mt-10 text-uppercase">Liens utiles</h6>
                            <ul>
                                <li><a href="{{ route('about.home') }}">A propos</a></li>
                                <li><a href="{{ route('events.home') }}">Events</li>
                                <li><a href="{{ route('resources.home') }}">Ressources</a></li>
                                <li><a href="{{ route('donate') }}">Donation</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mt-lg-5">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">S'abonner à notre newsletter</h6>

                        <div class="footer-Newsletter">
                            <div id="mc_embed_signup_scroll">
                                <form action="php/mailchimp-action.php" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                                    <div id="msg"></div>
                                    <div id="mc_embed_signup_scroll_2">
                                        <input id="mce-EMAIL" class="form-control text-warning" type="text" placeholder="Adresse E-mail" name="email1" value="">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <button type="submit" name="submitbtn" id="mc-embedded-subscribe" class="button button-border mt-20 form-button">
                                                Être notifié
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="social-icons my-3">
                                <ul>
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="footer-widget mt-20">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 xs-mb-20">
                                <p class="mt-15">&copy; Copyright {{ date('Y') }} <a href="#">Groupe GAEL</a> Tous droits réservés</p>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <p class="pt-10 color-hover float-start float-md-end">Designed by <a href="https://silasmas.com" target="_blank">Sdev</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- =============== footer ================= -->

        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

        <!-- jQuery -->
        <script src="{{ asset('addons/webster/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('addons/webster/js/plugins-jquery.js') }}"></script>

        <!-- plugin_path -->
        <script>var plugin_path = 'js/';</script>

        <!-- Material Design for Bootstrap -->
        <script src="{{ asset('addons/custom/mdb/js/mdb.min.js') }}"></script>

        <!-- REVOLUTION JS FILES -->
        <script src="{{ asset('addons/webster/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- 
            SLIDER REVOLUTION 5.0 EXTENSIONS  
            (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading)
        -->
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('addons/webster/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <!-- revolution custom -->
        <script src="{{ asset('addons/webster/revolution/js/revolution-custom.js') }}"></script>

        <!-- custom -->
        <script src="{{ asset('addons/webster/js/custom.js') }}"></script>
    </body>
</html>
