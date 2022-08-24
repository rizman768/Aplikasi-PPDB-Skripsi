@extends('user.index')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid px-4">
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">
                                <h1 class="mt-4">Biodata Diri</h1>
                                <div class="right">
                                <a class="btn btn-secondary" href="/index"> Back</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="/storetambahbiodata" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Nama Lengkap :</strong>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                                                @if ($errors->has('nama'))
                                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Jenis Kelamin :</strong>
                                                <select class="form-select" name="jk" >
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>NIK :</strong>
                                                <input type="text" name="nik" class="form-control" placeholder="NIK">
                                                @if ($errors->has('nik'))
                                                    <span class="text-danger">{{ $errors->first('nik') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Tempat, Tanggal Lahir :</strong>
                                                <input type="text" name="ttl" class="form-control" placeholder="Tempat, Tanggal Lahir">
                                                @if ($errors->has('ttl'))
                                                    <span class="text-danger">{{ $errors->first('ttl') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Alamat :</strong>
                                                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat"></textarea>
                                                @if ($errors->has('alamat'))
                                                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Agama :</strong>
                                                <input type="text" name="agama" class="form-control" placeholder="Agama">
                                                @if ($errors->has('agama'))
                                                    <span class="text-danger">{{ $errors->first('agama') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Tempat Tinggal :</strong>
                                                <select class="form-select" name="tempat_tinggal" >
                                                        <option value="orang tua">Bersama Orang Tua</option>
                                                        <option value="saudara">Tinggal Dengan Saudara</option>
                                                        <option value="wali">Tinggal Dengan Wali</option>
                                                        <option value="lainnya">lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Nomor Handphone :</strong>
                                                <input type="text" name="hp" class="form-control" placeholder="No Hp">
                                            </div>
                                            @if ($errors->has('hp'))
                                                <span class="text-danger">{{ $errors->first('hp') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection