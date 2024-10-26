<?php

namespace App\Http\Requests\Applicants;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fname' => ['required', 'string'],
            'position' => ['required', 'string'],
            'start_day' => ['required', 'date'],
            'birthday' => ['required', 'date'],
            'gender' => ['required', 'boolean'],
            'nationality' => ['required', 'string'],
            'country_birth'  => ['required', 'string'],
            'city' => ['required', 'string'],
            'marital_status' => ['required', 'boolean'],
            'address' => ['required', 'string'],
            'mother_tongue' => ['required', 'string'],
            
            // Other Language Validation
            'other_language_name' => ['nullable', 'array'],
            'other_language_name.*' => ['nullable', 'string'],

            'read' => ['nullable', 'array'],
            'read.*' => ['nullable', 'integer'],

            'write' => ['nullable', 'array'],
            'write.*' => ['nullable', 'integer'],

            'speak' => ['nullable', 'array'],
            'speak.*' => ['nullable', 'integer'],

            'understand' => ['nullable', 'array'],
            'understand.*' => ['nullable', 'integer'],
            //

            // education validation
            'course_name' => ['nullable', 'array'],
            'course_name.*' => ['nullable', 'string'],

            'course_location' => ['nullable', 'array'],
            'course_location.*' => ['nullable', 'string'],

            'course_start_at' => ['nullable', 'array'],
            'course_start_at.*' => ['nullable', 'date'],

            'course_end_at' => ['nullable', 'array'],
            'course_end_at.*' => ['nullable', 'date'],

            'degree_obtalned' => ['nullable', 'array'],
            'degree_obtalned.*' => ['nullable', 'numeric'],
            //

            'mobile_1' => ['required', 'string'],
            'mobile_2' => ['nullable', 'string'],
            'email' => ['nullable', 'string','email'],

            // Latest Job
            'latest_position' => ['nullable', 'string'],
            'latest_company'  => ['nullable', 'string'],
            'latest_job_start_at' => ['nullable', 'date'],
            'latest_job_end_at' => ['nullable', 'date'],
            //

            'government_job_status' => ['required', 'boolean'],
            'government_job' => ['nullable', 'boolean'],
            'training_course' => ['nullable', 'string'],
            'applied_before' => ['required', 'boolean'],
            
            // Relative validation
            'relative_name' => ['nullable', 'array'],
            'relative_name.*' => ['nullable', 'string'],
            'relative_relationship' => ['nullable', 'array'],
            'relative_relationship.*' => ['nullable', 'string'],
            //

            'travel_status' => ['required', 'boolean'],
            'driving_status' => ['required', 'boolean'],
            'driving_license_status' => ['required', 'boolean'],
            'expected_salary' => ['required', 'string'],
        ];
    }
}
