<?php

namespace App\Repositries\UserRepo;

use App\Helpers\{JsonResponse, PerPage};
use App\Http\Resources\UserResource;
use Spatie\QueryBuilder\QueryBuilder;
use App\Models\User;


class UserImplemintion implements UserInterface
{

    public static function index($request)
    {

        try {
            $users = QueryBuilder::for(User::class)
                ->allowedFilters('name', 'phone')
                ->paginate(PerPage::perPageFunction($request));

            $items      = UserResource::collection($users);
            return JsonResponse::respondSuccess($items, $users);
        } catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
    public static function store($request)
    {
        try {
            $item = User::create($request->all());
            return JsonResponse::createResponse(new UserResource($item));   
        } catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }


    public static function show($item) {
        try {
            return  new UserResource($item);
        } catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
    public static function update($item, $request) {
        try {
            $item->update($request->all());
            return JsonResponse::updateResponse(new UserResource($item));   
        } catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
    public static function destroy($item) {
        try {
            $item->delete();
            return JsonResponse::deleteAllResponse($item->id,'item_id'); 
        } catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}
