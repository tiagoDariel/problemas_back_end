<?php

namespace App\Http\Controllers\biblioteca;

use App\Http\Controllers\Controller;
use App\Models\biblioteca\Livro;
use App\Models\biblioteca\Usuario;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function listLivro()
    {
        return Livro::with('locador', 'emprestimo')->get();
    }

    public function createLivro(Request $request)
    {
        return Livro::create($request->all());
    }
    
    public function listUsuario()
    {
        return Usuario::with('livro')->get();
    }
    
    public function createUsuario(Request $request)
    {
        return Usuario::create($request->all());
    }
}
