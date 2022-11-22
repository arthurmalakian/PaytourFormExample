<?php

namespace App\Services\Resume;

use App\Http\Resources\ResumeResource;
use App\Models\EducationLevel;
use App\Models\Resume;
use Illuminate\Support\Facades\Log;

class ResumeServiceImpl implements ResumeService
{
    public function getAll()
    {
        try {
            $resumes = Resume::with('education_level', 'media')->orderBy('candidate_name', 'asc')->get();
            return response(ResumeResource::collection($resumes), 200);
        } catch (\Exception $exception) {
            Log::debug([
                'message' => $exception->getMessage(),
                'traceback' => $exception->getTraceAsString()
            ]);
            return response([
                'message' => 'Erro ao listar currículos.'
            ], 500);
        }
    }

    public function save($resumeData, $file)
    {
        try {
            $educationLevel = EducationLevel::find($resumeData['education_level_id']);
            if ($educationLevel == null) {
                throw new \Exception('Nível de escolaridade inválido.', 404);
            }
            $resume = Resume::create($resumeData);
            $resume->addMedia($file)->toMediaCollection('resume_file');
            return response([
                'message' => 'Currículo cadastrado com sucesso.'
            ], 201);
        } catch (\Exception $exception) {
            Log::debug([
                'message' => $exception->getMessage(),
                'traceback' => $exception->getTraceAsString()
            ]);
            return response([
                'message' => 'Erro ao cadastrar currículo.'
            ], 500);
        }
    }
}
