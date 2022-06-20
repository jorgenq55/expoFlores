<?php

namespace App\Http\Controllers;

use App\Models\DIGITO;
use App\Models\RESTRICCION;
use Illuminate\Http\Request;

class DIGITOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $placa=$req->input('placa');
        $dig=$placa[5];
        //$dig = substr($req->input('placa'), 1); 
        $res=RESTRICCION::where('NUMERODIGI', $dig)->get();
        return view('digito', compact('dig','res'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DIGITO  $dIGITO
     * @return \Illuminate\Http\Response
     */
    public function show(DIGITO $dIGITO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DIGITO  $dIGITO
     * @return \Illuminate\Http\Response
     */
    public function edit(DIGITO $dIGITO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DIGITO  $dIGITO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DIGITO $dIGITO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DIGITO  $dIGITO
     * @return \Illuminate\Http\Response
     */
    public function destroy(DIGITO $dIGITO)
    {
        //
    }
}
