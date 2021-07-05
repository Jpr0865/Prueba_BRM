<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Http\Controllers\BD;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
  
        $prod['pos'] = DB::select('select * FROM productos a join tipo_prods b on a.nombre_p = b.id join lote c on a.lote_id = c.id');

         return view('productos.index', $prod);     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function compra(){
         $produc['producto'] = DB::select('select * FROM tipo_prods');
            $prodt['proys'] = DB::select('
            select DISTINCT a.* , b.*, c.n_lote , COUNT(a.nombre_p) as cant FROM productos a join tipo_prods b on a.nombre_p = b.id JOIN lote c on a.lote_id = c.id GROUP BY a.nombre_p, c.n_lote
');
    

        return view('productos.compra', $produc); 
    }

    public function comprar(Request $request)
    {  
        $i = 1;
        $canti['ca'] = request('cantidad');
        $cantiin = (int)$canti;

        $idpr = request('nombre_p');
         $idprin = (int)$idpr;
         
     $prodt = DB::select('select DISTINCT COUNT(a.nombre_p) as cant FROM productos a join tipo_prods b on a.nombre_p = b.id  WHERE b.id =?', [$idpr]);
         $procanexi = (int)$prodt[0]->cant;



      if ($cantiin > $procanexi ) {

            return view('productos.error'); 

        }else{


       $precioa = DB::table('productos')->select('precio')->where('nombre_p', $idprin)->take(1)->get();

      $precint = (int)$precioa[0]->precio;

       $nomb = DB::table('tipo_prods')->select('nombre')->where('id', $idprin)->take(1)->get();
       $nombsa['emp'] = $nomb[0]->nombre;
        $precio['cmr'] = $precint * $cantiin;

            while($i <= $cantiin) {

               $users = DB::table('productos')->where('nombre_p', $idprin)->take(1)->delete();

            $i++;

            }
           

           return view('productos.exito', $canti, $precio,  $nombsa  ); 

        

            }

        }


        

        

    




    public function create()
    {
        $produc['producto'] = DB::select('select * FROM tipo_prods');
        $lot['lotes'] = DB::select('select * FROM lote');

        return view('productos.agregar', $produc, $lot); 
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $prod = request()->except('_token');
         productos::insert($prod);
        return view('homec');

    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(productos $productos)
    {
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(productos $productos)
    {
        
            }
}
