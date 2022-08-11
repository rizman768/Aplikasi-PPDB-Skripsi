<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
    <i class="lnr lnr-alarm"></i>
    @if (auth()->user()->notif !== NULL)
        <span class="badge bg-danger">{{ $jumlah }}</span>
    @endif
</a>