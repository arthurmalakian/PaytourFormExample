<?php

namespace App\Http\Requests\Resume;

use Illuminate\Foundation\Http\FormRequest;

class CreateResumeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'candidate_name' => ['required','string'],
            'candidate_email' => ['required','email:rfc,dns','unique:resumes,candidate_email'],
            'desired_job_title' => ['required','string'],
            'education_level_id' => ['required','integer'],
            'observations' => ['nullable','string'],
            'available_until' => ['date','required','after:yesterday'],
            'candidate_file' => ['required','mimes:pdf,doc,docx','max:1024']
        ];
    }
}
