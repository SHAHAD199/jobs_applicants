<?php  

namespace App\Repositries\AuthRepo;


interface AuthInterface 
{
  public static function login($request);
  public static function logout();
}