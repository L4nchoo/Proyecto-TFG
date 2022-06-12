
<!-- ESTA ES EL CODIGO BASE DE TODAS LAS CALSES QUE HAY EN EL PROYECTO -->

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('js/javascript.js')}}"></script>
    <link >
    <title>LANCHO F.C</title>
  </head>
  <body>    
    <nav>
      <div id="divTitulo">
        <div id="divNombreEmpresa">          
          <a href = "http://localhost/proyectofinal/public/index/">
            <p id = "Nombre_empresa">Lancho F.C.</p></a></div>        
       <!-- Este if comprueba si el usuario esta dentro de una sesion o si no esta logueado -->
        @if (auth()->check())
        <div id="divLogin">              
          <div id="prueba1"><p id = "registro2">Welcome <b>{{auth()->user()->name}}</b></p></div>
          <div id="prueba2"><a href = "{{route('login.destroy')}}" id = "registro" class="btn btn-outline-light py-1"> Log Out</a></div>
        </div>    
        @else
        <div id="divLogin">              
          <div id="prueba1"><a href = "http://localhost/proyectofinal/public/sesion" id = "registro" class="btn btn-outline-light py-1 ">Log In</a></div>
          <div id="prueba2"><a href = "http://localhost/proyectofinal/public/registrarse" id = "registro" class="btn btn-outline-light py-1"> Register</a></div>
        </div>          
        @endif
      </div>
    </nav>
    
    
    @yield('content')
    <!-- Este comando sirve para que a partir de aqui, se importe el codigo del resto de las otras clases -->
         

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    <!-- Empieza el css que he usado en esta pagina web. -->
    <style type="text/css">
      nav {
        color: black 
      }
        #divTitulo{
          background-color: #1cb2cc;
          height: 75px;
        }
        #divNombreEmpresa{
          margin-top: 15px;
          margin-left: 25px; 
          float : left;
        }            
          #Nombre_empresa{
            color: black;
            font-family:arial; 
            font-size : 30px;
            font-weight: bold;
          } 
        #divLogin{
          width: 150px;
          float : left;
          margin-left: 1650px;
        }
          
          #prueba1{
            height: 45px;
            width: 150px;
            margin-top: 20px;
            }            
          #prueba2{
            height: 50px;
            width: 150px;
            float: left;
            margin-left: 90px;
            margin-top: -45px
          }          
          #registro{
            color: black;
            font-family:arial; 
            font-size : 20px;      
          }                   
          #registro2{
            color: black;
            font-family:arial; 
            font-size : 20px;
            margin-left:-80px;   
            padding-top:5px;      
          }
      li {
        list-style:none;
        border-color: white;
      }
      a{ text-decoration: none; 
         color: black;
      }
      body{
      }
    </style>

  </body>
</html>