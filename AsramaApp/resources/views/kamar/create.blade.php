@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Kamar Form</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/asrama') }}/{{ $id_asrama }}/create_kamar" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kapasitas" class="col-md-4 control-label">Kapasitas</label>
                            <div class="col-md-6">
                                <input id="kapasitas" type="number" class="form-control" name="kapasitas" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_penghuni" class="col-md-4 control-label">Jumlah Penghuni</label>
                            <div class="col-md-6">
                                <input id="jumlah_penghuni" type="number" class="form-control" name="jumlah_penghuni" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection