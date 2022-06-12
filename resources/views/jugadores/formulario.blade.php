@extends('theme.base')

@section('content')
    
<div> 
    <h1 class="container py-3 text-center">LANCHO F.C.</h1></div>  
    <!-- Este div contiene los botones para poder cambiar de deporte -->
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h4 class="text-center">FÚTBOL</h4>
            <a href = "http://localhost/proyectofinal/public/jugador" class="btn btn-info btn-lg"> JUGADORES</a>	
        </div>
        <div class="col text-center">
          <h4 class="text-center">BALONCESTO</h4>
          <a href = "http://localhost/proyectofinal/public/baloncesto" class="btn btn-info btn-lg"> JUGADORES</a>	
        </div>          
      </div>
    </div>  

    <!-- Este div contiene el formulario -->
    <div class="container py-5 text-center">

        <!-- Con este if, lo que hago es identificar si el usuario va a añadir un jugador nuevo o va a modificar uno ya existente. 
        En el caso de que sea nuevo, en el h1 se pone Crear jugador, en el caso de que sea para modificar uno, el h1 es el de editar. -->
        @if (isset($jugador))
            <h1> Editar jugador</h1>
            <br/>
        @else
            <h1> Crear jugador</h1>
            <br/>            
        @endif

        <!-- Con este if, lo que hago es identificar si el usuario va a añadir un jugador nuevo o va a modificar uno ya existente. 
        En el caso de que sea nuevo, en el el formulario se encuentra vacio, en el caso de que sea para modificar , el formulario se encuentra con los datos
        ya insertados. -->
        @if (isset($jugador))
        <form action="{{ route('jugador.update', $jugador)}}" method="post"> 
            @method('PUT')      
        @else
        <form action="{{ route('jugador.store')}}" method="post">            
        @endif

            @csrf<!-- cross-site request forgery; sirve para proteger los datos de ataques de vulnerabilidad no autorizados. -->
            
            <!-- Este div sirve para añadir el nombre del jugador, en el caso de que sea para editar un nombre ya existente y que aparezca el nombre anterior, uso el value.
            En el caso de que el dato sea erroeno, aparece un mensaje indicandolo -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre y apellido del jugador" value="{{old('nombre') ??  @$jugador->nombre}}">
                <p class="form-text">Escriba el nombre y primer apellido del jugador</p>
                @error('nombre')                    
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Este div sirve para añadir la edad del jugador, en el caso de que sea para editar una edad ya existente y que aparezca la edad anterior, uso el value.
            En el caso de que el dato sea erroeno, aparece un mensaje indicandolo -->
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" class="form-control" placeholder="Edad del jugador" value="{{old('edad') ??  @$jugador->edad}}">
                <p class="form-text">Escriba la edad del jugador</p>
                @error('edad')                    
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Este div sirve para añadir la nacionalidad del jugador, en el caso de que sea para editar una ya existente y que aparezca la anterior, uso el value.
            En el caso de que el dato sea erroeno, aparece un mensaje indicandolo -->            
            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" name="nacionalidad" class="form-control" placeholder="Nacionalidad del jugador" value="{{old('nacionalidad') ??  @$jugador->nacionalidad}}">
                <p class="form-text">Escriba la nacionalidad del jugador</p>
                @error('nacionalidad')                    
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Este div sirve para añadir el equipo del jugador, en el caso de que sea para editar un equipo ya existente y que aparezca el nombre anterior, uso el value.
            En esta opcion, he creado un desplegable con las opciones. EN el caso de que no se eliga ninguna opcion, salta un mensaje de error.-->
            <div class="mb-3">
                <label for="equipo" class="form-label">Equipo</label>                
                <select type="text" name="equipo" class="form-control" placeholder="Equipo del jugador" value="">
                    <option value=""></option>
                    <option value="Real Madrid">Real Madrid</option>
                    <option value="Rayo Vallecano">Rayo Vallecano</option>
                    <option value="Leganes">Leganes</option>
                </select>
                <p class="form-text">Selecion el equipo del jugador</p>
                @error('equipo')                    
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Este div sirve para añadir el dorsal del jugador, en el caso de que sea para editar un dorsal ya existente y que aparezca el dorsal anterior, uso el value.
            En el caso de que el dato sea erroeno, aparece un mensaje indicandolo -->
            <div class="mb-3">
                <label for="dorsal" class="form-label">Dorsal</label>
                <input type="number" name="dorsal" class="form-control" placeholder="Dorsal del jugador" value="{{old('dorsal') ??  @$jugador->dorsal}}">
                <p class="form-text">Escriba el dorsal del jugador</p>
                @error('dorsal')                    
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            
         
        <!-- Este if sirve para saber si el boton para guardar los datos tiene que ser guardar o editar. -->     
        @if (isset($jugador))
            <button type="submit" class="btn btn-success btn-lg"> Editar jugador</button>            
        @else
            <button type="submit" class="btn btn-success btn-lg"> Guardar jugador</button>          
        @endif       

        </form>
           <br/>

        <!-- Este es el boton para volver a la pagina anterior, en este caso para ver los datos de los jugadores que hay registrados en futbol. -->
        <a href="{{ route('jugador.index')}}" class="btn btn-outline-secondary btn-lg">Volver</a>

    </div>
@endsection