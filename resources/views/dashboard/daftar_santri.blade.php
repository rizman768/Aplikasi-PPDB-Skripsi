@extends('user.index')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid px-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1>Daftar Calon Santri</h1>
                                </div>
                                <div class="panel-body">
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0 ?>
                                            @foreach ( $santri as $bio )
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $bio->nik }}</td>
                                                <td>{{ $bio->full_name }}</td>
                                                <td>{{ $bio->ttl }}</td>
                                                <td>{{ $bio->jenis_kelamin}}</td>
                                                <td>{{ $bio->alamat }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>            
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
