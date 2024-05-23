<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <i><img src="{{ asset('img/lambang.png') }}" width="60" height="70"></i>
        </div>
        <div class="sidebar-brand-text mx-2"> Puskesmas <sup>Sleman</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                <path fill="none" d="M0 0H24V24H0z"/><path d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 2c-4.418 0-8 3.582-8 8s3.582
                8 8 8 8-3.582 8-8-3.582-8-8-8zm3.833 3.337c.237-.166.559-.138.763.067.204.204.23.526.063.76-2.18 3.046-3.38 4.678-3.598 4.897-.586.585-1.536.585-2.122 0-.585-.586-.585-1.536 0-2.122.374-.373 2.005-1.574
                4.894-3.602zM17.5 11c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm-11 0c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm2.318-3.596c.39.39.39 1.023 0 1.414-.39.39-1.024.39-1.414 0-.39-.39-.39-1.024 0-1.414.39-.39 1.023-.39 1.414 0zM12 5.5c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1z"
                fill="rgba(255,255,255,1)"/></svg>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navigasi
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#DataOrtu"
            aria-expanded="true" aria-controls="DataOrtu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="18" height="18">
                <path fill="none" d="M0 0h24v24H0z"/><path d="M7 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 2a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm10.5
                2a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm2.5 6v-.5a2.5 2.5 0 1 0-5 0v.5h-2v-.5a4.5 4.5 0 1 1 9 0v.5h-2zm-10
                0v-4a3 3 0 0 0-6 0v4H2v-4a5 5 0 0 1 10 0v4h-2z" fill="rgba(255,255,255,1)"/></svg>
            <span>Data Orang Tua</span>
        </a>
        <div id="DataOrtu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">menu:</h6>
                <a class="collapse-item" href="{{ route('orang-tua.create') }}">Tambah Akun</a>
                <a class="collapse-item" href="{{ route('orang-tua.index') }}">Lihat Data</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#DataAnak"
            aria-expanded="true" aria-controls="DataAnak">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="18" height="18">
                <path fill="none" d="M0 0H24V24H0z"/>
                <path d="M18.364 10.98c1.562 1.561 1.562 4.094 0 5.656l-5.657 5.657c-.39.39-1.024.39-1.414 0l-5.657-5.657c-1.562-1.562-1.562-4.095
                0-5.657 1.562-1.562 4.095-1.562 5.657 0l.706.707.708-.707c1.562-1.562 4.095-1.562 5.657 0zM7.05 12.392c-.78.781-.78 2.048 0
                2.829l4.95 4.95 4.95-4.95c.78-.781.78-2.048 0-2.829-.781-.78-2.048-.78-2.83.002l-2.122 2.118-2.12-2.12c-.78-.78-2.047-.78-2.828
                0zM12 1c2.21 0 4 1.79 4 4s-1.79 4-4 4-4-1.79-4-4 1.79-4 4-4zm0 2c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2z"
                fill="rgba(255,252,252,1)"/></svg>
            <span>Data Anak</span>
        </a>
        <div id="DataAnak" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('data-anak.create') }}">Tambah Data</a>
                {{-- <a class="collapse-item" href="/lihat-data-anak">Lihat Data</a> --}}
                <a class="collapse-item" href="{{ route('data-anak.index') }}">Lihat Data</a>
            </div>
        </div>
    </li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/perkembangan" data-target="#PerkembanganAnak"
        aria-expanded="true" aria-controls="PerkembanganAnak">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="18" height="18">
            <path fill="none" d="M0 0H24V24H0z"/><path d="M5 3v16h16v2H3V3h2zm15.293 3.293l1.414 1.414L16 13.414l-3-2.999-4.293 4.292-1.414-1.414L13 7.586l3 2.999 4.293-4.292z"
            fill="rgba(253,253,253,1)"/></svg>
        <span>Perkembangan Anak</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/jadwal" data-target="#Jadwal"
        aria-expanded="true" aria-controls="Jadwal">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="18" height="18">
            <path fill="none" d="M0 0h24v24H0z"/><path d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm-2 2H9v2H7V5H4v4h16V5h-3v2h-2V5zm5 6H4v8h16v-8zM6 14h2v2H6v-2zm4 0h8v2h-8v-2z"
            fill="rgba(255,255,255,1)"/></svg>
        <span>Jadwal</span>
    </a>
    <div id="Jadwal" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
    </div>
</li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
