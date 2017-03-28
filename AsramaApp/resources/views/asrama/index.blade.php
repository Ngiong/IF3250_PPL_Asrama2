@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Data Asrama</h1>
				<a class="btn btn-xs btn-primary" href="{{ url('/create_asrama') }}">Create New Asrama</a>
			</div>
		</div>
		<div class="col-md-12">
			@foreach($data_asrama as $data)
				<a href="{{ url('/asrama') }}/{{ $data->id_asrama }}">{{ $data->nama }}</a>
				<p>{{ $data->deskripsi }}</p>
				<p>Alamat: {{ $data->alamat }}</p>
				<p>Jumlah Kamar: {{ $data->jumlah_kamar }}</p>
				<p>Kapasitas: {{ $data->kapasitas }}</p>
				<p>Jumlah Penghuni: {{ $data->jumlah_penghuni }}</p>
				<a class="btn btn-xs btn-primary" href="{{ url('/edit_asrama') }}/{{ $data->id_asrama }}">Edit</a>
				<form method="POST" action="{{ url('/delete_asrama') }}/{{ $data->id_asrama }}">
				 {{ csrf_field() }}
					<button type="submit" class="btn btn-xs btn-primary">Delete</button>
				</form>
				<hr>
			@endforeach
		</div>
	</div>
</div>
@endsection