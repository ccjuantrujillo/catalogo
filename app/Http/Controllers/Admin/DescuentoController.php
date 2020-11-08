<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Descuento;
use App\Producto;
use Illuminate\Http\Request;
use Redirect;

class DescuentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  /*       $descuentos = descuentos::latest()->paginate(8); */
        $descuentos = descuentos::all();
        $descuentos = descuentos::join('curso','curso.INSTP_Codigo','=','descuentos.INSTP_Codigo')->select()->get();
        return view('admin.descuento.index', compact('descuentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::pluck('CURSOC_Nombre', 'CURSOC_Nombre');

        return view("admin.descuento.create", compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validacion del Formulario */
        $request->validate([
            'nombre' => 'required',
            'cant_min' => 'required',
            'cant_max' => 'required',
            'descuento' => 'required'
        ]);

        Descuento::create([
            'nombre_curso' => request('nombre'),
            'cantidad_min' => request('cant_min'),
            'cantidad_max' => request('cant_max'),
            'descuento' => request('descuento'),
        ]);

        return Redirect::to("/descuento");
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
        $descuento = Descuento::findOrFail($id);
        $productos = Producto::pluck('CURSOC_Nombre', 'CURSOC_Nombre');

        return view("admin.descuento.edit", ['descuento' => $descuento], compact('productos'));
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
        $descuento = Descuento::findOrFail($id);

        $descuento->nombre_curso = $request->nombre;
        $descuento->cantidad_min = $request->cant_min;
        $descuento->cantidad_max = $request->cant_max;
        $descuento->descuento = $request->descuento;

        $descuento->save();

        return Redirect::to("/descuento");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Descuento::destroy($id);
        return Redirect::to("/descuento");
    }
}
