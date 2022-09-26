<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cetak Laporan</title>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}">
        <!-- VENDOR CSS -->
	    <link rel="stylesheet" href="{{asset('asset1/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset1/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
        <!-- MAIN CSS -->
	    <link rel="stylesheet" href="{{asset('asset1/assets/css/main.css')}}">
        <!-- GOOGLE FONTS -->
	    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    </head>
    <body>
        <div class="col-xs-2">
            <img src="{{asset('asset/assets/images/logoo.png')}}" style="width: 78px; height: 80px; float:left; margin:0 8px 4px 0;"/>
        </div>  
        <div class="col-xs-8">
            <div style="text-align:justify; margin-top: 20px">
                <p style="text-align: center; line-height: 20px">
                <span style="font-size: 28px;"><strong>Pondok Yatim dan Dhuafa <br>Yasin As-salam</strong></span><br/>
                <span style="font-size: 12px">
                    Sekretariat : Jalan Sindang Sari No. 4, Kel. Cipadung Kulon, Kota Bandung Jawa Barat, 40265 Telepon : 081278996085 Email :yayasanmutiarayasinassallam@gmail.com
                </span>
                </p>
            </div>
        </div>
        <div class="col-xs-2">
            <img src="{{asset('asset1/assets/img/logo.png')}}" style="width: 78px; height: 80px; float:right; margin:0 8px 4px 0;"/>
        </div>
        <div style="clear:both"><hr size="100px"></div><br/>
        <div class="col-xs-12">
            <h3 style="text-align:center;">Laporan Pendaftar</h3>
        </div>
        <div class="col-xs-12">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th width="210px">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0 ?>
                    @foreach ( $laporan_tahun as $bio )
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $bio->nik }}</td>
                        <td>{{ $bio->full_name }}</td>
                        <td>{{ $bio->ttl }}</td>
                        <td>{{ $bio->jenis_kelamin}}</td>
                        <td>{{ $bio->alamat }}</td>
                        @if ($bio->status == "Sudah Lengkap")
                            <td><span class="label label-rounded label-success">{{ $bio->status }}</span></td>
                        @else
                            <td><span class="label label-rounded label-danger">{{ $bio->status }}</span></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
        <div class="col-xs-8"></div>
        <div class="col-xs-4">
            <p style="text-align: center; line-height: 20px">
                <span style="font-size: 14px;">Bandung, {{ date('d-m-Y')}}</span><br/>
                <img src="{{asset('asset1/assets/img/ttd.png')}}" width="100">    <br>
                <span style="font-size: 14px">Bagian Administrasi</span><br/>
            </p>
        </div>
    <!-- Javascript -->
    <script src="{{asset('asset1/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('asset1/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        window.print();
    </script>
    </body>
</html>