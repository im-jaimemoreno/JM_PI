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
            'email'=>'im.jaimemoreno@gamil.com',
            'password'=> \Hash::make('secret'),
            'type'=> 'Administrador'
        ));
    }
}
