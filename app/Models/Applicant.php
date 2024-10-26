<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
      'fname',
      'position',
      'start_day',
      'birthday',
      'gender',
      'nationality',
      'country_birth',
      'city',
      'marital_status',
      'address',
      'mother_tongue',
      'mobile_1',
      'mobile_2',
      'email',
      'latest_position',
      'latest_company',
      'latest_job_start_at',
      'latest_job_end_at',
      'government_job_status',
      'government_job',
      'training_course',
      'applied_before',
      'travel_status',
      'driving_status',
      'driving_license_status',
      'expected_salary'
    ];


    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function relatives()
    {
        return $this->hasMany(Relative::class);
    }

    public function courses() {
        return $this->hasMany(Course::class);
    }
}
