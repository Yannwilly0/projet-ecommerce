@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
              <h1><i class="fas fa-list-alt"></i> Produits <small> >> Modifier un Produit</small></h1>
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
                  <i class="fas fa-list-alt"></i> Liste des Produits
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
              <h3 class="card-title"><i class="fas fa-file-alt"></i> Formulaire de Modification de Nouveau Produit</h3>

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
            <form method="post" action="{{ route('update.product') }}">
                @csrf
                <!-- card-header -->
                <div class="card-body">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-plus-square"></i> Informations Générales du produit</h3>
                                </div>
                                <div class="card-body">
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Catégorie <span class="text-red">*</span></label>
                                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                                    <option value="" selected="" disabled="">Choisir une catégorie</option>
                                                    @foreach($category as $category)
                                                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected': '' }} >{{ $category->category_name_fr }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Sous-catégorie <span class="text-red">*</span></label>
                                                <select class="form-control select2" name="subcategory_id" style="width: 100%;">
                                                    <option value="" selected="" disabled="">Choisir une sous-catégorie</option>
                                                    @foreach($subcategory as $sub)
                                                        <option value="{{ $sub->id }}" {{ $sub->id == $product->subcategory_id ? 'selected': '' }} >{{ $sub->subcategory_name_fr }}</option>
                                                    @endforeach
                                                </select>
                                                @error('subcategory_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Sous Sous-catégorie</label>
                                                <select class="form-control select2" name="subsubcategory_id" style="width: 100%;">
                                                    <option value="" selected="" disabled="">Choisir une sous sous-catégorie</option>
                                                    @foreach($subsubcategory as $subsub)
                                                        <option value="{{ $subsub->id }}" {{ $subsub->id == $product->subsubcategory_id ? 'selected': '' }} >{{ $subsub->subsubcategory_name_fr }}</option>
                                                    @endforeach
                                                </select>
                                                @error('subsubcategory_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Marque</label>
                                                <select class="form-control select2" name="brand_id" style="width: 100%;">
                                                    <option value="" selected="" disabled="">Choisir une marque</option>
                                                    @foreach($brand as $br)
                                                    <option value="{{ $br->id }}" {{ $br->id == $product->brand_id ? 'selected': '' }} >{{ $br->brand_name_fr }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="categoryInputName">Nom Produit (FR)<span class="text-red">*</span></label>
                                                <input type="text" name="product_name_fr" class="form-control" id="brandInputNameFR" value="{{ $product->product_name_fr }}" required>
                                                @error('product_name_fr')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="categoryInputName">Nom Produit (EN)<span class="text-red">*</span></label>
                                                <input type="text" name="product_name_en" class="form-control" id="brandInputNameEN" value="{{ $product->product_name_en }}" required>
                                                @error('product_name_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="codeProductInputName">Code Produit <span class="text-red">*</span></label>
                                                <input type="text" name="product_code" class="form-control" id="codeProductInputName" value="{{ $product->product_code }}" required>
                                                @error('product_code')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="productQTYInputName">Quantité <span class="text-red">*</span></label>
                                                <input type="text" name="product_qty" class="form-control" id="productQTYInputName" value="{{ $product->product_qty }}" required>
                                                @error('product_qty')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="sellingPriceInput">Prix avant Réduction <span class="text-red">*</span></label>
                                                <input type="text" name="selling_price" class="form-control" id="sellingPriceInput" value="{{ $product->selling_price }}" required>
                                            </div>
                                            @error('selling_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label for="discountPriceInput">Prix après Réduction <span class="text-red">*</span></label>
                                                <input type="text" name="discount_price" class="form-control" id="discountPriceInput" value="{{ $product->discount_price }}" required>
                                            </div>
                                            @error('discount_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-plus-square"></i> Entrer Tags, Taille & Couleur</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="codeProductInputName">Étiquettes du produit (FR)</label>
                                                <div class="controls">
                                                    <input type="text" name="product_tags_fr" class="form-control" data-role="tagsinput" value="{{ $product->product_tags_fr }}">
                                                    @error('product_tags_fr')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="codeProductInputName">Étiquettes du produit (EN)</label>
                                                <input type="text" name="product_tags_en" class="form-control" data-role="tagsinput" value="{{ $product->product_tags_en }}">
                                                @error('product_tags_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="productSizeInputNameFR">Taille Produit (FR)</label>
                                                <input type="text" name="product_size_fr" class="form-control" id="productSizeInputNameFR" data-role="tagsinput" value="{{ $product->product_size_fr }}">
                                            </div>
                                            @error('product_size_fr')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label for="productSizeInputNameEN">Taille Produit (EN)</label>
                                                <input type="text" name="product_size_en" class="form-control" id="productSizeInputNameEN" data-role="tagsinput" value="{{ $product->product_size_en }}">
                                            </div>
                                            @error('product_size_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="productColorInputNameFR">Couleur Produit (FR)<span class="text-red">*</span></label>
                                                <input type="text" name="product_color_fr" class="form-control" id="productColorInputNameFR" data-role="tagsinput" value="{{ $product->product_color_fr }}" required>
                                            </div>
                                            @error('product_color_fr')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label for="productColorInputNameEN">Couleur Produit (EN)<span class="text-red">*</span></label>
                                                <input type="text" name="product_color_en" class="form-control" id="productColorInputNameEN" data-role="tagsinput" value="{{ $product->product_color_en }}" required>
                                            </div>
                                            @error('product_color_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-plus-square"></i> Entrer les détails du Produit</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="categoryInputName">Resumé du Produit (FR)<span class="text-red">*</span></label>
                                                <textarea name="short_descp_fr" id="textarea" class="form-control" required>
                                                    {{ $product->short_descp_fr }}
                                                </textarea>
                                                @error('short_descp_fr')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="categoryInputName">Resumé du Produit (EN)<span class="text-red">*</span></label>
                                                <textarea name="short_descp_en" id="textarea" class="form-control" required>
                                                    {{ $product->short_descp_en }}
                                                </textarea>
                                                @error('short_descp_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="categoryInputName">Détails du Produit (FR)<span class="text-red">*</span></label>
                                                <textarea id="summernoteFR" name="product_detail_fr">
                                                    {{ $product->product_detail_fr }}
                                                </textarea>
                                                @error('product_detail_fr')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="categoryInputName">Détails du Produit (EN)<span class="text-red">*</span></label>
                                                <textarea id="summernoteEN" name="product_detail_en">
                                                    {{ $product->product_detail_en }}
                                                </textarea>
                                                @error('product_detail_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                </div>
                            </div>
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
                                                    <input class="form-check-input"  name="new_collection" type="checkbox" value="1" {{ $product->new_collection == 1 ? 'checked': '' }}>
                                                    <label class="form-check-label">New Collection</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="hot_new" type="checkbox" value="1" {{ $product->hot_new == 1 ? 'checked': '' }}>
                                                    <label class="form-check-label">Hot New</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="deal_of_week" type="checkbox" value="1" {{ $product->deal_of_week == 1 ? 'checked': '' }}>
                                                    <label class="form-check-label">Deal Of The Week</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="hot_deal" type="checkbox" value="1" {{ $product->hot_deal == 1 ? 'checked': '' }}>
                                                    <label class="form-check-label">Deal Of The Day</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="best_rated" type="checkbox" value="1" {{ $product->best_rated == 1 ? 'checked': '' }}>
                                                    <label class="form-check-label">Best Rated</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="best_seller" type="checkbox" value="1" {{ $product->best_seller == 1 ? 'checked': '' }}>
                                                    <label class="form-check-label">Best Seller</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="electronics" type="checkbox" value="1" {{ $product->electronics == 1 ? 'checked': '' }}>
                                                    <label class="form-check-label">Electronics</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input"  name="jewellery" type="checkbox" value="1" {{ $product->jewellery == 1 ? 'checked': '' }}>
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
                        <button type="submit" class="btn btn-info float-right">Modifier Information Principale</button>
                    </div>
                </div>
                <!-- /.card-header -->
            </form>
            <!-- /.submit-form -->

            <!-- Update Thumbnail Image -->
            <form method="post" action="{{ route('update.product.thumbnail') }}" enctype="multipart/form-data">
                @csrf
                <!-- card-header -->
                <div class="card-body">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <!-- card-header -->
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-plus-square"></i> Télécharger Image et Vidéo du Produit</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- card-body -->
                                <div class="card-body">
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="old_img" value="{{ $product->product_thumbnail }}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="brandInputLogo">Image de Couverture <span class="text-red">*</span></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="product_thumbnail" class="custom-file-input" onChange="mainThumUrl(this)" required>
                                                        <label class="custom-file-label" for="brandInputLogo">Choisir le fichier</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Télécharger</span>
                                                    </div>
                                                </div>
                                                @error('product_thumbnail')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <br>
                                                <img src="" id="mainThmb">
                                                <img src="{{ asset($product->product_thumbnail) }}" class="card-img-top" style="height: 131px; width: 120px;">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="brandInputLogo">Image de Survol <span class="text-red">*</span></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="hover_thumbnail" class="custom-file-input" onChange="coverThumUrl(this)" required>
                                                        <label class="custom-file-label" for="brandInputLogo">Choisir le fichier</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Télécharger</span>
                                                    </div>
                                                </div>
                                                @error('hover_thumbnail')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <br>
                                                <img src="" id="coverThmb">
                                                <img src="{{ asset($product->hover_thumbnail) }}" class="card-img-top" style="height: 131px; width: 120px;">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="categoryInputName">Lien Vidéo <small>(YouTube, Instagram, Facebook, etc.)</small></label>
                                                <input type="text" name="video_link" class="form-control" id="brandInputName" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right">Modifier Image Couverture</button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-header -->
            </form>
            <!-- /.submit-form -->
            <!-- /.Update Thumbnail Image -->

            <!-- Update Multiple Image -->
            <form method="post" action="{{ route('update.product.image') }}" enctype="multipart/form-data">
                @csrf
                <!-- card-header -->
                <div class="card-body">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <!-- card-header -->
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-plus-square"></i> Télécharger Autres Images</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- card-body -->
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($multiImgs as $img)
                                        <div class="col-md-12">
                                            <label for="multiImg">Autres Images <span class="text-red">*</span></label>
                                            <input type="file" name="multi_img[{{ $img->id }}]" class="form-control" multiple="" id="multiImg" required="" >
                                            @error('multi_img')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <div class="row" id="preview_img"></div>
                                            <span>
                                                <a href="{{ route('product.multiimg.delete',$img->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="{{ asset($img->photo_name) }}" class="card-img-top" style="height: 131px; width: 120px;">
                                            </span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right">Modifier Image Couverture</button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-header -->
            </form>
            <!-- /.submit-form -->
            <!-- /.Update Multiple Image -->

        </div>
        <!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>

  @section('scripts')
    <!-- Page custom script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                if(category_id) {
                    $.ajax({
                        url: "{{  url('/categories/subcategory/ajax') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            $('select[name="subsubcategory_id"]').html('');
                            var d =$('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });

            $('select[name="subcategory_id"]').on('change', function(){
                var subcategory_id = $(this).val();
                if(subcategory_id) {
                    $.ajax({
                        url: "{{  url('/categories/subsubcategory/ajax') }}/"+subcategory_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="subsubcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>

    <script type="text/javascript">
        function mainThumUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#mainThmb').attr('src',e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function coverThumUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#coverThmb').attr('src',e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    {{-- <script type="text/javascript">
        function mainThamUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#mainThmb').attr('src',e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script> --}}

    <script>
        $(document).ready(function(){
        $('#multiImg').on('change', function(){ //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file){ //loop though each file
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file){ //trigger function on successful read
                        return function(e) {
                            var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                        .height(80); //create image element
                            $('#preview_img').append(img); //append image to output element
                        };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            }else{
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
        });
    </script>
  @endsection

@endsection
