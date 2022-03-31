@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
              <h1><i class="fas fa-list-alt"></i> Images Accueil <small> >> Selectionner Image</small></h1>
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
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <!-- col -->
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <div class="card-header bg-warning">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 class="card-title"><i class="fa fa-image"></i> Image en Haut à Gauche</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryInputName">Catégorie Selectionnée:</label>
                                </div>
                                <div class="form-group">
                                    <label for="categoryInputName">Image Principale:</label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- card-footer -->
                            <div class="card-footer">
                                <a href="" data-toggle="modal" data-target="#modal-haut-gauche" class="btn btn-md btn-warning float-right">
                                    <i class="fas fa-edit"> Modifier</i></a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <div class="card-header bg-warning">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 class="card-title"><i class="fa fa-image"></i> Image en Bas à Gauche</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryInputName">Catégorie Selectionnée:</label>
                                </div>
                                <div class="form-group">
                                    <label for="categoryInputName">Image Principale:</label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- card-footer -->
                            <div class="card-footer">
                                <a href="" data-toggle="modal" data-target="#modal-bas-gauche" class="btn btn-md btn-warning float-right">
                                    <i class="fas fa-edit"> Modifier</i></a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.col -->

            <!-- col -->
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <div class="card-header bg-warning">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 class="card-title"><i class="fa fa-image"></i> Image au Centre</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryInputName">Catégorie Selectionnée:</label>
                                </div>
                                <div class="form-group">
                                    <label for="categoryInputName">Image Principale:</label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- card-footer -->
                            <div class="card-footer">
                                <a href="" data-toggle="modal" data-target="#modal-centre" class="btn btn-md btn-warning float-right">
                                    <i class="fas fa-edit"> Modifier</i></a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <div class="card-header bg-info">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 class="card-title"><i class="fa fa-images"></i> Selectionner Images d'Accueil</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Selectionner les différentes catégories (en ajoutant leurs images) à afficher sur la page principale du site ecommerce.
                                </p>
                            </div>
                            <!-- /.card-body -->
                            <!-- card-footer -->
                            <div class="card-footer">
                                <a href="{{route('images.accueil.edit')}}"  class="btn btn-md btn-info float-right">
                                    <i class="fas fa-save"> Enregister</i></a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.col -->

            <!-- col -->
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <div class="card-header bg-warning">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 class="card-title"><i class="fa fa-image"></i> Image en Haut à Droite</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryInputName">Catégorie Selectionnée:</label>
                                </div>
                                <div class="form-group">
                                    <label for="categoryInputName">Image Principale:</label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- card-footer -->
                            <div class="card-footer">
                                <a href="" data-toggle="modal" data-target="#modal-haut-droit" class="btn btn-md btn-warning float-right">
                                    <i class="fas fa-edit"> Modifier</i></a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <div class="card-header bg-warning">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 class="card-title"><i class="fa fa-image"></i> Image en Bas à Droite</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryInputName">Catégorie Selectionnée:</label>
                                </div>
                                <div class="form-group">
                                    <label for="categoryInputName">Image Principale:</label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- card-footer -->
                            <div class="card-footer">
                                <a href="" data-toggle="modal" data-target="#modal-bas-droit" class="btn btn-md btn-warning float-right">
                                    <i class="fas fa-edit"> Modifier</i></a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <!-- Edit modal -->
      {{-- @foreach ($brand as $brand) --}}
      <div class="modal fade" id="modal-haut-gauche">
        <!-- modal-dialog -->
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title"><i class="fas fa-edit"></i> Modifier <strong>Image</strong> et/ou <strong>Catégorie</strong></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryInputName">Catégorie<span class="text-red">*</span></label>
                        <input type="text" name="brand_name_fr" class="form-control" id="brandInputNameFR" value="" required placeholder="Nom Marque...">
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

                    {{-- <div class="form-group">
                        <label for="exampleInputLogo">Ancien Logo</label>
                        <img src="{{ asset($row->brand_image) }}" height="50px;" width="50px;">
                        <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
                        <input type="hidden" name="id" value="{{ $brand->id }}">
                    </div> --}}

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
      {{-- @endforeach --}}
      <!-- /.modal -->
    </section>
    <!-- /.content -->
  </div>

  @section('scripts')
    <!-- Function to select the main categories to be displayed in the frontend -->
  @endsection
@endsection
