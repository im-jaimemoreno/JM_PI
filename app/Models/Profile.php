<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Profile extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'user_profile';
	protected $fillable = ['user_id', 'bio', 'tweeter','facebook', 'website', ''];
	//protected $primaryKey='userid';


	public function getProfile(){
		return $this->belongsTo('User', 'user_id');
	}

}
