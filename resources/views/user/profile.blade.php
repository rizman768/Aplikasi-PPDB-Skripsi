@extends('user.index')

@section('content')     
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="right">
                            <button type="button" class="btn-remove" href="/index"><i class="lnr lnr-cross"></i></button>
                        </div>
                    </div> 
                    <div class="panel panel-profile">
                        <div class="clearfix">
                            <!-- LEFT COLUMN -->
                            <div class="profile">
                                <!-- PROFILE HEADER -->
                                <div class="profile-header">
                                    <div class="overlay"></div>
                                    <div class="profile-main">
                                        <img src="{{ $user->biodata->getFoto() }}" class="img-circle" alt="Avatar" height="150px" width="150px">
                                        <h3 class="name">{{$user->name}}</h3>
                                        <span class="online-status status-available">Available</span>
                                    </div>
                                </div>
                                <!-- END PROFILE HEADER -->
                                <!-- PROFILE DETAIL -->
                                <div class="profile-detail">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success')}}
                                        </div>
                                    @endif
                                        
                                    <div class="profile-info">
                                        <h4 class="heading">Basic Info</h4>
                                        <ul class="list-unstyled list-justify">
                                            <li>Nama Lengkap <span>{{$user->biodata->full_name}}</span></li>
                                            <li>Jenis Kelamin <span>{{$user->biodata->jenis_kelamin}}</span></li>
                                            <li>NIK <span>{{$user->biodata->nik}}</span></li>
                                            <li>Tempat, Tanggal Lahir <span>{{$user->biodata->ttl}}</span></li>
                                            <li>Alamat <span>{{$user->biodata->alamat}}</span></li></span></li>
                                            <li>Agama <span>{{$user->biodata->agama}}</span></li></span></li>
                                            <li>Tempat Tinggal <span>{{$user->biodata->tempat_tinggal}}</span></li></span></li>
                                            <li>No Handphone <span>{{$user->biodata->no_hp}}</span></li></span></li>
                                        </ul>
                                    </div>
                                    <div class="text-center"><a href="/edit_biodata/{{$user->biodata->user_id}}" class="btn btn-primary">Edit Profile</a></div>                                    
                                </div>
                                <!-- END PROFILE DETAIL -->
                            </div>
                            {{-- <div class="text-center">
                                <a href="/editpersyaratan/{{$user->persyaratan->user_id}}" class="btn btn-success">Persyaratan</a>
                            </div> --}}
                            <!-- END LEFT COLUMN -->
                            <!-- RIGHT COLUMN -->
                            <!-- END RIGHT COLUMN -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection