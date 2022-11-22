<?php

namespace App\Services\Resume;

interface ResumeService
{
    public function getAll();
    public function save($resumeData,$file);
}
