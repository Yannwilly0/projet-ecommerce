@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
              <h1><i class="fas fa-list-alt"></i> Catégories <small> >> Catégorie</small></h1>
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
                  <i class="fas fa-plus-circle"></i> Nouvelle Catégorie
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
                        <h3 class="card-title">Liste des catégories enregistrées</h3>
                    </div>
                    <div class="col-3">
                        <h3 class="card-title float-right"><strong>Nombres de catégories:</strong> <span class="badge badge-pill badge-danger"><strong>{{ count($category) }}</strong></span></h3>
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
                    <th>{{ __('Catégorie Icon') }}</th>
                    <th>{{ __('Catégorie (FR)') }}</th>
                    <th>{{ __('Catégorie (EN)') }}</th>
                    <th>{{ __('Créé le') }}</th>
                    <th>{{ __('Modifié le') }}</th>
                    <th>{{ __('Actions') }}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($category as $key => $row)
                  <tr>
                    <td>{{ $key +1 }}</td>
                    <td>Derroh</td>
                    <td><span><i class="{{ $row->category_icon }}"></i></span></td>
                    <td>{{ $row->category_name_fr }}</td>
                    <td>{{ $row->category_name_en }}</td>
                    <td>{{ Carbon\Carbon::parse($row->created_at)->format('d F Y, h:i:s') }}</td>
                    <td>{{ Carbon\Carbon::parse($row->updated_at)->format('d F Y, h:i:s') }}</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#modal-warning{{ $row->id }}" class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i></a>
                        <a href="{{ route('delete.category',$row->id) }}" id="delete" class="btn btn-sm btn-outline-danger">
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
                    <th>{{ __('Catégorie Icon') }}</th>
                    <th>{{ __('Catégorie (FR)') }}</th>
                    <th>{{ __('Catégorie (EN)') }}</th>
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
              <h5 class="modal-title"> Ajouter une nouvelle catégorie <i class="fas fa-plus-circle"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="{{ route('add.category') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryInputName">Catégorie (FR) <span class="text-red">*</span></label>
                        <input type="text" name="category_name_fr" class="form-control" id="categoryInputNameFR" placeholder="Nom Catégorie...">
                        @error('category_name_fr')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categoryInputName">Catégorie (EN) <span class="text-red">*</span></label>
                        <input type="text" name="category_name_en" class="form-control" id="categoryInputNameEN" placeholder="Category Name...">
                        @error('category_name_en')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categoryInputIcon">Catégorie Icon <span class="text-red">*</span></label>
                        <input type="text" name="category_icon" class="form-control" id="categoryInputIcon" placeholder="Catégorie Icon...">
                        @error('category_icon')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
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
      @foreach ($category as $category)
      <div class="modal fade" id="modal-warning{{ $category->id }}">
        <!-- modal-dialog -->
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title"> Modifier une catégorie <i class="fas fa-edit"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="{{ route('update.category',$category->id) }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryInputName">Catégorie (FR) <span class="text-red">*</span></label>
                        <input type="text" name="category_name_fr" class="form-control" id="categoryInputNameFR" value="{{ $category->category_name_fr }}">
                        @error('category_name_fr')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categoryInputName">Catégorie (EN) <span class="text-red">*</span></label>
                        <input type="text" name="category_name_en" class="form-control" id="categoryInputNameEN" value="{{ $category->category_name_en }}">
                        @error('category_name_en')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categoryInputIcon">Catégorie Icon <span class="text-red">*</span></label>
                        <input type="text" name="category_icon" class="form-control" id="categoryInputIcon" value="{{ $category->category_icon }}">
                        @error('category_icon')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
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
      <!-- /.modal -->
      @endforeach
    </section>
    <!-- /.content -->
  </div>

  @section('scripts')
    <!-- Function to select the main categories to be displayed in the frontend -->
    <script type="text/javascript">
        function topLeftUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#topLeftPreview').attr('src',e.target.result).width(60).height(60);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function bottomLeftUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#bottomLeftPreview').attr('src',e.target.result).width(60).height(60);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function centerUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#centerPreview').attr('src',e.target.result).width(60).height(60);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function topRightUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#topRightPreview').attr('src',e.target.result).width(60).height(60);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function bottomRightUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#bottomRightPreview').attr('src',e.target.result).width(60).height(60);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
  @endsection
@endsection
