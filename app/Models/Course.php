<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['applicant_id','name', 'location','start_at','end_at','degree_obtalned'];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
