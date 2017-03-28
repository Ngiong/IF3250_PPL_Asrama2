@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			List of {{ ucfirst('blacklists') }}
		</div>

		<div class="panel-body">
			<div class="">
				<table class="table table-striped" id="thegrid">
				  <thead>
					<tr>
						<th>Id User</th>
						<th>Alasan</th>
						<th style="width:50px"></th>
						<th style="width:50px"></th>
					</tr>
				  </thead>
				  <tbody>
				  </tbody>
				</table>
			</div>
			<a href="{{url('blacklists/create')}}" class="btn btn-primary" role="button">Add blacklist</a>
		</div>
	</div>
</div>



@endsection



@section('scripts')
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "responsive": true,
                "ajax": "{{url('blacklists/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/blacklists') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/blacklists') }}/'+row[0]+'/edit" class="btn btn-default">Update</a>';
                        },
                        "targets": 2                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": 2+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/blacklists') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection