<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidacionMensajeReques;

class PaginaController extends Controller
{
    public function __construct()
    {

        $this->middleware('RedirigirseAutenticado',['only'=>['home']]);
        $this->middleware('auth', ['only'=>['administracion']]);



    }
    public function home()
    {

        return view('home');
    }



    public function administracion (){

        $todosUS = User::all();
        return view('administracion.usuariosAdministracion.index',compact('todosUS'));
    }


}
