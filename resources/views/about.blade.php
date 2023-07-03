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

            <!--================= founder ================-->
            <section class="page-section-ptb contact-2 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 mx-auto">
                            <div class="section-title text-center">
                                <h6>Alain MOLOTO</h6>
                                <h2 class="title-effect mb-4 text-uppercase">L'homme et la vision</h2>
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-6">
                            <p class="fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                <strong class="fw-bold">L'homme</strong> : Né à Kisangani (Province Orientale) le 27 juillet 1961, fils de MOLOTO Évariste
                                (militaire) et de Bikoka Régine, Alain MOLOTO était troisième d'une famille de quinze
                                enfants. Il était marié à Christine TSHIABU avec qui ils ont eu quatre enfants au terme de
                                treize années de vie conjugale (KETHIA, JEAN-MICHEL, BENI, NABI).
                            </p>
                            <p class="my-4 fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                Il a effectué une grande partie de ses études dans la ville de Lubumbashi (Katanga) avant
                                de rejoindre Kinshasa pour les humanités et les études supérieures en 1983 à l'ISC
                                (Institut supérieur de commerce). Il s'engage dans le théâtre universitaire dans lequel il
                                écrit particulièrement des chansons françaises dans le cadre de la dramaturgie. Il y joue
                                le rôle de chantre et de parolier. Sa grande et merveilleuse surprise est qu'en dehors du
                                SOUVENIRS : théâtre, les gens s'intéressaient vraiment à ses chansons.
                            </p>
                            <p class="mt-4 mb-0 fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                <strong class="fw-bold">L'artiste</strong> : Après avoir donné sa vie au seigneur jésus christ, il fait de lui le but de son
                                existence et la raison de ses chants. Il travaille comme chroniquer musical à la radio
                                chrétienne SANGO MALAMU qui deviendra par la suite la maternité même de l'une de ses
                                plus grandes visions « GAEL ».
                            </p>
                            <p class="mt-4 mb-0 fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                MOLOTO est ainsi poussé un peu plus tard à embrasser une carrière en solo et son
                                premier groupe s'appelle la main de l'éternel, son premier album sortie en faible quantité
                                et indisponible à ce jour s'appelle « KOTIKA NGAYI TE ». Son premier album connu du
                                publique est « jésus le prince glorieux ». Auteur du premier album chrétien en RDC
                                contenant essentiellement du SLAM appelé « les fruits de mes lèvres ». il savait gratter
                                à la guitare et son plus beau jeux est dans le chant « jésus la différence » interprété par
                                KOOL MATOPE dans l'album jésus le prince glorieux. Chanteur de charme de tessiture
                                baryton que l'on peut bien apprécier dans le chant « fidèle ami » qui laisse bien entrevoir
                                ses influences musicales européennes.
                            </p>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="bg-image mb-4">
                                <img src="{{ asset('img/founder02.png') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                            <div class="bg-image mb-4">
                                <img src="{{ asset('img/founder03.png') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                            <div class="bg-image mb-4">
                                <img src="{{ asset('img/founder04.png') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                            <div class="bg-image mb-4">
                                <img src="{{ asset('img/founder01.png') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb contact-2 py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="bg-image mb-4">
                                <img src="{{ asset('img/founder00.jpg') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-6">
                            <p class="fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                <strong class="fw-bold">Le visionnaire</strong> : Choqué par des pratiques spectaculaire qu’il a observé dans les
                                moments dits « journée de louange », MOLOTO ne pouvait plus maitriser le zèle de la
                                maison de Dieu qui dévorer son coeur, c’est en en Mars 1998 qu’il partage le fardeau avec
                                Franck MULAJA, ESTHER NZAU pour la création d’une petite équipe qui fait du live à la
                                radio dans une émission qui s’appelle d’abords « une heure avec jésus » puis « Adorons
                                l’éternel » qui devient le nom même du ministère.
                            </p>
                            <p class="fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                Cette même flamme a de nouveau brulé dans son coeur avec une tout autre vision, celle
                                de voir le nom jésus élevé sur la nation Congolaise(RDC) comme un soleil levant au-dessus
                                des oeuvres de l’ennemi. C’est ainsi que se crée en 2012 la vision EDEN qui signifie : «
                                Ensemble pour la Délivrance de la Nation », un rassemblement chrétien pour l’intercession
                                au sujet de la nation.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== founder ==================-->

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
                                    Nous existons pour participer à la restauration et au dynamisme de louange et de
                                    l'adoration dans le corps du christ par l'utilisation des moyens de communication
                                    médiatique, littéraire et phonographique.
                                </p>
                                <p class="my-4 fs-5 fw-light text-white" style="letter-spacing: 1.6px; line-height: 2.3rem;">
                                    Nous visons un corps du christ fort et stable dans sa relation avec Dieu et conscient des
                                    richesses d'une vie d'adorateur sur le plan personnel et communautaire (l'église et la
                                    nation).
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

                        <div class="col-lg-4 col-sm-6">
                            <div class="bg-image">
                                <img src="{{ asset('img/mission.jpg') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb contact-2 py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb-3">
                                <h2 class="mb-0 text-info">Valeurs :</h2>
                            </div>

                            <p class="fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                La bible qui est notre code de conduite enseigne plusieurs fois le bien fondé de s'attacher
                                à des valeurs qui nous conduisent à l'accomplissement du plan de Dieu à travers nous. Oui
                                ! Chaque fois que Dieu fait une promesse, il exige aussi un certain nombre des valeurs
                                auxquelles il faut tenir. Il conditionne son accompagnement, son soutien et sa manifestation
                                par notre fidélité à sa loi, notre intégrité, la crainte de son nom, l'obéissance à ses
                                voies, notre attitude face à nos semblables etc.
                            </p>
                            <p class="my-4 fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                Voilà ce qu'on appelle les valeurs principales d'une personne ou d'une organisation. Il
                                s'agit donc d'un côté, les qualités que le seigneur a déjà placées en nous et qu'il aime
                                nous voir exprimer et qui font notre particularité devant lui ; et de l'autre côté, les
                                qualités qu'il nous faut obligatoirement avoir, selon l'ordre du seigneur, si nous voulons
                                atteindre avec succès les buts qu'il a fixé à notre existence en tant que personne ou
                                organisation.
                            </p>
                            <p class="mt-4 mb-0 fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                Abraham avait une foi exceptionnelle qui lui fut imputé à justice, mais le seigneur lui
                                demanda aussi d'être intègre devant sa face ; les églises d'apocalypse avaient pour la
                                plus part un sujet d'encourage, des valeurs appréciées par le seigneur, puis après
                                venaient alors la reproche sur des valeurs négligées qui causaient leur perte.
                                Quelles sont donc nos valeurs entant que ministère ? Famille chrétienne ? Et adorateurs
                                de Dieu ?
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb contact-2 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                <strong class="fw-bold">Etre vrai</strong> :  L'une des conditions de la véritable adoration est la qualité de vie de l'adorateur,
                                il faut que celui qui l'adore, l'adore en esprit et en vérité. (JN 4 :23) être GAEL c'est
                                accepter de vivre dans la crainte de Dieu sans aucune duplicité, être ce qu'on enseigne
                                aux autres, se concentrer sur ce qu'on devient soi-même par la fréquentation permanente
                                de la présence de Dieu et non être emporter par les avoirs passagers.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb contact-2 py-5" style="background-color: rgb(252, 231, 231);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                <strong class="fw-bold">Etre prêt</strong> :  L'oeuvre du seigneur exige de nous une consécration totale, une très grande
                                disponibilité. Celui qui veut être GAEL doit savoir que le seigneur aura besoin de nous
                                n'importe quand selon son désir et que surtout il aura besoin de passer l'éternité avec
                                nous ? Nous devons donc être prêts à répondre à son appel pour ce siècle et pour
                                l'avenir. (Esaïe 6 :8)
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb contact-2 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                <strong class="fw-bold">Etre un</strong> :  Jésus a lancé un appel, un avis de recherche de plusieurs adorateurs et non d'un
                                seul, il veut qu'ils viennent en grand nombre mais qu'ils soient tous un comme le père et
                                le fils le sont. (JN 17 :22) Et nous sommes conscients que nous nous pourrons être utiles
                                au Saint-Esprit qu'à la mesure où nous favoriserons l'unité au milieu. (Actes 2 :1) Celui qui
                                veut être GAEL doit savoir abandonner ses intérêts personnels et faire valoir les objectifs du groupe.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb contact-2 py-5" style="background-color: rgb(247, 231, 180);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                <strong class="fw-bold">Etre là</strong> :  l'oeuvre à laquelle nous sommes appelés exige notre présence dans le corps du
                                christ et dans la société. Celui qui veut être GAEL doit apprendre à affirmer l'existence
                                de cette oeuvre par les moyens médiatique car notre rôle n'est pas de nous cacher avec
                                timidité, mais de crier tout haut par l'Esprit qui nous pousse à adorer le père. (Romains 8 :15)
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ mission =================-->

            <!--================ mission =================-->
            <section class="page-section-ptb contact-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h2 class="title-effect mb-4 text-uppercase">Les ministères GAEL</h2>
                            </div>
                        </div>

                        <div class="col-lg-5 col-sm-6">
                            <div class="bg-image">
                                <img src="{{ asset('img/mission.jpg') }}" alt="" class="img-fluid" style="border-radius: 1.5rem;">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-sm-6">
                            <p class="fs-6 fw-light mt-lg-1" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                GAEL MINISTRIES est un mouvement interdénominationnel et missionnaire qui veut
                                contribuer à restaurer et dynamiser l'adoration dans le corps du christ et à faire connaître
                                l'Évangile de Jésus-Christ dans le monde entier: En lui, les nations sont transformées
                                et unies pour les noces dans l'éternité.
                            </p>
                            <p class="my-4 fs-6 fw-light" style="text-align: justify; letter-spacing: 1.3px; line-height: 2rem;">
                                Le groupe adorons l'Eternel développe différents ministères qui sont conçus avec but de
                                répondre à un besoin bien précis dans le corps du christ et dans la société sur base de la
                                mission et des capacités que le seigneur nous à donné. Ces ministères servent en particulier
                                les enfants, les familles, les églises locales, les démunies, les musiciens, les
                                internautes ainsi que le bureau international à Kinshasa.
                            </p>
                            <a href="" class="button btn-sm">Voir les ministères de GAEL</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--================ contact =================-->
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
            <!--================ contact =================-->

@endsection
