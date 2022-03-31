@extends('admin/adminlayouts.appadmin')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
              <h1><i class="fas fa-list-alt"></i> Produits <small> >> Liste des Produits</small></h1>
            </div>
            <div class="col-sm-2">
              <!-- Button trigger modal -->
              <a href="{{ route('show.product' )}}" class="btn btn-info float-right">
                  <i class="fas fa-plus-circle"></i> Nouveau Product
              </a>
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
                        <h3 class="card-title"><i class="fas fa-list"></i> Liste de tous les produits enregistrés</h3>
                    </div>
                    <div class="col-3">
                        <h3 class="card-title float-right"><strong>Nombres de produits:</strong> <span class="badge badge-pill badge-danger"><strong>{{ count($product) }}</strong></span></h3>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm text-center">
                    <thead class="bg-info">
                    <tr>
                        <th>{{ __('Code') }}</th>
                        <th>{{ __('Fournisseur') }}</th>
                        <th>{{ __('Produit (FR)') }}</th>
                        <th>{{ __('Image') }}</th>
                        <th>{{ __('Quantité') }}</th>
                        <th>{{ __('Réduction') }}</th>
                        <th>{{ __('Statut') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $row)
                    <tr>
                        <td>{{ $row->product_code }}</td>
                        <td>Derroh Amany Maxime</td>
                        <td>{{ $row->product_name_fr }}</td>
                        <td> <img src="{{ asset($row->product_thumbnail) }}" height="33px;" width="30px;"> </td>
                        <td>{{ $row->product_qty }}</td>
                        <td>
                            @if($row->discount_price == NULL)
                                <span class="badge badge-pill badge-warning">Pas de Réduction</span>
                            @else
                            @php
                                $amount = $row->selling_price - $row->discount_price;
                                $discount = ($amount/$row->selling_price) * 100;
                            @endphp
                                <span class="badge badge-pill badge-warning">{{ round($discount) }} %</span>
                            @endif
                        </td>
                        <td>
                            @if($row->status == 1)
                            <span class="badge badge-success"><i class="fas fa-globe"></i> Active</span>
                            @else
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit.brand',$row->id) }}" class="btn btn-sm btn-outline-dark">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('edit.product',$row->id) }}" class="btn btn-sm btn-outline-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('delete.product',$row->id) }}" id="delete" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            @if($row->status == 1)
                            <a href="{{ route('active.product',$row->id) }}" class="btn btn-sm btn-outline-primary" title="Inactive">
                                <i class="fas fa-thumbs-up"></i>
                            </a>
                            @else
                            <a href="{{ route('inactive.product',$row->id) }}" class="btn btn-sm btn-outline-secondary" title="Active">
                                <i class="fas fa-thumbs-down"></i>
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot class="bg-info">
                    <tr>
                        <th>{{ __('Code') }}</th>
                        <th>{{ __('Fournisseur') }}</th>
                        <th>{{ __('Produit (FR)') }}</th>
                        <th>{{ __('Image') }}</th>
                        <th>{{ __('Quantité') }}</th>
                        <th>{{ __('Réduction') }}</th>
                        <th>{{ __('Statut') }}</th>
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
    </section>
    <!-- /.content -->
  </div>
@endsection
