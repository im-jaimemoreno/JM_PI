<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(FirstAdminSeed::class);
        $this->call(UserTableSeed::class);
        $this->call(UserProfileTableSeed::class);
        $this->call(ProductoTableSeed::class);
        $this->call(ContactenosTableSeed::class);

        Model::reguard();
    }
}
