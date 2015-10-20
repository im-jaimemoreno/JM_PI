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

        for($i=0; $i<5; $i++){

            \DB::table('productos')->insert(array(
                //'id'=>$users[$i],
                'Referencia'=>$faker->word,
                'Marca'=>$faker->word,
                'Descripcion'=>$faker->paragraph,
                'Precio'=>$faker->word,
                'Thumbnail'=>$faker->word,
                'minetype'=>'image/png',
            ));
        }
    }
}
