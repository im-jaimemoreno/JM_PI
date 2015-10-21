<?php namespace App\Http\Controllers\principal;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Producto;
use App\Models\Contactanos;
use App\Models\PaginaMaster;
use Illuminate\Http\Response;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate('6');
        $contactanos = Contactanos::paginate();
        $pagemaster = PaginaMaster::paginate();

        return view('public.index',compact('productos','contactanos','pagemaster'));
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
    public function getHeroPhoto($id){
        $consulta = PaginaMaster::where('id', '=',$id)->firstOrFail();
        $file = \Storage::disk('local')->get('hero/'.$consulta->PhotoHero);
        $status =200;

        return (new Response($file, $status))
            ->header('Content-Type', $consulta->minetype);
    }

}
