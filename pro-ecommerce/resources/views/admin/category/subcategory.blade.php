@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1><i class="fas fa-list-alt"></i> Catégories <small> >> Sous-catégorie</small></h1>
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
          <div class="col-sm-1"></div>
          <div class="col-sm-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-info">
                <i class="fas fa-plus-circle"></i> Nouvelle Sous-catégorie
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
                        <h3 class="card-title">Liste des sous-catégories enregistrées</h3>
                    </div>
                    <div class="col-3">
                        <h3 class="card-title float-right"><strong>Nombres de sous-catégories:</strong> <span class="badge badge-pill badge-danger"><strong>{{ count($subcategory) }}</strong></span></h3>
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
                    <th>{{ __('Catégorie (FR)') }}</th>
                    <th>{{ __('Sous-catégorie (FR)') }}</th>
                    <th>{{ __('Sous-catégorie (EN)') }}</th>
                    <th>{{ __('Créé le') }}</th>
                    <th>{{ __('Modifié le') }}</th>
                    <th>{{ __('Actions') }}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($subcategory as $key => $row)
                  <tr>
                    <td>{{ $key +1 }}</td>
                    <td>Derroh</td>
                    <td> {{ $row['category']['category_name_fr'] }}</td>
                    <td>{{ $row->subcategory_name_fr }}</td>
                    <td>{{ $row->subcategory_name_en }}</td>
                    <td>{{ Carbon\Carbon::parse($row->created_at)->format('d F Y, h:i:s') }}</td>
                    <td>{{ Carbon\Carbon::parse($row->updated_at)->format('d F Y, h:i:s') }}</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#modal-warning{{ $row->id }}" class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i></a>
                        <a href="{{ route('delete.subcategory',$row->id) }}" id="delete" class="btn btn-sm btn-outline-danger">
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
                    <th>{{ __('Catégorie (FR)') }}</th>
                    <th>{{ __('Sous-catégorie (FR)') }}</th>
                    <th>{{ __('Sous-catégorie (EN)') }}</th>
                    <th>{{ __('Créé le') }}</th>
                    <th>{{ __('Modifié le') }}</th>
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
              <h5 class="modal-title"> Ajouter une nouvelle sous-catégorie <i class="fas fa-plus-circle"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <form method="post" action="{{ route('add.subcategory') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Catégorie <span class="text-red">*</span></label>
                        <select  required="required" class="form-control select2" name="category_id" style="width: 100%;">
                            <option value="" selected="" disabled="">Choisir une catégorie</option>
                            @foreach($category as $row)
                                <option value="{{ $row->id }}">{{ $row->category_name_fr }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategoryInputName">Sous-catégorie (FR)<span class="text-red">*</span></label>
                        <input type="text" name="subcategory_name_fr" class="form-control" id="subcategoryInputNameFR" required placeholder="">
                    </div>
                    @error('subcategory_name_fr')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="subcategoryInputName">Sous-catégorie (EN)<span class="text-red">*</span></label>
                        <input type="text" name="subcategory_name_en" class="form-control" id="subcategoryInputNameEN" required placeholder="">
                    </div>
                    @error('subcategory_name_en')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
      @foreach ($subcategory as $subcategory)
      <div class="modal fade" id="modal-warning{{ $subcategory->id }}">
        <!-- modal-dialog -->
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title"> Modifier une sous-catégorie <i class="fas fa-edit"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="{{ route('update.subcategory') }}">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $subcategory->id }}">
                    <div class="form-group">
                        <label>Catégorie <span class="text-red">*</span></label>
                        <select required="required" class="form-control select2" name="category_id" style="width: 100%;">
                          @foreach($category as $row)
                            <option value="{{ $row->id }}" <?php if ($row->id == $subcategory->category_id ) { echo "selected"; } ?>>
                                {{ $row->category_name_fr }}
                            </option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategoryInputName">Sous-catégorie (FR)<span class="text-red">*</span></label>
                        <input type="text" name="subcategory_name_fr" class="form-control" id="subcategoryInputNameFR" value="{{ $subcategory->subcategory_name_fr }}" required placeholder="">
                    </div>
                    @error('subcategory_name_fr')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="subcategoryInputName">Sous-catégorie (EN)<span class="text-red">*</span></label>
                        <input type="text" name="subcategory_name_en" class="form-control" id="subcategoryInputNameEN" value="{{ $subcategory->subcategory_name_en }}" required placeholder="">
                    </div>
                    @error('subcategory_name_en')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
      <!-- /.modal -->
      @endforeach
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
