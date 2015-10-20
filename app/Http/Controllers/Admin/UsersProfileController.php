<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Response;

class UsersProfileController extends Controller {


	public function profile($id){

		$user = User::findOrFail($id);
		$profile = Profile::findOrFail($id);

		return  view('administrador.users.profile.index', compact('user', 'profile'));
	}
	public function editProfile($id){

		$user = User::findOrFail($id);
		$profile = Profile::findOrFail($id);

		return view('administrador.users.profile.edit', compact('user', 'profile'));
	}
/*
 function updateProfile(){
	$file = Input::file('pic');

}
 */
	public function updateProfile(Request $request, $id)
	{
		$profile = Profile::findOrFail($id);
		$user = User::findOrFail($profile->user_id);
		//$profile->fill($request->all());
		$profile->id = $id;
		$profile->user_id = $user->id;
		$profile->bio=$request->bio;
		$profile->tweeter =$request->tweeter;
		$profile->facebook =$request->facebook;
		$profile->website =$request->website;

		$file = $request->file('profilePicture');
		$ext = $file->getClientOriginalExtension();
		$mine = $file->getClientMimeType();
		$profile->photo = $user->id.'.'.$ext;
		$profile->minetype = $mine;
		/*$mime = Input::file('profilePicture')->getMimeType();*/
		\Storage::disk('local')->put('/profile-pics/'. $profile->photo,\File::get($file));
		//$profile->photo = $user->id.'.'.$ext;
		//$public_path = public_path();
		//$url = $public_path.'/upload/images/profile-pics/'.$user->id.'.'.$ext;

		//$profile->photo = $url;
		//$profile->photo = $user->id.'.'.$ext;
		//$profile->minetype = $mine;

		$profile->update();

		//$public_path = public_path();
		//$url = $public_path.'/storage/'.$user->id;

		return view('administrador.users.profile.edit', compact('user', 'profile'));

	}
	public function sendMail(){
		Mail::send('emails.test', ['name' =>'ServidorPueba'], function($message){
			$message->to('jaime.moreno@t-g.co', 'Prueba')->from('other@some')->subject("Welcome to tijuana");
		});

		$users=User::paginate();
		return  view('admin.users.index', compact('users'));

	}


	public function getProfilePhoto($profile){
		$consulta = Profile::where('photo', '=',$profile)->firstOrFail();
		$file = \Storage::disk('local')->get('profile-pics/'.$consulta->photo);
		$status =200;
		//var_dump($file);
		/*return (new Response($file, 200))
			->header('Content-Type', $consulta->minetype);*/
		/*$response = \Response::make(File::get($file));
		$response->header('Content-Type', 'image/png');*/
		return (new Response($file, $status))
			->header('Content-Type', $consulta->minetype);
		//return $file;
	}
}
