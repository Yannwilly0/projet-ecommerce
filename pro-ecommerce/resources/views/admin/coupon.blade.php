@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
              <h1><i class="fas fa-list-alt"></i> Coupons <small> >> Coupon</small></h1>
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
                  <i class="fas fa-plus-circle"></i> Nouveau Coupon
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
                            <h3 class="card-title">Liste de coupons enregistrés</h3>
                        </div>
                        <div class="col-3">
                            <h3 class="card-title float-right"><strong>Nombres de coupons:</strong> <span class="badge badge-pill badge-danger"><strong>{{ count($coupon) }}</strong></span></h3>
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
                    <th>{{ __('Coupon Code') }}</th>
                    <th>{{ __('Reduction (%)') }}</th>
                    <th>{{ __('Coupon Validité') }}</th>
					<th>{{ __('Statut') }}</th>
                    <th>{{ __('Créé le') }}</th>
                    <th>{{ __('Modifié le') }}</th>
                    <th>{{ __('Actions') }}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($coupon as $key => $row)
                  <tr>
                    <td>{{ $key +1 }}</td>
                    <td>Derroh</td>
                    <td style="text-transform: uppercase;">{{ $row->coupon_name }}</td>
                    <td>{{ $row->coupon_discount }}</td>
                    <td width="25%">
                        {{ Carbon\Carbon::parse($row->coupon_validity)->format('d F Y') }}
                    </td>
                    <td>
                        @if($row->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
                            <span class="badge badge-pill badge-success"> Valide </span>
                        @else
                            <span class="badge badge-pill badge-danger"> Invalide </span>
                        @endif
                    </td>
                    <td>{{ Carbon\Carbon::parse($row->created_at)->format('d F Y, h:i:s') }}</td>
                    <td>{{ Carbon\Carbon::parse($row->updated_at)->format('d F Y, h:i:s') }}</td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#modal-warning{{ $row->id }}" class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i></a>
                        <a href="{{ route('delete.coupon',$row->id) }}" id="delete" class="btn btn-sm btn-outline-danger">
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
                    <th>{{ __('Coupon Code') }}</th>
                    <th>{{ __('Reduction (%)') }}</th>
                    <th>{{ __('Coupon Validité') }}</th>
					<th>{{ __('Statut') }}</th>
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
              <h5 class="modal-title"> Ajouter un nouveau coupon <i class="fas fa-plus-circle"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="{{ route('add.coupon') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="couponInputName">Coupon Code <span class="text-red">*</span></label>
                        <input type="text" name="coupon_name" class="form-control" id="couponInputName" placeholder="">
                        @error('coupon_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="couponDiscountInputName">Reduction (%) <span class="text-red">*</span></label>
                        <input type="text" name="coupon_discount" class="form-control" id="couponDiscountInputName" placeholder="">
                        @error('coupon_discount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="couponDiscountInputName">Coupon Validité <span class="text-red">*</span></label>
                        <input type="date" name="coupon_validity" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                        @error('coupon_discount')
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
      @foreach ($coupon as $coupon)
      <div class="modal fade" id="modal-warning{{ $coupon->id }}">
        <!-- modal-dialog -->
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title"> Modifier un Coupon <i class="fas fa-edit"></i></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="post" action="{{ url('/coupon/update/coupon/'.$coupon->id) }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="couponInputName">Coupon Code <span class="text-red">*</span></label>
                        <input type="text" name="coupon_name" class="form-control" id="couponInputName" value="{{ $coupon->coupon_name }}" placeholder="">
                        @error('coupon_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="couponDiscountInputName">Reduction (%) <span class="text-red">*</span></label>
                        <input type="text" name="coupon_discount" class="form-control" id="couponDiscountInputName" value="{{ $coupon->coupon_discount }}" placeholder="">
                        @error('coupon_discount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="couponDiscountInputName">Coupon Validité <span class="text-red">*</span></label>
                        <input type="date" name="coupon_validity" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $coupon->coupon_validity }}">
                        @error('coupon_discount')
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
