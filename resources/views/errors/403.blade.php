@extends('layouts.errors')

@section('error-content')

            <!--================ error =================-->
            <section class="section-transparent page-section-ptb mt-150">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center position-relative">
                            <div class="error-text-02">
                                <h2>403</h2>
                                <span>Interdit</span>
                              </div>
                            <h3 class="text-white mt-40 mb-20">Désolé, cette page ne vous est pas autorisée.</h3>
                            <div class="error-info">
                                <p class="mb-50 text-white">
                                    La page que vous recherchez est réservée ; et vous n'avez pas l'autorisation d'y accéder s'il vous plait.
                                </p>
                                <a class="button xs-mb-10 " href="{{ route('home') }}">Retourner à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ error =================-->
    
@endsection
