@extends('admin/adminlayouts.appadmin')
@section('content')
 <!-- Begin Page Content -->
 <div class="content-wrapper container py-2">
    <form method="POST" action="{{route('images.accueil.edit.post')}}" enctype="multipart/form-data">
        @csrf
 <!-- SLIDE 1 -->
    <div class="card list-card">
        
        <div class="container py-3 mb-3">
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                            <label for="">TITRE</label>
                            <input type="text" class="form-control"  placeholder="TITRE SLIDE 1" name="titre1" value="{{$data['slide1']->title}}"  required>
                            
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">DESCRIPTION</label>
                                <input type="text" class="form-control"  placeholder="DESCRIPTION SLIDE 2" name="description1" value="{{$data['slide1']->description}}" required>
                                
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">IMAGE SLIDE 1</label>
                                <input type="file" class="form-control w-80" name="image1"  onchange="readURL(this);" accept=".jpg,.png,.jpeg,.svg">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img src="{{url('/storage/images/slides/'.$data['slide1']->slider_img)}}" alt="first image" height="300" width="500" id="image1">
                       
                    </div>

                </div>
      </div>
  </div>

   <!-- SLIDE 2 -->
   <div class="card list-card">
    <div class="container py-3 mb-3">
           
            <div class="row">
                <div class="col-md-6">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                        <label for="">TITRE</label>
                        <input type="text" class="form-control"  placeholder="TITRE SLIDE 2" name="titre2"  required value="{{$data['slide2']->title}}">
                        
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">DESCRIPTION</label>
                            <input type="text" class="form-control"  placeholder="DESCRIPTION SLIDE 2" name="description2" required value="{{$data['slide2']->description}}">
                            
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">IMAGE SLIDE 2</label>
                            <input type="file" class="form-control w-80" name="image2"  onchange="readURLs(this);" accept=".jpg,.png,.jpeg,.svg">
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="{{url('/storage/images/slides/'.$data['slide2']->slider_img)}}" alt="first image" height="300" width="500" id="image2">
                   
                </div>

            </div>

            <button type="submit" class="btn btn-success">ENREGISTRER</button>
  </div>
</div>

</form>
</div>

<script>
     function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#image1')
                      .attr('src', e.target.result);
              };

              reader.readAsDataURL(input.files[0]);
          }
      }

});

function readURLs(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#image2')
                      .attr('src', e.target.result);
              };

              reader.readAsDataURL(input.files[0]);
          }
      }

});
</script>


@endsection