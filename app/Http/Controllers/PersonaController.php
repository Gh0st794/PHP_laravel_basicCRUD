<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_persona;
use Psy\Command\WhereamiCommand;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personas = _persona::all();        
        return view ('persona.index')->with('persona', $personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        _persona::create($input);
        return redirect('persona')->with('flash_message', 'Persona agregada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //        
        $persona = _persona::find($id);
        $fecha = date("yy-m-d");
        $fechaNac = null;
        
        return view('persona.show')->with('personas', $persona)->with('edad', $fechaNac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona = _persona::find($id);
        return view('persona.edit')->with('personas', $persona);
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
        //
        $persona = _persona::find($id);
        $input = $request->all();
        $persona->update($input);
        return redirect('persona')->with('flash_message', 'persona actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        _persona::destroy($id);
        return redirect('persona')->with('flash_message', 'Persona eliminada!'); 
    }

    //Funciones
    function calculoEdad($fechanacimiento){

        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
        {
            $ano_diferencia--;
        }

        return $ano_diferencia;
    }

}
