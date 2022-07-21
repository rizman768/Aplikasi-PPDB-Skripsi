@extends('user.index')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid px-4">
                <div class="row">
                    <h1 class="mt-4">Persyaratan</h1>
                    <ol class="breadcrumb mb-4">                      
                        <li class="breadcrumb-item active"></li>
                    </ol>
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="right">
                                <a class="btn btn-secondary" href="/profile/{{auth()->user()->id}}"> Back</a>
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
                                
                                <form action="/storepersyaratan" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Pas Foto 3x4 :</strong>
                                                <input type="file" name="foto" class="form-control" placeholder="Pas Foto">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Akte Kelahiran :</strong>
                                                <input type="file" name="akte" class="form-control" placeholder="Akte Kelahiran">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Kartu Keluarga :</strong>
                                                <input type="file" name="kk" class="form-control" placeholder="Kartu Keluarga">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>KTP Orang Tua / Wali :</strong>
                                                <input type="file" name="ktp" class="form-control" placeholder="KTP Orangtua/Wali">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Surat Keterangan Tidak Mampu(SKTM)</strong>
                                                <input type="file" name="sktm" class="form-control" placeholder="SKTM">
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