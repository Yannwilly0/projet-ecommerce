@extends('userlayouts.app')
@section('content')
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width"><i class="fa fa-sign-in"></i> S'identifier</h1></div>
          </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                <div class="mb-4">
                   <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                                @csrf
                                <div class="row">
                                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="form-group">
                                          <label for="CustomerEmail">{{ __('Email') }}</label>
                                          <input type="email" name="email" :value="old('email')" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" required autofocus>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="form-group">
                                          <label for="CustomerPassword">{{ __('Mot de passe') }}</label>
                                          <input type="password" value="" name="password" placeholder="" id="CustomerPassword" class=""required autocomplete="current-password">
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                      <input type="submit" class="btn mb-3" value="Se connecter">
                                      <p class="mb-4">
                                        @if (Route::has('password.request'))
                                          <a href="{{ route('password.request') }}" id="RecoverPassword">{{ __('Mot de passe oublié?') }}</a> &nbsp; | &nbsp;
                                        @endif
                                          <a href="{{ route('register') }}" id="customer_register_link">{{ __('Créer votre compte') }}</a>
                                      </p>
                                  </div>
                               </div>
                           </form>
                        </div>
                   </div>

                </div>
               </div>
        </div>
    </div>

</div>
@endsection
