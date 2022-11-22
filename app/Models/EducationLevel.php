<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory;

    protected $table = 'education_levels';

    protected $fillable = [
        'name',
    ];

    public function resumes()
    {
        return $this->hasMany(Resume::class, 'education_level_id', 'id');
    }
}
