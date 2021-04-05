<?php

namespace App\Http\Controllers;

use App\Models\Medidas;
use Illuminate\Http\Request;

class MedidasController extends Controller
{
    public function listMedidas() 
    {
        return Medidas::all();
    }

    public function addMedidas(Request $request) 
    {
       Medidas::create($request->all());
    }

    public function deleteMedida($id)
    {
        Medidas::findOrFail($id)->delete();
    }
}
