<?php

namespace Axterisko\Vehicle\Contracts;

interface HasModel
{
	/**
	 * Belongs to one model.
	 *
	 * @return mixed
	 */
	public function model();
}
