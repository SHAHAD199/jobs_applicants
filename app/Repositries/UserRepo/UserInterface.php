<?php 

namespace App\Repositries\UserRepo;

interface UserInterface 
{
   public static function index($request);
   public static function store($request);
   public static function show($item);
   public static function update($item, $request);
   public static function destroy($item);
}