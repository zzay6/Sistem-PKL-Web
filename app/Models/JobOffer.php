<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    protected $guarded = ['id'];
    
    public function company() {
        return $this->belongsTo(User::class, 'company_id');
    }
    
    public function matchedStudents() {
        return $this->belongsToMany(User::class, 'job_matches', 'job_offer_id', 'student_id');
    }
    
    public function applications() {
        return $this->hasMany(JobApplication::class);
    }
}
