<?php

use App\Userprofile;
use Illuminate\Database\Seeder;

class User_profilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(Userprofile::class)->times(50)->create();
    }
}
