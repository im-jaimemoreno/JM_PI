<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(){
		$this->beforeFilter('@findUser', ['only'=>['edit']]); //'show', 'edit', 'update', 'destroy'
	}
	public function findUser(Route $route){
		$this->user = User::findOrFail($route->getParameter('users'));
	}

	public function index()
	{
		$users=User::paginate();
		$profiles=User::paginate();
		return  view('administrador.users.index', compact('users', 'profiles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return  view('administrador.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *4
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$user = new User($request->all());
		//$user->save();

		$user = User::create($request->all());

		$profile = new Profile($request->all());

		$profile->user_id = $user->id;
		$profile->bio='Completa tu biografía';
		$profile->tweeter ='@esta_es_una_prueba:twitter';
		$profile->facebook ='@esta_es_una_prueba:facebook';
		$profile->website ='@esta_es_una_prueba:website';
		$profile->save();
		/*$profile = Profile::create(			
			'user_id' => $user->id;
			'bio' =>'Completa tu biografía';
			'tweeter' =>'@esta_es_una_prueba:twitter';
			'facebook' =>'@esta_es_una_prueba:facebook';
			'website' =>'@esta_es_una_prueba:website';
		);*/

		return redirect()->route('administrador.users.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		//dd($user);

		return view('administrador.users.edit')->with('user', $this->user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$user = User::findOrFail($id);

		$user->fill($request->all());

		$user->save();

		return redirect()->route('administrador.users.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//User::destroy($id);
		//return $id;

		$user = User::findOrFail($id);
		$user->delete();
		/*$message = $user;
		if($request->ajax()){
			return response()->json([
				'id' => $id
				'message' =>  $message
			]);
		}*/
		\Session::flash('message','El registro el usuario '.$user->name.' fue eliminado.');

		return redirect()->route('administrador.users.index');
	}

	
	public function profile($id){
		$user = User::findOrFail($id);

		return  view('administrador.users.profile.index', compact('user'));
	}
}
