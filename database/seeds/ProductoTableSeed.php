<?php
use \Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class ProductoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker::Create();
        //$users =User::all()->lists('id');
        $users =DB::table('users')->lists('id');//User::all();


        \DB::table('productos')->insert(array(
            'id'=>1,
            'Referencia'=>'Samsung s6',
            'Marca'=>'Samsung',
            'Descripcion'=>"Compra el nuevo samsung s6",
            'Precio'=>1.000,
            'Thumbnail'=>'samsung-s6.png',
            'minetype'=>'image/png',
        ));

        \DB::table('productos')->insert(array(
            'id'=>2,
            'Referencia'=>'Iphone 6s',
            'Marca'=>'Apple',
            'Descripcion'=>'Nuevo Iphone 6s',
            'Precio'=>400000,
            'Thumbnail'=>'iphone.png',
            'minetype'=>'image/png',
        ));

        \DB::table('productos')->insert(array(
            'id'=>3,
            'Referencia'=>'Sony Z4',
            'Marca'=>'Sony',
            'Descripcion'=>'Nuevo Sony z4',
            'Precio'=>200000,
            'Thumbnail'=>'sony.png',
            'minetype'=>'image/png',
        ));

    }
}
