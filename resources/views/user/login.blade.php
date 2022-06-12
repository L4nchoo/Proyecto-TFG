@extends('theme.base')

@section('content')

    <!-- Esta clase contiene la interfaz para poder acceder a la web con un usuario y contraseña. -->
    <div id="general">
        <h2>LOGIN</h2>
        <form class="mt-4" method="POST" action="">
          @csrf<!-- cross-site request forgery; sirve para proteger los datos de ataques de vulnerabilidad no autorizados. -->
            <input type="email" placeholder="Email" id="email" name="email"><br/><br/>
            <input type="password" placeholder="Contraseña" id="password" name="password"><br/><br/>
            @error('mensaje')
            <p id="error">El email o la contraseña introducda es incorrecta</p>                
            @enderror
            <button type="submit" class="btn btn-outline-secondary btn-lg" id="boton">Enviar</button>
        </form>

    </div>

@endsection

<!-- Empieza el css que he usado en esta pagina web. -->
<style type="text/css">
    #general {        
      height: 340px;
      width: 500px;
      background-color: white;
      margin:auto;
      margin-top: 50px;
      border: 2px solid black; 
      border-radius: 25px;
    }
    h2{
        text-align: center;
        padding-top: 15px;
    }
    form{
      padding-top: 15px;
      padding-left: 150px;
    }
    #error{  
      height: 60px;
      width: 190px;
      border: 2px solid red; 
      border-radius: 5px;
      background-color: rgb(235, 121, 121);
    }
    #boton{     
      width: 120px;
      margin-left: 35px;
    }
  </style>