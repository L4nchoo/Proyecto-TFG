<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /* Esta funcion lo que hace es en la view jugadores.index seleccionar los datos que tiene la tabla judaores de futbol y mostralos en la tabla que hay en esa clase
    con un rango maximo de 4 filas*/
    public function index()
    {        
        $jugadors = Jugador::query()
                ->when(request('sort'), function($query,$sort){
                    $direction = request('direction');
                    return match($sort){
                        'nombre' => $query->orderBy('nombre',$direction),
                        'edad' => $query->sortByStatus($direction),
                        'nacionalidad'=> $query->sortByStatus($direction),
                        'equipo'=> $query->sortByStatus($direction),
                        'dorsal'=> $query->sortByStatus($direction),
                    };
                })
                ->paginate(4);

        return view('jugadores.index')->with('jugadors',$jugadors);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     /* Esta funcion lo que hace es coger todos los datos que se han puesto en el formulario y los agrega a la base de datos como un insert*/
    public function create()
    {
        $collection = Jugador::all();
        return view('Jugadores.formulario', compact('collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /* Esta funcion lo que hace es validar los datos que hay en el formulario antes de ser insertados, comprueba que su orden sea el correcto, si es asi lo indica
    y te retorna al index.*/
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required|gte:0|integer',
            'nacionalidad' => 'required',
            'equipo' => 'required',
            'dorsal' => 'required|gte:0|integer'
        ]);

        $jugador = Jugador::create($request->only('nombre','edad','nacionalidad','equipo','dorsal'));
        Session::flash('mensaje', 'Jugador añadido con exito');
        return redirect()->route('jugador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugador)
    {        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
        
    /* Esta funcion lo que hace es coger todos los datos que se han puesto en el formulario y los edita a la base de datos como un update*/
    public function edit(Jugador $jugador)
    {
        return view('Jugadores.formulario')-> with('jugador', $jugador);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    
    /* Esta funcion lo que hace es validar los datos que hay en el formulario antes de ser modificados, lo indica por un mensaje
    y te retorna al index.*/
    public function update(Request $request, Jugador $jugador)
    {
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required|gte:0|integer',
            'nacionalidad' => 'required',
            'equipo' => 'required',
            'dorsal' => 'required|gte:0|integer'
        ]);

       $jugador->nombre = $request['nombre'];
       $jugador->edad = $request['edad'];
       $jugador->nacionalidad = $request['nacionalidad'];
       $jugador->equipo = $request['equipo'];
       $jugador->dorsal = $request['dorsal'];
       $jugador->save();
        
        Session::flash('mensaje', 'Jugador modificado');
        return redirect()->route('jugador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    
    /* Esta funcion lo que hace es eliminar el dato indicado (como un delete) y te retorna al index.*/
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();

        Session::flash('mensaje', 'Jugador eliminado');
        return redirect()->route('jugador.index');
    }
}
