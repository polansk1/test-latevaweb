<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
		'patient_id','name', 'description'
	];


	/**
    * Get the patient for the treatment.
    */
	public function patient()
	{
		return $this->belongsTo(Patient::class);
	}
}
