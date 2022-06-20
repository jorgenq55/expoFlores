<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DIA;
use App\Models\RESTRICCION;
use App\Models\DIGITO;
use Illuminate\Support\Facades\Session;


class registroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $dig=$req->input('digito');
        $res=RESTRICCION::where('NUMERODIGI', $dig)->get();
        return view('registro', compact('dig','res'));
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
        return view('registro');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $dia)
    {
        if($request->input('fin')>$request->input('inicio')){
            $dig= $request->input('dig');
            $res=RESTRICCION::where('NUMERODIGI', $dig)->where('NOMBREDIA',$dia)->first();
            $res->H_INIC=$request->input('inicio');
            $res->H_FIN=$request->input('fin');
            $res->save();
    
            $res=RESTRICCION::where('NUMERODIGI', $dig)->get();
            Session::flash('mensaje','!Registro Guardado Exitosamente!');
            return view('registro', compact('dig','res'));
        }
        
        $dig= $request->input('dig');
        Session::flash('error','El valor de inicio no puede ser menor al de fin');
        $res=RESTRICCION::where('NUMERODIGI', $dig)->get();
        return view('registro', compact('dig','res'));
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
