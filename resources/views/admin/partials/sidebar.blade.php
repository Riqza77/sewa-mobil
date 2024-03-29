<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Persewaan Mobil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->nama }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ $title == 'Dashboard Admin' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="/users" class="nav-link {{ $title == 'Manajemen Pengguna' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Manajemen Pengguna
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="/mobils" class="nav-link {{ $title == 'Manajemen Mobil' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Manajemen Mobil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/peminjaman" class="nav-link {{ $title == 'Manajemen Peminjaman Mobil' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Peminjaman Mobil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengembalians"
                        class="nav-link {{ $title == 'Manajemen Pengembalian Mobil' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Pengembalian Mobil
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="/logout" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')"
                        class="nav-link bg-red">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
