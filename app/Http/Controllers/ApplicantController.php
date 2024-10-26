<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Http\Requests\Applicants\{StoreApplicantRequest, UpdateApplicantRequest};
use App\Repositries\ApplicantRepo\ApplicantInterface;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    private $applicantInterface;
    public function __construct(ApplicantInterface $applicantInterface)
    {
        $this->applicantInterface = $applicantInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->applicantInterface->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicantRequest $request)
    {
        return $this->applicantInterface->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
