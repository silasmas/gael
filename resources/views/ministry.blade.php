@extends('layouts.guest')

@section('guest-content')

            <!--================ page title =================-->
            <section class="page-title bg-overlay-black-70 jarallax" data-speed="0.6" data-img-src="{{ asset('img/headers/header-about.jpg') }}" style="padding-top: 140px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title-name">
                                <h1 class="text-warning">Ministères</h1>
                                <p>Les ministères de GAEL</p>
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

            <!--================= history ================-->
            <section class="page-section-ptb py-5">
                <div class="container">
                    <div class="row g-lg-5">

                    </div>
                </div>
            </section>
            <!--=============== history ==================-->

@endsection
