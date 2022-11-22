<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResumeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'candidate_name' => $this->candidate_name,
            'candidate_email' => $this->candidate_email,
            'desired_job_title' => $this->desired_job_title,
            'education_level' => new EducationLevelResource($this->education_level),
            'observations' => $this->observations,
            'available_until' => $this->available_until,
            'candidate_file' => $this->getMedia('resume_file'),
            'created_at' => $this->created_at,
            'sender_ip' => $this->sender_ip,
        ];
    }
}
