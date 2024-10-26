<?php 

namespace App\Repositries\ApplicantRepo;

interface ApplicantInterface 
{
    public static function index($request);
    public static function store($request);
}