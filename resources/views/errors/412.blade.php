@extends('layouts.errors')

@section('error-content')

								<!-- Row -->
								<div class="row">
									<!-- Col -->
									<div class="col-12 text-center">
										<div class="title-wrap">
											<div class="section-title">
												<h1 class="section-title margin-top-5">Page expirée</h1>
												<span class="border-bottom mx-auto"></span>
											</div>
										</div>

                                        <h2 class="display-4 fw-bold">412</h2>
                                        <p class="lead">Cette page a expirée. Veuillez revenir l'actualiser.</p>

										<div class="button-section margin-top-35">
											<a class="btn btn-default" href="{{ route('home') }}">Retourner à l'accueil</a>
										</div>
                                    </div>
									<!-- Col -->
                                </div>
								<!-- Row -->

@endsection
