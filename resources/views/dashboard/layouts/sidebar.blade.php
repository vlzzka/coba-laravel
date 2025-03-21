<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <i class="bi bi-house"></i>
          Dashboard
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" aria-current="page" href="/dashboard/posts">
          <i class="bi bi-book"></i>
          My Posts
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" aria-current="page" href="/dashboard/sales">
          <i class="bi bi-currency-dollar"></i>
          Sales
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" aria-current="page" href="/dashboard/supermarket_sales">
          <i class="bi bi-currency-dollar"></i>
          Supermarket Sales
        </a>
      </li>
    </ul>

    @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
            <i class="bi bi-grid"></i>
            Posts Categories
          </a>
        </li>
      </ul>
    @endcan

  </div>
</nav>