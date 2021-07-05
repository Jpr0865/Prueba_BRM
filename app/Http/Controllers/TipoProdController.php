<?php

namespace App\Http\Controllers;

use App\Models\tipo_prod;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TipoProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $prodt['proys'] = DB::select('
            select DISTINCT a.* , b.*, c.n_lote , COUNT(a.nombre_p) as cant FROM productos a join tipo_prods b on a.nombre_p = b.id JOIN lote c on a.lote_id = c.id GROUP BY a.nombre_p, c.n_lote
');
       

        return view('productos.tprod.index', $prodt);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('productos.tprod.agregar'); 
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $tprodDat = request()->except('_token');

         if ($request->hasFile('foto')) {
             $tprodDat['foto']=$request->file('foto')->store('uploads','public');
         }

         tipo_prod::insert($tprodDat);

          return view('productos.tprod.agregar');
            }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_prod  $tipo_prod
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_prod $tipo_prod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_prod  $tipo_prod
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_prod $tipo_prod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo_prod  $tipo_prod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_prod $tipo_prod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_prod  $tipo_prod
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_prod $tipo_prod)
    {
        //
    }
}
