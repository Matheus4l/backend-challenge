<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aulas;
use App\Models\Cursos;

class CursoController extends Controller
{
    public function index()
    {
        return Cursos::with('aulas')->get(); 

    }
   
    public function store(Request $request)
    {
        return Cursos::create($request->all());
    }

   
    public function show($id)
    {
        return Cursos::findOrFail($id);
    }

    
    public function update(Request $request, $id)
    {
        $curso = Cursos::findOrFail($id);
        $curso->update($resquest->all());
    }

    
    public function destroy($id)
    {
         $curso = Cursos::findOrFail($id);
         $curso->destroy();
    }
}
