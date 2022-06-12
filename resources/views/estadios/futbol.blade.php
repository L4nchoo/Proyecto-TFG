@extends('theme.base')

@section('content')
    
  <div> 
    <h1 class="container py-3 text-center">LANCHO F.C.</h1>
  </div>  
  <!-- Este div contiene los botones para poder cambiar de estadios dependiendo el deporte --> 
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h4 class="text-center">ESTADIOS</h4>
          <a href = "http://localhost/proyectofinal/public/estadios_futbol" class="btn btn-info btn-lg"> FUTBOL</a>	
      </div>
      <div class="col text-center">
        <h4 class="text-center">ESTADIOS</h4>
        <a href = "http://localhost/proyectofinal/public/estadios_baloncesto" class="btn btn-info btn-lg"> BALONCESTO</a>	
      </div>          
    </div>
  </div>  
    <br/>
    <br/>    
    <h3 class="container py-3 text-center">ESTADIOS:</h3>
    <br/>    
    <!-- Esto es un intento de galeria de imagenes con dos botones pero el codigo del javascript no me funciona.
      <div id="RealMadrid">
        <div id = "fechaizq" OnClick = "fechaizq()"></div>
        <div id = "fechader" OnClick = "fechader()"></div>
    </div>-->

    <!-- Estos div contienen el nombre del estadio, dos imagenes del estadio y la ubicacion en la que se encuentran --> 
    <div id="RealMadrid">
      <h4 class="container py-3 text-center">REAL MADRID</h4>
      <div id = "RealMadrid1"></div>
      <div id = "RealMadrid2"></div>
      <div id = "RealMadrid3"></div>
    </div>
    <div id="Rayo">
      <h4 class="container py-3 text-center">RAYO VALLECANO</h4>
      <div id = "Rayo1"></div>
      <div id = "Rayo2"></div>
      <div id = "Rayo3"></div>
    </div>
    <div id="Leganes">
      <h4 class="container py-3 text-center">LEGANES</h4>
      <div id = "Leganes1"></div>
      <div id = "Leganes2"></div>
      <div id = "Leganes3"></div>
    </div>
    <br/>
    <br/>
    <!-- Este es el boton para volver a la pagina anterior, en este caso para ir a la pagina de incio. -->
    <div id="volver"><a href="http://localhost/proyectofinal/public/index/" class="btn btn-outline-secondary btn-lg">Volver</a></div>
    <br/>
    <br/>
    <br/>
    <br/>
@endsection

    <!-- Empieza el css que he usado en esta pagina web. -->
  <style type="text/css">
    #RealMadrid {        
      height: 1050px;
      width: 1300px;
      margin:auto;
      border: 2px solid black; 
      border-radius: 25px;
    }      
      #RealMadrid1{        
        height: 452px;
        width: 600px;
        margin-top: 30px;
        margin-left: 25px;
        background-image: url('img/futbol/FutbolRealMadrid1.png');
        background-size : cover;
      }   
      #RealMadrid2{        
        height: 452px;
        width: 600px;
        margin-top: -452px;
        margin-left: 675px;
        background-image: url('img/futbol/FutbolRealMadrid2.png');
        background-size : cover;
      }   
      #RealMadrid3{        
        height: 452px;
        width: 600px;
        margin-top: 25px;
        margin-left: 350px;
        background-image: url('img/futbol/FutbolRealMadrid3.png');
        background-size : cover;
      }
      #Rayo{          
      height: 1050px;
      width: 1300px;
      margin:auto;
      margin-top: 50px;
      border: 2px solid black; 
      border-radius: 25px;
    }      
      #Rayo1{        
        height: 452px;
        width: 600px;
        margin-top: 30px;
        margin-left: 25px;
        background-image: url('img/futbol/FutbolRayo1.png');
        background-size : cover;
      }   
      #Rayo2{        
        height: 452px;
        width: 600px;
        margin-top: -452px;
        margin-left: 675px;
        background-image: url('img/futbol/FutbolRayo2.png');
        background-size : cover;
      }   
      #Rayo3{        
        height: 452px;
        width: 600px;
        margin-top: 25px;
        margin-left: 350px;
        background-image: url('img/futbol/FutbolRayo3.png');
        background-size : cover;
      }
      #Leganes{          
      height: 1050px;
      width: 1300px;
      margin:auto;
      margin-top: 50px;
      border: 2px solid black; 
      border-radius: 25px;
    }      
      #Leganes1{        
        height: 452px;
        width: 600px;
        margin-top: 30px;
        margin-left: 25px;
        background-image: url('img/futbol/FutbolLeganes1.png');
        background-size : cover;
      }   
      #Leganes2{        
        height: 452px;
        width: 600px;
        margin-top: -452px;
        margin-left: 675px;
        background-image: url('img/futbol/FutbolLeganes2.png');
        background-size : cover;
      }   
      #Leganes3{        
        height: 452px;
        width: 600px;
        margin-top: 25px;
        margin-left: 350px;
        background-image: url('img/futbol/FutbolLeganes3.png');
        background-size : cover;
      }
    #volver{
      height: 50px;
      width: 90px;
      margin: auto;
    }
	#fechaizq{
		width:50px;
		height: 50px;
		float:left;
		background-image:url('img/flecha2.png');
		background-size : cover;
		margin-top : 220px;
		margin-left : -100px;		
	}
	#fechader{
		width:50px;
		height: 50px;
		float:left;
		background-image:url('img/flecha2.png');
		background-size : cover;
		margin-left : 630px;
		margin-top : 220px;
		transform: scalex(-1);
	}    
  </style>

    <!-- Empieza el javascript que he usado en esta pagina web. -->
  <script type="text/javascript">    
    let x=0;
  function fechaizq(){
      switch(x){
          case 0:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid1.png')	;	
              
          x=2;
            break;
          case 1:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid2.png')	;
              
          x--;	
            break;
          case 2:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid3.png')	;
                
          x--;	
            break;          
        }		
  }
  function fechader(){
      switch(x){
          case 0:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid3.png')	;
            
          x++;
            break;
          case 1:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid2.png')	;
          
          x++;	
            break;
          case 2:
            document.getElementById('RealMadrid').style.backgroundImage = url('img/futbol/FutbolRealMadrid1.png')	;	
            
          x=0;	
            break;          
          }		
  }

  </script>