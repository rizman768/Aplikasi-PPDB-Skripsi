@extends('user.index')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid px-4">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success')}}     
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3>Tentang Pondok Yatim dan Dhuafa Yasin As-Salam</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <p>Yasin As-Salam adalah Lembaga sosial dan Pendidikan Yang Bekerja Sama Dengan Banyak Pesantren Dan Rumah Yatim Di Kota Bandung, yang dikukuhkan dengan Akta Pendirian Notaris KUSNADI  Nomor 31 tertanggal 02 April 2021. Seiring waktu berjalan kami terus melakukan pembaharuan lembaga yang fokus untuk mengelola kegiatan Masyarakat & Yatim dan Dhuafa dengan nama lembaga Mutiara Yasin As-Salam.</p>
                            </div>
                            <div class="panel-footer">
                                <center><a href="tentang-pondok">lihat selengkapnya</a></center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3>Panduan Pendaftaran Calon Santri Baru</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <h4>Persyaratan yang harus disiapkan</h4>
                                <p>
                                    <ol type="1">
                                        <li>Pas Foto ukuran 3x4</li>
                                        <li>Akta Kelahiran atau Surat Keterangan Lahir Calon Santri</li>
                                        <li>Kartu Keluarga</li>
                                        <li>KTP Orang Tua atau Wali Calon Santri</li>
                                        <li>Surat Keterangan Tidak Mampu</li>
                                    </ol>
                                    <h6>* untuk poin 1 dan 4 format filenya adalah JPG/JPEG atau PNG  sisanya itu PDF
                                </p>
                            </div>
                            <div class="panel-footer">
                                <center><a href="panduan">lihat selengkapnya</a></center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3>Daftar Calon Santri</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
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
                            <div class="panel-footer">
                                <center><a href="daftar-santri">lihat selengkapnya</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection