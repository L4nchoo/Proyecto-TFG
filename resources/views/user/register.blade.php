@extends('theme.base')

@section('content')

<div id="general">
  <!-- Esta clase contiene la interfaz para poder crear un nuevo usuario para poder loguearse. -->
    <h2>REGISTER</h2>
    <form class="mt-4" method="POST" action="">   
      @csrf    <!-- cross-site request forgery; sirve para proteger los datos de ataques de vulnerabilidad no autorizados. --> 
        <input type="name" placeholder="Nombre" id="name" name="name"><br/><br/>
        <input type="email" placeholder="Email" id="email" name="email"><br/><br/>
        <input type="password" placeholder="Contraseña" id="password" name="password"><br/><br/>
        <input type="password" placeholder="Repita la contraseña" id="password_confirmacion" name="password_confirmacion"><br/><br/>
        <button type="submit" class="btn btn-outline-secondary btn-lg" id="boton">Enviar</button>
    </form>

</div>

@endsection

<!-- Empieza el css que he usado en esta pagina web. -->
<style type="text/css">
#general {        
  height: 390px;
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
#boton{     
  width: 120px;
  margin-left: 35px;
}
</style>
