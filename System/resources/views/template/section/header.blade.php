<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="beranda" class="nav-link">beranda</a>
      </li>
    </ul>
    <form class="form-inline">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
              </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            Firmansyah
        <img src="{{url('public')}}/dist/img/user1-128x128.jpg" alt="User Avatar" style="height : 150%" class="img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <i class="fa fa-user"><span><span>Profil</span></span></i>
          </a>
          <a href="#" class="dropdown-item">
          <i class="fas fa-gears">setting</i>
          </a>
          <a href="{{url('login')}}" class="dropdown-item">
            <i class="fa fas-sign-out">Logout</i>
          </a>
        </div>
      </li>
    </ul>
  </nav>
