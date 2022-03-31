@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
              <h1><i class="fas fa-list-alt"></i> Catégories <small> >> Marque</small></h1>
            </div>
            <div class="col-sm-4">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-info">
                  <i class="fas fa-plus-circle"></i> Nouvelle Marque
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
                <div class="row">
                    <div class="col-9">
                        <h3 class="card-title">Liste des marques enregistrées</h3>
                    </div>
                    <div class="col-3">
                        <h3 class="card-title float-right"><strong>Nombres de Marques:</strong> <span class="badge badge-pill badge-danger"><strong>{{ count($brand) }}</strong></span></h3>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm text-center">
                  <thead class="bg-info">
                  <tr>
                    <th>{{ __('N°') }}</th>
                    <th>{{ __('Utilisateur') }}</th>
                    <th>{{ __('Marque (EN)') }}</th>
                    <th>{{ __('Marque (FR)') }}</th>
                    <th>{{ __('Logo') }}</th>
                    <th>{{ __('Date Création') }}</th>
                    <th>{{ __('Date Modification') }}</th>
                    <th>{{ __('Actions') }}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($brand as $key => $row)
                  <tr>
                    <td>{{ $key +1 }}</td>
                    <td>Derroh</td>
                    <td>{{ $row->brand_name_en }}</td>
                    <td>{{ $row->brand_name_fr }}</td>
                    <td><img src="{{ asset($row->brand_image) }}" height="30px;" width="30px;"></td>
                    <td>{{ Carbon\Carbon::parse($row->created_at)->format('d F Y, h:i:s') }}</td>
                    <td>{{ Carbon\Carbon::parse($row->updated_at)->format('d F Y, h:i:s') }}</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#modal-warning{{ $row->id }}" class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i></a>
                        <a href="{{ route('delete.brand',$row->id) }}" id="delete" class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot class="bg-info">
                  <tr>
                    <th>{{ __('N°') }}</th>
                    <th>{{ __('Utilisateur') }}</th>
                    <th>{{ __('Marque (EN)') }}</th>
                    <th>{{ __('Marque (FR)') }}</th>
                    <th>{{ __('Logo') }}</th>
                    <th>{{ __('Date Création') }}</th>
                    <th>{{ __('Date Modification') }}</th>
                    <th>{{ __('Actions') }}</th>
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
      <!-- Add modal -->
      <div class="modal fade" id="modal-info">
        <!-- modal-dialog -->
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h5 class="modal-title">Ajouter une Nouvelle Marque <i class="fas fa-plus-circle"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="{{ route('add.brand') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryInputName">Marque (EN)<span class="text-red">*</span></label>
                        <input type="text" name="brand_name_en" class="form-control" id="brandInputNameEN" required placeholder="Brand Name...">
                        @error('brand_name_en')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categoryInputName">Marque (FR)<span class="text-red">*</span></label>
                        <input type="text" name="brand_name_fr" class="form-control" id="brandInputNameFR" required placeholder="Nom Marque...">
                        @error('brand_name_fr')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="brandInputImage">Logo Marque <span class="text-red">*</span></label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="brand_image" class="custom-file-input" id="brandInputImage" required>
                            <label class="custom-file-label" for="brandInputImage">Selectionner Logo</label>
                            @error('brand_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Télécharger</span>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                  <button type="submit" class="btn btn-outline-info">Enregister</button>
                </div>
            </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- Edit modal -->
      @foreach ($brand as $brand)
      <div class="modal fade" id="modal-warning{{ $brand->id }}">
        <!-- modal-dialog -->
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title">Modifier une Marque <i class="fas fa-edit"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="{{ route('update.brand',$brand->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryInputName">Marque (EN)<span class="text-red">*</span></label>
                        <input type="text" name="brand_name_en" class="form-control" id="brandInputNameEN" value="{{ $brand->brand_name_en }}" required placeholder="Brand Name...">
                        @error('brand_name_en')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categoryInputName">Marque (FR)<span class="text-red">*</span></label>
                        <input type="text" name="brand_name_fr" class="form-control" id="brandInputNameFR" value="{{ $brand->brand_name_fr }}" required placeholder="Nom Marque...">
                        @error('brand_name_fr')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="brandInputLogo">Logo Marque</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="brand_image" class="custom-file-input" id="brandInputLogo">
                            <label class="custom-file-label" for="brandInputLogo">Selectionner Logo</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Télécharger</span>
                          </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputLogo">Ancien Logo</label>
                        <img src="{{ asset($row->brand_image) }}" height="50px;" width="50px;">
                        <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
                        <input type="hidden" name="id" value="{{ $brand->id }}">
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                  <button type="submit" class="btn btn-outline-warning">Modifier</button>
                </div>
            </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach
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
