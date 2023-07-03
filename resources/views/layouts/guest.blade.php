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
                                                <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Accueil</a></li>
                                                <li class="{{ Route::is('about.home') ? 'active' : '' }}"><a href="{{ route('about.home') }}">A propos</a></li>
                                                <li class="{{ Route::is('ministry.home') || Route::is('ministry.datas') ? 'active' : '' }}"><a href="{{ route('ministry.home') }}">Ministères</a></li>
                                                <li class="{{ Route::is('discography.home') || Route::is('discography.entity.home') || Route::is('discography.entity.datas') ? 'active' : '' }}"><a href="{{ route('discography.home') }}">Discographie</a></li>
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

@yield('guest-content')

@if (!Route::is('about.home'))
            <!--================ contact =================-->
            <section class="page-section-ptb contact-2 gray-bg">
                <div class="container">
                    <div class="row justify-content-center text-center mb-50">
                        <div class="col-md-8">
                            <div class="section-title">
                                <h6>Avez-vous une question ?</h6>
                                <h2 class="title-effect">Contactez-nous</h2>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div id="formmessage">Ecrire un message</div>

                            <form id="contactform" role="form">
                                <div class="contact-form clearfix">
                                    <div class="section-field">
                                        <input id="name" type="text" placeholder="Name*" class="form-control border-bottom border-default"  name="name">
                                    </div>
                                    <div class="section-field">
                                        <input type="email" placeholder="E-mail*" class="form-control border-bottom border-default" name="email">
                                    </div>
                                    <div class="section-field">
                                        <input type="text" placeholder="Téléphone*" class="form-control border-bottom border-default" name="phone">
                                    </div>
                                    <div class="section-field textarea">
                                        <textarea class="input-message form-control border-bottom border-default" placeholder="Ecrire ici*" rows="2" name="message" style="resize: none;"></textarea>
                                    </div>

                                    <!-- Google reCaptch-->
                                    <!-- <div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div> -->
                                    <button type="submit" name="submit" id="submit" class="button mt-4 mb-0" value="Envoyer"><span>Envoyer le message</span> <i class="fa fa-paper-plane"></i></button>
                                </div>
                            </form>

                            <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="{{ asset('img/ajax-loading.gif') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ contact =================-->
        </div>
@endif

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
                                <li><a href="{{ route('ministry.home') }}">Ministères</a></li>
                                <li><a href="{{ route('discography.home') }}">Discographie</a></li>
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
        <script type="text/javascript">
            $(function () {
                $('.see_more').click(function (e) { 
                    e.preventDefault();

                    if ($(this).text() == 'Voir plus') {
                        $(this).text('Voir moins');
                        $('.complete').removeClass('d-none');
                        $('.teaser').find('.mEllipsis').hide();

                    } else {
                        $(this).text('Voir plus');
                        $('.complete').addClass('d-none');
                        $('.teaser').find('.mEllipsis').show();
                    }
                });
            });
        </script>
    </body>
</html>
