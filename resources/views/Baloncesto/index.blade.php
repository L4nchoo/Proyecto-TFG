@extends('theme.base')

@section('content')
    

<div> 
    <h1 class="container py-3 text-center">LANCHO F.C.</h1>
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
    
    <!-- Este div contiene el listado de jugadores que jugan al baloncesto -->
    <div class="container py-5 text-center">
        <h1> Listado de jugadores de baloncesto</h1>

        <br/>
        
        <!-- Este mensaje aparece cuando el dato ha sido modificado correctamento o es nuevo y se ha agregado. -->
        @if (Session::has('mensaje'))
            <div class="alert alert-info my5">{{Session::get('mensaje')}}</div>
        @endif

        <br/>
        
        <!-- Esta es la tabla en la que se muestran los datos, tiene 6 columnas y la cantidad de datos que aparecen por pagina son de 4. 
        Este dato esta definido en lo controllers de baloncesto con la funcion: "Jugador::paginate(4)"-->
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Nacionalidad</th>
                <th>Equipo</th>
                <th>Dorsal</th> 
                <th>Acciones</th> 
            </thead>
            <br/>
            <tbody>
                <!-- Con este forelse, lo que hacemos es rellenar los datos de la tabla baloncesto -->
                @forelse ($baloncestos as $detail)   
                <tr>                 
                    <td>{{$detail->nombre}}</td>
                    <td>{{$detail->edad}}</td>
                    <td>{{$detail->nacionalidad}}</td>
                    <td>{{$detail->equipo}}</td>
                    <td>{{$detail->dorsal}}</td>
                    <td>
                        <!-- En los botones de editar o eliminar, esta definida la ruta a ejecutar. -->
                        <a href="{{ route('baloncesto.edit',$detail)}}" disable class="btn btn-warning btn-sm">EDITAR</a>
                        <form action="{{ route('baloncesto.destroy',$detail)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" disable class="btn btn-danger btn-sm">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
                @empty                
                <!-- Uso el empty para que si la tabla esta vacio lo indique -->
                <tr>
                    <td colspan="7"><h3>Sin registros</h3></td>
                </tr>
                    
                @endforelse
            </tbody>
        </table>

        <br/>
        
        {{$baloncestos->links()}}

        <br/>

        <!-- Este es el boton para ir a la pagina de crear jugadores. -->
        <a href="{{ route('baloncesto.create')}}" class="btn btn-primary btn-lg">Añadir jugador</a>
           <br/>
           <br/>
        <!-- Este es el boton para volver a la pagina anterior, en este caso para ir a la pagina de incio. -->
        <a href="http://localhost/proyectofinal/public/index/" class="btn btn-outline-secondary btn-lg">Volver</a>
    </div>
@endsection