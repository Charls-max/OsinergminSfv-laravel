@extends('layouts.app')

@section('content')

<div class="navbar-dark bg-dark container-fluid">
    <nav class="navbar navbar-expand-lg container">
      <a class="navbar-brand" href="#">Logo
      <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Logo 2
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/empresas">Empresas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Tarifas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/fichas">Fichas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>         
        </ul>       
      </div>
    </nav>
  </div>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Osinergmin</h1></div>

                <div class="card-body">        
                    <p>Es una institución pública adscrita a la Presidencia del Consejo de Ministros del Perú y está encargada de supervisar que las empresas eléctricas, las de combustibles y las del régimen general de Minería del Perú cumplan las normas legales de las actividades que desarrollan. Fue reconocida por ser la primera institución pública peruana en ganar la Medalla de Plata del Premio Iberoamericano de la Calidad 2011</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- inicio de card -->
<div class="container mt-4">
    <div class="card-deck">

    <div class="card">
          <img class="card-img-top img-fluid" src="images/fondo-1.png" alt="Card image cap">
          <div class="text-center">
            <img src="images/ignacio.png" alt="" class="img-fluid yoimagen rounded-circle" height="100px" width="100px">
          </div>
          <div class="card-block">
            <h4 class="card-title">Oficina Virtual</h4>
            <p class="card-text">Bienvenido a la ​Oficina Virtual de Osinergmin destinada a la atención de los trámites de los agentes (inversionistas, empresas) del sector energético-minero.
        <a href="https://www.osinergmin.gob.pe/seccion/institucional/acerca_osinergmin/oficina-virtual" target="_blank">... [Saber más]</a></p>
          </div>
          <div class="card-footer text-center">
            <a href="#"><i class="fa fa-facebook mx-2"></i></a>
            <a href="#"><i class="fa fa-twitter mx-2"></i></a>
            <a href="#"><i class="fa fa-youtube-play mx-2"></i></a>
          </div>
        </div>   
    
    <div class="card">
        <img class="card-img-top img-fluid" src="images/fondo-1.png" alt="Card image cap">
        <div class="text-center">
        <img src="images/ignacio.png" alt="" class="img-fluid yoimagen rounded-circle" height="100px" width="100px">
        </div>
        <div class="card-block">
        <h4 class="card-title">Cartas de Servicios</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
        </div>
        <div class="card-footer text-center">
        <a href="#"><i class="fa fa-facebook mx-2"></i></a>
        <a href="#"><i class="fa fa-twitter mx-2"></i></a>
        <a href="#"><i class="fa fa-youtube-play mx-2"></i></a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top img-fluid" src="images/fondo-1.png" alt="Card image cap">
        <div class="text-center">
        <img src="images/ignacio.png" alt="" class="img-fluid yoimagen rounded-circle" height="100px" width="100px">
        </div>
        <div class="card-block">
        <h4 class="card-title">La Universidad</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer text-center">
        <a href="#"><i class="fa fa-facebook mx-2"></i></a>
        <a href="#"><i class="fa fa-twitter mx-2"></i></a>
        <a href="#"><i class="fa fa-youtube-play mx-2"></i></a>
        </div>
    </div>
    </div>
</div>


@endsection
