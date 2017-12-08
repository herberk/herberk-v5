<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TiposTableSeeder::class);
        $this->call(AtributosTableSeeder::class);
        $this->call(ciudadesTableSeeder::class);
        $this->call(RegionesTableSeeder::class);
        $this->call(ComunasTableSeeder::class);
    }
}
