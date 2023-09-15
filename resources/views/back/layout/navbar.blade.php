<nav class="navbar navbar-expand-lg bg-dark mb-3" data-bs-theme="dark">
  <div class="container ">
    <a class="navbar-brand" href="{{ URL('/') }}">{{ config('app.name') }}</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
            href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/dashboard') ? 'active' : '' }}" aria-current="page"
            href="{{ url('/admin/dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('admin/post') ? 'active' : '' }}" href="{{ url('admin/post') }}">Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @guest
          <li class="nav-item">
            <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('register') ? 'active' : '' }}"
              href="{{ route('register') }}">Register</a>
          </li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
