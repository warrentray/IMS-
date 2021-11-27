<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = "job_applications";

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function jobs(){
        return $this->belongsTo(Job::class);
    }

    public function interns(){
        return $this->belongsTo(Intern::class);
    }
}