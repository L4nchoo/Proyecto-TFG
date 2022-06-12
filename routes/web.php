<?php

use App\Http\Controllers\AdminFutbolController;
use App\Http\Controllers\BaloncestoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
    Estas son todas las rtas que he necesitado crear para poder crear el proyecto
    Lo que viene entre comillas simples despues del "get", es como se llama la pagina web en internet,
    y lo que retorna es el nombre de la clase, donde esta el codigo.
*/

Route::get('/', function () {/*Esta ruta es la iniciañl cuando acedes al proyecto*/
    return view('welcome');
});

Route::get('index', function () {/*Esta ruta se accede a ella una vez te has logueado o registrado*/
    return view('registro');
});
Route::get('estadios_futbol', function () {/*Esta ruta te lleva a ver los estadios que hay de futbol*/
    return view('estadios/futbol');
});
Route::get('estadios_baloncesto', function () {/*Esta ruta te lleva a ver los estadios que hay de baloncesto*/
    return view('estadios/baloncesto');
});


/*
    Estas rutas sirven para que los datos que introduzcas en ellas se queden registrados en la base de datos.
    Lo que viene entre comillas simples despues del "get", es como se llama la pagina web en internet,
    la SessionController, es para que sepa los datos que se van a introducir, y depende de si se `pone create, destroy, store,
    en la clase SessionController se hace una funcion o otra y el name es como se llama la clase de larabel.
*/
Route::get('/sesion', [SessionController::class, 'create'])->name('login.index');
Route::post('/sesion', [SessionController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionController::class, 'destroy'])->name('login.destroy');

Route::get('/registrarse', [RegisterController::class, 'create'])->name('register.index');
Route::post('/registrarse', [RegisterController::class, 'store'])->name('register.store');

Route::resource('jugador', JugadorController::class);
Route::resource('baloncesto', BaloncestoController::class);

/* 

Para poder crear este proyecto en laravel, en la consola escribimos composer create-project laravel/laravel NombreDelProyecto

Todas estas rutas, clases, names... se crean cuando en la consola de la aplicaion creamos una tabla y migramos(con php artisan migrate)
las cosas para que se conecten entre ellas(con php artisan make:auth).
Con el comando php artisan route:list, ves todo lo que se ha creado de rutas, migraciones, tablas de bases de datos....
*/
