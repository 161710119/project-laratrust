<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Dealer 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('dealers.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Dealer</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $dealers->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $dealers->alamat }}"  readonly>
			  		</div>

					  <div class="form-group">
			  			<label class="control-label">No Telp</label>	
			  			<input type="text" name="no_hp" class="form-control" value="{{ $dealers->no_hp }}"  readonly>
			  		</div>

					  <div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $dealers->deskripsi }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection