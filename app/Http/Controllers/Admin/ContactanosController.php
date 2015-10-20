<?php namespace App\Http\Controllers\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;

use App\Models\Contactanos;
use App\Models\User;
class ContactanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactanos = Contactanos::paginate();
        return view('contactanos.index', compact('contactanos') );
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
    public function findUser(Route $route){
        $this->user = Contactanos::findOrFail($route->getParameter('users'));
    }
    public function edit($id)
    {
        $contacto = Contactanos::findOrFail($id);
        $user_id = $contacto->whoedit;

        return view('contactanos.edit', compact('contacto', 'user_id'));
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
        $contacto = Contactanos::findOrFail(1);

        $contacto->whoedit = $id;
        $contacto->phone = $request->phone;
        $contacto->mobile= $request->mobile;
        $contacto->adress = $request->phone;
        $contacto->mail= $request->mail;
        $contacto->facebook = $request->facebook;
        $contacto->twitter = $request->twitter;
        $contacto->pinterest = $request->pinterest;

        $contacto->update();
        $contactanos = Contactanos::paginate();

        return view('contactanos.index', compact('contactanos') );
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
