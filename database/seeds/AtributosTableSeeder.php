<?php

use Illuminate\Database\Seeder;

class AtributosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('atributos')->delete();

        \DB::table('atributos')->insert(array(
            array('id' => '1','codigo'=>'', 'name' => 'Factura','tipos_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '2','codigo'=>'','name' => 'Factura de exportación','tipos_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '3','codigo'=>'','name' => 'Boleta','tipos_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '4','codigo'=>'','name' => 'Boleta Honorarios','tipos_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '5','codigo'=>'','name' => 'Sin documento','tipos_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '6','codigo'=>'','name' => 'Otro tipo de documento','tipos_id' => '1','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '7','codigo'=>'','name' => 'Pesos Chile','tipos_id' => '2','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '8','codigo'=>'','name' => 'Pesos Argentina','tipos_id' => '2','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '9','codigo'=>'','name' => 'Euro','tipos_id' => '2','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '10','codigo'=>'','name' => 'Dolar Americano','tipos_id' => '2','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '11','codigo'=>'','name' => 'Venta de bienes del giro','tipos_id' => '3','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '12','codigo'=>'','name' => 'Venta de bienes que no son del giro','tipos_id' => '3','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '13','codigo'=>'','name' => 'Prestación de servicios del giro','tipos_id' => '3','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '14','codigo'=>'','name' => 'Prestación de otros servicios','tipos_id' => '3','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '15','codigo'=>'','name' => 'Operación de crédito de dinero','tipos_id' => '3','created_at' =>'2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '16','codigo'=>'','name' => 'Letra de cambio','tipos_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '17','codigo'=>'','name' => 'Pagaré','tipos_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '18','codigo'=>'','name' => 'Cheque','tipos_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '19','codigo'=>'','name' => 'Escritura pública','tipos_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '20','codigo'=>'','name' => 'Escritura privada','tipos_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '21','codigo'=>'','name' => 'No se emitió documento','tipos_id' => '4','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '22','codigo'=>'','name' => 'Incumplimiento al requerimiento de pago','tipos_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '23','codigo'=>'','name' => 'Quiebra del deudor','tipos_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '24','codigo'=>'','name' => 'Deudor inubicable o desaparecido','tipos_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '25','codigo'=>'','name' => 'Fallecimiento del deudor','tipos_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '26','codigo'=>'','name' => 'Cesación de pagos del deudor hecha valer ante un Tribunal','tipos_id' => '5','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '27','codigo'=>'','name' => 'Soc. de Responsabilidad Limitada','tipos_id' => '6','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '28','codigo'=>'','name' => 'Soc. Anonima','tipos_id' => '6','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '29','codigo'=>'','name' => 'Soc. Anonima por accion','tipos_id' => '6','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
        ));
    }
}
