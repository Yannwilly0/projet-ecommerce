<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Espace Admin | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.c') }}ss">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.c') }}ss">
</head>
<body class="hold-transition login-page bg-light">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-warning bg-default">
    <div class="card-header text-center text-default bg-warning">
      <span class="h4"><i class="fas fa-lock"></i> <b>Hoze - Admin</b></span>
    </div>
    <div class="card-body">
      <p class="login-box-msg">{{ __('Veuillez vous Authentifier...') }} <i class="fa fa-key text-dark"></i></p>

      <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Adresse e-mail...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope text-warning"></span>
            </div>
          </div>

          @error('email')
          <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock text-warning"></span>
            </div>
          </div>

          @error('password')
          <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icheck-default">
              <input type="checkbox" style="width:20px;height:20px;" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Restez connecté') }}</span>
              </label>
            </div>
            {{-- <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Restez connecté') }}</span>
            </label> --}}

          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <button type="submit" class=" btn btn-warning btn-sm float-right">{{ __('Se connecter') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <hr class="bg-warning">

      <p class="mb-2">
        <a href="{{ route('password.request') }}" class="text-center text-dark" style="font-size:0.9rem; font-style: italic;">
            <span class="bold text-danger">*</span> {{ __('Avez-vous oublié votre mot de passe ?') }}
        </a>
      </p>
      <p class="mb-1">
        <a href="{{ route('register') }}" class="text-center text-dark" style="font-size:0.9rem; font-style: italic;">
            <span class="bold text-danger">*</span> {{ __('Cliquez ici pour créer un nouveau compte.') }}
        </a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.') }}js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
