<?php 

namespace App\Helpers;

class PerPage {
    
    public static function perPageFunction($request){
        $perPage = $request->has('per_page') ? (int) $request->per_page : 10;
        return $perPage;

    }
}