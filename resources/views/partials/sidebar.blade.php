<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LAPOR PAK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Page
    </div>

    <li class="nav-item {{ Request::is('admin/pengaduan*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-paper-plane"></i>
            <span>Pengaduan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Select Pengaduan :</h6>
                <a class="collapse-item" href="/admin/pengaduan-masuk">Pengaduan Masuk</a>
                <a class="collapse-item" href="/admin/pengaduan-terima">Pengaduan Pending</a>
                <a class="collapse-item" href="/admin/pengaduan-proses">Pengaduan Proses</a>
                <a class="collapse-item" href="/admin/pengaduan-selesai">Pengaduan Selesai</a>
                <a class="collapse-item" href="/admin/pengaduan-tolak">Pengaduan Ditolak</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::is('exportpdf*') ? 'active' : '' }}">
        <a class="nav-link" href="/exportpdf">
            <i class="fas fa-fw fa-file-pdf"></i>
            <span>Export PDF</span>
        </a>
    </li>
    @can('admin')        
        <li class="nav-item {{ Request::is('user*') ? 'active' : '' }}">
            <a class="nav-link" href="/user">
                <i class="fas fa-fw fa-user"></i>
                <span>Petugas</span>
            </a>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>