<?php

namespace App\Http\Controllers\Resume;

use App\Http\Controllers\Controller;
use App\Http\Requests\Resume\CreateResumeRequest;
use App\Services\Resume\ResumeServiceImpl as ResumeService;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    private $resumeService;

    public function __construct()
    {
        $this->resumeService = new ResumeService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->resumeService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateResumeRequest $request)
    {
        $resumeData = $request->only(
            'candidate_name',
            'candidate_email',
            'desired_job_title',
            'education_level_id',
            'observations',
            'available_until'
        );
        $resumeData['sender_ip'] = $request->ip();
        return $this->resumeService->save($resumeData,$request->candidate_file);
    }
}
