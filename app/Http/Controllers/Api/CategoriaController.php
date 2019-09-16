<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorias;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categorias::all(); 

    }
   
    public function store(Request $request)
    {
        return Categorias::create($request->all());
    }

   
    public function show($id)
    {
        return Categorias::findOrFail($id);
    }

    
    public function update(Request $request, $id)
    {
        $categorias = Categorias::findOrFail($id);
        $categorias->update($resquest->all());
    }

    
    public function destroy($id)
    {
         $categorias = Categorias::findOrFail($id);
         $aulas->destroy();
    }
}
