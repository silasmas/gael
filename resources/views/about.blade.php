@extends('layouts.guest')

@section('guest-content')

            <!--================ page title =================-->
            <section class="page-title bg-overlay-black-70 jarallax" data-speed="0.6" data-img-src="{{ asset('img/headers/header-about.jpg') }}" style="padding-top: 140px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title-name">
                                <h1 class="text-warning">A propos</h1>
                                <p>Qui sommes-nous ?</p>
                            </div>

                            <ul class="page-breadcrumb">
                                <li><a href="{{ route('home') }}">Accueil</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span>A propos</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ page title =================-->

            <!--================= history ================-->
            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row g-lg-5">
                        <div class="col-md-4 sm-mb-30">
                            <div class="bg-image">
                                <img src="{{ asset('img/founder.jpg') }}" alt="" class="img-fluid img-thumbnail" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <p class="mt-lg-5 fs-5">Crée le 17 MARS 1998 par l'initiative du frère ALAIN MOLOTO KOSSY, le Groupe Adorons l'Eternel, en sigle GAEL, est un ensemble des ministères œuvrant auprès du Corps du Christ dans le domaine de la louange et de l'adoration.</span></p>

                            <div class="mt-30">
                                <a class="button icon mb-10 mr-10" href="https://fr.wikipedia.org/wiki/Alain_Moloto" target="_blank">Voir ses &oelig;uvres</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== history ==================-->

            <!--================= vision ================-->
            <section class="page-section-ptb bg-overlay-black-70 jarallax" data-speed="0.6" data-img-src="{{ asset('img/bg-vision.jpg') }}">
                <div class="section-title text-center">
                    <h6 class="text-warning">Notre vision</h6>
                    <h2 class="title-effect mb-4 text-white text-uppercase">Une armée des intimes de l'Éternel</h2>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="bg-image">
                                <img src="{{ asset('img/vision.jpg') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-6">
                            <div class="section-title mt-lg-4">
                                <p class="fs-5 fw-light text-white" style="letter-spacing: 1.6px; line-height: 2.3rem;">
                                    Nous visons un corps du Christ fort et stable dans sa relation avec Dieu et conscient des richesses d'une vie d'adorateur sur le plan personnel et communautaire (l'Eglise et la nation).
                                </p>
                                <p class="my-4 fs-5 fw-light text-white" style="letter-spacing: 1.6px; line-height: 2.3rem;">
                                    Nous existons pour participer à la restauration et au dynamisme de louange et de l'adoration dans le corps du Christ par l'utilisation des moyens de communication médiatique, littéraire et phonographique.
                                </p>
                                <p class="mt-4 mb-0 fs-5 fw-light text-info" style="letter-spacing: 1.6px; line-height: 2.3rem;">
                                    &laquo; Au-delà des mots, une vie attend d'être vécue. &raquo;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== vision ==================-->

            <!--================ mission =================-->
            <section class="page-section-ptb contact-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 mx-auto">
                            <div class="section-title text-center">
                                <h6 class="text-danger">Notre mission</h6>
                                <h2 class="title-effect mb-4 text-uppercase">Âgir à la restauration et au dynamisme de l'adoration dans le Corps du Christ</h2>
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-6">
                            <div class="section-title mt-lg-5">
                                <p class="fs-5 fw-light" style="letter-spacing: 1.3px; line-height: 2rem;">
                                    Nous travaillons à restaurer et maintenir une qualité de vie d'adorateur de manière personnelle, familiale et communautaire pour les chrétiens dans les nations.
                                </p>
                                <p class="my-4 fs-5 fw-light" style="letter-spacing: 1.3px; line-height: 2rem;">
                                    Nous mettons l'expérience acquise avec le temps à la disposition des églises locales désireuses d'un meilleur équipement pour leurs musiciens.
                                </p>
                                <p class="mt-4 mb-0 fs-5 fw-light" style="letter-spacing: 1.3px; line-height: 2rem;">
                                    Nous recrutons les adorateurs de Jésus-Christ dans toutes générations quel que soit l'âge et l'occupation.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="bg-image">
                                <img src="{{ asset('img/mission.jpg') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ mission =================-->

            <!--================ mission =================-->
            <section class="white-bg contact-3 o-hidden clearfix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 contact-add gray-bg h-100">
                            <div class="text-center">
                                <i class="ti-map-alt"></i>
                                <h4 class="mt-15">Adresse</h4>
                                <p>162, avenue Baraka, commune de Kinshasa</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 contact-add black-bg h-100">
                            <div class="text-center">
                                <i class="ti-mobile text-white"></i>
                                <h4 class="text-white mt-15">Appelez-nous</h4>
                                <p class="text-white">+(243) 819-012-363</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 contact-add theme-bg h-100">
                            <div class="text-center">
                                <i class="ti-email text-white"></i>
                                <h4 class="text-white mt-15">E-mail</h4>
                                <p class="text-white">contact@groupegael.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ mission =================-->

@endsection
