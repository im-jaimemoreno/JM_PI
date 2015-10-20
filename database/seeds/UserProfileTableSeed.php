<?php 
use \Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserProfileTableSeed extends Seeder{

	public function run(){
		$faker =Faker::Create();
		//$users =User::all()->lists('id');
		$users =DB::table('users')->lists('id');//User::all();

		for($i=2; $i<12; $i++){

			\DB::table('user_profile')->insert(array(

				'user_id'=>$i,
				'bio'=>$faker->text,
				'tweeter'=>$faker->word,
				'facebook'=>$faker->word,
				'website'=>$faker->word,

			));
		}

	}
}