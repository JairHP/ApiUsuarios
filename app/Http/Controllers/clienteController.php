<?php

namespace App\Http\Controllers;
use App\Models\cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
     //LISTAR TODOS LOS REGISTROS 
     public function list()
     {
          $clientes = cliente::all();
          return response()->json($clientes);
     }
 
 
     //LISTAR UN REGISTRO EN ESPECIDFICO
     public function show(cliente $cliente)
     {
         return response()->json([
             'res' => true,
             'cliente' => $cliente
         ], 200);
     }
 
     //CREAR UN NUEVO REGISTRO
     public function store(Request $request)
     {
      cliente::create($request->all());
         return response()->json([
             'res' => true,
             'msg' => 'cliente creado correctamente'
         ], 200);
     }
 
     //ACTUALIZAR UN REGISTRO 
     public function update(Request $request, cliente $cliente)
     {
         $cliente->update($request->all());
         return response()->json([
             'res' => 'true',
             'mensaje' => 'cliente actualizado correctamente'
         ], 200);
     }
 
     public function destroy(cliente $cliente)
     {
         $cliente->delete();
         return response()->json([
             'res' => 'true',
             'mensaje' => 'cliente eliminado correctamente'
         ], 200);
     }
}
