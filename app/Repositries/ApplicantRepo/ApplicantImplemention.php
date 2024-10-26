<?php 

namespace App\Repositries\ApplicantRepo;

use App\Helpers\{JsonResponse,PerPage};
use App\Http\Resources\ApplicantResource;
use App\Models\Applicant;
use App\Models\Course;
use App\Models\Language;
use App\Models\Relative;
use Spatie\QueryBuilder\QueryBuilder;

class ApplicantImplemention implements ApplicantInterface 
{
    public static function index($request)
    {
        try {
         $applicants = QueryBuilder::for(Applicant::class)
                       ->allowedFilters(['fname','mobile_1','mobile_1','position','gender','nationality','city'])
                       ->allowedIncludes('relatives','languages')
                       ->paginate(PerPage::perPageFunction($request));

        $items = ApplicantResource::collection($applicants);
        return JsonResponse::respondSuccess($items, $applicants);
        }catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
    public static function store($request)
    {
        try{
            $created_data = $request->except(['other_language_name','read','write','speak','understand','relative_name','relative_relationship']);
             $item = Applicant::create($created_data);
             if(isset($request->other_language_name))
             {
                foreach($request->other_language_name as $key=>$language)
                {
                      Language::create([
                        'applicant_id' => $item->id,
                        'name' => $request->other_language_name[$key],
                        'read' => $request->read[$key],
                        'write' => $request->write[$key],
                        'speak' => $request->speak[$key],
                        'understand' => $request->understand[$key]
                      ]);
                }
             }
       
             if(isset($request->course_name)){
                foreach($request->course_name as $key=>$course)
                {
                    Course::create([
                        'applicant_id' => $item->id,
                        'name' => $request->course_name[$key],
                        'location' => $request->course_location[$key],
                        'start_at' => $request->course_start_at[$key],
                        'end_at' => $request->course_end_at[$key],
                        'degree_obtalned' => $request->degree_obtalned[$key]
                    ]);
                }
             }
             if(isset($request->relative_name))
             {
                foreach($request->relative_name as $key=>$relative)
                {
                    Relative::create([
                          'applicant_id' => $item->id,
                          'name' => $request->relative_name[$key],
                          'relationship' => $request->relative_relationship[$key]
                    ]);
                }
             }

             return new ApplicantResource($item->load('languages', 'relatives','courses'));
            }catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}