@extends('layouts.errors')

@section('error-content')

            <!--================ error =================-->
            <section class="section-transparent page-section-ptb mt-150">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center position-relative">
                            <div class="error-text-02">
                                <h2>404</h2>
                                <span>Non trouvé</span>
                              </div>
                            <h3 class="text-white mt-40 mb-20">Oups ! Cette page est introuvable.</h3>
                            <div class="error-info">
                                <p class="mb-50 text-white">
                                    La page que vous recherchez a peut-être été supprimée, son nom a changé ou est temporairement indisponible.
                                </p>
                                <a class="button xs-mb-10 " href="{{ route('home') }}">Retourner à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================ error =================-->
    
@endsection