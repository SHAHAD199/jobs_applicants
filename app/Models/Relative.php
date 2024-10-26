<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    protected $fillable = ['applicant_id','name', 'relationship'];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
