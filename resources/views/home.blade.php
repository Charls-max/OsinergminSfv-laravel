@extends('master')
@section('seccion')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Osinergmin</title>  
</head>
<body>

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
        <div class="text-center">
        <img class="card-img-top img-fluid" src="images/fondo-1.png" style="height:100px;" alt="Card image cap">
        </div>
        <hr/>
      
        <div class="card-block mt-5">
          <h4 class="card-title">Oficina Virtual</h4>
          <p class="card-text">Bienvenido a la ​Oficina Virtual de Osinergmin destinada a la atención de los trámites de los agentes (inversionistas, empresas) del sector energético-minero
          <a href="https://www.osinergmin.gob.pe/seccion/institucional/acerca_osinergmin/oficina-virtual" target="_blank">... [Saber más]</a></p>
        </div>

        <div class="card-footer text-center mt-5">
          <a href="#"><i class="fa fa-facebook mx-2"></i></a>
          <a href="#"><i class="fa fa-twitter mx-2"></i></a>
          <a href="#"><i class="fa fa-youtube-play mx-2"></i></a>
        </div>
      </div>   
    
      <div class="card">
          <div class="text-center"> 
          <img class="card-img-top img-fluid" src="images/fondo-1.png" style="height:100px;" alt="Card image cap">
          </div>
          <hr/>
    
          <div class="card-block mt-5">
          <h4 class="card-title">Servicios Digitales</h4>
          <p class="card-text align-bottom">Osinergmin pone a tu disposición servicios digitales para que realices trámites o consultas sin salir de casa. Para ciudadanos, empresas y ciudadanos y empresas.
          <a href="https://www.osinergmin.gob.pe/SitePages/servicios-digitales.aspx" target="_blank">... [Saber más]</a> </p>
          </div>

          <div class="card-footer text-center mt-5">
          <a href="#"><span><i class="fa fa-facebook mx-2"></i></span></a>
          <a href="#"><i class="fa fa-twitter mx-2"></i></a>
          <a href="#"><i class="fa fa-youtube-play mx-2"></i></a>
          </div>
      </div>

      <div class="card">
          <div class="text-center mt-4"> 
          <img class="card-img-top img-fluid" src="images/uigv-logo-solo.png" style="width:250px;height:160px;" alt="Card image cap">
          </div>
          <hr/>

          <div class="card-block mt-2">
          <h4 class="card-title">La Universidad</h4>
          <p class="card-text">La Universidad Inca Garcilaso de la Vega es una institución de educación universitaria, con 53 años de experiencia formando profesionales competitivos        
          <a href="https://www.uigv.edu.pe/wp/" target="_blank">... [Saber más]</a> </p>
          </div>

          <div class="card-footer text-center mt-1">
          <a href="#"><i class="fa fa-facebook mx-2"></i></a>
          <a href="#"><i class="fa fa-twitter mx-2"></i></a>
          <a href="#"><i class="fa fa-youtube-play mx-2"></i></a>
          </div>
      </div>
    </div>
</div>

</body>
</html>

@endsection
