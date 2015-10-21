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
        /*\DB::table('Productos')->insert(array(
            'user_id'=>1,
            'bio'=>'Hi esta es una prueba',
            'tweeter'=>'jaimemorenoj',
            'facebook'=>'imjaimemoreno',
            'website'=>'...',
        ));*/
        \DB::table('PaginaMaestra')->insert(array(
                'id' => 1,
                'PhotoHero'=>'hero1.jpg',
                'minetype'=>'image/jpeg',
                'Title'=>'INNOVACIÓN Y FLEXIBILIDAD',
                'content'=>'Resultados de calidad',

                'whoedit'=>1

        ));

        \DB::table('PaginaMaestra')->insert(array(
            'id' => 2,
            'PhotoHero'=>'hero2.jpg',
            'minetype'=>'image/jpeg',
            'Title'=>'GENERANDO SOLUCIONES',
            'content'=>'Prácticas y acertivas',

            'whoedit'=>1

        ));

        \DB::table('PaginaMaestra')->insert(array(
            'id' => 3,
            'PhotoHero'=>'hero3.jpg',
            'minetype'=>'image/jpeg',
            'Title'=>'CREATIVIDAD Y ARTE',
            'content'=>'Van juntos de la mano',

            'whoedit'=>1

        ));

    }
}
