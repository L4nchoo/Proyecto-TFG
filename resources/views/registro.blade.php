@extends('theme.base')

@section('content')
<br/><br/>
  <!-- Esta clase contiene el index de la web. Accedes a ella una vez ya te has registrado. Todas las paginas que hay en el proyecto, si haces click en el nombre que 
  hay arriba a la izquierda, accedes a esta. -->
    <div> 
      <h1 class="container py-3 text-center">LANCHO F.C.</h1> 
      <br/><br/>
      <div class="container">
        <div class="row">
          <h3 class="text-center">JUGADORES</h3>
          <div class="col text-center">
              <a href = "http://localhost/proyectofinal/public/jugador" class="btn btn-info btn-lg"> FUTBOL</a>	
          </div>
          <div class="col text-center">
            <a href = "http://localhost/proyectofinal/public/baloncesto" class="btn btn-info btn-lg"> BALONCESTO</a>	
          </div>          
        </div>
        <br/><br/>
        <div class="row">
          <h3 class="text-center">ESTADIOS</h3>
          <div class="col text-center">
              <a href = "http://localhost/proyectofinal/public/estadios_futbol" class="btn btn-info btn-lg"> FUTBOL</a>	
          </div>
          <div class="col text-center">
            <a href = "http://localhost/proyectofinal/public/estadios_baloncesto" class="btn btn-info btn-lg"> BALONCESTO</a>	
          </div>          
        </div>
      </div>  
      <div id="imagen"></div>
@endsection

<!-- Empieza el css que he usado en esta pagina web. -->
<style type="text/css">
  #imagen {        
    height: 500px;
    width: 1330px;
    background-image: url('img/imgPricipal.png');
    background-size : contain;
    background-repeat: no-repeat;    
    margin:auto;
    margin-top: 90px;
  }
  
  </style>
  
