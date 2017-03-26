@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Penghuni</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('edit_penghuni_info') }}">
                        {{ csrf_field() }}
                        <h1> Biodata diri </h1>
                        <!-- IDENTITAS PENGGUNA -->
                        <div class="form-group{{ $errors->has('nomor_identitas') ? ' has-error' : '' }}">
                            <label for="nomor_identitas" class="col-md-3 control-label">No Identitas</label>

                            <div class="col-md-3">
                                <select id="jenis_identitas" class="form-control" name="jenis_identitas" required>
                                    <option>KTP</option>
                                    <option>SIM</option>
                                    <option>Passport</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input id="nomor_identitas" type="text" class="form-control" name="nomor_identitas" value="{{ $info_penghuni->nomor_identitas }}" required autofocus>

                                @if ($errors->has('nomor_identitas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomor_identitas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- JENIS KELAMIN & GOLONGAN DARAH -->
                        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                            <label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin</label>

                            <div class="col-md-3">
                                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                </select>
                            </div>
                            <label for="gol_darah" class="col-md-3 control-label">Gol. Darah</label>

                            <div class="col-md-3">
                                <select id="gol_darah" class="form-control" name="gol_darah" required>
                                    <option></option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>AB</option>
                                    <option>O</option>
                                    <option>Tidak tahu</option>
                                </select>
                            </div>
                        </div>

                        <!-- TEMPAT, TGL LAHIR -->
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="ttl" class="col-md-3 control-label">Tempat, Tanggal Lahir</label>

                            <div class="col-md-3">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ $info_penghuni->tempat_lahir }}" required>
                                @if ($errors->has('tempat_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="text" class="form-control" name="tanggal_lahir" value="{{ $info_penghuni->tanggal_lahir }}" required>

                                @if ($errors->has('tanggal_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- ALAMAT TINGGAL -->
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-3 control-label">Alamat</label>

                            <div class="col-md-9">
                                <textarea id="alamat" class="form-control" name="alamat" style="resize: none;" required>{{ $info_penghuni->alamat }}</textarea>
                            </div>
                        </div>

                        <!-- AGAMA, PEKERJAAN, WARGA NEGARA -->
                        <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                            <label for="pekerjaan" class="col-md-3 control-label">Pekerjaan</label>
                            <div class="col-md-9">
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ $info_penghuni->pekerjaan }}" required>

                                @if ($errors->has('pekerjaan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pekerjaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                            <label for="agama" class="col-md-3 control-label">Agama</label>

                            <div class="col-md-3">
                                <select id="agama" class="form-control" name="agama" required>
                                    <option></option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <label for="warga_negara" class="col-md-3 control-label">Warga Negara</label>

                            <div class="col-md-3">
                                <input id="warga_negara" type="text" class="form-control" name="warga_negara" value="{{ $info_penghuni->warga_negara }}" required>

                                @if ($errors->has('warga_negara'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('warga_negara') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- TELEPON & INSTANSI -->
                        <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                            <label for="telepon" class="col-md-3 control-label">Telepon</label>
                            <div class="col-md-9">
                                <input id="telepon" type="text" class="form-control" name="telepon" value="{{ $info_penghuni->telepon }}" required>

                                @if ($errors->has('telepon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('instansi') ? ' has-error' : '' }}">
                            <label for="instansi" class="col-md-3 control-label">Instansi</label>
                            <div class="col-md-9">
                                <input id="instansi" type="text" class="form-control" name="instansi" value="{{ $info_penghuni->instansi }}" required>

                                @if ($errors->has('instansi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('instansi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>
                        <h1> Biodata Orang Tua Wali </h1>
                        <!-- ORTU WALI -->
                        <div class="form-group{{ $errors->has('nama_ortu_wali') ? ' has-error' : '' }}">
                            <label for="nama_ortu_wali" class="col-md-3 control-label">Nama Ortu Wali</label>
                            <div class="col-md-9">
                                <input id="nama_ortu_wali" type="text" class="form-control" name="nama_ortu_wali" value="{{ $info_penghuni->nama_ortu_wali }}" required>

                                @if ($errors->has('nama_ortu_wali'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_ortu_wali') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pekerjaan_ortu_wali') ? ' has-error' : '' }}">
                            <label for="pekerjaan_ortu_wali" class="col-md-3 control-label">Pekerjaan Ortu Wali</label>
                            <div class="col-md-9">
                                <input id="pekerjaan_ortu_wali" type="text" class="form-control" name="pekerjaan_ortu_wali" value="{{ $info_penghuni->pekerjaan_ortu_wali }}" required>

                                @if ($errors->has('pekerjaan_ortu_wali'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pekerjaan_ortu_wali') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat_ortu_wali') ? ' has-error' : '' }}">
                            <label for="alamat_ortu_wali" class="col-md-3 control-label">Alamat Ortu Wali</label>
                            <div class="col-md-9">
                                <textarea id="alamat_ortu_wali" class="form-control" name="alamat_ortu_wali" style="resize: none;" required>{{ $info_penghuni->alamat_ortu_wali }}</textarea>

                                @if ($errors->has('alamat_ortu_wali'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat_ortu_wali') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telepon_ortu_wali') ? ' has-error' : '' }}">
                            <label for="telepon_ortu_wali" class="col-md-3 control-label">Telepon Ortu Wali</label>
                            <div class="col-md-9">
                                <input id="telepon_ortu_wali" type="text" class="form-control" name="telepon_ortu_wali" value="{{ $info_penghuni->telepon_ortu_wali }}" required>

                                @if ($errors->has('telepon_ortu_wali'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon_ortu_wali') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>
                        <h1> Kontak Darurat </h1>
                        <div class="form-group{{ $errors->has('kontak_darurat') ? ' has-error' : '' }}">
                            <label for="kontak_darurat" class="col-md-3 control-label">Kontak Darurat</label>
                            <div class="col-md-9">
                                <input id="kontak_darurat" type="text" class="form-control" name="kontak_darurat" value="{{ $info_penghuni->kontak_darurat }}" required>

                                @if ($errors->has('kontak_darurat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kontak_darurat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
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
