<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
		'patient_id', 'first_name', 'last_name', 'date_of_birth'
	];


	/**
    * Get the treatment for the patient.
    */
	public function treatment()
	{
		return $this->belongsToMany(Treatment::class);
	}
}
