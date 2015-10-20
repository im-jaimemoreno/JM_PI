<?php

use Illuminate\Database\Seeder;

class ContactenosTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Contactenos')->insert(array(
            'whoedit'=> 1,
            'phone'=>'7845390',
            'mobile'=> '304 440 63 07',
            'adress'=> 'street false 123',
            'mail' => 'im.jaimemoreno@gmail.com',
            'facebook'=> 'im.jaimemoreno',
            'twitter' => '@JaimeMorenoJ',
            'pinterest' => 'xxjaimemorenoxx'
        ));
    }
}
