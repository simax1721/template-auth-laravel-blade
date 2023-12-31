@if(Auth::user()->userroles_id == 1)
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-icon">
          <img  src="{{ url('public/admin-assets/img/mf-no-bg.png') }}" alt="" style="width: 50% " class="mt-3">
        </div>
    <div class="sidebar-brand-text mx-3">
    </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Dashboard
          </div>
          <!-- Nav Item -->
          
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('dashboard') }}">
                        <i class="fa-solid fa-gauge-high"></i>
                      <span>Dashboard</span></a>
                  </li>
                  
        <hr class="sidebar-divider d-none d-md-block">
          
          <div class="sidebar-heading">
            User Konfigurasi
          </div>
          <!-- Nav Item -->
          
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/administrator/users') }}">
                <i class="fa-solid fa-user-gear"></i>
                  <span>User</span></a>
            </li>

        <hr class="sidebar-divider d-none d-md-block">
         
          <div class="sidebar-heading">
            Menu
          </div>
          <!-- Nav Item -->
          
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/user') }}">
              <i class="fa-solid fa-inbox"></i>
                <span>Pengajuan</span></a>
          </li> --}}
          

          <hr class="sidebar-divider d-none d-md-block">
          

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
@endif

@if(Auth::user()->userroles_id == 2)
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-icon">
          <img src="{{ url('public/admin-assets/img/mf-no-bg.png') }}" alt="" style="width: 50% " class="mt-3">
        </div>
    <div class="sidebar-brand-text mx-3">
    </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Dashboard
          </div>
          <!-- Nav Item -->
          
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="fa-solid fa-gauge-high"></i>
              <span>Dashboard</span></a>
          </li>
                  
        <hr class="sidebar-divider d-none d-md-block">
          
          <div class="sidebar-heading">
            User Konfigurasi
          </div>
          <!-- Nav Item -->
          
            <li class="nav-item">
              <a class="nav-link" href="{{ url('profil') }}">
                <i class="fa-solid fa-user-gear"></i>
                  <span>Profil</span></a>
            </li>

        <hr class="sidebar-divider d-none d-md-block">
         
          <div class="sidebar-heading">
            Menu
          </div>
          <!-- Nav Item -->
          
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/user') }}">
              <i class="fa-solid fa-user-gear"></i>
                <span>Biodata</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/user') }}">
              <i class="fa-solid fa-user-gear"></i>
                <span>Ajukan Bebas Pustaka</span></a>
          </li> --}}
          

          <hr class="sidebar-divider d-none d-md-block">
          

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
@endif
