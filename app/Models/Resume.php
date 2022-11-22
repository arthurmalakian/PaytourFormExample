<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Resume extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'resumes';

    protected $fillable = [
        'candidate_name',
        'candidate_email',
        'desired_job_title',
        'education_level_id',
        'observations',
        'available_until',
        'sender_ip'
    ];

    public function education_level()
    {
        return $this->hasOne(EducationLevel::class, 'id', 'education_level_id');
    }
}
