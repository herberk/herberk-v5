<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Lado izquierdo de Navbar -->
            @if (Auth::guest())
                <!-- Menus se ven si estar logeado -->
           @else
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}"> Escritorio</a></li>
                        <li><a href="{{ url('/prueba') }}"> Prueba</a></li>
                        <li><a href="{{ url('/tablas') }}"><i class="fa fa-address-card fa-fw" aria-hidden="true"></i> Tablas</a></li>
                        <li><a href="{{ url('/usuario') }}"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Usuario</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
        @endif
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                                <img src="{{ url('profile/avatar')  }}" width="25" height="23" class="img-circle" alt="User Image"/>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Cerrar Sesion </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                 @endguest
            </ul>
        </div>
    </div>
</nav>