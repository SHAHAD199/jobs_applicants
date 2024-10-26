<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'date' => Carbon::parse($this->created_at)->format('Y-d-m'),
            'fname' => $this->fname,
            'position' => $this->position,
            'start_day' => $this->start_day,
            'birthday' => $this->birthday,
            'gender' => ($this->gender == 0) ? "ذكر" : "انثى",
            'nationality' => $this->nationality,
            'country_birth' => $this->country_birth,
            'city' => $this->city,
            'marital_status' => ($this->marital_status == 0) ? "لا" : "نعم",
            'address' => $this->address,
            'mother_tongue' => $this->mother_tongue,
            'other_language' => LanguageResource::collection($this->whenLoaded('languages')),
            'courses' => CourseResource::collection($this->whenLoaded('courses')),
            'mobile_1' => $this->mobile_1,
            'mobile_2' => $this->mobile_2,
            'email' => $this->email,
            'latest_position' => $this->latest_position,
            'latest_company' => $this->latest_company,
            'latest_job_start_at' => $this->latest_job_start_at,
            'latest_job_end_at' => $this->latest_job_end_at,
            'government_job_status' => ($this->government_job_status == 0) ? "لا" : "نعم",
            'government_job' => 
            ($this->government_job == 0)  ? "عقد اجر يومي"  :
            (($this->government_job == 1) ? "دوام بالشفت" : 
            (($this->government_job == 2) ? "موظف دائمي" : ""
            )),
            'training_course' => $this->training_course,
            'applied_before' => ($this->applied_before == 0) ? "لا" : "نعم",
            'relatives' => RelativeResource::collection($this->whenLoaded('relatives')),
            'travel_status' => ($this->travel_status == 0) ? "لا" : "نعم",
            'driving_status' => ($this->driving_status == 0) ? "لا" : "نعم",
            'driving_license_status' => ($this->driving_license_status == 0) ? "لا" : "نعم",
            'expected_salary' => $this->expected_salary
    ];
    }
}
