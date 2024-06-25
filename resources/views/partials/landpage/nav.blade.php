<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="assets/img/logo/logo.png" alt="">
      <h1 class="d-flex align-items-center">VetGuia</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{ url('/') }}" class="active">Inicio</a></li>
        <li class="dropdown"><a href="#"><span>Guía</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="#">Médicos</a></li>
            <li><a href="#">Clínicas</a></li>
            <li><a href="#">Tiendas</a></li>
            <li><a href="#">Salas de Spa</a></li>
            <!--<li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>-->
          </ul>
        </li>
        <li><a href="blog.html">Noticias</a></li>
        <li><a href="#contact">Contáctanos / Promocionate</a></li>
        
        <!--<li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="team.html">Team</a></li>-->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalLogin">
          Login
        </button>
      </ul>
    </nav><!-- .navbar -->
  </div>