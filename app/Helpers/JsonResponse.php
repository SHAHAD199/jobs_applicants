<?php

namespace App\Helpers;

class JsonResponse
{

    public static function respondSuccess($collection, $pagination)
    {
        $data =  json_decode(json_encode($pagination));
        return response()->json([
            'items'         => $collection,
            'per_page'      => $data->per_page,
            'total'         => $data->total,
            'current_page'  => $data->current_page,
        ]);
    }

    public static function respondError($message = null, $status = 500)
    {
        $message = is_string($message) ? [$message] : $message;
        return response()->json([
            'content'  => null,
            'status'   => $status,
            'items'    => $message,
            'data'     => null
        ], $status);
    }

    public static function  deleteAllResponse($data, $label)
    {
        return response()->json([
             $label       => $data,
            'message'     => 'this resource  has been deleted Successfully',
            'status'      => 200
        ]);
    }

    public static function  changeStatusResponse($data, $label)
    {
        return response()->json([
             $label       => $data,
            'message'     => 'this resource  has been updated Successfully',
            'status'      => 200
        ]);
    }


    // public static function LoginResponse($token, $guard, $loaded)
    // {
    //     return response()->json([
    //         'access_token'  => $token,
    //         'token_type'    => 'bearer',
    //         $guard         => auth($guard)->user()->load($loaded)
    //     ]);
    // }

    public static function restoreResponse($name, $id)
    {
        return response()->json(['status' => 200, 'message' => 'success', $name => $id]);
    }
    
    public static function createResponse($data){
        return response()->json([
            'status'  => 201,
            'message' => 'This resource Has been Created Successfully',
            'data'    => $data
        ]);
    }
    
     public static function updateResponse($data){
        return response()->json([
            'status'  => 200,
            'message' => 'This resource Has been Updated successfully',
            'data'    => $data
        ]);
    }
}
