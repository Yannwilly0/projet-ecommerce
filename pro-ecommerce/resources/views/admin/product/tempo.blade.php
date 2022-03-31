@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
              <h1><i class="fas fa-list-alt"></i> Produits <small> > Ajouter un Produit</small></h1>
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
              <a href="{{ route('all.product' )}}" class="btn btn-info">
                  <i class="fas fa-list-alt"></i> Tous les Produits
              </a>
            </div>
          </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-file-alt"></i> Formulaire d'Ajout de Nouveau Produit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- submit-form method="post" action="" enctype="multipart/form-data">-->
            <form method="post" action="{{ route('add.product') }}" name="productData" id="productData" enctype="multipart/form-data">
                @csrf
                <!-- card-header -->
                <div class="card-body">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="categoryInputName">Nom Produit <span class="text-red">*</span></label>
                                <input type="text" name="product_name" class="form-control" id="brandInputName" required placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="categoryInputName">Code Produit <span class="text-red">*</span></label>
                                <input type="text" name="product_code" class="form-control" id="productInputCode" required placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="categoryInputName">Quantité <span class="text-red">*</span></label>
                                <input type="text" name="product_quantity" class="form-control" id="brandInputName" required placeholder="">
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="categoryInputName">Prix avant Réduction <span class="text-red">*</span></label>
                                <input type="text" name="selling_price" class="form-control" id="brandInputName" required placeholder="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="categoryInputName">Prix après Réduction <span class="text-red">*</span></label>
                                <input type="text" name="discount_price" class="form-control" id="brandInputName" required placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Catégorie <span class="text-red">*</span></label>
                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                <option label="Choose Category"></option>
                                @foreach($category as $row)
                                <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sous-catégorie <span class="text-red">*</span></label>
                                <select class="form-control select2" name="subcategory_id" style="width: 100%;">
                                    <option selected="selected"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Marque <span class="text-red">*</span></label>
                                <select class="form-control select2" name="brand_id" style="width: 100%;">
                                    <option label="Choose Brand"></option>
                                    @foreach($brand as $br)
                                    <option value="{{ $br->id }}">{{ $br->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="categoryInputName">Taille Produit</label>
                                <input type="text" name="product_size" class="form-control" id="brandInputName" data-role="tagsinput" required placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="categoryInputName">Couleur Produit <span class="text-red">*</span></label>
                                <input type="text" name="product_color" class="form-control" id="brandInputName" data-role="tagsinput" required placeholder="">
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="categoryInputName">Détails du Produit <span class="text-red">*</span></label>
                                <textarea id="summernote" name="product_details">
                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                </textarea>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa fa-plus-square"></i> Télécharger Image et Vidéo du Produit</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="brandInputLogo">Image de Couverture <span class="text-red">*</span></label>
                                            <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="brandInputLogo" required>
                                                <label class="custom-file-label" for="brandInputLogo">Choisir le fichier</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Télécharger</span>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="categoryInputName">Lien Vidéo <small>(YouTube, Instagram, Facebook, etc.)</small></label>
                                            <input type="text" name="video_link" class="form-control" id="brandInputName" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="brandInputLogo">Autres Images <small>(6 images au maximum)</small> <span class="text-red">*</span></label>
                                        <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
                                            <span>Upload file</span>
                                        </div>
                                        <div class="dropzone-previews"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-check-square"></i> Cocher les éléments pour les afficher sur la page principale du <a href="{{ url('/' )}}" target="__blank" class="text-info">site
                                        <i class="fas fa-globe text-info"></i></a>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="new_collection" type="checkbox" value="1">
                                                    <label class="form-check-label">New Collection</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="hot_new" type="checkbox" value="1">
                                                    <label class="form-check-label">Hot New</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="deal_of_week" type="checkbox" value="1">
                                                    <label class="form-check-label">Deal Of The Week</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="hot_deal" type="checkbox" value="1">
                                                    <label class="form-check-label">Deal Of The Day</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="best_rated" type="checkbox" value="1">
                                                    <label class="form-check-label">Best Rated</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="best_seller" type="checkbox" value="1">
                                                    <label class="form-check-label">Best Seller</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="electronics" type="checkbox" value="1">
                                                    <label class="form-check-label">Electronics</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="jewellery" type="checkbox" value="1">
                                                    <label class="form-check-label">Jewellery</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Enregister</button>
                    </div>
                </div>
                <!-- /.card-header -->
            </form>
            <!-- /.submit-form -->
        </div>
        <!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>

  @section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
        $('select[name="category_id"]').on('change',function(){
            var category_id = $(this).val();
            if (category_id) {

                $.ajax({
                url: "{{ url('/get/subcategory/') }}/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                var d =$('select[name="subcategory_id"]').empty();
                $.each(data, function(key, value){

                $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                });
                },
                });

            }else{
                alert('danger');
            }

                });
        });

    </script>
    <!-- Page custom script -->
    {{-- <script>
        Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element

            // The configuration we've talked about above
            addRemoveLinks: true,
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 6,
            maxFiles: 6,
            url: "{{ route('add.product') }}"

        }
    </script> --}}

    <!-- Adding a script for Dropzone -->
    <script>
        Dropzone.autoDiscover = false;
        // Dropzone.options.demoform = false;
        let token = $('meta[name="csrf-token"]').attr('content');
        $(function() {
        var myDropzone = new Dropzone("div#dropzoneDragArea", {
            paramName: "file",
            url: "{{ url('/admin/product/otherimages/add') }}",
            previewsContainer: 'div.dropzone-previews',
            addRemoveLinks: true,
            autoProcessQueue: false,
            uploadMultiple: false,
            parallelUploads: 1,
            maxFiles: 1,
            params: {
                _token: token
            },
            // The setting up of the dropzone
            init: function() {
                var myDropzone = this;
                //form submission code goes here
                $("form[name='productData']").submit(function(event) {
                    //Make sure that the form isn't actully being sent.
                    event.preventDefault();
                    URL = $("#productData").attr('action');
                    formData = $('#productData').serialize();
                    $.ajax({
                        type: 'POST',
                        url: URL,
                        data: formData,
                        success: function(result){
                            if(result.status == "success"){
                                // fetch the useid
                                var userid = result.product_code;
                                $("#productInputCode").val(product_code); // inseting userid into hidden input field
                                //process the queue
                                myDropzone.processQueue();
                            }else{
                                console.log("error");
                            }
                        }
                    });
                });
                //Gets triggered when we submit the image.
                this.on('sending', function(file, xhr, formData){
                //fetch the user id from hidden input field and send that userid with our image
                let product_code = document.getElementById('product_code').value;
                formData.append('product_code', product_code);
                });

                this.on("success", function (file, response) {
                    //reset the form
                    $('#productData')[0].reset();
                    //reset dropzone
                    $('.dropzone-previews').empty();
                });
                this.on("queuecomplete", function () {

                });

                // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                // of the sending event because uploadMultiple is set to true.
                this.on("sendingmultiple", function() {
                // Gets triggered when the form is actually being sent.
                // Hide the success button or the complete form.
                });

                this.on("successmultiple", function(files, response) {
                // Gets triggered when the files have successfully been sent.
                // Redirect user or notify of success.
                });

                this.on("errormultiple", function(files, response) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
                });
            }
            });
        });
    </script>
  @endsection

@endsection
