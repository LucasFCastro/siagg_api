<?php

use Illuminate\Database\Seeder;

use App\Oficio;

class OficiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Oficio::class, 200)->create();
    }
}
