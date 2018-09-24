<?php

use Illuminate\Database\Seeder;

class TourpackagesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tourpackage::class,10)->create();   
    }
}
