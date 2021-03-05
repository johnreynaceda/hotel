<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-warning">
      <i class="fas fa-star"></i>
      <span class="brand-text  font-weight-bold">STAR HOTEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/admin.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMINISTRATOR</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="{{ route('admin-dashboard') }}" class="nav-link {{ Request::routeIs('admin-dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('admin-booked') }}" class="nav-link {{ Request::routeIs('admin-booked') ? 'active' : ''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                BOOKED
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-checkin') }}" class="nav-link {{ Request::routeIs('admin-checkin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                CHECK-IN
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-checkout') }}" class="nav-link {{ Request::routeIs('admin-checkout') ? 'active' : ''}}">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                CHECK-OUT
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-room') }}" class="nav-link {{ Request::routeIs('admin-room') ? 'active' : ''}}">
              <i class="nav-icon fas fa-house-user"></i>
              <p>
                ROOMS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-user') }}" class="nav-link {{ Request::routeIs('admin-user') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                USERS
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" class="nav-link hover:bg-gray-50 hover:text-dark"  onclick="event.preventDefault();
            this.closest('form').submit();" >
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                SIGN-OUT
              </p>
            </a>
            </form>
          </li>


        </ul>

        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
