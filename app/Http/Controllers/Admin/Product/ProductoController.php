<?php namespace App\Http\Controllers\Admin\Product;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

//use App\Models\Profile;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::paginate();
        return  view('productos.listaproduct', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$productos = Producto::create($request->all());*/

        /*$newProducto = new Producto($request->all());

        $producto->Referencia = $request->Referencia;
        $producto->Marca = $request->Marca;
        $producto->Descripcion = $request->Descripcion;
        $producto->Precio = $request->Precio;
        $profile->save();*/
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->Referencia = $request->Referencia;
        $producto->Marca = $request->Marca;
        $producto->Descripcion = $request->Descripcion;
        $producto->Precio = $request->Precio;
        $producto->whoedit = \Auth::user()->id;
        $producto->save();
        $producto->Referencia = $request->Referencia;
        if (\Input::hasFile('profilePicture'))
        {
            $file = $request->file('profilePicture');
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $mine = $file->getClientMimeType();
            $producto->Thumbnail = $producto->id.'.'.$ext;
            $producto->minetype = $mine;
            /*$mime = Input::file('profilePicture')->getMimeType();*/
            \Storage::disk('local')->put('/productos/'. $producto->Thumbnail,\File::get($file));
        }
        $producto->update();

        $productos=Producto::paginate();
        return  view('productos.listaproduct', compact('productos'));
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
        $producto = Producto::findOrFail($id);

        return view('productos.edit', compact('producto'));
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
        $producto = Producto::findOrFail($id);

        $producto->id = $id;
        $producto->Referencia = $request->Referencia;
        $producto->Marca = $request->Marca;
        $producto->Descripcion = $request->Descripcion;
        $producto->Precio = $request->Precio;
        $producto->whoedit = \Auth::user()->id;

        if (\Input::hasFile('profilePicture'))
        {
            $file = $request->file('profilePicture');
            $ext = $file->getClientOriginalExtension();
            $mine = $file->getClientMimeType();
            $producto->Thumbnail = $producto->id.'.'.$ext;
            $producto->minetype = $mine;
            /*$mime = Input::file('profilePicture')->getMimeType();*/
            \Storage::disk('local')->put('/productos/'. $producto->Thumbnail,\File::get($file));
        }

        $producto->update();

        $productos=Producto::paginate();
        return  view('productos.listaproduct', compact('productos'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        /*$message = $user;
        if($request->ajax()){
            return response()->json([
                'id' => $id
                'message' =>  $message
            ]);
        }*/
        /*\Session::flash('message','El registro el usuario '.$user->name.' fue eliminado.');*/
        $productos=Producto::paginate();
        return  view('productos.listaproduct', compact('productos'));
    }
    public function getProductoPhoto($producto){
        $consulta = Producto::where('Thumbnail', '=',$producto)->firstOrFail();
        $file = \Storage::disk('local')->get('productos/'.$consulta->Thumbnail);
        $status =200;

        return (new Response($file, $status))
            ->header('Content-Type', $consulta->minetype);
        //return $file;
    }
}
