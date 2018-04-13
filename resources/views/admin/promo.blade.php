
@extends('layouts.coba')

@section('content')

        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transactions</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 20%">Promo</th>
                          <th>Kategori</th>
                          <th>Tanggal Dibuat</th>
                          <th>Tanggal Berakhir</th>
                          <th>Harga</th>
                          <th>Foto</th>                     
                          <th style="width: 20%">#Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($promos as $promo)
                        <tr>
                          <td>{{  $promo->id  }}</td>
                          <td>{{  $promo->promo  }}</td>
                          <td>{{  $promo->kategori->kategori }}</td>
                          <td>{{  $promo->tanggal_dibuat }}</td>
                          <td>{{  $promo->tanggal_berakhir }}</td>
                          <td>{{  $promo->Harga }}</td>
                          <td>{{  $promo->foto }}</td>
							          <td>
                          <button onclick="OpenModal()" class="btn btn-info" data-toggle="modal"
                            data-fpromo="{{$promo->promo}}"
                            data-fkategori="{{$promo->kategori->kategori}}"
                            data-fdate1="{{$promo->tanggal_dibuat}}"
                            data-fdate2="{{$promo->tanggal_berakhir}}"
                            data-fharga="{{$promo->Harga}}"
                            data-ffoto="{{$promo->foto}}"
                            data-target="#editModal"> 
                          Edit
                        </button>
                        <!-- <a class="btn btn-primary" href="{{route('Promo.index')}}/{{$promo->id}}/edit">Edit</a>-->
							  	    </td>
                    </tr>
                      @endforeach
                      </tbody>
                    </table>
                   
                    <button onclick="OpenModal()" class="btn btn-primary" style="margin-bottom: 5px;" data-toggle="modal" data-target="#PromoModal">+ Tambah Promo</button>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
       

</div>
<div class="modal fade" id="PromoModal" tabindex="-1" role="dialog" aria-labelledby="PromoModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="PromoLabel">Promo</h4>
	      </div>
	      <form action="{{ route('Promo.store'),'test'}}" method="post">
	      	{{csrf_field()}}
	      	<div class="modal-body">
	        	@include('admin.form_promo')
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary">Save</button>
	      	</div>
	      </form>
	    </div>
	  </div>
	</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="PromoModal">Edit Promo</h4>
	      </div>
	      <form action="{{route('Promo.update','test')}}/{{$promo->id}}" method="post">
	      	{{method_field('patch')}}
	      	{{csrf_field()}}
	      	<div class="modal-body">
	      		<input type="hidden" name="id_promo" id="id_promo" value="">
	        	@include('admin.form_promo')
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary">Save Changes</button>
	      	</div>
	      </form>
	    </div>
	  </div>
	</div>
@endsection
        
   