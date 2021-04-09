

<!-- ======= Hero Section ======= -->


<section id="topbar" class="header-transparent">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i style="color:#5E8A75" class="icofont-envelope"></i><a style="color:#1a1e38"href="mailto:jfbgoncalves@gmail.com">jfbgoncalves@gmail.com</a>
        <i style="color:#5E8A75"class="icofont-phone"></i> +351 913 525 058
      </div>
      <div class="social-links float-right">
        <a style="color:#5E8A75"href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a style="color:#5E8A75"href="#" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" >
    <div class="container" class="header-transparent">

      <div class="logo float-left pt-2 ">
       
         <a href="{{route('inicio')}}"><img src="{{asset('mamba/img/logo.png')}}" alt="" class="img-fluid" width="347px"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block" class="header-transparent">
        <ul>
          <li class="active"><a style="color:#5E8A75" href="{{route('inicio')}}">Início</a></li>
          <li><a style="color:#5E8A75" href="#about">Sobre nós</a></li>
          <li><a style="color:#5E8A75"href="#services">Serviços</a></li>
          <li><a style="color:#5E8A75"href="{{route('pedidos.create')}}">Fazer Pedido</a></li>
          <li><a style="color:#5E8A75"href="{{route('pedidos.index')}}">Seus Pedidos</a></li>
          <li><a style="color:#5E8A75"href="#contact">Contacte-nos</a></li>
          @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                      </li>
                        
                        
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registar') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right text-white navbar-dark bg-dark " aria-labelledby="navbarDropdown ">
                            
                            <a class="dropdown-item text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
         
        </ul>

        
      </nav><!-- .nav-menu -->

    </div>

    
  </header>