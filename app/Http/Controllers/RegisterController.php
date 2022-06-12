<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller{
    
     /* Esta funcion lo que hace es retornar la view de user.register*/
    public function create(){
        return view('user.register');
    }

    /* Esta funcion los que hace es validar los datos que hay en el formulario antes de ser insertados, comprueba que su orden sea el correcto
    y te retorna al index.*/
    public function store(){
       
        $user = User::create(request(['name','email','password']));

        auth()-> login($user);
        return redirect()->to('index');
    }
}
