@extends('admin.template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Daftar Calon Santri</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Calon Santri</li>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success')}}
                            </div>
                        @endif  
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Full Name</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0 ?>
                                @foreach ( $biodata as $bio )
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $bio->nik }}</td>
                                    <td>{{ $bio->full_name }}</td>
                                    <td>{{ $bio->ttl }}</td>
                                    <td>{{ $bio->jenis_kelamin}}</td>
                                    <td>{{ $bio->alamat }}</td>
                                    <td>
                                        <form action="/deletebiodata/{{$bio->id}}" method="POST">
                                            <a class="btn btn-info btn-sm" href="/detailsantri/{{$bio->id}}">Show</a>
                                            <a class="btn btn-primary btn-sm" href="/edit_biodata/{{$bio->id}}">Edit</a>

                                            @csrf

                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
