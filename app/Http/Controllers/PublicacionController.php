<?php

namespace App\Http\Controllers;

use App\Habitante;
use App\Http\Requests\PublicacionesCreateRequest;
use App\Publicacion;
/** permite el redicreccionamiento*/use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));

            $publicacn = Publicacion::where('titulo', 'LIKE', '%' . $query . '%')
                ->orwhere('cuerpo', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'DESC')->paginate(3);
            //return view('propietario.index', compact('propietarios'));
            return view('publicacn.index', ["publicacn" => $publicacn, "searchText" => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publicacn = Habitante::orderBy('id', 'DESC')
            ->select('habitantes.correo', 'habitantes.id')
        /**linea para que no traiga vehiculo que se este en salida
        ->whereNotIn('vehiculos.id', function ($query) {
        $query->select('salida.vehiculos_id')
        ->from('salida_vehiculos');
        })*/
            ->get();

        return view('publicacn.create')->with('publicacn', $publicacn);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionesCreateRequest $request)
    {
        $publicacn = new Publicacion;
        $publicacn->titulo = $request->get('titulo');
        $publicacn->cuerpo = $request->get('cuerpo');
        $publicacn->habitantes_id = $request->get('habitantes_id');
        $publicacn->save();
        return Redirect::to('publicacn');

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
        $publicacn = Publicacion::findOrFail($id);
        $habitantes = Habitante::all();
        return view("publicacn.edit", ["publicacn" => $publicacn, "habitantes" => $habitantes]);
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
        {
            $publicacn = Publicacion::findOrFail($id);
            $publicacn->titulo = $request->get('titulo');
            $publicacn->cuerpo = $request->get('cuerpo');
            $publicacn->habitantes_id = $request->get('habitantes_id');
            $publicacn->update();
            return Redirect::to('publicacn');
            
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacn = Publicacion::findOrFail($id);
        $publicacn->delete();
        return Redirect::to('publicacn');
    }
}
