@extends('admin.template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-dashboard">Home</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            {{-- <div class="col-7">
                <div class="text-end upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white"
                        target="_blank">Upgrade to Pro</a>
                </div>
            </div> --}}
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
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar User</h4>
                        <div class="d-flex align-items-center align-center flex-row m-t-30">
                            <div class="display-5 text-info"><i class="mdi mdi-account"></i>
                                <span>{{ $user }}</span></div>
                            <div class="m-l-10">
                                <h3 class="m-b-0">Total</h3><small>User</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sudah Lengkap Persyaratan</h4>
                        <div class="d-flex align-items-center flex-row m-t-30">
                            <div class="display-5 text-info"><i class="mdi mdi-account-check"></i>
                                <span>{{ $lengkap }}</span></div>
                            <div class="m-l-10">
                                <h3 class="m-b-0">Total</h3><small>yang sudah lengkap</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Calon Santri</h4>   
                        <div class="d-flex align-items-center flex-row m-t-30">
                            <div class="display-5 text-info"><i class="mdi mdi-account-multiple"></i>
                                <span>{{ $santri }}</span></div>
                            <div class="m-l-10">
                                <h3 class="m-b-0">Total</h3><small>Calon Santri</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection