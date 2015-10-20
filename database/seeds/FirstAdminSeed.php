<?php

use Illuminate\Database\Seeder;

class FirstAdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'name'=>'Jaime',
            'last'=>'Moreno',
            'phone'=>'7845390',
            'birthday' => '1991-05-01',
            'email'=>'im.jaimemoreno@gmail.com',
            'password'=> \Hash::make('secret'),
            'type'=> 'Administrador'
        ));
        \DB::table('user_profile')->insert(array(
            'user_id'=>1,
            'bio'=>'Hi esta es una prueba',
            'tweeter'=>'jaimemorenoj',
            'facebook'=>'imjaimemoreno',
            'website'=>'...',
        ));
    }
}
