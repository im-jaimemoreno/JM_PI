<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker::Create();

        for($i=0; $i<10; $i++){

            \DB::table('users')->insert(array(
                'name'=>$faker->firstName,
                'last'=>$faker->lastName,
                'phone'=>$faker->phoneNumber,
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'email'=>$faker->unique()->email,
                'password'=> \Hash::make('123456'),
                'type' => 'Usuario'

            ));
        }
    }
}
