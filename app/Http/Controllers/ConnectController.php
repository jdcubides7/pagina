<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Hash;
use App\Models\Models\registro_usuarios as ModelsRegistroUsuarios;
use App\Models\Models\registro as ModelsRegistro;
use App\Models\User as ModelsUser;
//por revisar
use App\Models\registro;
use App\Models\Category;
use Illuminate\Foundation\Bootstrap\RegisterProviders;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\View\View;
/*BASE DE DATOS*/
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ConnectController extends Controller
{

    public function getPagina()
    {
        return view('connect.pagina');
    }
    //#d#1registro de datos de login (falta arreglar)
    public function getLogin()
    {
        return view('connect.login');
    }

    //#d2
    public function saveLogin(Request $request)
    {
        $category = new ModelsRegistroUsuarios();
        //$category  -> name = 'prueba'; 
        $category->correo = $request->correo;
        $category->password = bcrypt($request->password);
        $category->rol = $request->rol;
        $category->save();
        // dd($request);
        return redirect('/dashboard');
    }


    //#f1registro de datos de registro

    public function getRegistro()
    {
        return view('connect.registro');
    }
    //#f2
    //se usa para guardar el registro
    //   public function saveRegistro(Request $request)
    //   {
    //       $category = new ModelsRegistro(); 
    //       $category -> nombres = $request->nombres;
    //       $category -> apellidos = $request->apellidos;
    //       $category -> correo = $request->correo;
    //       $category -> telefono = $request->telefono;
    //       $category -> lenguajes = $request->lenguajes;
    //       $category -> save();
    //      // dd("registro almacenado exitosamente en la base de datos");
    //       return redirect('/registro');
    //     //  dd($request);
    //   }

    //

    public function saveRegistro(Request $request)
    {

        $category = new ModelsUser();
        $category -> name =$request->nombres;
        $category -> email = $request->correo;
        $category -> password = $request->password;
        $category->save();
        dd($request);

        //    $user = Users::create([
        //        'name' => $request->nombres,
        //   //     'apellidos' => $request->apellidos,
        //        'email' => $request->correo,
        //      //  'telefono' => $request->telefono,
        //        'password' => Hash::make($request->password)
        //    ]);
        //
        //        Auth::login($user);

       // return redirect('/login');
    }

    public function getConsulta()
    {
        return view('connect.login');
    }

    public function index()
    {
        return view('connect.login');
    }

    ///

    public function getdashboardLogin()
    {
        return view('connect.dashboard');
    }
}
