<?php

use Illuminate\Database\Seeder;

class GlosasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('glosas')->delete();

        \DB::table('glosas')->insert(array(
            array('id' => '1','codigo'=>'', 'name' => 'Factura','desglosas_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '2','codigo'=>'','name' => 'Factura de exportación','desglosas_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '3','codigo'=>'','name' => 'Boleta','desglosas_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '4','codigo'=>'','name' => 'Boleta Honorarios','desglosas_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '5','codigo'=>'','name' => 'Sin documento','desglosas_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '6','codigo'=>'','name' => 'Otro tipo de documento','desglosas_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '7','codigo'=>'','name' => 'Pesos Chile','desglosas_id' => '2','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '8','codigo'=>'','name' => 'Pesos Argentina','desglosas_id' => '2','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '9','codigo'=>'','name' => 'Euro','desglosas_id' => '2','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '10','codigo'=>'','name' => 'Dolar Americano','desglosas_id' => '2','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '11','codigo'=>'','name' => 'Venta de bienes del giro','desglosas_id' => '3','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '12','codigo'=>'','name' => 'Venta de bienes que no son del giro','desglosas_id' => '3','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '13','codigo'=>'','name' => 'Prestación de servicios del giro','desglosas_id' => '3','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '14','codigo'=>'','name' => 'Prestación de otros servicios','desglosas_id' => '3','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '15','codigo'=>'','name' => 'Operación de crédito de dinero','desglosas_id' => '3','created_at' =>'2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '16','codigo'=>'','name' => 'Letra de cambio','desglosas_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '17','codigo'=>'','name' => 'Pagaré','desglosas_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '18','codigo'=>'','name' => 'Cheque','desglosas_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '19','codigo'=>'','name' => 'Escritura pública','desglosas_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '20','codigo'=>'','name' => 'Escritura privada','desglosas_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '21','codigo'=>'','name' => 'No se emitió documento','desglosas_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '22','codigo'=>'','name' => 'Incumplimiento al requerimiento de pago','desglosas_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '23','codigo'=>'','name' => 'Quiebra del deudor','desglosas_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '24','codigo'=>'','name' => 'Deudor inubicable o desaparecido','desglosas_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '25','codigo'=>'','name' => 'Fallecimiento del deudor','desglosas_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '26','codigo'=>'','name' => 'Cesación de pagos del deudor hecha valer ante un Tribunal','desglosas_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '27','codigo'=>'','name' => 'Soc. de Responsabilidad Limitada','desglosas_id' => '6','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '28','codigo'=>'','name' => 'Soc. Anonima','desglosas_id' => '6','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '29','codigo'=>'','name' => 'Soc. Anonima por accion','desglosas_id' => '6','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
        ));
    }
}
