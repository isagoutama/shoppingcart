<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-shopping-cart fa-3"></i> Shopping</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>

      </form>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li>
            <a href="{{ url('/shopping-cart/'.Auth::user()->username) }}"><i class="fa fa-shopping-cart fa-3"></i> Keranjang Belanja
            <span class="badge"></span>
            </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>{{ Auth::user()->username }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Tambah Iklan</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ url('user/profile') }}">Profil Saya</a></li>
              <li><a href="{{ url('user/logout') }}">Keluar</a></li>
            </ul>
          </li>
        @else
          <li>
            <a href="{{ url('/user/login') }}"><i class="fa fa-shopping-cart fa-3"></i> Keranjang Belanja
            <span class="badge"></span>
            </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>Masuk atau Daftar<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('user/login') }}">Masuk</a></li>
              <li><a href="{{ url('user/register') }}">Daftar</a></li>
            </ul>
          </li>
        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
