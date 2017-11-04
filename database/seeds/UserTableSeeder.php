<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([

            'name' => 'herberk',
            'email' => 'hermann@berkhoff.cl',
            'password' => bcrypt('123456')
        ]);

        factory(User::class)->times(49)->create();
    }
}
