<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Dealer
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('dealers.create') }}">Tambah</a>
			  	</div>
			  </div>
				<br>
			  <div class="panel-body">
				<div class="table-responsive table--no-card m-b-40">
				  <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Dealer</th>
					  <th>Alamat</th>
					  <th>No Telp</th>
						<th>Deskripsi</th>
					  <th colspan="3"><center>Action</center></th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($dealers as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->alamat }}</p></td>
				    	<td><p>{{ $data->no_hp }}</p></td>
							<td><p>{{ $data->deskripsi }}</p></td>
<td>
	<a class="btn btn-outline-primary" href="{{ route('dealers.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('dealers.show',$data->id) }}" class="btn btn-outline-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('dealers.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-outline-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection