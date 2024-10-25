<?php

namespace App\Http\Controllers;

use App\Models\BATERIA;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use Exception;

class BATERIAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BATERIA::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Tipo' => 'required',
            'Capacidad' => 'required',
            'Voltaje' => 'required',
            'Uso' => 'required',
        ]);      
        
        if ($validator->fails()) 
        {
            return response()->json(["message"=>"Error al validar Registro"]);                        
        }
        
        try
        {
            $bateria = new BATERIA;
            $bateria->Tipo = $request->Tipo;
            $bateria->Capacidad = $request->Capacidad;
            $bateria->Voltaje = $request->Voltaje;
            $bateria->Uso = $request->Uso;
            $bateria->save();
            return response()->json(["message"=>"Registro Exitoso"]);            
        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"Erro al crear Registro"]);            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
       return BATERIA::all();
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        //return response()->json($request);
        $validator = Validator::make($request->all(), [
            'Tipo' => 'required',
            'Capacidad' => 'required', 
            'Voltaje' => 'required',
            'Uso' => 'required'
          ]);
        
          if($validator->fails()) {
            return response()->json(['message' => 'Validación incorrecta']);
          }
        
          $bateria = Bateria::find($id);
        
          if(!$bateria) {
            return response()->json(['error' => 'Batería no encontrada'], 404);
          }
        
          $bateria->Tipo = $request->Tipo;
          $bateria->Capacidad = $request->Capacidad; 
          $bateria->Voltaje = $request->Voltaje;
          $bateria->Uso = $request->Uso;
        
          $bateria->save();
        
          return response()->json(['bateria' => $bateria, 'message' => 'Actualizado correctamente']);
          
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BATERIA $bATERIA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        BATERIA::destroy($id);
        return response()->json(["message"=>"Eliminacion Existosa"]);    
    }
}
