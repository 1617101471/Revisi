@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container-fluid">
		<div class="col-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Kontak
			  	<div class="panel-title pull-right">
			  		<a href="{{ route('kontak.create') }}">Tambah Data</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama kontak</th>
					  <th>Email</th>
					  <th>Gambar</th>
					  <th>Deskkripsi</th>
					  <th>Intagram</th>
					  <th>Facebook</th>
					  <th>Alamat</th>
					  <th>No Telepon</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($kontaks as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama}}</td> 
				    	<td>{{ $data->email }}</td>
				    	<td><img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;"></td>
				    	<td>{!! $data->content !!}</td>
				    	<td>{{ $data->instagram }}</td>
				    	<td>{{ $data->facebook }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>0{{ $data->nohp }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('kontak.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('kontak.show',$data->id) }}" class="btn btn-outline-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('kontak.destroy',$data->id) }}">
								@csrf
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"  onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
							</form>
						</td>
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
