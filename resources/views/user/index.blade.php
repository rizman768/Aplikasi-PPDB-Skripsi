<!doctype html>
<html lang="en">

<head>
	<title>Pondok Yatim dan Dhuafa Yasin As-Salam</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('asset1/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset1/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset1/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('asset1/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('asset1/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('asset1/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('asset1/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="/"><img src="{{asset('asset1/assets/img/logo-pondok.png')}}" width="179px" height="21px" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left" action="/search" method="GET">
					<div class="input-group">
						<input type="text" value="" class="form-control" name="cari" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<x-Notification/>
							<ul class="dropdown-menu notifications">
								@if (auth()->user()->notif !== NULL)
									@if (auth()->user()->notif->persyaratan == 1)
										<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Persyaratan Sudah Di ACC, Silahkan Tunggu Instruksi Selanjutnya</a></li>	
									@endif	
								@endif
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="text-danger">
									@if (auth()->user()->biodata == NULL or auth()->user()->biodata->foto == NULL)
										*
									@endif
								</span>
								<span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								@if(auth()->user()->role_id == 1)
								<li><a href="/admin-dashboard"><i class="lnr lnr-home"></i> <span>Admin Dashboard</span></a></li>
								@endif
								<li><a href="/profile/{{auth()->user()->id}}"><i class="lnr lnr-user"></i> <span>My Profile</span>
								<span class="text-danger">
									@if (auth()->user()->biodata == NULL)
										*
									@endif
								</span></a></li>
								<li><a href="/editpersyaratan/{{auth()->user()->id}}"><i class="lnr lnr-user"></i> <span>Persyaratan</span>
								<span class="text-danger">
									@if (auth()->user()->biodata !== NULL)
										@if (auth()->user()->biodata->foto == NULL or auth()->user()->biodata->kk == NULL or auth()->user()->biodata->ktp == NULL or auth()->user()->biodata->akte == NULL or auth()->user()->biodata->sktm == NULL)
											*
										@endif
									@endif
								</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
			@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2022 <a href="#" target="_blank">Pondok Yatim dan Dhuafa Yasin As-Salam</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('asset1/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('asset1/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('asset1/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('asset1/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('asset1/assets/scripts/klorofil-common.js')}}"></script>
</body>

</html>