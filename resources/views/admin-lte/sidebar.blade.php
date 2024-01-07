<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; background-color: #3c8dbc;">
    <span class="brand-text font-weight-light" style="color: #f39c12;">Perpustakaan Ulbi</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link @yield('active-dashboard')" style="background-color: #3c8dbc; color: #ffffff;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header" style="color: #f39c12;">MASTER</li>
      
        <li class="nav-item">
          <a href="#" class="nav-link @yield('active-data-master')" style="background-color: #3c8dbc; color: #ffffff;">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Data Master
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/kategori" class="nav-link  @yield('active-kategori')" style="background-color: #367fa9; color: #ffffff;">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/rak" class="nav-link  @yield('active-rak')" style="background-color: #367fa9; color: #ffffff;">
                <i class="far fa-circle nav-icon"></i>
                <p>Rak</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/penerbit" class="nav-link  @yield('active-penerbit')" style="background-color: #367fa9; color: #ffffff;">
                <i class="far fa-circle nav-icon"></i>
                <p>Penerbit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/buku" class="nav-link  @yield('active-buku')" style="background-color: #367fa9; color: #ffffff;">
                <i class="far fa-circle nav-icon"></i>
                <p>Buku</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/transaksi" class="nav-link @yield('active-transaksi')" style="background-color: #3c8dbc; color: #ffffff;">
            <i class="fas fa-hands"></i>
            <p>
              Transaksi
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/chart" class="nav-link @yield('active-chart')" style="background-color: #3c8dbc; color: #ffffff;">
            <i class="fas fa-chart-bar"></i>
            <p>
              Chart
            </p>
          </a>
        </li>
       
        @role('admin')
            <li class="nav-header" style="color: #f39c12;">ADMIN</li>

            <li class="nav-item">
              <a href="/user" class="nav-link @yield('active-user')" style="background-color: #3c8dbc; color: #ffffff;">
                <i class="fas fa-users"></i>
                <p>
                  User
                </p>
              </a>
            </li>
        @endrole
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
