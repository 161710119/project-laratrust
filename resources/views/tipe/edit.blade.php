<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Tipe 
			  	<div class="panel-title pull-right"><a <a class="btn btn-outline-success" href="{{ route('tipes.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('tipes.update',$tipes->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Tipe Mobil</label>	
			  			<input type="text" name="nama" value="{{ $tipes->nama }}" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('merk_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Merk Mobil</label>	
			  			<select name="merk_id" class="form-control">
			  				@foreach($merks as $data)
			  				<option value="{{ $data->id }}" {{ $selectedmerk == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection