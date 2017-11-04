<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete  table records
        \DB::table('ciudades')->delete();

        \DB::table('ciudades')->insert(array(
            array('id' => '1','name' => 'Temuco','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '2','name' => 'Pucon','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '3','name' => 'Villarica','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '4','name' => 'Victoria','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '5','name' => 'Valparaiso','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '6','name' => 'Rancagua ','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '7','name' => 'Curico','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '8','name' => 'Concepcion','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39')

        ));


    }
}
