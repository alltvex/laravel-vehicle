<?php

use Illuminate\Database\Seeder;
use Axterisko\Vehicle\VehicleMakesTableSeeder;
use Axterisko\Vehicle\VehicleModelsTableSeeder;
use Axterisko\Vehicle\VehicleModelYearsTableSeeder;
use Axterisko\Vehicle\VehiclesTableSeeder;

class VehicleTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VehicleMakesTableSeeder::class);
        $this->call(VehicleModelsTableSeeder::class);
        $this->call(VehicleModelYearsTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
    }
}
