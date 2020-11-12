<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitante;
use App\Http\Requests\HabitanteCreateRequest;

use Illuminate\Support\Facades\Redirect;

class HabitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

if($request)
{
    $query=trim($request->get('searchText'));

        $habitantes = Habitante::where('documentoidentidad','LIKE','%'.$query.'%')
        ->orwhere('primer_nombre','LIKE','%'.$query.'%')
        ->orwhere('primer_apellido','LIKE','%'.$query.'%')
        ->orderBy('id','DESC')->paginate(3);
        //return view('habitante.index', compact('habitantes'));
        return view('habitante.index',["habitantes"=>$habitantes,"searchText"=>$query]);
        
     
         }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('habitante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HabitanteCreateRequest $request)
    {
        $habitantes=new Habitante;
		 $habitantes->documentoidentidad=$request->get('documento');
		  $habitantes->primer_nombre=$request->get('pnombre');
		   $habitantes->segundo_nombre=$request->get('snombre');
			$habitantes->primer_apellido=$request->get('papellido');
			 $habitantes->segundo_apellido=$request->get('sapellido');
              $habitantes->telefono=$request->get('telefono');
              $habitantes->correo=(string)$request->get('correo');
              $habitantes->fecha=$request->get('fecha');
			   $habitantes->save();
				return Redirect::to('habitante');





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
        $habitantes=Habitante::findOrFail($id);
         return view("habitante.edit",["habitantes"=>$habitantes]);
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
            $habitantes=Habitante::findOrFail($id);
            $habitantes->documentoidentidad=$request->get('documento');
            $habitantes->primer_nombre=$request->get('pnombre');
            $habitantes->segundo_nombre=$request->get('snombre');
            $habitantes->primer_apellido=$request->get('papellido');
            $habitantes->segundo_apellido=$request->get('sapellido');
            $habitantes->telefono=$request->get('telefono');
            $habitantes->correo=$request->get('correo');
            $habitantes->fecha=$request->get('fecha');
            $habitantes->update();
            return Redirect::to('habitante');
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
        $habitantes=Habitante::findOrFail($id);
         $habitantes->delete();
          return Redirect::to('habitante');

    }
}
