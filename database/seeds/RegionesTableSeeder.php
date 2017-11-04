<?php

use Illuminate\Database\Seeder;

class RegionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete regiones table records
        \DB::table('regiones')->delete();

        \DB::table('regiones')->insert(array(
            array('id' => '1','name' => 'Tarapaca','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '2','name' => 'Antofagasta','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '3','name' => 'Atacama','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '4','name' => 'Coquimbo','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '5','name' => 'Valparaiso','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '6','name' => 'Libertador  Bernardo O Higgins ','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '7','name' => 'Del Maule','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '8','name' => 'Del Bio-Bio','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '9','name' => 'De la Araucania','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '10','name' => 'De Los Lagos','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '11','name' => 'Aysen General Carlos Iba','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '12','name' => 'Magallanes y la Antartica Chil','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '13','name' => 'Metropolitana','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '14','name' => 'De Los Rios','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '15','name' => 'De Arica y Parinacota','created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39')
        ));


    }
}
