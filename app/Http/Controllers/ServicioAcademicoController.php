<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Http\Request;
use Redirect;

class ServicioAcademicoController extends Controller
{

    public function index()
    {
        $productos = Producto::latest()->paginate(8);
        return view('admin.servicio-academico.index', compact('productos'));
    }


    public function create()
    {
        return view("admin.servicio-academico.create");
    }


    public function store(Request $request)
    {
        Producto::create([
            'SERVICIOAC_Nombre' => request('nombre'),
            'SERVICIOAC_Descripcion' => request('descripcion'),
            'SERVICIOAC_Costo' => request('costo'),
        ]);

        return Redirect::to("/servicio-academico");

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        return view("admin.servicio-academico.edit", ['producto' => $producto]);
    }


    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->SERVICIOAC_Nombre = $request->nombre;
        $producto->SERVICIOAC_Descripcion = $request->descripcion;
        $producto->SERVICIOAC_Costo = $request->costo;

        $producto->save();

        return Redirect::to("/servicio-academico");
    }


    public function destroy($id)
    {
        Producto::destroy($id);
        return Redirect::to("/servicio-academico");
    }
}
