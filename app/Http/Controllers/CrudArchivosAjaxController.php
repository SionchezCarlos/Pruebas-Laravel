<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visitas;

use Validator;
use Auth;

class CrudArchivosAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Visitas = Visitas::all();

        return View('CRUDArchivosAJAX.CrudArchivosAjax', compact('Visitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|min:2|max:50',
            'ubicacion' => 'required|min:8|max:500',
            'nota' => 'required|min:8|max:500',
            'foto' => 'required',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return response()->json(['mensaje' => 'Error.']);
        }else{
            $Visita = Visitas::create([
                'nombre' => $request->nombre,
                'ubicacion' => $request->ubicacion,
                'nota' => $request->nota,
                'state' => 1,
                'created_by' => Auth::User()->id,
            ]);
            
            $id = $Visita->id;
            $foto = $request->foto;
            $carpeta = '/imagesVisitas/';

            $nombreArchivoFoto = $id.'_'.$foto->getClientOriginalName();
            $foto = $foto->move(public_path().$carpeta, $nombreArchivoFoto);
            $Visita->foto = $carpeta.$nombreArchivoFoto;
            $Visita->save();
            
            return response()->json(['data' => 'Listo.']);
        }
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
    }
}
