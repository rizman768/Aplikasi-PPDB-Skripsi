@extends('admin.template')

@section('content')

    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <h1 class="page-title">Edit User</h1>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/manajemenuser">Daftar User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User {{ $user->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-6">
                <div class="text-end upgrade-btn">
                    <a class="btn btn-secondary text-white" href="/daftarsantri"> Back</a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="/updateuser" method="POST">
                                    @csrf
                                 
                                    <input type="hidden" name="id" value="{{ $user->id }}">
        
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Username :</strong>
                                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Email :</strong>
                                                <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Password :</strong>
                                                <input type="password" name="password" class="form-control">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Role :</strong>
                                                <select class="form-select" name="role_id" >
                                                    <option selected value="{{$user->role_id}}">{{$user->role->role }}</option>
                                                    @foreach ($role as $r)
                                                        <option value="{{ $r->id }}">{{ $r->role }}</option>
                                                    @endforeach
                                                </select>
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