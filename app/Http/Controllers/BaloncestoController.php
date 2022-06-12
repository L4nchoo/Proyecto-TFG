<?php

namespace App\Http\Controllers;

use App\Models\Baloncesto;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class BaloncestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* Esta funcion lo que hace es en la view Baloncesto.index seleccionar los datos qeu tiene la tabla baloncesto y mostralos en la tabla que hay en esa clase
    con un rango maximo de 4 filas*/
    public function index()
    {
        $baloncestos = Baloncesto::paginate(4);
        return view('Baloncesto.index')->with('baloncestos',$baloncestos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /* Esta funcion lo que hace es coger todos los datos que se han puesto en el formulario y los agrega a la base de datos como un insert*/
    public function create()
    {
        $collection = Baloncesto::all();
        return view('Baloncesto.formulario');
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

        $baloncesto = Baloncesto::create($request->only('nombre','edad','nacionalidad','equipo','dorsal'));
        Session::flash('mensaje', 'Jugador añadido con exito');
        return redirect()->route('baloncesto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Baloncesto  $baloncesto
     * @return \Illuminate\Http\Response
     */
    public function show(Baloncesto $baloncesto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Baloncesto  $baloncesto
     * @return \Illuminate\Http\Response
     */
    
    /* Esta funcion lo que hace es coger todos los datos que se han puesto en el formulario y los edita a la base de datos como un update*/
    public function edit(Baloncesto $baloncesto)
    {
        return view('baloncesto.formulario')-> with('baloncesto', $baloncesto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baloncesto  $baloncesto
     * @return \Illuminate\Http\Response
     */
    
    /* Esta funcion lo que hace es validar los datos que hay en el formulario antes de ser modificados, lo indica por un mensaje
    y te retorna al index.*/
    public function update(Request $request, Baloncesto $baloncesto)
    {
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required|gte:0|integer',
            'nacionalidad' => 'required',
            'equipo' => 'required',
            'dorsal' => 'required|gte:0|integer'
        ]);

       $baloncesto->nombre = $request['nombre'];
       $baloncesto->edad = $request['edad'];
       $baloncesto->nacionalidad = $request['nacionalidad'];
       $baloncesto->equipo = $request['equipo'];
       $baloncesto->dorsal = $request['dorsal'];
       $baloncesto->save();
        
        Session::flash('mensaje', 'Jugador modificado');
        return redirect()->route('baloncesto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baloncesto  $baloncesto
     * @return \Illuminate\Http\Response
     */
    
    /* Esta funcion lo que hace es eliminar el dato indicado(como un delete) y te retorna al index.*/
    public function destroy(Baloncesto $baloncesto)
    {
        $baloncesto->delete();

        Session::flash('mensaje', 'Jugador eliminado');
        return redirect()->route('baloncesto.index');
    }
}
