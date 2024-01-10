
@if (Route::is('about.home'))
				<!-- page-header -->
				<div class="page-title-wrap typo-white">
					<div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('img/headers/header0.png') }}">
						<span class="theme-overlay"></span>
						<div class="container">
							<div class="row text-center">
								<div class="col-md-12">
									<div class="page-title-inner">
										<div id="breadcrumb" class="breadcrumb margin-bottom-10">
											<a href="{{ route('home') }}" class="theme-color">Accueil</a>
											<span class="current">A propos</span>
										</div>
										<h1 class="page-title mb-0">Qui sommes nous</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- page-header -->
@endif

@if (Route::is('about.team.home'))
				<!-- page-header -->
				<div class="page-title-wrap typo-white">
					<div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('img/headers/header0.png') }}">
						<span class="theme-overlay"></span>
						<div class="container">
							<div class="row text-center">
								<div class="col-md-12">
									<div class="page-title-inner">
										<div id="breadcrumb" class="breadcrumb margin-bottom-10">
											<a href="{{ route('home') }}" class="theme-color">Accueil</a>
											<a href="{{ route('about.home') }}" class="theme-color">A propos</a>
											<span class="current">L'&eacute;quipe</span>
										</div>
										<h1 class="page-title mb-0">La Mission Team</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- page-header -->
@endif

@if (Route::is('about.team.datas'))
				<!-- page-header -->
				<div class="page-title-wrap typo-white">
					<div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('img/headers/header0.png') }}">
						<span class="theme-overlay"></span>
						<div class="container">
							<div class="row text-center">
								<div class="col-md-12">
									<div class="page-title-inner">
										<div id="breadcrumb" class="breadcrumb margin-bottom-10">
											<a href="{{ route('home') }}" class="theme-color">Accueil</a>
											<a href="{{ route('about.home') }}" class="theme-color">A propos</a>
											<a href="{{ route('about.team.home') }}" class="theme-color">L'&eacute;quipe</a>
											<span class="current">Infos sur le membre</span>
										</div>
										<h1 class="page-title mb-0">{{ $member->names }}</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- page-header -->
@endif

@if (Route::is('ministry.home') || Route::is('ministry.datas'))
				<!-- page-header -->
				<div class="page-title-wrap typo-white">
					<div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('img/headers/header1.png') }}">
						<span class="theme-overlay"></span>
						<div class="container">
							<div class="row text-center">
								<div class="col-md-12">
									<div class="page-title-inner">
										<div id="breadcrumb" class="breadcrumb margin-bottom-10">
											<a href="{{ route('home') }}" class="theme-color">Accueil</a>
											<span class="current">Ministère</span>
										</div>
										<h1 class="page-title mb-0">Les ministères GAEL</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- page-header -->
@endif

@if (Route::is('discography.home') || Route::is('discography.datas') || Route::is('discography.entity.home') || Route::is('discography.entity.datas'))
				<!-- page-header -->
				<div class="page-title-wrap typo-white">
					<div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('img/headers/header2.png') }}">
						<span class="theme-overlay"></span>
						<div class="container">
							<div class="row text-center">
								<div class="col-md-12">
									<div class="page-title-inner">
										<div id="breadcrumb" class="breadcrumb margin-bottom-10">
											<a href="{{ route('home') }}" class="theme-color">Accueil</a>
											<span class="current">Discographie</span>
										</div>
										<h1 class="page-title mb-0">Les albums GAEL</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- page-header -->
@endif

@if (Route::is('donate'))
				<!-- page-header -->
				<div class="page-title-wrap typo-white">
					<div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('img/headers/header3.png') }}">
						<span class="theme-overlay"></span>
						<div class="container">
							<div class="row text-center">
								<div class="col-md-12">
									<div class="page-title-inner">
										<div id="breadcrumb" class="breadcrumb margin-bottom-10">
											<a href="{{ route('home') }}" class="theme-color">Accueil</a>
											<span class="current">Donation</span>
										</div>
										<h1 class="page-title mb-0">Faites votre don</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- page-header -->
@endif
