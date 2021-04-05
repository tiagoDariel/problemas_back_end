<?php

namespace App\Http\Controllers;

use App\Models\Matriz;
use Illuminate\Http\Request;

class MatrizController extends Controller
{
    public function listXY() 
    {
        return Matriz::all();
    }

    public function addXY(Request $request) 
    {
       Matriz::create($request->all());
    }

    public function deleteXY($id)
    {
        Matriz::findOrFail($id)->delete();
    }
}
