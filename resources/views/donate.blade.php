@extends('layouts.guest')

@section('guest-content')

						<!-- Sermon Section -->
						<section id="section-sermon" class="sermon-section pad-bottom-45">
							<div class="container">
								<!-- Sermon Main Wrap -->
								<div class="sermon-main-wrap sermon-list sermon-grid-2 ">
									<!-- Row -->
									<div class="row">
										<!-- Col -->
										<div class="col-lg-4 pe-5 px-sm-15">
											<!-- Sidebar -->
											<div class="sidebar left-sidebar">
												<!-- Campaign -->
												<div class="widget charitable-campaigns-widget mb-0">
													<ol class="campaigns ps-0 mb-0">
														<li class="campaign">
															<img class="img-fluid squared w-100 mb-3" src="{{ asset('addons/zegen/images/campaigns/campaign1.jpg') }}" width="768" height="456" alt="Lorem ipsum">
															<h6 class="campaign-title mb-1"><a href="#">Lorem ipsum</a></h6>
															<div class="campaign-time-left"><span class="amount time-left days-left">392</span> jours restants</div>
														</li>
														<li class="campaign">
															<img class="img-fluid squared w-100 mb-3" src="{{ asset('addons/zegen/images/campaigns/campaign2.jpg') }}" width="768" height="456" alt="Duis aute irure">
															<h6 class="campaign-title mb-1"><a href="#">Duis aute irure</a></h6>
															<div class="campaign-time-left"><span class="amount time-left days-left">167</span> jours restants</div>
														</li>
														<li class="campaign">
															<img class="img-fluid squared w-100 mb-3" src="{{ asset('addons/zegen/images/campaigns/campaign3.jpg') }}" width="768" height="456" alt="Excepteur sint">
															<h6 class="campaign-title mb-1"><a href="#">Excepteur sint</a></h6>
															<div class="campaign-time-left"><span class="amount time-left days-left">153</span> jours restants</div>
														</li>
														<li class="campaign">
															<img class="img-fluid squared w-100 mb-3" src="{{ asset('addons/zegen/images/campaigns/campaign4.jpg') }}" width="768" height="456" alt="Curabitur pretium">
															<h6 class="campaign-title mb-1"><a href="#">Curabitur pretium</a></h6>
															<div class="campaign-time-left"><span class="amount time-left days-left">119</span> jours restants</div>
														</li>
														<li class="campaign">
															<img class="img-fluid squared w-100 mb-3" src="{{ asset('addons/zegen/images/campaigns/campaign5.jpg') }}" width="768" height="456" alt="Duis ac tellus">
															<h6 class="campaign-title mb-1"><a href="#">Duis ac tellus</a></h6>
															<div class="campaign-time-left"><span class="amount time-left days-left">100</span> jours restants</div>
														</li>
													</ol>
												</div>
												<!-- Campaign -->
											</div>
											<!-- Sidebar -->
										</div>
										<!-- Col -->
										<div class="col-lg-8">
											<div class="title-wrap margin-bottom-25">
												<div class="section-title">
													<span class="sub-title theme-color text-uppercase">Faire le don ici</span>
													<h2 class="section-title margin-top-5">Choisir événement et montant</h2>
													<span class="border-bottom"></span>
												</div>
												<div class="pad-top-15">
													<p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur
														adipisi cing elit dolo rem consequ untur natus laudantium commodie
														adipis.</p>
													<a href="#" class="margin-bottom-20">Registered before? Log in to
														use your saved details.</a>
												</div>
											</div>
											<!-- Contact Form -->
											<div class="contact-form-4 pt-2">
												<!-- Form -->
												<div class="contact-form-wrap">
													<!-- form inputs -->
													<form id="contact-form" class="contact-form donate-form"
														action="inc/function.php" enctype="multipart/form-data">
														<input type="hidden" name="zegen_form_submit"
															value="donation_form" />
														<div class="row donation-fields">
															<h3 class="form-title">Your Donation</h3>
															<div class="col-md-6 pe-2 pb-3">
																<!-- form group -->
																<div class="form-group">
																	<input id="donation_amount1"
																		class="form-control donation_amount" name="donation_amount"
																		placeholder="$2,000.00" type="radio" value="2000">
																	<label for="donation_amount1" class="amount">$2,000.00</label>
																</div>
															</div>
															<div class="col-md-6 ps-2 pb-3">
																<!-- form group -->
																<div class="form-group">
																	<input id="donation_amount2"
																		class="form-control donation_amount" name="donation_amount"
																		placeholder="$4,000.00" type="radio" value="4000">
																	<label for="donation_amount2" class="amount">$4,000.00</label>
																</div>
															</div>
															<div class="col-md-12 custom-donation-amount">
																<label>Custom amount
																	<input id="custom_donation_amount" class="form-control mb-0"
																		name="donation_amount" type="text"></label>
															</div>
														</div>
														<div class="row regular-fields">
															<h3 class="form-title">Details</h3>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>First name *</label>
																	<input id="first-name" class="form-control" name="first_name"
																		data-bv-field="first_name" type="text" />
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>Last name *</label>
																	<input id="last-name" class="form-control" name="last_name"
																		data-bv-field="last_name" type="text" />
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>Email *</label>
																	<input id="email" class="form-control" name="email"
																		data-bv-field="email" type="email">
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>Address</label>
																	<input id="address" class="form-control" name="address"
																		data-bv-field="address" type="text">
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>Address 2</label>
																	<input id="address2" class="form-control" name="address2"
																		data-bv-field="address2" type="text">
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>City</label>
																	<input id="city" class="form-control" name="city"
																		data-bv-field="city" type="text">
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>State</label>
																	<input id="state" class="form-control" name="state"
																		data-bv-field="state" type="text">
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>Postcode</label>
																	<input id="postcode" class="form-control" name="postcode"
																		data-bv-field="postcode" type="text">
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<!-- form group -->
																<div class="form-group">
																	<label>Country</label>
																	<select id="country" class="form-control" name="country">
																		<option value="afghanistan">Afghanistan</option>
																		<option value="albania">Albania</option>
																		<option value="algeria">Algeria</option>
																		<option value="andorra">Andorra</option>
																	</select>
																</div>
															</div>
															<div class="col-md-12 mb-0">
																<!-- form group -->
																<div class="form-group">
																	<label>Phone Number</label>
																	<input id="phone" class="form-control" name="phone"
																		data-bv-field="phone" type="text">
																</div>
															</div>
														</div>
														<div class="row payment-fields">
															<h3 class="form-title">Payment</h3>
															<ul class="radio-list">
																<li>
																	<input type="radio" id="paypal" name="fav_language"
																		value="PayPal" checked>
																	<label for="paypal">PayPal</label>
																</li>
																<li>
																	<input type="radio" id="offline-donation" name="fav_language"
																		value="Offline Donation">
																	<label for="offline-donation">Offline Donation</label>
																</li>
															</ul>
														</div>
														<div class="row">
															<div class="col-md-12">
																<!-- form button -->
																<button type="submit" id="contact-submit"
																	class="btn btn-default mt-0 theme-btn">Donate</button>
															</div>
														</div>
														<span class="clearfix"></span>
													</form>
													<!-- form inputs end -->
													<p id="contact-status-msg" class="hide"></p>
												</div>
												<!-- Form End-->
											</div>
											<!-- contact-form-1 -->
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

@endsection
