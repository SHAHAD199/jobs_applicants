<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['applicant_id','name', 'read', 'write','speak','understand'];
    
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
