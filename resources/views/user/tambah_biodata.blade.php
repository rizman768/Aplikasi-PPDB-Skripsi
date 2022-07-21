@extends('user.index')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid px-4">
                <div class="row">
                    <h1 class="mt-4">Biodata Diri</h1>
                    <ol class="breadcrumb mb-4">                      
                        <li class="breadcrumb-item active"></li>
                    </ol>
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="right">
                                <a class="btn btn-secondary" href="/index"> Back</a>
                                </div>
                            </div>
                            <div class="body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                
                                <form action="/storetambahbiodata" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Full Name :</strong>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama">
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
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Tempat, Tanggal Lahir :</strong>
                                                <input type="text" name="ttl" class="form-control" placeholder="Tempat, Tanggal Lahir">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Alamat :</strong>
                                                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Agama :</strong>
                                                <input type="text" name="agama" class="form-control" placeholder="Agama">
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
    </div>
@endsection