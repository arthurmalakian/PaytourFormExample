<?php

namespace App\Http\Controllers\EducationLevel;

use App\Http\Controllers\Controller;
use App\Services\EducationLevel\EducationLevelServiceImpl as EducationLevelService;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    private $educationLevelService;

    public function __construct()
    {
        $this->educationLevelService = new EducationLevelService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->educationLevelService->getAll();
    }
}
