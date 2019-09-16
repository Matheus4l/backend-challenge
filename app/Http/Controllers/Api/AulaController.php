<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cursos;
use App\Models\Aulas;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Aulas::with('categorias')->get(); 

    }
   
    public function store(Request $request)
    {
        return Aulas::create($request->all());
    }

   
    public function show($id)
    {
        return Aulas::findOrFail($id);
    }

    
    public function update(Request $request, $id)
    {
        $aulas = Aulas::findOrFail($id);
        $aulas->update($resquest->all());
    }

    
    public function destroy($id)
    {
         $aulas = Aulas::findOrFail($id);
         $aulas->destroy();
    }
}
