@extends('layouts.guest')

@section('guest-content')

	@if (Route::is('about.team.datas'))
                        <!-- Blog Section -->
                        <section id="blog-section"
                            class="blog-section pad-bottom-70">
                            <div class="container">
                                <!-- Blog Main Wrap -->
                                <div class="blog-main-wrap blog-grid">
                                    <!-- Row -->
                                    <div class="row">
                                        <!-- Col -->
                                        <div class="col-lg-8">
                                            <!-- Row -->
                                            <div class="row">
                                                <!-- Col -->
                                                <div class="col-lg-5 col-md-4">
													<div class="bg-image">
														<img src="{{ asset($member->picture) }}" alt="" class="img-thumbnail" style="border-radius: 1.5rem;">
														<div class="mask"></div>
													</div>
												</div>
                                                <!-- Col -->

												<!-- Col -->
                                                <div class="col-lg-7 col-md-8">
													<h1 class="mt-3">{{ $member->names }}</h1>
													<p class="lead theme-color">{{ $member->role }}</p>
													<p class="lead theme-color">
														<a href="{{ $member->facebook }}" target="_blank" class="btn btn-floating btn-outline-dark pb-0 shadow-0" style="padding-top: 0.7rem;"><i class="ti-facebook"></i></a>
														<a href="{{ $member->twitter }}" target="_blank" class="btn btn-floating btn-outline-dark pb-0 ms-2 shadow-0" style="padding-top: 0.7rem;"><i class="ti-twitter"></i></a>
														<a href="{{ $member->instagram }}" target="_blank" class="btn btn-floating btn-outline-dark pb-0 ms-2 shadow-0" style="padding-top: 0.7rem;"><i class="ti-instagram"></i></a>
														<a href="{{ $member->linkedin }}" target="_blank" class="btn btn-floating btn-outline-dark pb-0 ms-2 shadow-0" style="padding-top: 0.7rem;"><i class="ti-linkedin"></i></a>
													</p>

													<hr class="my-4">

		@foreach ($member->assets as $asset)
													<p>{{ $asset->asset1 }}</p>
													<p class="mb-0">{{ $asset->asset2 }}</p>
		@endforeach
												</div>
                                                <!-- Col -->
                                            </div>
                                            <!-- row -->

											<!-- Row -->
                                            <div class="row">
                                                <!-- Col -->
                                                <div class="col-12">
		@if (!empty($member->experience))
													<hr class="my-4">

													<h3 class="mb-3 theme-color">Expérience</h3>
			@foreach ($member->experience as $exper)
													<p class="mb-1 lead fs-5 fw-bold text-black">{{ $exper->company }}</p>
													<p>{{ $exper->role }}</p>
				@if (!empty($exper->tasks))
													<h4>Tâches</h4>
													<ul>
					@foreach ($exper->tasks as $task)
														<li class="text-black"><i class="ti-angle-double-right theme-color"></i> {{ $task->content }}</li>
					@endforeach
													</ul>
				@endif
			@endforeach
		@endif

		@if (!empty($member->diplomas))
													<hr class="my-4">

													<h3 class="mb-3 theme-color">Formations</h3>

													<ul>
			@foreach ($member->diplomas as $dip)
														<li class="text-black"><i class="ti-angle-double-right theme-color"></i> {{ $dip->diploma }}</li>
			@endforeach
													</ul>
		@endif
												</div>
                                                <!-- Col -->
                                            </div>
                                            <!-- row -->
                                        </div>

										<!-- Col -->
                                        <div class="col-lg-4 ps-5 px-sm-15">
                                            <!-- Sidebar -->
                                            <div class="sidebar right-sidebar">
                                                <!-- Popular Post -->
                                                <div class="widget recent-posts">
                                                    <div class="widget-title">
                                                        <!-- Title -->
                                                        <h3 class="title">Autres membres</h3>
                                                    </div>

													<ul class="list-post-content">
		@forelse ($team as $other_member)
			@if ($loop->index < 5 && $other_member->id != $member->id)
                                                        <li>
                                                            <!--Media-->
                                                            <div class="media list-post">
                                                                <span class="popular-thumb me-3">
                                                                    <img src="{{ asset($other_member->picture) }}" width="70" alt="{{ $other_member->names }}" height="70" class="rounded">
                                                                </span>

																<div class="media-body">
                                                                    <a href="{{ route('about.team.datas', ['id' => $other_member->id]) }}">{{ $other_member->names }}</a>
                                                                    <div class="meta-items mt-2">
                                                                        <span class="post-date">{{ $other_member->role }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Media End -->
                                                        </li>
			@endif
		@empty
		@endforelse
                                                        <li>
															<a href="{{ route('about.team.home') }}" class="btn btn-block btn-warning shadow-0">
																Voir toute l'équipe<i class="ti-angle-double-right ms-2" style="vertical-align: -2px;"></i>
															</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Popular Post -->
                                            </div>
                                            <!-- Sidebar -->
                                        </div>
                                        <!-- Col -->
                                    </div>
                                    <!-- Row -->
                                </div>
                                <!-- Sermon Main Wrap -->
                            </div>
                            <!-- Container -->
                        </section>
                        <!-- Sermon Section End -->
		
	@else

						<!-- Team Section -->
						<section id="team-section" class="team-section pad-top-120 pad-bottom-70">
							<!-- Screan Reader Text -->
							<h2 class="screen-reader-text">La Mission Team</h2>
							<div class="container">
								<!-- Row -->
								<div class="row">
									<!-- Col -->
									<div class="col-md-12">
										<!--Team Main wrap-->
										<div class="team-main-wrapper team-grid team-style-1">
											<div class="row">
		@foreach ($json_result as $member)
												<!-- Col-md -->
												<div class="col-md-4">
													<!--Team Inner-->
													<div class="team-inner mb-5">
														<div class="team-thumb mb-0 relative">
															<!--Team Overlay-->
															<div class="team-overlay"></div>
															<img src="{{ asset($member->picture) }}" alt="{{ $member->names }}" width="480" height="485" class="img-fluid thumb w-100">
															<div class="team-overlay-details top-left-overlay typo-white text-center">
																<div class="social-icons">
																	<a href="{{ $member->facebook }}"><span class="ti-facebook"></span></a>
																	<a href="{{ $member->twitter }}"><span class="ti-twitter"></span></a>
																	<a href="{{ $member->instagram }}"><span class="ti-instagram"></span></a>
																	<a href="{{ $member->linkedin }}"><span class="ti-linkedin"></span></a>
																</div>
															</div>
														</div>
														<div class="team-details text-center pad-20">
															<div class="team-name">
																<h3 class="mb-0">
																	<a href="{{ route('about.team.datas', ['id' => $member->id]) }}" class="client-name typo-white">{{ $member->names }}</a>
																</h3>
															</div>
															<div class="team-designation">
																<p class="mb-0">{{ $member->role }}</p>
															</div>
														</div>
													</div>
													<!--Team Inner Ends-->
												</div>
												<!--Col-md Ends-->
		@endforeach
											</div>
											<!-- Team Row -->
										</div>
										<!-- Team Main wrap Ends -->
									</div>
									<!-- Col -->
								</div>
								<!-- Row -->
							</div>
						</section>
						<!-- Team Section Ends -->
		
	@endif

@endsection
