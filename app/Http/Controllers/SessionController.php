<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller{
    
     /* Esta funcion lo que hace es retornar la view de user.login*/
    public function create(){
        
        return view('user.login');
    }
    
    /* Esta funcion los que hace es comprobar los datos que hay en el formulario para vewr si son correctos, si hay un error lo indica
    y te retorna al index.*/
    public function store(){
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors(['mensaje' => 'El email o la contraseña introducda es incorrecta']);
        }        
        return redirect()->to('index');
    }

    /*PARA CERRAR SESION*/
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
