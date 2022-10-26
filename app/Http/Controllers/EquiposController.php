<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODOS LOS REGISTROS DE LA BASE DE DATOS
        $equipos = Equipo::all();
        return view('equipos.index',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // FUNCIÒN PARA QUE ME MUESTRE UN FORMULARIO PARA CREAR EQUIPOS
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // FUNCION PARA CREAR EQUIPOS
        $equipo = Equipo::create([
            "nombreEquipo"=> $request-> nombreEquipo,
            "pais"=> $request-> pais,
            "ciudad"=> $request-> ciudad,
            'numeroJugadores' => $request-> numeroJugadores,
            
        ]);
        return redirect('equipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // FUNCIÒN PARA VER UN EQUIPO EN ESPECIAL DE LA BASE DE DATOS
        $equipo = Equipo::find($id);
        return view('equipos.show',compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // FUNCION QUE ME MUESTRA EL FORMULARIO PARA EDITAR LA BASE
        $equipo = Equipo::find($id);
        return view('equipos.edit',compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // ACTUALIZAR UN EQUIPO DE LA BASE DE DATOS
        $equipo = Equipo::find($id)->update([
            "nombreEquipo" => $request->nombreEquipo,
            "pais" => $request->pais,
            "ciudad" => $request->ciudad,
            "numeroJugadores" => $request->numeroJugadores,
                    ]);
            
                    return redirect()->route('equipos.show',$id);
                  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ELIMINAR UN EQUIPO DE LA BASE DE DATOS
        $equipo = Equipo::find($id)->delete();
      
    }
}
