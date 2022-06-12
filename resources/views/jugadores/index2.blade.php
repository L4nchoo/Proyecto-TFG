@extends('theme.base')

@section('content')
<!-- Este index es el que he intentado crear sin los botones de editar y eliminar -->
<div> 
    <h1 class="container py-3 text-center">LANCHO F.C.</h1></div>  
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
        

    <div class="container py-5 text-center">
        <h1> Listado de jugadores de futbol</h1>

        <br/>
        @if (Session::has('mensaje'))
            <div class="alert alert-info my5">{{Session::get('mensaje')}}</div>
        @endif

        <br/>
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Nacionalidad</th>
                <th>Equipo</th>
                <th>Dorsal</th> 
            </thead>
            <br/>
            <tbody>
                @forelse ($jugadors as $detail)   
                <tr>                 
                    <td>{{$detail->nombre}}</td>
                    <td>{{$detail->edad}}</td>
                    <td>{{$detail->nacionalidad}}</td>
                    <td>{{$detail->equipo}}</td>
                    <td>{{$detail->dorsal}}</td>                    
                </tr>
                @empty
                <tr>
                    <td colspan="7"><h3>Sin registros</h3></td>
                </tr>
                    
                @endforelse
            </tbody>
        </table>

        <br/>
        
        {{$jugadors->links()}}

        <br/>

        <a href="{{ route('jugador.create')}}" class="btn btn-primary btn-lg">Añadir jugador</a>
           <br/>
           <br/>
        <a href="http://localhost/proyectofinal/public/" class="btn btn-outline-secondary btn-lg">Volver</a>
    </div>
@endsection