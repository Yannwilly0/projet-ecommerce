@extends('userlayouts.app')
@section('content')
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Créer un compte</h1></div>
          </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                <div class="mb-4">
                   <div class="card">
                       <div class="card-body">
                        <form method="post" action="#" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                  <div class="form-group">
                                        <label for="FirstName">Nom & prénom(s)</label>
                                        <input type="text" name="customer[first_name]" placeholder="Entrez votre nom et prénom(s)" id="FirstName" autofocus="">
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="Mobile">Numéro de téléphone</label>
                                        <input type="text" name="customer[mobile]" placeholder="Entrez votre numéro de téléphone" id="Mobile">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail">E-mail</label>
                                        <input type="email" name="customer[email]" placeholder="Entrez votre adresse mail" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword">Mot de passe</label>
                                        <input type="password" value="" name="customer[password]" placeholder="Entrez un mot de passe" id="CustomerPassword" class="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="ConfirmPassword">Confirmez votre mot de passe</label>
                                        <input type="password" value="" name="customer[confirm_password]" placeholder="Entrez le mot de passe à nouveau" id="ConfirmPassword" class="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="submit" class="btn mb-3" value="Créer votre compte">
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
