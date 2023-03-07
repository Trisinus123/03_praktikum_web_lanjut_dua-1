<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{asset('AdminLTE-3.0.0')}}/dist/img/polinema.jpg" alt="Polinema Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light">Laravel Kelompok 3</span>
        </a>
        
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('AdminLTE-3.0.0')}}/dist/img/hanif.jpeg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Hanif Naufal Rafandi</a>
          </div>
      </div>

      <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="{{asset('AdminLTE-3.0.0')}}/dist/img/trisinus.jpeg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Trisinus Gulo</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="{{Route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>

    <li class="nav-item has-treeview">
        <a href="{{$profile}}" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Profile Mahasiswa
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{Route('profile', ['nim'=>'hanif'])}}" class="nav-link {{$hanif}}">
          <i class="far fa-circle nav-icon"></i>
          <p>Hanif Naufal Rafandi</p>
      </a>
  </li>
  <li class="nav-item">
    <a href="{{Route('profile', ['nim'=>'trisinus'])}}" class="nav-link {{$trisinus}}">
      <i class="far fa-circle nav-icon"></i>
      <p>Trisinus Gulo</p>
  </a>
</li>
</ul>
</li>

<li class="nav-item has-treeview">
    <a href="{{Route('kuliah')}}" class="nav-link {{$kuliah}}">
      <i class="nav-icon fas fa-chart-pie"></i>
      <p>
        Pengalaman Kuliah
        <i class="right fas fa-angle-left"></i>
    </p>
</a>
</li> 
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
</div>
</aside>
<!-- /.sidebar -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>