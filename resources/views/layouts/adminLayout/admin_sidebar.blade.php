 <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{ asset('images/backend_images/faces/face16.jpg') }}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            <!--  <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            -->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/dashboard') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-truck"></i>
              <span class="menu-title">Supplier Management  </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/supplier-management/supplier') }}">Supplier</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/supplier-management/products') }}">Products</a>
                </li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-location"></i>
              <span class="menu-title">Customer Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/customer-management/customer') }}"> Customer </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/customer-management/order') }}"> Order </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/sales') }}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Sales</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/comission') }}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Comission</span>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->