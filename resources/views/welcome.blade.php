@extends('layouts.guest')

@section('guest-content')

            <!--================ banner =================-->
            <!--================= gael kids ================-->
            <section class="page-section-ptb">
                <div class="container">
                    <div class="row g-lg-5">
                        <div class="col-md-6 sm-mb-30">
                            <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-smartspeed="1200" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" style="border-radius: 1.5rem; overflow: hidden;">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('img/gk/gk-01.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('img/gk/gk-02.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="section-title mt-lg-5">
                                <h6 class="text-secondary">GAEL Kids</h6>
                                <h2 class="title-effect">Nouvelle génération d'adorateurs</h2>
                            </div>

                            <p>
                                <span class="dropcap gray square">N</span> <span class="fs-6">ous recrutons les adorateurs de Jésus-Christ dans toutes générations quel que soit l'âge et l'occupation</span>
                            </p>

                            <div class="mt-30">
                                <button type="button" class="mb-10 mr-10 button icon" data-bs-toggle="modal" data-bs-target="#exampleModal">Commencer l'inscription</button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header align-items-start">
                                                <div class="modal-title" id="exampleModalLabel">
                                                    <div class="mb-10 section-title">
                                                        <h6>GAEL Kids</h6>
                                                        <p>Incrivez-vous pour commencer</p>
                                                    </div>
                                                </div>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <form method="post" action="#">
                                                    <div class="clearfix contact-form">
                                                        <input id="name" type="text" placeholder="Name*" class="form-control"  name="name">
                                                        <input type="email" placeholder="Email*" class="form-control" name="email">
                                                        <input type="text" placeholder="Phone*" class="form-control" name="phone">

                                                        <button type="submit" class="button btn-block"><span>Enregistrer</span></button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="modal-footer">
                                                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== gael kids ==================-->

            <!--================= founder ================-->
            <section class="page-section-ptb bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('img/founder.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="section-title">
                                <h6 class="text-white fw-light">Fondateur du Groupe Adorons l'Eternel (<span class="text-warning">GAEL</span>)</h6>
                                <h2 class="mb-4 text-white title-effect text-uppercase" style="letter-spacing: 3.5px;">Alain Moloto Kossy</h2>
                                <p class="text-white fw-light" style="letter-spacing: 1px; line-height: 2rem;">Crée le 17 MARS 1998 par l'initiative du frère Alain Moloto Kossy, le Groupe Adorons l'Eternel, GAEL en sigle, est un ensemble des ministères œuvrant auprès du Corps du Christ dans le domaine de la louange et de l'adoration.</p>
                                <p class="m-0"><a href="{{ route('about.home') }}" class="mt-5 border button white text-dark">Voir les détails &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== founder ==================-->

            <!--================= last event ================-->
            <section class="portfolio-home gray-bg o-hidden">
                <div class="p-0 container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="portfolio-title section-title mt-md-2">
                                <h6>Retour en image</h6>
                                <h2 class="title-effect">Sanjola 2020</h2>
                                <a href="#" class="button mt-30 btn-sm">Voir toutes les images</a>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="isotope popup-gallery columns-3 no-padding">
                                <div class="grid-item">
                                    <div class="portfolio-item">
                                        <img src="{{ asset('img/l-evt/2020/evt-1.jpg') }}" alt="">
                                        <div class="portfolio-overlay">
                                            <h4 class="text-white"> <a href="#">Post item image 1</a> </h4>
                                            <span class="text-white"> <a href="#"> Post image  </a>| <a href="#">First</a> </span>
                                        </div>
                                        <a class="popup portfolio-img" href="{{ asset('img/l-evt/2020/evt-1.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="portfolio-item">
                                        <img src="{{ asset('img/l-evt/2020/evt-3.jpg') }}" alt="">
                                        <div class="portfolio-overlay">
                                            <h4 class="text-white"> <a href="#">Post item image 2</a> </h4>
                                            <span class="text-white"> <a href="#"> Post image  </a>| <a href="#">Second</a> </span>
                                        </div>
                                        <a class="popup portfolio-img" href="{{ asset('img/l-evt/2020/evt-3.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="portfolio-item">
                                        <img src="{{ asset('img/l-evt/2020/evt-2.jpg') }}" alt="">
                                        <div class="portfolio-overlay">
                                            <h4 class="text-white"> <a href="#"> Post item Youtube</a> </h4>
                                            <span class="text-white"> <a href="#"> Video  </a>| <a href="#">Youtube </a> </span>
                                        </div>
                                        <a class="popup popup-youtube" href="http://www.youtube.com/embed/_dXYn-DZrFM?rel=0"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== last event ==================-->

            <!--================= resources ================-->
            <section class="our-services page-section-ptb white-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="text-center section-title">
                                <h6>Lecture et téléchargement</h6>
                                <h1 class="title-effect">Nos ressources</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="p-4 text-center border feature-text mb-30 gray-bg border-default">
                                <div class="feature-icon">
                                    <span aria-hidden="true" class="mb-2 fa fa-headphones display-3"></span>
                                </div>
                                <div class="fature-info">
                                    <h4 class="pt-20 pb-10 text-back fw-bold">Méditations</h4>
                                    <p>Sélectionner la méditation de votre choix et envoyez vos prières.</p>
                                    <a class="mt-20 button" href="#">Détails &raquo;</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="p-4 text-center border feature-text mb-30 gray-bg border-default">
                                <div class="feature-icon">
                                    <span aria-hidden="true" class="mb-2 fa fa-music display-3"></span>
                                </div>
                                <div class="fature-info">
                                    <h4 class="pt-20 pb-10 text-back fw-bold">Musique</h4>
                                    <p>Ecoutez, Commandez ou Télécharger la musique ou suivez des émissions.</p>
                                    <a class="mt-20 button" href="#">Détails &raquo;</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="p-4 text-center border feature-text mb-30 gray-bg border-default">
                                <div class="feature-icon">
                                    <span aria-hidden="true" class="mb-2 fa fa-book display-3"></span>
                                </div>
                                <div class="fature-info">
                                    <h4 class="pt-20 pb-10 text-back fw-bold">Livres</h4>
                                    <p>Télécharger les livres de vos auteurs préférés. Ou bien commandez des livres en papier.</p>
                                    <a class="mt-20 button" href="#">Détails &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== resources ==================-->

            <!--================= citation ================-->
            <section class="page-section-ptb bg-overlay-black-70 jarallax" data-speed="0.6" data-img-src="{{ asset('img/citation.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center section-title">
                                <h2 class="mb-4 text-white">Hébreux 13:15</h2>
                                <p class="text-warning fs-3" style="letter-spacing: 1.5px; line-height: 2.3rem;">
                                    <i class="fa fa-quote-left me-2"></i>
                                    Par lui, offrons sans cesse à Dieu un sacrifice de louange, c’est-à-dire le fruit de lèvres qui confessent son Nom.
                                    <i class="fa fa-quote-right ms-2"></i>
                                </p>
                                <p class="m-0"><a href="{{ route('about.home') }}" class="mt-5 border button white text-dark">Découvrez &laquo; 24 heures &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== citation ==================-->

            <!--================= gael TV ================-->
            <section class="page-section-ptb">
                <div class="container">
                    <div class="row g-lg-5">
                        <div class="col-md-6">
                            <div class="section-title">
                                <h6 class="text-secondary">GAEL TV</h6>
                                <h2 class="title-effect">Suivez-nous en streaming</h2>
                            </div>

                            <p>
                                <span class="dropcap gray square">I</span> <span class="fs-6">ci, vous serez en mesure de suivre en direct, les concerts, les formations et autres.</span>
                            </p>
                        </div>

                        <div class="col-md-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="http://www.youtube.com/embed/_dXYn-DZrFM?rel=0" class="embed-responsive-item" data-gtm-yt-inspected-2340190_699="true" data-gtm-yt-inspected-2340190_908="true" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== gael TV ==================-->

@endsection
