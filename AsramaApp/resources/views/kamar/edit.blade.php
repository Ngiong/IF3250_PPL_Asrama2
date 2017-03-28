@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Kamar Form</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/asrama') }}/{{ $data->id_asrama }}/edit_kamar" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $data->id_kamar }}">

                        <div class="form-group">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" required autofocus value="{{ $data->nama }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kapasitas" class="col-md-4 control-label">Kapasitas</label>
                            <div class="col-md-6">
                                <input id="kapasitas" type="number" class="form-control" name="kapasitas" required autofocus value="{{ $data->kapasitas }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_penghuni" class="col-md-4 control-label">Jumlah Penghuni</label>
                            <div class="col-md-6">
                                <input id="jumlah_penghuni" type="number" class="form-control" name="jumlah_penghuni" required autofocus value="{{ $data->jumlah_penghuni }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
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