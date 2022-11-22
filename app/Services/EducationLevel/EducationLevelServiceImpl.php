<?php

namespace App\Services\EducationLevel;

use App\Http\Resources\EducationLevelResource;
use App\Models\EducationLevel;
use Illuminate\Support\Facades\Log;

class EducationLevelServiceImpl implements EducationLevelService
{
    public function getAll()
    {
        try {
            $educationLevels = EducationLevel::orderBy('id', 'asc')->get();
            return response(EducationLevelResource::collection($educationLevels), 200);
        } catch (\Exception $exception) {
            Log::debug([
                'message' => $exception->getMessage(),
                'traceback' => $exception->getTraceAsString()
            ]);
            return response([
                'message' => 'Erro ao listar níveis de escolaridade disponíveis.'
            ], 500);
        }
    }
}
