<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Data Pegawai</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('data-pegawai') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('generate-qr') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Generate QR
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
