@extends('admin.template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-8">
                <h4 class="page-title">Form {{ $user->biodata->full_name }}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/daftarsantri">Daftar Calon Santri</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Biodata {{ $user->biodata->full_name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-2">
                <div class="text-end upgrade-btn">
                     <a href="/cetak_form/{{ $user->biodata->id }}" class="btn btn-danger text-white" target="_blank">Cetak Form</a>
                </div>
            </div>
            <div class="col-2">
                <div class="text-end upgrade-btn">
                    @if ($user->notif == NULL)
                        <form method="POST" action="/acc">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->biodata->id }}">
                            <button type="submit" class="btn btn-success text-white">Sudah Lengkap</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">               
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="{{ $user->biodata->getFoto()}}" class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10">Hanna Gover</h4>
                            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                            class="icon-people"></i>
                                        <font class="font-medium">254</font>
                                    </a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                            class="icon-picture"></i>
                                        <font class="font-medium">54</font>
                                    </a></div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6>{{ $user->email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{ $user->biodata->no_hp }}</h6> <small class="text-muted p-t-30 db">Address</small>
                        <h6>{{ $user->biodata->alamat }}</h6>
                        <div class="map-box">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                width="100%" height="150" frameborder="0" style="border:0"
                                allowfullscreen></iframe>
                        </div> <small class="text-muted p-t-30 db">Social Profile</small>
                        <br />
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled list-justify">
                            <li><h5>NIK : &emsp;{{$user->biodata->nik}}</h5></li> <p>
                            <li><h5>Nama Lengkap : &emsp;{{$user->biodata->full_name}}</h5></li> <p>
                            <li><h5>Jenis Kelamin : &emsp;{{$user->biodata->jenis_kelamin}}</h5></li> <p>
                            <li><h5>Tempat, Tanggal Lahir : &emsp;{{$user->biodata->ttl}}</h5></li> <p>
                            <li><h5>Alamat : &emsp;{{$user->biodata->alamat}}</li></li> <p>
                            <li><h5>Agama : &emsp;{{$user->biodata->agama}}</h5></li> <p>
                            <li><h5>Tempat Tinggal : &emsp;{{$user->biodata->tempat_tinggal}}</h5></li> <p>
                            <li><h5>No Handphone : &emsp;{{$user->biodata->no_hp}}</h5></li> <p>
                        </ul>
                    </div>
                    <div class="card-body">
                       <p><h3>Persyaratan</h3></p> <br>
                       <h5>Pas Foto</h5>
                       <div class="col-xs-7 col-sm-7 col-md-7 text-center">
                            <img src="{{asset('images/' .$user->biodata->full_name. '/' .$user->biodata->foto)}}" width="200px" class="rounded-square">
                       </div> <br><br>
                       <h5>Akte Kelahiran</h5>
                       <div class="col-xs-7 col-sm-7 col-md-7 text-center">
                            {{-- @if ($user->biodata->akte.'.pdf') --}}
                                <iframe src="{{asset('images/' .$user->biodata->full_name. '/' .$user->biodata->akte)}}" align="top width="150" height="460" frameborder="0" scrolling="auto"></iframe>
                            {{-- @else
                                <img src="{{asset('images/' .$user->biodata->full_name. '/' .$user->biodata->akte)}}" width="200px" class="rounded-square">
                            @endif --}}
                       </div> <br><br>
                       <h5>Kartu Keluarga</h5>
                       <div class="col-xs-7 col-sm-7 col-md-7 text-center">
                            {{-- @if ('mime:pdf') --}}
                                <iframe src="{{asset('images/' .$user->biodata->full_name. '/' .$user->biodata->kk)}}" align="top width="150" height="460" frameborder="0" scrolling="auto"></iframe>
                            {{-- @else
                                <img src="{{asset('images/' .$user->biodata->full_name. '/' .$user->biodata->kk)}}" width="200px" class="rounded-square">
                            @endif --}}
                       </div> <br><br>
                       <h5>KTP Orang Tua / Wali</h5>
                       <div class="col-xs-7 col-sm-7 col-md-7 text-center">   
                            <img src="{{asset('images/' .$user->biodata->full_name. '/' .$user->biodata->ktp)}}" width="200px" class="rounded-square">
                        </div> <br><br>
                       <h5>SKTM</h5>
                       <div class="col-xs-7 col-sm-7 col-md-7 text-center">
                            {{-- @if ('mimes:pdf') --}}
                                <iframe src="{{asset('images/' .$user->biodata->full_name. '/' .$user->biodata->sktm)}}" align="top width="150" height="460" frameborder="0" scrolling="auto"></iframe>
                            {{-- @endif
                                <img src="{{asset('images/' .$user->biodata->full_name. '/' .$user->biodata->sktm)}}" width="200px" class="rounded-square"> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

    <script>
    function myFunction() {
        var x = document.getElementById("btn");
        x.disabled = true;
    }
    </script>
@endsection
