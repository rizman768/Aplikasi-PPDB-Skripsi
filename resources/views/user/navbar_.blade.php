<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="/index"><img src="{{asset('asset1/assets/img/logo-pondok.png')}}" width="179px" height="21px" alt="Klorofil Logo" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
            </div>
        </form>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <x-notif>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        @if(auth()->user()->role_id == 1)
                        <li><a href="/admin-dashboard"><i class="lnr lnr-home"></i> <span>Admin Dashboard</span></a></li>
                        @endif
                        <li><a href="/profile/{{auth()->user()->id}}"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                        <li><a href="/editpersyaratan/{{auth()->user()->id}}"><i class="lnr lnr-user"></i> <span>Persyaratan</span></a></li>
                        <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>