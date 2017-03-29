@extends('layouts.app')

@section('content')


<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			Add/Modify User    </div>

		<div class="panel-body">
					
			<form action="{{ url('/users'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
				{{ csrf_field() }}

				@if (isset($model))
					<input type="hidden" name="_method" value="PATCH">
				@endif


										<div class="form-group">
					<label for="id" class="col-sm-3 control-label">Id</label>
					<div class="col-sm-6">
						<input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
					</div>
				</div>
																												<div class="form-group">
					<label for="nama" class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-6">
						<input type="text" name="nama" id="nama" class="form-control" value="{{$model['nama'] or ''}}">
					</div>
				</div>
																									<div class="form-group">
					<label for="email" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-6">
						<input type="text" name="email" id="email" class="form-control" value="{{$model['email'] or ''}}">
					</div>
				</div>
																									
																<div class="form-group">
					<label for="username" class="col-sm-3 control-label">Username</label>
					<div class="col-sm-6">
						<input type="text" name="username" id="username" class="form-control" value="{{$model['username'] or ''}}">
					</div>
				</div>
																
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<button type="submit" class="btn btn-success">
							<i class="fa fa-plus"></i> Save
						</button> 
						<a class="btn btn-default" href="{{ url('/users') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>





@endsection