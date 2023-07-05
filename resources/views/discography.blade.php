@extends('layouts.guest')

@section('guest-content')

            <!--================ page title =================-->
            <section class="page-title bg-overlay-black-70 jarallax" data-speed="0.6" data-img-src="{{ asset('img/team02.jpg') }}" style="padding-top: 140px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title-name">
                                <h1 class="text-warning">Discographie</h1>
                                <p>Toutes les &oelig;uvres de GAEL</p>
                            </div>

                            <ul class="page-breadcrumb">
                                <li><a href="{{ route('home') }}">Accueil</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span>Discographie</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ page title =================-->

            <!--================= album collectif ================-->
            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <h1 class="title-effect text-uppercase">Album collectif</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row g-lg-5 g-4">
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album00.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Yahwhe Tobelemi</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album01.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Sublime I</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album02.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Sublime II</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album03.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">1 Heure Avec Jésus-Christ, Vol.1</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album04.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">1 Heure Avec Jésus-Christ, Vol.2</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album05.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">1 Heure Avec Jésus-Christ, Vol.3</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album06.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">The Best Of GAEL Vol.1 (Lingala)</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album07.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">The best Of GAEL Vol.2 (Français)</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album08.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Live Célébration GAEL FIKIN (2011)</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album09.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Amour Éternel</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album10.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">SANJOLA, live 2014-2015</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/collectif/album11.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Sublime : Parfum Qui Chante</h5>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--=============== album collectif ==================-->

            <!--================= album solo ================-->
            <section class="page-section-ptb py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <h1 class="title-effect text-uppercase">Album solo</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row g-lg-5 g-4">
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/solo/album00.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Jésus le Prince glorieux</h5>
                                    <p class="card-text">ALAIN MOLOTO</p>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/solo/album01.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Les fruits de mes lèvres</h5>
                                    <p class="card-text">ALAIN MOLOTO</p>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/solo/album02.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Amour parfait</h5>
                                    <p class="card-text">FRANCIS NSEMI</p>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/solo/album03.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Nos instruments t’adorent</h5>
                                    <p class="card-text">ROBERT NGOY</p>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/solo/album04.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Le culte</h5>
                                    <p class="card-text">ATHOM'S ET NADEGE</p>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/solo/album05.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Matatoli</h5>
                                    <p class="card-text">TRESOR BIBI</p>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/solo/album06.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Je t’aime YHWH</h5>
                                    <p class="card-text">KRYSTEL GRACE</p>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="card border border-default shadow-0">
                                <img class="card-img-top" src="{{ asset('img/albums/solo/album07.png') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Psaumes</h5>
                                    <p class="card-text">ATHOM'S ET NADEGE</p>
                                    <a href="#" class="btn btn-sm btn-primary shadow-0">Playlist <i class="bi bi-box-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== album solo ==================-->

            <!--=============== sublime parfum qui chante ==================-->
            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/albums/cover-extract-00.jpg') }}" alt="" class="h-100" style="margin-left: -10rem">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-primary text-uppercase">Sublime : <br class="d-sm-none"><span class="text-info">Parfum qui chante</span></h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/albums/cover-extract-00.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Sublime est une série d’album basé sur le model du culte du tabernacle qui commence
                                par une entrée dans ses portes jusqu’à la gloire de sa présence dans le lieu très saint en
                                passant par la célébration du Dieu de notre pays, du père de toutes les familles.
                                Cette fois ci, nous avons encore entendu le seigneur parler de cette même série «
                                Sublime », il veut attirer à nouveau l’attention de l’Eglise vers sa personne.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Sublime 3 est l’expression de la jalousie de christ l’époux de l’église qui constate qu’il
                                n’est plus l’objet de l’attention de son épouse ; il désir donc que tous se tourne vers lui et l’adorent.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Et cet album est donc fait des mots que l’Esprit a prêtés à l’église pour réaffirmer son
                                appartenance à Jésus-Christ dans ce temps de la fin, c’est l’expression d’une génération
                                qui s’offre tout entier à Dieu mais aussi l’émerveillement de celui qui a reçu une révélation
                                sublime de la grandeur pittoresque d’un Dieu sans égale, l’Alpha et Omega.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Sublime trois sera le premier album de GAEL MUSIC après la mort du regretté Alain
                                MOLOTO, déjà à partir de mois d’avril 2016 le corps du christ découvrira ce que l’Esprit
                                veut dire à l’église à travers ce travail.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== sublime parfum qui chante ==================-->

            <!--=============== sanjola ==================-->
            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-danger text-uppercase">Sanjola</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/albums/cover-extract-00.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Le concept « SANJOLA » (vient du Lingala et signifie « célébrer, louer ») est le message
                                principal du plan de relance des activités de GAEL après la mort du fondateur des
                                ministères.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Tiré de la décision de Léa de louer Dieu plutôt que de continuer à se soucier de sa
                                situation, GAEL voudrai amener le corps du christ à une réaction de louange et de reconnaissance
                                à Dieu devant n’importe quelle circonstance de la vie.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Genèse 29:35 « Elle devint encore enceinte, et enfanta un fils, et elle dit : Cette fois, je
                                louerai l’Eternel. C’est pourquoi elle lui donna le nom de Juda. Et elle cessa d’enfanter. »
                                (LSG)
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Tiré des lèvres d’Alain MOLOTO qui ne cessait de le répéter chaque fois qu’il conduisait la
                                louange pour attirer l’attention de ceux qui se sont lassés dans la célébration et encourager
                                l’assemblée à une sorte de second souffle dans le culte.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                « SANJOLA ! KO KAWUKA MALOBA TE ! SANJOLA ! » « célèbre, et n’arrête pas parler »
                                SANJOLA est un grand moment d’exaltation du seigneur jésus qui se vie en live dans un
                                concert de célébration à Kinshasa ou dans d’autres villes où le seigneur conduit son
                                oeuvre.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                La première célébration SANJOLA a eu lieu le 13 juillet 2014 au Parking du grand Hôtel
                                Kinshasa en RDC et la seconde a eu lieu le 19 juillet 2015 au même endroit.
                                Pour l’année 2016, il est prévu 5 célébrations de SANJOLA dans différentes villes selon
                                l’ordre suivant :
                            </p>

                            <ul class="ms-4">
                                <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">BRAZZAVILLE : JUIN 2016</li>
                                <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">POINT NOIRE : JUIN 2016</li>
                                <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">KINSHASA : 10 JUILLET 2016</li>
                                <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">KOLWEZI : 17 JUILLET 2016</li>
                                <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">LUBUMBASHI : 24 JUILLET 2016</li>
                            </ul>
                        </div>

                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/albums/cover-extract-00.jpg') }}" alt="" class="h-100" style="margin-left: -10rem">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== sanjola ==================-->

@endsection
