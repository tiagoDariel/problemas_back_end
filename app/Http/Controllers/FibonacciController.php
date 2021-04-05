<?php

namespace App\Http\Controllers;

use App\Models\Fibonacci;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function listNumeros() 
    {
        return Fibonacci::all();
    }

    public function addNumeros(Request $request) 
    {
       Fibonacci::create($request->all());
    }

    public function deleteNumero($id)
    {
        Fibonacci::findOrFail($id)->delete();
    }


}
