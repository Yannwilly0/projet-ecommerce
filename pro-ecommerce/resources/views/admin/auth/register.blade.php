@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1><i class="fas fa-users"></i> Administrateurs</h1>
          </div>
          <div class="col-sm-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                <i class="fas fa-plus-circle"></i> Ajouter administrateur
            </button>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des administrateurs enregistrés</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="bg-info">
                  <tr>

                    <th>N°</th>
                    <th>Nom & prénom(s)</th>
                    <th>Téléphone</th>
                    <th>E-mail</th>
                    <th>Heure création</th>
                    <th>Date création</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td>@1</td>
                    <td> 4</td>
                    <td> 4</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>@1</td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>@1</td>
                    <td> 4</td>
                    <td>5.5</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td> 4</td>
                    <td>@1</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td> 4</td>
                    <td>-</td>
                    <td>@1</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>N°</th>
                    <th>Nom & prénom(s)</th>
                    <th>Téléphone</th>
                    <th>E-mail</th>
                    <th>Heure création</th>
                    <th>Date création</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <!-- modal-dialog -->
      <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h5 class="modal-title">{{ __('Créer Administrateur') }} <i class="fas fa-plus-circle"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('create.admin') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="AdminInputName">{{ __('Nom & prénom(s)') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="AdminInputName" required autocomplete="name" autofocus placeholder="">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="phoneInputNumber">{{ __('Téléphone') }}</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid" @enderror id="phoneInputNumber" required autocomplete="phone" placeholder="">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="emailInput">{{ __('E-mail') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('name') is-invalid @enderror" id="emailInput" required autocomplete="email" placeholder="">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="passwordInput">{{ __('Mot de passe') }}</label>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is -invalid @enderror" id="passwordInput" required autocomplete="new-password" placeholder="">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="passwordConfirmationInput">{{ __('Mot de passe') }}</label>
                        <input type="password" name="password_confirmation" class="form-control" id="passwordConfirmationInput" required autocomplete="new-password" placeholder="">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">{{ __('Annuler') }}</button>
                  <button type="submit" class="btn btn-outline-info">{{ __('Enregister') }}</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </section>
    <!-- /.content -->
  </div>

  {{-- @section('scripts')
  <!-- Page specific script -->
  <script>
      $(function () {
          $("#example1").DataTable({
              "responsive": true, "lengthChange": false, "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
  </script>
  @endsection --}}
@endsection
