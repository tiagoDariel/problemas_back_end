<?php

namespace App\Http\Controllers\biblioteca;

use App\Http\Controllers\Controller;
use App\Models\biblioteca\Emprestimo;
use App\Models\biblioteca\Livro;
use App\Models\biblioteca\Usuario;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function listLivro()
    {
        return Livro::with('locador')->get();
    }

    public function createLivro(Request $request)
    {
        return Livro::create($request->all());
    }

    public function updateLivro(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->usuario_id = $request->usuario_id;
        $livro->entrega = $request->entrega;
        $livro->devolucao = $request->devolucao;
        $livro->save();
    }
    
    public function listUsuario()
    {
        return Usuario::with('livro')->get();
    }
    
    public function createUsuario(Request $request)
    {
        return Usuario::create($request->all());
    }

    public function print($id) {
        return Usuario::with('livro')->findOrFail($id);
    }
}
