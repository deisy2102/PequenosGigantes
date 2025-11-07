<?php



namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('front.registro');
    }

    public function store(Request $request)
    {
        // Validaciones
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:usuarios,correo',
            'edad' => 'required|integer',
            'sexo' => 'required',
            'grado' => 'required',
            'contrasena' => 'required|min:6|confirmed',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'edad' => $request->edad,
            'sexo' => $request->sexo,
            'grado' => $request->grado,
            'contrasena' => bcrypt($request->contrasena),
            'id_rol' => 2,
        ]);

        return redirect('/registro')->with('success', 'Usuario registrado correctamente');
    }
}
