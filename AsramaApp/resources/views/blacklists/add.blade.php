@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			Add/Modify Blacklist    </div>

		<div class="panel-body">
					
			<form action="{{ url('/blacklists'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
				{{ csrf_field() }}

				@if (isset($model))
					<input type="hidden" name="_method" value="PATCH">
				@endif


																<div class="form-group">
					<label for="id_user" class="col-sm-3 control-label">Id User</label>
					<div class="col-sm-2">
						<input type="number" name="id_user" id="id_user" class="form-control" value="{{$model['id_user'] or ''}}">
					</div>
				</div>
																						<div class="form-group">
					<label for="alasan" class="col-sm-3 control-label">Alasan</label>
					<div class="col-sm-6">
						<input type="text" name="alasan" id="alasan" class="form-control" value="{{$model['alasan'] or ''}}">
					</div>
				</div>
																
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<button type="submit" class="btn btn-success">
							<i class="fa fa-plus"></i> Save
						</button> 
						<a class="btn btn-default" href="{{ url('/blacklists') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>






@endsection