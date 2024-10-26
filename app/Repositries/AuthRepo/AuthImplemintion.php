<?php  

namespace App\Repositries\AuthRepo;

use App\Helpers\JsonResponse;
use App\Http\Resources\UserResource;
use App\Models\User;

class  AuthImplemintion implements AuthInterface
{
  public static function login($request)
  {
    try
    {
      if (! $token = auth('users')->attempt($request->all())) {
          return response()->json(['error' => 'Unauthorized'], 401);
      }

      return response()->json([
          'access_token' => $token,
          'token_type'   => 'bearer',
          'user'         => new UserResource(auth('users')->user())
      ]);
    }
    catch(\Exception $e)
    {
        return JsonResponse::respondError($e->getMessage());
    }

  }
  public static function logout()
  {

    if (auth('users')->check()) // this means that the user was logged in.
    {
         auth('users')->logout();
         return  [
            "data" => [
                 "status"  => 200,
                 'message' => 'User successfully signed out']
        ];           
    } else {
        return [
            "data" => [
                "status"  => 403,
                'message' => 'No Login'] 
            
        ];
    }
  }
}