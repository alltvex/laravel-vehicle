<?php

return [

	/*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | If you want, you can replace default models from this package by models
    | you created. Have a look at `Axterisko\Vehicle\Models\VehicleMake`,
    | `Axterisko\Vehicle\Models\VehicleModel` and
    | `Axterisko\Vehicle\Models\VehicleModelYears` model.
    |
    */

    'models' => [
        'VehicleMake' => Axterisko\Vehicle\Models\VehicleMake::class,
        'VehicleModel' => Axterisko\Vehicle\Models\VehicleModel::class,
        'VehicleYear' => Axterisko\Vehicle\Models\VehicleModelYear::class,
        'vehicle' => Axterisko\Vehicle\Models\Vehicle::class,
    ],

];
