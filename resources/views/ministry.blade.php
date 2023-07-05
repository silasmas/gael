@extends('layouts.guest')

@section('guest-content')

            <!--================ page title =================-->
            <section class="page-title bg-overlay-black-70 jarallax" data-speed="0.6" data-img-src="{{ asset('img/team02.jpg') }}" style="padding-top: 140px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title-name">
                                <h1 class="text-warning">Ministères</h1>
                                <p style="text-transform: inherit!important;">Les ministères de GAEL et leur fonctionnements</p>
                            </div>

                            <ul class="page-breadcrumb">
                                <li><a href="{{ route('home') }}">Accueil</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span>Ministères</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ page title =================-->

            <!--================= music ================-->
            <section class="page-section-ptb pt-5 pb-4" style="background-color: #fed">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <h1 class="title-effect text-uppercase">GAEL Music</h1>
                                <p class="m-0">
                                    « <strong>GAEL Music</strong> est la branche musicale des ministères GAEL qui est composé fondamentalement
                                    de trois départements : Grand choeur, Equipe Mobile, Mission Team. »
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry00.jpg') }}" alt="" class="h-100">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-danger">Grand Choeur</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry00.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                La grande chorale de Gael music est faite des frères et soeurs des différentes églises
                                locales qui se sont inscrits pour une formation gratuite qui dure au moins 10 mois. Apres
                                un teste sélectif, les retenus se munissent de leur lettres de recommandation pastorale
                                et de leur frais d'identification (carte de membre, chaise personnel etc..) et commencent
                                un long voyage avec GAEL qu'eux seul pourront décider d'arrêter. Chaque Dimanche
                                de 14H30 à 16H30, ils sont formés dans les domaines de l'adoration, de la conduite du
                                culte et de la musique et tout autre domaine utile à l'exercice de leur appel dans leurs
                                églises locales.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Plusieurs activités visant un esprit de famille et une meilleure connaissance de l'appel
                                lévitique y sont organisées ; retraites de prière, recollection, randonnée, sport etc.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Pour devenir membre du choeur GAEL contacter nos bureaux tout moment pour connaitre
                                la période de recrutement.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-primary">Équipe mobile</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry01.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Comme le nom l'indique si bien, l'équipe mobile est une équipe
                                composée de plus ou moins 14 personnes pour représenter le travail
                                de Gael Ministries dans différents lieux où la mission l'exige. Le
                                nombre permettant un déplacement plus facile que s'il s'agissait
                                des centaines des personnes, d'où le nom « Mobile » attaché à
                                l'équipe.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Les membres de l'équipe mobile sont tous nés de nouveau et actifs
                                dans leurs églises locales, conducteurs de louange et enseignants
                                dans différents domaines qui entrent dans l'accomplissement de la
                                mission de GAEL MINISTRIES. Lors de nos tournées, nous réservons
                                des temps pour des séances de renforcement des capacités des
                                musiciens, conducteurs de louange et pasteurs. Par la grâce de Dieu
                                et l'expérience acquise à côté d'ALAIN MOLOTO et aussi par leurs
                                qualifications académiques, chacun des membres de l'équipe
                                dispose favorablement son temps pour une invitation personnelle à
                                l'encadrement des chorales sur le plan local qu'international.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                L'équipe mobile de Gael Music voyage toujours avec la totalité de
                                ses membres sauf en cas d'une conférence biblique ou artistique
                                qui ne nécessite que la présence des intervenants.
                            </p>
                        </div>

                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry01.jpg') }}" alt="" class="h-100">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry02.jpg') }}" alt="" class="h-100">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-success">Mission Team</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry02.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Celle qui était jadis l'équipe mobile s'est transformée en une équipe
                                de missionnaires ayant comme devoir d'assurer les implantations
                                de la partie musicale à différents lieux où Gael Ministries s'installe.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                La plupart de membres de cette équipe ont constitué pendant
                                longtemps les principaux visages du Groupe Adorons l'Eternel. On
                                reconnaîtra des noms tels que :
                            </p>

                            <div class="row mb-3">
                                <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                                    <ul class="ms-lg-0 ms-3">
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">TRESOR BIBI</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">FRANCIS NSEMI</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">JUNIOR BIANTUADI</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">ROBERT NGOY</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">SERGE MBUYI</li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                                    <ul class="ms-lg-0 ms-3">
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">GISEL DELEME</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">KRYSTEL NSARHAZA</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">NADEGE IMPOTE</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">TEMPO BILONGO</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">SERGE TABU</li>
                                    </ul>
                                </div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                À leur arrivée dans une ville, ils s'assurent des tests de recrutement
                                de chantres, de la formation des instrumentistes et des déroulements
                                de répétitions. Le soucis étant celui de faire comprendre au
                                musicien son rôle sacerdotal, qu'il est un adorateur d'abord avant
                                tout autre chose.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== music ==================-->

            <!--=============== hands ==================-->
            <section class="page-section-ptb pt-5 pb-4" style="background-color: #efd">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <h1 class="title-effect text-uppercase">GAEL Hands</h1>
                                <p class="m-0">
                                    « <strong>GAEL Hands</strong> est la branche dédiée aux oeuvres sociales et communautaires comme
                                    expression du coeur d'un vrai adorateur. »
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry03.jpg') }}" alt="" class="h-100" style="margin-left: -25rem">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-danger">Adorer c'est donner et se donner</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry03.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Vous vous dites peut-être, qu'est-ce qu'un si petit don peut faire pour quelqu'un ? Tout
                                comme Jésus a utilisé le déjeuner d'un petit garçon pour nourrir la multitude, il peut
                                prendre le peu que vous avez et changer le monde. Vous devez savoir que seul ceux qui
                                ont compris la vraie nature de l'adoration savent donner à Dieu leurs biens ; car comme
                                l'apôtre Paul en fait des louanges des chrétiens de la Macédoines, il faut commencer
                                part ce donner soi-même avant de donner joyeusement ses biens pour la cause de
                                l'évangiles.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                En tant que partenaire de GAEL HANDS, vous avez la possibilité de voir la grâce de Dieu
                                allant dans des endroits supprimant les fardeaux et détruisant les jougs, libérant les
                                gens de la honte et de la culpabilité.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Nous pensons que notre amour de Dieu se traduit mieux que par nos actes d'amour
                                envers notre prochain. Nous avons commencé à étendre cet amour sur quatre aspects
                                pour lesquels nous invitons à nous accompagner selon que le seigneur parlera à cotre
                                coeur.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== hands ==================-->

            <!--=============== generations ==================-->
            <section class="page-section-ptb pt-5 pb-4" style="background-color: #def">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <h1 class="title-effect text-uppercase">GAEL Generations</h1>
                                <p class="m-0">
                                    « <strong>GAEL Generations</strong> est la branche centrée sur les nouvelles générations moins âgées
                                    mais déjà actives de 7 ans à 21 ans. »
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-danger">Kids</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry04.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Si de la bouche des enfants et des cris des nouveau-nés, Dieu peut faire jaillir la louange
                                qui confond ses adversaires, nous croyons qu'il a choisi une autre génération pour
                                commencer sa louange dès à présent sans atteindre une quelconque relève.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Gael Junior est la branche qui s'occupe de la formation spirituelle et musicale des petits
                                dès l'âge de 6 ans Jusqu'à 14 ans en leur apprenant la crainte de Dieu et les habilités de
                                la musique et artistiques pour servir à la gloire de Dieu en leur temps.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Les rencontres de répétitions se font chaque samedi à 14h00 au siège de GAEL MINISTRIES ; 
                                outre la musique, les enfants apprennent aussi à servir Dieu par des poèmes, de
                                la peinture, de la danse et de l'art dramatique.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Lors du premier « SANJOLA » en 2014, le ministère des enfants a eu l'opportunité de
                                présenter son répertoire des chants qui est constitué d'un héritage des compositions de
                                papa Alain M. et les compositions des enfants résultant l'enseignement qui leur a été
                                octroyé.
                            </p>
                        </div>

                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry04.jpg') }}" alt="" class="h-100" style="margin-left: -18rem">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry05.jpg') }}" alt="" class="h-100" style="margin-left: -28rem">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry05.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Ceux-ci ne sont pas des petits GAEL, mais des serviteurs à part entière qui
                                offrent leur jeunesse à l'accomplissement de la volonté de Dieu ; ils ne
                                deviendront pas des adorateurs avec le temps, mais ils le sont déjà dès à
                                présent selon que le seigneur a pris place dans leur vie.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Dans un contexte culturel où plusieurs enfants sont taxés de sorciers et
                                tant d'autres vivent dans la rue et beaucoup d'autres sont à la merci de la
                                destruction massive des médias. Avoir des enfants qui se réjouissent dans
                                le seigneur et qui apprennent dès le bas âge les valeurs de la vie qui les
                                distingueront plus tard ; voilà la vision de GAEL JUNIOR.
                            </p>

                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-primary">ADO'<span class="text-info">RATION</span></h2>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                L'adolescence est la période la plus complexe dans le développement de
                                l'enfant. Mais aussi l'âge auquel plusieurs personnes ont été choisies par
                                Dieu pour accomplir des exploits à l'exemple de David, l'adorateur.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Nous créons un cadre pour les adolescents dès l'âge de 12 à 21 ans pour, à
                                la fois apprendre à jouer aux instruments de musique et à développer le
                                caractère chrétien qui caractérise la nature d'un vrai adorateur.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                GAEL ADO'RATION accorde un cadre de mentorat des aînés aux plus jeunes,
                                tant en âge que dans la foi. Au cours de ces échanges, nous tentons de
                                répondre aux questions pratiques sur la manière de vivre la sanctification
                                dès le jeune âge et de consacrer ses talents au service du Seigneur.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Ainsi le jeune adorateur devient à la fois utile à sa famille, à son église
                                locale et à la communauté toute entière grâce à la nature de l'intimité
                                avec Dieu qu'il développe dans un cadre spirituel sécurisé avec une saine
                                doctrine centrée sur la divinité de Christ.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== generations ==================-->

            <!--================= register link ================-->
            <section class="page-section-ptb bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('img/gk/gk-02.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="section-title">
                                <h2 class="mb-4 text-warning title-effect text-uppercase" style="letter-spacing: 3.5px;">Devenir un GAEL generations</h2>
                                <p class="text-white fw-light" style="letter-spacing: 1px; line-height: 2rem;">Pour inscrire vos enfants à ce programme, veuillez contacter nos bureaux aux adresses reprises au bas de cette page.</p>
                                <p class="m-0"><a href="{{ route('register') }}" class="button mt-5">Inscription ici &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== register link ==================-->

            <!--=============== teachings ==================-->
            <section class="page-section-ptb pt-5 pb-4" style="background-color: #ef7">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <h1 class="title-effect text-uppercase">GAEL Teachings</h1>
                                <p class="m-0">
                                    « <strong>GAEL Teachings</strong> est la branche centrée sur l'enseignement autour de l'adoration
                                    selon deux approches à savoir : théologico-systématique et biblico-dévotionnelle. »
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry06.jpg') }}" alt="" class="h-100" style="margin-left: -25rem">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-success">CINAD</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry06.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                L'un des plus grands rêves de GAEL MINISTRIES est d'avoir toutes les nations autour du
                                trône de l'agneau, c'est pour cette raison qu'existe la communauté internationale des
                                adorateurs (CINAD) qui est une branche qui met en avant des enseignements approfondis
                                touchant sur la louange et l'adoration ; et qui offre aussi un cadre pratique pour
                                développer une plus profonde intimité avec Dieu dans sa présence. Ici on ne vient pas
                                pour former des serviteurs à l'église locale mais pour préparer des adorateurs dans le
                                corps du christ en vue de répondre à l'avis de recherche du père qui cherche les vrais
                                adorateurs.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Tout le monde peut participer aux réunions de la CINAD qui de se déroulent qu'une seule
                                fois le mois ou chaque semaine selon la ville où elle se trouve.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Pour savoir où se passent les réunions de la CINAD dans votre ville et comment devenir
                                membre ou donateur pour l'organisation de ces assisses, contacter le comité local aux
                                adresses ci-après :
                            </p>

                            <div class="row mb-3">
                                <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                                    <ul class="ms-lg-0 ms-3">
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">KINSHASA,</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">LUBUMBASHI,</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">KOLWEZI,</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">BRAZZAVILLE,</li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                                    <ul class="ms-lg-0 ms-3">
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">POINT NOIRE,</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">KABINDA,</li>
                                        <li class="fs-6" style="letter-spacing: 1px; line-height: 2rem;">LUANDA.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-success">Ecole d'adoration</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry07.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Il y a deux grands outils que nous croyons être utiles pour l'accomplissement de la vision
                                de GAEL dans cette saison, il s'agit de la littérature et des médias.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Plusieurs livres ont été publiés à titre individuel par ALAIN MOLOTO dans le domaine de
                                la louange et de l'adoration, ont citerai notamment : « la louange et l'adoration, notre
                                culte et notre vie » et « jésus christ le roi que j'adore ». Nous pensons désormais publier
                                d'autres ouvrages individuels et collectifs sous le label de GAEL MINISTRIES.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Aucune flamme de réveil ne peut se maintenir sans être entretenu pas l'enseignement
                                qui amène la maturité et la discipline qui bâtit le caractère capable de soutenir les
                                manifestations glorieuses de Dieu.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Le seul moyen pour GAEL de ne jamais s'éteindre est d'enseigner aux autres le message
                                que Dieu nous a donné. Cette école n'est pas une institution académique mais plutôt un
                                cadre de coaching dans les vérités concernant la louange et l'adoration de Dieu
                                aujourd'hui jusqu'à l'éternité.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Organisé au minimum une fois l'an dans les différentes villes où GAEL s'est établi, l'école
                                d'adoration s'organise en des réunions de 4 heures du temps pendant une semaine qui
                                est sanctionné par un diplôme de participant.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Avec des orateurs venant du monde entier, GAEL ne se limite pas à la seule révélation
                                qu'elle a de la personne de Dieu, mais elle s'ouvre à l'expérience que le corps du christ,
                                de par le monde, détient sur ce sujet.
                            </p>
                        </div>

                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry07.jpg') }}" alt="" class="h-100" style="margin-left: -25rem">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry08.jpg') }}" alt="" class="h-100">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="section-title mt-lg-3 mb-3">
                                <h2 class="mb-0 text-success">Gael School of worshippers</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry08.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Une boite à outils pour les adorateurs qui veulent entretenir une relation profonde avec
                                Dieu seul ou en communauté.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                L'école des adorateurs du ministère GAEL existe pour équiper les enfants de Dieu de la
                                connaissance nécessaire pour adorer en Esprit et en vérité.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Elle vise en particulier les chantres et musiciens des églises locales.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5 bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center">
                                <h2 class="title-effect">Nos livres</h2>
                                <p>Achetez ou téléchargez les bouquins déjà parus</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6 mb-30">
                            <div class="d-flex bg-white border p-4">
                                <i class="bi bi-journal-bookmark theme-color fa-3x"></i>
                                <div class="ms-3">
                                    <h5 class="text-back">Composer un cantique de culte</h5>
                                    <p>Comment mettre les compétences de la musique au service de l'adoration par les huit éléments musicaux.</p>
                                    <a href="#" class="btn btn-sm pb-1 border-3 shadow-0" style="border-color: orange; border-top: none; border-left: none; border-right: none;">
                                        Commander <i class="bi bi-box-arrow-up-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 mb-30">
                            <div class="d-flex bg-white border p-4">
                                <i class="bi bi-journal-bookmark theme-color fa-3x"></i>
                                <div class="ms-3">
                                    <h5 class="text-back">Adorateur et éthique</h5>
                                    <p>Découvrir le profil et la vie de l'adorateur dans sa relation avec Dieu, lui-même et les autres.</p>
                                    <a href="#" class="btn btn-sm pb-1 border-3 shadow-0" style="border-color: orange; border-top: none; border-left: none; border-right: none;">
                                        Commander <i class="bi bi-box-arrow-up-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 mb-30">
                            <div class="d-flex bg-white border p-4">
                                <i class="bi bi-journal-bookmark theme-color fa-3x"></i>
                                <div class="ms-3">
                                    <h5 class="text-back">Musique de culte</h5>
                                    <p>Apprendre à canaliser l'influence de la musique sur le déroulement du culte personnel et collectif.</p>
                                    <a href="#" class="btn btn-sm pb-1 border-3 shadow-0" style="border-color: orange; border-top: none; border-left: none; border-right: none;">
                                        Commander <i class="bi bi-box-arrow-up-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 mb-30">
                            <div class="d-flex bg-white border p-4">
                                <i class="bi bi-journal-bookmark theme-color fa-3x"></i>
                                <div class="ms-3">
                                    <h5 class="text-back">L'adoration et les psaumes bibliques</h5>
                                    <p>Comprendre tous les concepts liés à l'adoration et les psaumes bibliques.</p>
                                    <a href="#" class="btn btn-sm pb-1 border-3 shadow-0" style="border-color: orange; border-top: none; border-left: none; border-right: none;">
                                        Commander <i class="bi bi-box-arrow-up-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 mb-30">
                            <div class="d-flex bg-white border p-4">
                                <i class="bi bi-journal-bookmark theme-color fa-3x"></i>
                                <div class="ms-3">
                                    <h5 class="text-back">Berger de la chorale</h5>
                                    <p>Les notions de leadership pour diriger un groupe musical dans sa complexité.</p>
                                    <a href="#" class="btn btn-sm pb-1 border-3 shadow-0" style="border-color: orange; border-top: none; border-left: none; border-right: none;">
                                        Commander <i class="bi bi-box-arrow-up-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 mb-30">
                            <div class="d-flex bg-white border p-4">
                                <i class="bi bi-journal-bookmark theme-color fa-3x"></i>
                                <div class="ms-3">
                                    <h5 class="text-back">Les concepts de la célébration</h5>
                                    <p>Comprendre tous les concepts liés à la célébration.</p>
                                    <a href="#" class="btn btn-sm pb-1 border-3 shadow-0" style="border-color: orange; border-top: none; border-left: none; border-right: none;">
                                        Commander <i class="bi bi-box-arrow-up-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== teachings ==================-->

            <!--=============== medias ==================-->
            <section class="page-section-ptb pt-5 pb-4" style="background-color: #adf">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <h1 class="title-effect text-uppercase">GAEL Medias</h1>
                                <p class="m-0">
                                    « <strong>GAEL Medias</strong> est la branche qui intègre les multimédias comme outils pour atteindre
                                    toute l'armée des adorateurs et de peindre la nature de Dieu qu'on adore. »
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 mb-4 mx-auto">
                            <a href="https://www.youtube.com/embed/3SxK9DPMVMU" target="_blank">
                                <div class="feature-text round feature-border">
                                    <div class="feature-icon">
                                        <span class="bi bi-youtube"></span>
                                    </div>
                                    <div class="feature-info">
                                        <h5 class="text-back">GAEL TV</h5>
                                        <p>Abonnez-vous à notre chaîne Youtube</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 mb-4 mx-auto">
                            <a href="https://web.facebook.com/GaelMinistriesOfficial" target="_blank">
                                <div class="feature-text round feature-border">
                                    <div class="feature-icon">
                                        <span class="bi bi-facebook"></span>
                                    </div>
                                    <div class="feature-info">
                                        <h5 class="text-back">Facebook</h5>
                                        <p>Rester informé sur nos dernières infos sur Facebook</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 mb-4 mx-auto">
                            <a href="#" target="_blank">
                                <div class="feature-text round feature-border">
                                    <div class="feature-icon">
                                        <span class="bi bi-instagram"></span>
                                    </div>
                                    <div class="feature-info">
                                        <h5 class="text-back">Instagram</h5>
                                        <p>Suivez-nous en vous abonnant à notre compte Instagram</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 position-relative">
                            <div class="bg-image d-lg-inline-block d-none position-absolute h-100 overflow-hidden" style="width: 90%;">
                                <img src="{{ asset('img/ministry09.jpg') }}" alt="" class="h-100" style="margin-left: -20rem">
                                <div class="mask"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="section-title mb-3">
                                <h2 class="mb-0 text-danger">Vivons-là !</h2>
                            </div>

                            <div class="bg-image d-lg-none d-inline-block mb-3">
                                <img src="{{ asset('img/ministry09.jpg') }}" alt="" class="img-fluid">
                                <div class="mask"></div>
                            </div>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                L’adoration ne doit pas seulement être enseignée et chantée, elle doit aussi être vécu ; il est écrit dans
                                1 jean 4 :12 « Personne n’a jamais vu Dieu ; si nous nous aimons les uns les autres, Dieu demeure en
                                nous, et son amour est parfait en nous. » et encore dans 1 Jean 3:18 « Petits enfants, n’aimons pas en
                                paroles et avec la langue, mais en actions et avec vérité. »
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Le seigneur attend de nous des actions qui expriment notre amour pour lui et son amour envers les
                                hommes qui nous entourent. Pour cela il nous faut sortir de nos zones de confort pour poser des actes
                                qui affectent la vie sociale des hommes qui vivent autours de nous, païens et chrétiens.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Le département social de GAEL MINSITRIES pose des actes qui vise une stabilité sociale de ses
                                membres ainsi que de la société dans laquelle il a plu à Dieu d’établir une extension de ces ministères.
                                Que tous ceux qui se disent adorateurs, considèrent la mission que Dieu nous donne d’aimer avec actes
                                et non seulement avec des paroles, ceci n’est pas l’apanage des églises locales mais de tout chrétien
                                conscient de son appel.
                            </p>

                            <p class="fs-6" style="text-align: justify; letter-spacing: 1px; line-height: 2rem;">
                                Les enfants de la rue, les vieillards sans soutien, les élèves et des étudiants sans moyens de payer les
                                frais académique, les femmes retenues à l’hôpital à cause de la facture etc… voilà une longue liste des
                                occasions que Dieu nous donne de pouvoir manifester notre amour pour lui.
                                Si l’adoration est une vie, alors vivons-la !
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== medias ==================-->

@endsection
