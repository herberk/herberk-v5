<?php

use Illuminate\Database\Seeder;

class DesglosasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('desglosas')->delete();

        \DB::table('desglosas')->insert(array(
            array('id' => '1','name' => 'Documento comercial','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '2','name' => 'Moneda','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '3','name' => 'Operacion comercial','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '4','name' => 'Documento Meracantil','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '5','name' => 'Motivos de Castigos','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '6','name' => 'Tipo de Soc. Empresas','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
        ));
    }
}
