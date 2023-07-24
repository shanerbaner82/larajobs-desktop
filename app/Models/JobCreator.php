<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCreator extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(JobPost::class, 'job_creator_id');
    }
}
