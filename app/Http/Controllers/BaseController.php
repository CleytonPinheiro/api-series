<?php
namespace App\Http\Controllers;
use App\Serie;
use Illuminate\Http\Request;

 abstract class BaseController
{
    protected $classe;

    public function index()
    {
        return $this->classe::paginate($request->per_page);
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                $this->classe::create(['nome'=>$request->nome]),201);
    }

    public function show(int $id)
    {
        $recurso=$this->classe::find($id);
        if(is_null($serie)) {
            return response()->json('', 204);
        }
        return response()->json($serie);
    }

    public function update(int $id, Request $request)
    {
        $recurso=$this->classe::find($id);
        if (is_null($recurso)) {
            return response ()->json([
                'erro'=>'Recurso não encontrado'],404);
        }
        $recurso->fill($request->all());
        $recurso->save();
        return $recurso;
    }

    public function destroy(int $id)
    {
        $qtdRecursosRemovidos=$this->classe::destroy($id);
        if ($qtdRecursosRemovidos===0){
            return response()->json([
                'erro'=>'Recurso não encontrado'
             ], 404);
        }
        return response()->json('',204);
    }
}
