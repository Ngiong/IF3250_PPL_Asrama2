@extends('layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			Home
		</div>
		<div class="panel-body">
			@foreach ($pengumuman as $item)
			  <h4>{{$item->updated_at}}</h4>
			  <h2>{{$item->title}}</h2>
			  <br>
			  <p>{{$item->isi}}</p>
			  <br>
			@endforeach;
		</div>
	</div>
</div>
@endsection