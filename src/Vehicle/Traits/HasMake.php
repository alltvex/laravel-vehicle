<?php

namespace Axterisko\Vehicle\Traits;

trait HasMake
{
	public function make()
	{
		return $this->belongsTo(config('vehicles.models.VehicleMake'));
	}
}
