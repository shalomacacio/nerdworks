<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
      <div class="theme-header clearfix">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
          </button>
        <a href="{{route('vacancies.index')}}" class="navbar-brand"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>

        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('vacancies.index')}}">
                Vagas
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">
                  Eventos
                </a>
              </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Forum
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Infra - Redes</a></li>
                <li><a class="dropdown-item" href="#">Infra - Hardware</a></li>
                <li><a class="dropdown-item" href="#">Desenvolvimento</a></li>
              </ul>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('vacancies.index')}}">
                Classificados
              </a>
              </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="#">
                Contato
              </a>
            </li>
            <li class="nav-item">
            @guest
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('logout')}}">Sair</a></li>
                <li><a class="dropdown-item" href="{{route('companies.create')}}">Cadastrar Empresa</a></li>
                <li><a class="dropdown-item" href="#">Gerenciar Vagas</a></li>
              </ul>
            </li>
            @endguest
            <li class="button-group">
            <a href="{{route('vacancies.create')}}" class="button btn btn-common">Postar Vagas</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mobile-menu" data-logo="{{ asset('assets/img/logo-mobile.png') }}"></div>
  </nav>
  <!-- Navbar End -->
