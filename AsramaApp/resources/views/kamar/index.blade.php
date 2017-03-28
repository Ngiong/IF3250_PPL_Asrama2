@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<a href="{{ url('/asrama') }}">back</a>
				<h1>Data Kamar</h1>
				<a class="btn btn-xs btn-primary" href="{{ url('/asrama') }}/{{ $data_kamar->id_asrama }}/create_kamar">Create New Kamar</a>
			</div>
		</div>
		<div class="col-md-12">
			<table class="table table-striped table-condensed table-hover">
				<thead>
					<tr>
						<th style="width:25%">Nama</th>
						<th style="width:25%">Kapasitas</th>
						<th style="width:25%">Jumlah Penghuni</th>
						<th style="width:25%">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data_kamar as $data)
						<tr>
							<td>{{ $data->nama }}</td>
							<td>{{ $data->kapasitas }}</td>
							<td>{{ $data->jumlah_penghuni }}</td>
							<td>
								<a class="btn btn-xs btn-primary" href="{{ url('/asrama') }}/{{ $data_kamar->id_asrama }}/edit_kamar/{{ $data->id_kamar }}">Edit</a>
								<form method="POST" action="{{ url('/asrama') }}/{{ $data_kamar->id_asrama }}/delete_kamar/{{ $data->id_kamar }}">
								 {{ csrf_field() }}
									<button type="submit" class="btn btn-xs btn-primary">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection